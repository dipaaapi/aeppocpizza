require('./bootstrap');
require('alpinejs');

import Alpine from 'alpinejs';
import Swiper, { Autoplay } from 'swiper';

window.Alpine = Alpine;
Alpine.start();

// configure Swiper to use modules
Swiper.use([Autoplay]);

// home page start here
    var swiper = new Swiper('.swiper-container',{
        // effect: "fade",
        loop: false,
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 1,
        slidesPerColumn: 1,
        spaceBetween: 15,
    });
// home page end here