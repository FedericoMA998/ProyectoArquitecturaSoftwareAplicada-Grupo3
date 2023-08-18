<?php
//incluyendo la libreria
require "adodb5/adodb.inc.php";
function conectar()
{
  $USUARIO = "root";
  $CLAVE = "%Amiga9920$";
  $BD = "";
  $HOST = "localhost";
  $DRIVER = "mysqli";
  //crear el objeto e conexión
  $con = newADOConnection($DRIVER);
  //habilitar el debug
  //$con->debug = true;
  //crear la conexión a la bd
  $con->connect($HOST, $USUARIO, $CLAVE, $BD);
  return $con;
  //echo $con->isConnected();
}


?>
