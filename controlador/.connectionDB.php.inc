<?php

/**
 * HOST es la dirección donde se encuentra la Base de Datos MySQL
 */
define('HOST','localhost'); 
/**
 * NOMBREBD es el nombre de la base de datos
 */
define('NOMBREBD', 'tiendaonline');
/**
 *  USUARIOBD es el nombre de usuario para utilizar la base de datos
 */
define('USUARIOBD', 'tienda'); 
/**
 * PASSBD es la contraseña para la base de datos
 */
define('PASSBD', 'tienda'); 
/**
 * Función que nos permite conectarnos a la base de datos
 * @return \PDO nos devuelve un objeto PDO$q->bindParam(3, $valores[2]);
 */
function conexion(){
   try{
       //realizamos la conexión
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = 'mysql:host='.HOST.';dbname='.NOMBREBD;
        $pdoConex = new PDO($dsn, USUARIOBD, PASSBD, $opc);
       return $pdoConex;
       
   } catch (Exception $ex) {
       // Mensaje de error de la conexión
       echo'<span>error en la conexi&oacute;n: '.$ex."</span>";
   }   
}

/**
 * Funcion que nos inserta los datos en una base de datos
 * @param type $sentencia
 * @param type $valores
 * @return boolean
 */


function insertarFacturaPreparada($sentencia,$valores){
    try {
       $conexion=  conexion();
       $q= $conexion->prepare($sentencia);
       // introducimos los parámetros
       $q->bindParam(1, $valores[0]);
       $q->bindParam(2, $valores[1]);
       $q->bindParam(3, $valores[2]);
       $q->bindParam(4, $valores[3]);
       
       // ejecutamos la inserción
       $q->execute();
       $conexion=NULL;
       return TRUE;
    } catch (Exception $ex) {
        // Mensaje de error de la conexión
        echo'<span>error al guardar los datos: '.$ex."</span>"; 
        return FALSE;
    }
    
}

function consulta($sentencia){
    // Establecemos conexión
    try{
        // Nos conectamos a la base de datos
        $conexion=conexion();
        // realizamos la consulta
        $resultado =$conexion->query($sentencia);
        return $resultado;
    } catch (Exception $ex) {
        // Mensaje de error de la conexión
        echo'<span>error en la consulta: '+$ex."</span>"; 
    } 
    
}