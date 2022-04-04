// Gerar a leitura do documento HTML
$(document).ready(function(){

    $('.btn-calcular').click(function(event){
        event.preventDefault()

//Coletar dados digitados em nosso formulário
var dados = $('#form').serialize()

$('#resultado').empty()

//criar estrutura ajax para envio dos dados para php
$.ajax({
    type: 'POST',
    dataType: 'JSON',
    assync: true,
    data: dados,
    url: '../modelo/exercicio04.php',
    success: function(dados){
        $('#resultado').append(` <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 alert-primary">
            <h1 class="text-center tect-dark">
                O resultado é: ${dados.retorno}
            </h1>
        </div>
    </div>
    `)

    }




})


   
    })

})