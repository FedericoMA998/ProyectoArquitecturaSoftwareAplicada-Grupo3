<?php
//incluyendo la libreria
require "adodb5/adodb.inc.php";
//conexion a la base de datos
function conectar()
{
  $USUARIO = "root";
  $CLAVE = "%Amiga9920$";
  $BD = "patitos_sa_db";
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

function insertar($tabla, $fila)
{
  $con = conectar();
  //$con->debug = true;
  return $con->autoExecute($tabla, $fila, 'INSERT');
}

function getUsuario($cedula)
{
  $con = conectar();
  $sql = "SELECT * FROM tusuarios WHERE cedula=$cedula";
  return $con->GetArray($sql)[0];
}
