import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination, Manipulation} from 'swiper/modules';



Swiper.use([Navigation, Pagination, Autoplay, EffectFade, Manipulation]);


let swiper = new Swiper(".banner-slider", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    slidesPerView: 1,
    effect: "fade",
    mousewheel: true,
    keyboard: true,
});



