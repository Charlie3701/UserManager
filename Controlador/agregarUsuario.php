<?php
include("../Persistencia/usuarioDAO.php");
include("../Modelo/usuario.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$anio = $_POST['anio'];
$mes = $_POST['mes'];
$dia = $_POST['dia'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];

$domicilio = "Calle ".$calle." #".$numero." Col. ".$colonia;
$fecha = $anio."/".$mes."/".$dia;

$usuarioDao = new UsuarioDAO();
$usuario = new Usuario();

$usuario->setNombres($nombres);
$usuario->setApellidos($apellidos);
$usuario->setCorreo($correo);
$usuario->setDomicilio($domicilio);
$usuario->setFechaNac($fecha);

/*
echo "Nombres: ".$usuario->getNombres()."<br>";
echo "Apellidos: ".$usuario->getApellidos()."<br>";
echo "Correo: ".$usuario->getCorreo()."<br>";
echo "Domicilio: ".$usuario->getDomicilio()."<br>";
echo "Fecha: ".$usuario->getFechaNac()."<br>";
*/

$usuarioDao->agregaUsuario($usuario);
header("Location: ../index.php");