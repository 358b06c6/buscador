<?php
/* 
 * @version v3.0
 * Buscador creador por andrés cataño Medellín 2012
 * Si tienen algun incoveniente no olvides escribir:
 * serdnah2@gmail.com | andres0994@hotmail.com
 * Software libre, el conocimiento es libre.
 * No olvides agradecer y seguirme en mis cuentas:
 * Youtube: http://www.youtube.com/user/serdnah2
 * Twitter: @Andres542
 * Facebook: https://www.facebook.com/andres.ktano
 */

//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "root"; 
$bd_password = ""; 
$bd_base = "buscador";
$connected = true;
$link = mysql_connect($bd_host, $bd_usuario, $bd_password);
if (!$link){
   $connected = false;
   $array = array(
    "error" => "error_connect",
    "bd_host" => $bd_host,
    "bd_usuario" => $bd_usuario,
    "bd_password" => $bd_password,
    );
    print json_encode($array);
    return;
}
$baseConnected = mysql_select_db($bd_base, $link);
if (!$baseConnected) {
    $connected = false;
    $array = array(
    "error" => "error_base",
    "bd_base" => $bd_base,
    );
    print json_encode($array);
    
}

?>
