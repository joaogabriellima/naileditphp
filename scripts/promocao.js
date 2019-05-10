$(document).ready(function() {
    
    $('#cadpromo').click(function() {
        CleanMessages();
        var nome = $('#nomeServico').val();
        var pontos = $('#pontosServico').val();
        
        if ((pontos != undefined && pontos != '' && pontos != null) 
        && (nome != undefined && nome != '' && nome != null)) {
            $.ajax({
                url: 'insertPromo.php',
                method: 'post',
                data: 'nome=' + nome + '&pontos=' + pontos
            }).done(function(promo) {
                promo != '' ? JSON.parse(promo) : null;
                if (promo.error) 
                    TreatException(promo.error);
                else
                    SuccessMessage();            
                
                CleanForm();
            });
        }
    });
    
    function CleanForm() {
        $('#nomeServico').val('');
        $('#pontosServico').val('');
    }
    
    function CleanMessages() {
        $('#promosuccess').text('');
        $('#promoerror').text('');
    }
    
    function SuccessMessage() {
        $('#promosuccess').text('Promoção cadastrado com sucesso');
    }
    
    function TreatException(value) {
        $('#promoerror').text('Ocorreu uma falha no cadastro: ' + value.msg);
    }
    
});