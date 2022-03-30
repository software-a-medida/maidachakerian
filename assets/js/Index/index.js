'use strict';

$(document).ready(function()
{
    $('#home_left').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: false
    });

    $('#home_right').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: false
    });
});