$(document).ready(function() {
    
    //Evento de popular o dropdown com os serviços disponíveis ao cliente
    $('#clientdrop').change(function() {
        CleanMessages();
        var cliente = $('#clientdrop').val();
        
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
    
    // Função de descontar os pontos
    $('#cadvenda').click(function() {
        var cliente = $('#clientdrop').val();
        var servico = $('#dropservice').val();

        if ((cliente != undefined && cliente != null && cliente != '') 
        && (servico != undefined && servico != null && servico != '')) {

            $.ajax({
                url: 'insertVendas.php',
                method: 'post',
                data: 'cliente=' + cliente + '&servico=' + servico
            }).done(function(pontos) {
                pontos != '' ? JSON.parse(pontos) : null;
                if (pontos.error) 
                    TreatException(pontos.error);
                else
                    SuccessMessage();  

                CleanForm();
            });

        }
        else {
            $('#vendasuccess').text('');
            $('#vendaerror').text('Por favor, preencha todos os campos');
        }
    });


    function CleanForm() {
        $('#dropservice').val('');
        $('#clientdrop').val('');
    }
    
    function CleanMessages() {
        $('#vendasuccess').text('');
        $('#vendaerror').text('');
    }
    
    function SuccessMessage() {
        $('#vendasuccess').text('Serviço cobrado com sucesso!');
    }
    
    function TreatException(value) {
        $('#vendaerror').text('Ocorreu uma falha na venda: ' + value.msg);
    }
    
});