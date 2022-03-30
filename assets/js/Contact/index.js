'use strict';

$(document).ready(function()
{
    $('form[name="contact"]').on('submit', function(event)
    {
        event.preventDefault();

        var form = $(this);
        var data = new FormData(form[0]);

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