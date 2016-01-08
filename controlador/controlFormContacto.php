<?php
/*
* Autor: Jesús de Serdio
* © Diciembre 2015
*/
$nombre = addslashes(htmlspecialchars($_POST['nombre']));
$asunto = addslashes(htmlspecialchars($_POST['asunto']));
$correo = $_POST['correo'];
$mensaje = addslashes(htmlspecialchars($_POST['mensaje']));

// Enviar el mensaje



?>