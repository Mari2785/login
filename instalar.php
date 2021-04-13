<?php

include_once "config.php";
include_once "entidades/usuarios.php";

$usuario = new Usuario();
$usuario->usuario = "mteran";
$usuario->clave = $usuario->encriptarClave("admin123");
$usuario->nombre = "Marianela";
$usuario->apellido = "Teran";
$usuario->correo = "teranmarianela785@gmail.com";
$usuario->insertar();

?>