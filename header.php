<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package space-bot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
    <?php
    if (function_exists('get_field')) {
        $phone = get_field('op_phone', 'options');
        $email = get_field('op_label_head', 'options');
        $tg = get_field('o_tg', 'options');
        $wts = get_field('o_wts', 'options');
        $vk = get_field('o_vk', 'options');
    }
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <a class="header__logo logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" title="Home" aria-label="Home">
                <img  width="115" height="24" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <nav class="header__nav nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'menu',
                'container' => false
            ));
            ?>
        </nav>
        <div class="header__right">
            <div class="header__links">
                <?php if(!empty($wts)) : ?>
                    <a class="icon" href="<?=$wts?>" target="_blank">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 12L0.861668 8.80154C0.166754 7.55558 -0.0540267 6.10165 0.239839 4.70654C0.533704 3.31144 1.3225 2.06874 2.46149 1.20649C3.60048 0.34424 5.01326 -0.0797275 6.44057 0.0123868C7.86789 0.104501 9.21401 0.706518 10.2319 1.70797C11.2498 2.70942 11.8712 4.04312 11.9821 5.46435C12.093 6.88558 11.6859 8.29899 10.8356 9.44523C9.98524 10.5915 8.74868 11.3936 7.3528 11.7045C5.95693 12.0155 4.49538 11.8142 3.23634 11.1378L0 12ZM3.39239 9.94095L3.59255 10.0593C4.50449 10.598 5.56963 10.8209 6.62197 10.6933C7.67432 10.5657 8.65475 10.0948 9.4105 9.35385C10.1662 8.61292 10.6548 7.64364 10.8001 6.59706C10.9454 5.55048 10.7393 4.48539 10.2138 3.56776C9.68836 2.65014 8.87309 1.93153 7.89505 1.52392C6.91701 1.11631 5.83116 1.0426 4.8067 1.31427C3.78224 1.58594 2.87672 2.18773 2.23126 3.02587C1.5858 3.864 1.23665 4.8914 1.23822 5.94795C1.23737 6.824 1.48046 7.68311 1.94045 8.42963L2.06597 8.63587L1.58425 10.4211L3.39239 9.94095Z" fill="#00D95F" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24361 6.76923C8.12637 6.67491 7.9891 6.60853 7.84225 6.57513C7.69539 6.54173 7.54284 6.54221 7.3962 6.57651C7.17587 6.6678 7.0335 7.01267 6.89114 7.1851C6.86111 7.22644 6.817 7.25543 6.76708 7.26663C6.71715 7.27784 6.66484 7.27048 6.61996 7.24596C5.81334 6.93083 5.13722 6.35294 4.70142 5.60616C4.66425 5.55956 4.64666 5.50039 4.65235 5.44111C4.65804 5.38183 4.68657 5.32706 4.73193 5.28834C4.89071 5.13155 5.00729 4.93735 5.07089 4.72371C5.08501 4.48805 5.03089 4.25332 4.91497 4.0475C4.82535 3.75895 4.6548 3.50201 4.42347 3.30705C4.30415 3.25353 4.17186 3.23558 4.04254 3.25538C3.91323 3.27518 3.79242 3.33187 3.69469 3.41863C3.52503 3.56464 3.39036 3.74674 3.30061 3.95154C3.21085 4.15634 3.1683 4.37861 3.17607 4.60199C3.1766 4.72743 3.19253 4.85233 3.22353 4.9739C3.30224 5.26599 3.42328 5.54505 3.58283 5.80226C3.69794 5.99928 3.82354 6.19002 3.95908 6.37365C4.39959 6.97682 4.95331 7.48895 5.58951 7.88159C5.90876 8.08112 6.24997 8.24335 6.60641 8.36508C6.97666 8.53249 7.38547 8.59675 7.7894 8.55104C8.01954 8.51629 8.2376 8.42565 8.42438 8.28711C8.61116 8.14856 8.76093 7.96634 8.86053 7.75649C8.91904 7.62973 8.9368 7.488 8.91137 7.35077C8.85036 7.07014 8.47411 6.90447 8.24361 6.76923Z" fill="#00D95F" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if(!empty($tg)) : ?>
                <a class="icon" href="<?=$tg?>" target="_blank">
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.06215 4.38082C1.06215 4.38082 5.83874 2.27344 7.49533 1.53138C8.13039 1.23458 10.284 0.284744 10.284 0.284744C10.284 0.284744 11.278 -0.130775 11.1951 0.878384C11.1675 1.29394 10.9466 2.74832 10.7258 4.32146C10.3944 6.5476 10.0355 8.98148 10.0355 8.98148C10.0355 8.98148 9.98026 9.66418 9.5109 9.7829C9.04153 9.90162 8.26841 9.36738 8.13039 9.24862C8.01992 9.1596 6.05961 7.8239 5.34174 7.1709C5.14846 6.99282 4.92759 6.63666 5.36933 6.2211C6.36332 5.2416 7.55055 4.02466 8.26841 3.25294C8.59975 2.89674 8.93106 2.06566 7.55055 3.07482C5.59024 4.52924 3.65752 5.8946 3.65752 5.8946C3.65752 5.8946 3.21574 6.1914 2.38745 5.92426C1.55911 5.65716 0.59275 5.30096 0.59275 5.30096C0.59275 5.30096 -0.069858 4.85574 1.06215 4.38082Z" fill="#34AADF" />
                    </svg>
                </a>
                <?php endif; ?>
                <?php if(!empty($vk)) : ?>
                <a class="icon" href="<?=$vk?>" target="_blank">
                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6787 0.541707C13.7761 0.229449 13.6787 0 13.2156 0H11.684C11.2945 0 11.115 0.19821 11.0176 0.416779C11.0176 0.416779 10.2387 2.24347 9.13537 3.43002C8.7784 3.77349 8.61612 3.88277 8.4214 3.88277C8.32406 3.88277 8.18313 3.77349 8.18313 3.46126V0.541709C8.18313 0.166998 8.07011 0 7.74555 0H5.33874C5.09538 0 4.94902 0.173912 4.94902 0.338734C4.94902 0.693951 5.50068 0.775868 5.55754 1.77509V3.94525C5.55754 4.42105 5.46824 4.50732 5.27352 4.50732C4.7543 4.50732 3.49129 2.67247 2.74221 0.57292C2.59541 0.164842 2.44817 0 2.05673 0H0.525126C0.0875249 0 0 0.19821 0 0.416779C0 0.807107 0.519248 2.74308 2.41771 5.30354C3.68334 7.05213 5.46652 8 7.08915 8C8.06271 8 8.18315 7.78947 8.18315 7.42684V6.10526C8.18315 5.68421 8.27538 5.60018 8.58368 5.60018C8.81084 5.60018 9.20028 5.70946 10.109 6.55255C11.1474 7.55175 11.3186 8 11.9028 8H13.4344C13.872 8 14.0908 7.78947 13.9646 7.37401C13.8264 6.95994 13.3306 6.35917 12.6727 5.64701C12.3157 5.24109 11.7803 4.80396 11.618 4.58534C11.3908 4.30434 11.4557 4.17941 11.618 3.92963C11.618 3.92963 13.484 1.40038 13.6787 0.541707Z" fill="#2787F5" />
                    </svg>
                </a>
                <?php endif; ?>
            </div>

            <label class="header__burger burger">
                <input type="checkbox" checked>
                <div>
                    <span></span>
                    <span></span>
                </div>
            </label>
        </div>
    </div>
