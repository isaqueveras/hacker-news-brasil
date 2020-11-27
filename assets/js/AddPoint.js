$(document).ready(function() {
  /// Quando usuário clicar em salvar será feito todos os passo abaixo
  $('#tosave').click(function() {

    var dados = $('#addpoint').serialize();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: './src/link/addpoint.php',
        async: true,
        data: dados,
        success: function(response) {
            location.reload();
        }
    });

    return false;
  });
});
