'use strict';

$(document).ready(function()
{
    $('[data-action="remove"]').on('click', function()
    {
        $.ajax({
            type: 'POST',
            data: 'id=' + $(this).data('id') + '&action=remove_to_cart',
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
            }
        });
    });
});