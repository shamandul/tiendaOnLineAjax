<?php
/*
 * Autor: Jesús de Serdio
 */
require_once('.connectionDB.php.inc');

/* Función que nos permite mostrar el resumen del carrito */
function mostrarResumen()
{
    if(isset($_COOKIE['listaArticulos']))
    {    
        $total = 0.0;
        $cookies =(array)  json_decode($_COOKIE['listaArticulos'], true);
        $productos = array();
        $articulo ;
        for($i=0;$i< sizeof($cookies['articulos']);$i++) 
        {

            $datos=obtenerDatos($cookies['articulos'][$i]['articulo']['asin']);
            $articulo= array("articulo" => array("name" => $datos['idproducts'],
                                                 "asin" => $cookies['articulos'][$i]['articulo']['asin'],
                                                 "name" => $datos['name'],
                                                 "numArticulo" => $cookies['articulos'][$i]['articulo']['numArticulo'],
                                                  "price"=> $datos['price']));
            $oferta = '<div class="row">';
            $oferta .= '<div class="col s10 borde-fila left-align"><p>'.$articulo["articulo"]['name'].'</p></div>';
            $oferta .= '<div class="col s1 borde-fila center-align"><p>'
                    .$articulo['articulo']['numArticulo'].'</p></div>';
            $oferta .= '<div class="col s1 borde-fila right-align"><p>'.$articulo["articulo"]['price'].'</p></div></div>';
            $precio = (double) $articulo["articulo"]['price'];
            $cantidad = (double) $articulo['articulo']['numArticulo'];
            $total = (double)($precio * $cantidad) + $total;
            /* 
            // Insertaríamos los productos en la base de datos
            $sentencia;
            $valores = array($articulo["articulo"]['idproducts'],
                             $articulo["articulo"]['asin'],
                             $articulo["articulo"]['numArticulos'],
                             $articulo["articulo"]['asin'],
                             );
            insertarFacturaPreparada($sentencia, $valores);
            */
            echo $oferta;
        }

        $resultado = '<div class="row">';
        $resultado .= '<div class="col s10 right-align"><p>Total</p></div>';
        $resultado .= '<div class="col s2 borde right-align"><p>'.$total.'</p></div></div>';
        
        echo $resultado;
    }
    else 
    {
        $resultado = '<div class="col s12 center-align"><p></p></div>'; 
        $resultado .= '<div class="col s12 center-align"><p>No hay productos en la cesta</p></div>'; 
        $resultado .= '<div class="col s12 center-align"><p></p></div>'; 
        $resultado .= '<div class="col s12 center-align"><p></p></div>'; 
        echo $resultado;
    }

}

function obtenerDatos($asin)
{
    $sentencia = 'SELECT idproducts, name, price FROM products WHERE asin="'.$asin.'"';
    $datos = consulta($sentencia);
    return $datos->fetch();
}
