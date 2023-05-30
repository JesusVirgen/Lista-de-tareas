<?php
$_post = file_get_contents('php://input');
echo "Recibido";

$fichero = 'datos/data.json';
$actual = file_get_contents($fichero);
$actual = "$_post";
file_put_contents($fichero, $actual);
?>