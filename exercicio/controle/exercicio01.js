// Gerar a leitura do documento HTML
$(document).ready(function(){

    $('.btn-calcular').click(function(event){
        event.preventDefault()

        // Coletar os dados digitados em nosso formulário
        var dados = $('#form').serialize()
        $('#resultado').empty()

        // Criar estrutura AJAX para envio dos dados no servidor PHP
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/exercicio01.php',
            success: function(dados){
                $('#resultado').append(`
                  
                        <div class="col-12 col-sm-8 col-md-6 alert-primary">
                            <h1 class="text-center text-dark">
                                O resultado é: ${dados.retorno}
                            </h1>
                        </div>
                    
                `)
            }
        })
    })

})