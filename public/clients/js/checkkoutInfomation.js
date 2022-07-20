$(document).ready(function() {
    $.ajax({
        url: '/s',
        type: 'GET',
        success: function(response) {
            console.log(response);
        }

    })
})