</header>
<div class="mobileMenu">
    <div class="mobileMenu__wrapper">
        <div class="mobileMenu__logo">
            <a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" title="Home" aria-label="Home">
                <img  width="115" height="24" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <nav class="mobileMenu__menu" role="navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'menu-mobile',
                'container' => false
            ));
            ?>
        </nav>
        <div class="mobileMenu__contacts">
            <?php if(!empty($wts)) : ?>
                <a class="icon" href="<?=$wts?>" target="_blank">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12L0.861668 8.80154C0.166754 7.55558 -0.0540267 6.10165 0.239839 4.70654C0.533704 3.31144 1.3225 2.06874 2.46149 1.20649C3.60048 0.34424 5.01326 -0.0797275 6.44057 0.0123868C7.86789 0.104501 9.21401 0.706518 10.2319 1.70797C11.2498 2.70942 11.8712 4.04312 11.9821 5.46435C12.093 6.88558 11.6859 8.29899 10.8356 9.44523C9.98524 10.5915 8.74868 11.3936 7.3528 11.7045C5.95693 12.0155 4.49538 11.8142 3.23634 11.1378L0 12ZM3.39239 9.94095L3.59255 10.0593C4.50449 10.598 5.56963 10.8209 6.62197 10.6933C7.67432 10.5657 8.65475 10.0948 9.4105 9.35385C10.1662 8.61292 10.6548 7.64364 10.8001 6.59706C10.9454 5.55048 10.7393 4.48539 10.2138 3.56776C9.68836 2.65014 8.87309 1.93153 7.89505 1.52392C6.91701 1.11631 5.83116 1.0426 4.8067 1.31427C3.78224 1.58594 2.87672 2.18773 2.23126 3.02587C1.5858 3.864 1.23665 4.8914 1.23822 5.94795C1.23737 6.824 1.48046 7.68311 1.94045 8.42963L2.06597 8.63587L1.58425 10.4211L3.39239 9.94095Z" fill="#00D95F" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24361 6.76923C8.12637 6.67491 7.9891 6.60853 7.84225 6.57513C7.69539 6.54173 7.54284 6.54221 7.3962 6.57651C7.17587 6.6678 7.0335 7.01267 6.89114 7.1851C6.86111 7.22644 6.817 7.25543 6.76708 7.26663C6.71715 7.27784 6.66484 7.27048 6.61996 7.24596C5.81334 6.93083 5.13722 6.35294 4.70142 5.60616C4.66425 5.55956 4.64666 5.50039 4.65235 5.44111C4.65804 5.38183 4.68657 5.32706 4.73193 5.28834C4.89071 5.13155 5.00729 4.93735 5.07089 4.72371C5.08501 4.48805 5.03089 4.25332 4.91497 4.0475C4.82535 3.75895 4.6548 3.50201 4.42347 3.30705C4.30415 3.25353 4.17186 3.23558 4.04254 3.25538C3.91323 3.27518 3.79242 3.33187 3.69469 3.41863C3.52503 3.56464 3.39036 3.74674 3.30061 3.95154C3.21085 4.15634 3.1683 4.37861 3.17607 4.60199C3.1766 4.72743 3.19253 4.85233 3.22353 4.9739C3.30224 5.26599 3.42328 5.54505 3.58283 5.80226C3.69794 5.99928 3.82354 6.19002 3.95908 6.37365C4.39959 6.97682 4.95331 7.48895 5.58951 7.88159C5.90876 8.08112 6.24997 8.24335 6.60641 8.36508C6.97666 8.53249 7.38547 8.59675 7.7894 8.55104C8.01954 8.51629 8.2376 8.42565 8.42438 8.28711C8.61116 8.14856 8.76093 7.96634 8.86053 7.75649C8.91904 7.62973 8.9368 7.488 8.91137 7.35077C8.85036 7.07014 8.47411 6.90447 8.24361 6.76923Z" fill="#00D95F" />
                    </svg>
                </a>
            <?php endif; ?>

            <?php if(!empty($tg)) : ?>
                <a class="icon" href="<?=$tg?>" target="_blank">
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.06215 4.38082C1.06215 4.38082 5.83874 2.27344 7.49533 1.53138C8.13039 1.23458 10.284 0.284744 10.284 0.284744C10.284 0.284744 11.278 -0.130775 11.1951 0.878384C11.1675 1.29394 10.9466 2.74832 10.7258 4.32146C10.3944 6.5476 10.0355 8.98148 10.0355 8.98148C10.0355 8.98148 9.98026 9.66418 9.5109 9.7829C9.04153 9.90162 8.26841 9.36738 8.13039 9.24862C8.01992 9.1596 6.05961 7.8239 5.34174 7.1709C5.14846 6.99282 4.92759 6.63666 5.36933 6.2211C6.36332 5.2416 7.55055 4.02466 8.26841 3.25294C8.59975 2.89674 8.93106 2.06566 7.55055 3.07482C5.59024 4.52924 3.65752 5.8946 3.65752 5.8946C3.65752 5.8946 3.21574 6.1914 2.38745 5.92426C1.55911 5.65716 0.59275 5.30096 0.59275 5.30096C0.59275 5.30096 -0.069858 4.85574 1.06215 4.38082Z" fill="#34AADF" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if(!empty($vk)) : ?>
                <a class="icon" href="<?=$vk?>" target="_blank">
                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6787 0.541707C13.7761 0.229449 13.6787 0 13.2156 0H11.684C11.2945 0 11.115 0.19821 11.0176 0.416779C11.0176 0.416779 10.2387 2.24347 9.13537 3.43002C8.7784 3.77349 8.61612 3.88277 8.4214 3.88277C8.32406 3.88277 8.18313 3.77349 8.18313 3.46126V0.541709C8.18313 0.166998 8.07011 0 7.74555 0H5.33874C5.09538 0 4.94902 0.173912 4.94902 0.338734C4.94902 0.693951 5.50068 0.775868 5.55754 1.77509V3.94525C5.55754 4.42105 5.46824 4.50732 5.27352 4.50732C4.7543 4.50732 3.49129 2.67247 2.74221 0.57292C2.59541 0.164842 2.44817 0 2.05673 0H0.525126C0.0875249 0 0 0.19821 0 0.416779C0 0.807107 0.519248 2.74308 2.41771 5.30354C3.68334 7.05213 5.46652 8 7.08915 8C8.06271 8 8.18315 7.78947 8.18315 7.42684V6.10526C8.18315 5.68421 8.27538 5.60018 8.58368 5.60018C8.81084 5.60018 9.20028 5.70946 10.109 6.55255C11.1474 7.55175 11.3186 8 11.9028 8H13.4344C13.872 8 14.0908 7.78947 13.9646 7.37401C13.8264 6.95994 13.3306 6.35917 12.6727 5.64701C12.3157 5.24109 11.7803 4.80396 11.618 4.58534C11.3908 4.30434 11.4557 4.17941 11.618 3.92963C11.618 3.92963 13.484 1.40038 13.6787 0.541707Z" fill="#2787F5" />
                    </svg>
                </a>
            <?php endif; ?>

        </div>
    </div>
</div>


