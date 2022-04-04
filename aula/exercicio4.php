<?php

$salario =$_REQUEST['salario'];

$resultado = ($salario/4.5)/40;
echo 'A sua hora vale: '.$resultado.' no regime de 40 horas semanais <br>';

$resultado = ($salario/4.5)/44;
echo 'A sua hora vale: '.$resultado.' no regime de 44 horas semanais <br>';

$resultado = ($salario/4.5)/48;
echo 'A sua hora vale: '.$resultado.' no regime de 48 horas semanais';

?>
