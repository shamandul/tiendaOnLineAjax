<?php
/*
* Autor: Jesús de Serdio
* © Diciembre 2015
*/

require_once('../controlador/gestionArticulos.php');

$asin = addslashes(htmlspecialchars($_POST['asin']));

// Pedimos los datos del articulo a la base de datos

$producto = obtenerProducto($asin);
$respuesta ="";
if(isset($producto)){
	$respuesta .= '<div class="modal-content">';
	$respuesta .= '<h4>'.$producto['name'].'</h4>';
	$respuesta .= '<p>Asin: '.$producto['asin'].'</p>';
	$respuesta .= '<p>'.$producto['description'].'</p>';
	$respuesta .= '<p class="green-text">Precio: '.$producto['price'].' €</p>';
	$respuesta .= '</div><div class="modal-footer">';
	$respuesta .= '<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>';
	$respuesta .= '</div></div>';
}
else
{
	$respuesta .= '<div class="modal-content">';
	$respuesta .= '<h4>Producto no encontrado</h4>';
	$respuesta .= '<p>Asin: '.$producto['asin'].'</p>';
	$respuesta .= '<p>Los datos del producto no han sido encontrado</p>';
	$respuesta .= '</div><div class="modal-footer">';
	$respuesta .= '<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>';
	$respuesta .= '</div></div>';
}

echo $respuesta;
