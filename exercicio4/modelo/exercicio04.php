<?php

    $salario = $_REQUEST['salario'];

    $resultado = ($salario/4.5)/40;
   

    $resultado = ($salario/4.5)/44;
    
    
    
    $dados = array(
        "retorno" => $resultado 
    );

    echo json_encode($dados);