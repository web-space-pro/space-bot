<?php
// Определяем путь к JSON-файлу
define('ACF_SYNC_DIR', get_template_directory() . '/acf_sync');
define('ACF_SYNC_FILE', ACF_SYNC_DIR . '/acfconfig.json');

/**
 * Создаёт директорию для ACF JSON, если её нет
 */
function ensure_acf_sync_directory() {
    if (!file_exists(ACF_SYNC_DIR)) {
        mkdir(ACF_SYNC_DIR, 0755, true);
    }
}

/**
 * Экспортирует все группы полей ACF в JSON
 */
function export_acf_to_json() {
    if (!function_exists('acf_get_field_groups')) {
        return;
    }

    ensure_acf_sync_directory(); // Создаём папку, если её нет

    $field_groups = acf_get_field_groups();
    $json_data = [];

    foreach ($field_groups as $group) {
        $group['fields'] = acf_get_fields($group['key']); // Добавляем поля
        $json_data[] = $group;
    }

    // Записываем данные в JSON
    file_put_contents(ACF_SYNC_FILE, json_encode($json_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

/**
 * Импортирует ACF из JSON при активации темы
 */
function import_acf_from_json() {
    if (!function_exists('acf_import_field_group')) {
        add_action('admin_notices', function () {
            echo '<div class="notice notice-warning"><p><strong>Внимание:</strong> Для работы ACF Sync требуется <a href="https://www.advancedcustomfields.com/pro/" target="_blank">ACF PRO</a>. Поля не импортированы.</p></div>';
        });
        return;
    }

    if (!file_exists(ACF_SYNC_FILE)) {
        return;
    }

    $json_data = file_get_contents(ACF_SYNC_FILE);
    $field_groups = json_decode($json_data, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        add_action('admin_notices', function () {
            echo '<div class="notice notice-error"><p><strong>Ошибка:</strong> Файл <code>acfconfig.json</code> повреждён или содержит неверный JSON.</p></div>';
        });
        return;
    }

    foreach ($field_groups as $group) {
        $existing_group = acf_get_field_group($group['key']);

        if ($existing_group) {
            acf_update_field_group($group); // Обновляем существующую группу
        } else {
            acf_import_field_group($group); // Импортируем новую группу
        }
    }
}

// Запускаем экспорт при изменении полей ACF
add_action('acf/update_field_group', 'export_acf_to_json');

// Импортируем при активации темы
add_action('after_switch_theme', 'import_acf_from_json');


