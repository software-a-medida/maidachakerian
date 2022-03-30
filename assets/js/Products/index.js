'use strict';

$(document).ready(function()
{
    $('#filters_categories').chosen();

    $('form[name="filters"]').on('submit', function(event)
    {
        event.preventDefault();

        var form = $(this);
        var data = new FormData(form[0]);

        data.append('action', 'filters');

        $.ajax({
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                    location.reload();
            }
        });
    });
});