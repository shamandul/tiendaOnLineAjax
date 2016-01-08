<?php
/*
 * Autor: Jesús de Serdio
 */
require_once('.connectionDB.php.inc');

define('HOSTWEB', '../');

/* Función que nos permite obtener un productos */
function obtenerProducto($asin)
{
	$sentencia='SELECT * FROM products WHERE asin="'.$asin.'"';
	$lista =consulta($sentencia);
	return $lista->fetch();
}
/* Función que nos permite obtener la lista de productos */
function obtenerListaProducto()
{
	$sentencia='SELECT * FROM products';
	$lista =consulta($sentencia);
	return $lista->fetchAll();
}

/* Función que nos permite mostrar la tarjeta del producto */
function mostrarListaProducto()
{
	$lista = obtenerListaProducto();
	foreach ($lista as $producto) {

		$oferta = '<div class="col s12 m6">';
		$oferta .= '<div class="card">';
		$oferta .= '<div class="card-image">';
		$oferta .= '<img class="responsive-img" src="'.HOSTWEB.$producto['src-img'].'">';
		$oferta .= '<span class="card-title grey-text">'.$producto['name'].'</span>';
		$oferta .= '<span class="right green-text">'.$producto['price'].' €</span>';
		$oferta .= '</div><div class="card-action">';
		$oferta .= '<a href="#" asin="'.$producto['asin'].'" class="carrito">Agregar al carrito</a> <a href="#" id="'.$producto['asin'].'" class="blue-text producto">Ver</a></div></div></div>';
		echo $oferta;
	}

}

