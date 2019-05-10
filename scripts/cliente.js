$(document).ready(function() {
    
    $('#cadcli').click(function() {
        CleanMessages();
        var cpf = $('#cpfCliente').val();
        var nome = $('#nomeCliente').val();
        var telefone = $('#telefoneCliente').val();
        
        if ((cpf != undefined && cpf != '' && cpf != null) 
        && (nome != undefined && nome != '' && nome != null) 
        && (telefone != undefined && telefone != '' && telefone != null)) {
            $.ajax({
                url: 'insertCli.php',
                method: 'post',
                data: 'cpf=' + cpf + '&nome=' + nome + '&telefone=' + telefone
            }).done(function(client) {
                client != '' ? JSON.parse(client) : null;
                if (client.error) 
                    TreatException(client.error);
                else
                    SuccessMessage();            
                
                CleanForm();
            });
        }
    });
    
    function CleanForm() {
        $('#cpfCliente').val('');
        $('#nomeCliente').val('');
        $('#telefoneCliente').val('');
    }
    
    function CleanMessages() {
        $('#clientsuccess').text('');
        $('#clienterror').text('');
    }
    
    function SuccessMessage() {
        $('#clientsuccess').text('Cliente cadastrado com sucesso');
    }
    
    function TreatException(value) {
        $('#clienterror').text('Ocorreu uma falha no cadastro: ' + value.msg);
    }
    
});