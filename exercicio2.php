<?php

$sexo = $_REQUEST['sexo'];
$altura = $_REQUEST['altura'];

if($sexo == 'm'){
    $resultado = (72.7*$altura)-58;
    echo 'seu peso ideal é de : '.$resultado.'quilos';
}else{
    $resultado = (62.1*$altura)-44.7;
    echo 'Seu peso ideal é de : '.$resultado.'quilos';
}

?>