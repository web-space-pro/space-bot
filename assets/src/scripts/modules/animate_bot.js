function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom >= 0;
}

function triggerAnimation() {
    const chatMessages = document.querySelectorAll("[data-animate]");
    chatMessages.forEach((msg, index) => {
        setTimeout(() => {
            msg.style.opacity = "1";
            msg.style.transform = "translateY(0)";
            msg.style.transition = "opacity 0.3s ease-in-out, transform 0.35s ease-in-out";
        }, index * 500);
    });
}

function handleScroll() {
    const firstMessage = document.querySelector(".chat-bot__message");
    if (firstMessage && isInViewport(firstMessage)) {
        triggerAnimation();
        window.removeEventListener("scroll", handleScroll);
    }
}

window.addEventListener("scroll", handleScroll);
document.addEventListener("DOMContentLoaded", handleScroll);