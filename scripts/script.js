$(document).ready(function() {
    
    //Evento de popular o dropdown com os serviços disponíveis ao cliente
    $('#dropclient').change(function() {
        var cliente = $('#dropclient').val();
        
        $.ajax({
            url: 'getServiceData.php',
            method: 'post',
            data: 'cliente=' + cliente
        }).done(function(services) {
            services = JSON.parse(services);
            $('#dropservice').empty();
            $('#dropservice').append('<option></option>');
            services.forEach(function(e) {
                $('#dropservice').append('<option value='+ e.Id +'>' + e.Nome + '</option>');
            });
        });
    });    
});