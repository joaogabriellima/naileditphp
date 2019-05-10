$(document).ready(function() {
    
    $('#cadpontos').click(function() {
        CleanMessages();
        var cliente = $('#dropclient').val();
        var pontos = $('#pointsCliente').val();
        
        if ((pontos != undefined && pontos != '' && pontos != null) 
        && (cliente != undefined && cliente != '' && cliente != null)) {
            $.ajax({
                url: 'addpoints.php',
                method: 'post',
                data: 'cliente=' + cliente + '&pontos=' + pontos
            }).done(function(points) {
                points != '' ? JSON.parse(points) : null;
                if (points.error) 
                TreatException(points.error);
                else
                SuccessMessage();            
                
                CleanForm();
            });
        }
    });
    
    function CleanForm() {
        $('#dropclient').val('');
        $('#pointsCliente').val('');
    }
    
    function CleanMessages() {
        $('#pointsuccess').text('');
        $('#pointerror').text('');
    }
    
    function SuccessMessage() {
        $('#pointsuccess').text('Pontos adicionados com sucesso');
    }
    
    function TreatException(value) {
        $('#pointerror').text('Ocorreu uma falha na adição de pontos: ' + value.msg);
    }
    
});