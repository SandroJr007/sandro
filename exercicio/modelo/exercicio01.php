<?php

    $lado = $_REQUEST['lado'];

    $resultado = $lado*$lado;

    $dados = array(
        "retorno" => $resultado
    );

    echo json_encode($dados);