$(document).ready(function() {

    $('#btncatalogo').click(function() {
        $.ajax({
            url: 'catalogo.php',
            method: 'post'
        }).done(function(services) {
            $('#allServices').html('');
            $('#allServices').append(services);
        });
    });

});