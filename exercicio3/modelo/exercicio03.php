<?php

    $centimetros = $_REQUEST['centimetros'];

    $resultado = $centimetros/100;

    $dados = array(
        "retorno" => $resultado 
    );

    echo json_encode($dados);