'use strict';

$(document).ready(function()
{
    nav_scroll_down('main.home > header.menu', 'down', 0);

    $('#home_left').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        items:1,
        loop:true,
        margin:0,
        nav:false,
        dots:false
    });

    $('#home_right').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        items:1,
        loop:true,
        margin:0,
        nav:false,
        dots:false
    });
});

function nav_scroll_down(target, css, height)
{
    var nav = {

        initialize: function()
        {
            $(document).each(function()
            {
                nav.scroller()
            });

            $(document).on('scroll', function()
            {
                nav.scroller()
            });
        },
        scroller: function()
        {
            if ($(document).scrollTop() > height)
                $(target).addClass(css);
            else
                $(target).removeClass(css);
        }
    }

    nav.initialize();
}
