<?php
/*
 * Autor: Jesús de Serdio
 */
require_once('.connectionDB.php.inc');

define('HOSTWEB', '');

/* Función que nos permite obtener un producto */
function obtenerProducto()
{
	$sentencia='SELECT * From products WHERE idproducts=5';
	return consulta($sentencia);
}

/* Función que nos permite mostrar la tarjeta del producto */
function mostrarProducto()
{
	$obProd = obtenerProducto();
	$producto = $obProd->fetch();
	$oferta = '<h3 class="center-align">Oferta del día</h3>';
	$oferta .= '<div class="card">';
	$oferta .= '<div class="card-image">';
	$oferta .= '<img src="'.$producto['src-img'].'">';
	$oferta .= '<span class="card-title grey-text">'.$producto['name'].'</span>';
	$oferta .= '<span class="right green-text">'.$producto['price'].' €</span>';
	$oferta .= '</div><div class="card-action">';
	$oferta .= '<a href="#" asin="'.$producto['asin'].'" class="carrito">Agregar al carrito</a><a href="#" id="'.$producto['asin'].'" class="blue-text producto">Ver</a></div></div>';
	echo $oferta;

}
