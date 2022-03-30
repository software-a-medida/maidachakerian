'use strict';

$(window).on('beforeunload ajaxStart', function()
{
    $('[data-ajax-loader]').addClass('view');
});

$(window).on('ajaxStop', function()
{
    $('[data-ajax-loader]').removeClass('view');
});

$(document).ready(function()
{
    nav_scroll_down('header.menu', 'down', 0);

    var product;

    $('[data-button-modal="details"]').on('click', function()
    {
        product = $(this).data('id');

        $.ajax({
            url: '/products',
            type: 'POST',
            data: 'id=' + product + '&action=get_unique_product',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    $('#details_gallery_one').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.one);
                    $('#details_gallery_two').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.two);
                    $('#details_gallery_three').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.three);
                    $('#details_gallery_four').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.four);
                    $('#details_gallery_five').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.five);
                    $('#details_gallery_six').find('img').attr('src', 'https://foxior.com/uploads/' + response.data.gallery.six);
                    $('#details_name').html(response.data.name);
                    $('#details_main_categories').html(response.data.categories.main);
                    $('#details_price').html('$ ' + response.data.price + ' ' + response.data.currency);
                    $('#details_description').html(response.data.description);
                    $('#details_color_categories').html('');
                    $('#details_size_categories').html('');

                    $.each(response.data.categories.color, function(key, value)
                    {
                        $('#details_color_categories').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });

                    $.each(response.data.categories.size, function(key, value)
                    {
                        $('#details_size_categories').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                    
                    $('#details_amount').val('1');
                    $('#details_unity').html(response.data.unity.es);
                }
            }
        });
    });

    $('form[name="details"]').on('submit', function(event)
    {
        event.preventDefault();

        var form = $(this);
        var data = new FormData(form[0]);

        data.append('id', product);
        data.append('action', 'add_to_cart');

        $.ajax({
            url: '/cart',
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);

                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var str = '';

                    $.each(response.errors, function(key, value)
                    {
                        str += '- ' + value + '\n';
                    });

                    alert(str);
                }
            }
        });
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
