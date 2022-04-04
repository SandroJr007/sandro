<?php

    $sexo = $_REQUEST['sexo'];
    $altura = $_REQUEST['altura'];

    if($sexo == 'm'){
        $resultado = (72.7*$altura)-58;
        
    }else{
        $resultado = (62.1*$altura)-44.7;
       
    }

    
    $dados = array(
        "retorno" => $resultado 
    );

    echo json_encode($dados);