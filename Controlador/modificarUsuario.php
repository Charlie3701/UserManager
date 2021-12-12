<?php
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

$domicilio = "Calle ".$calle." #".$numero." Col.".$colonia;
$fecha = $anio."/".$mes."/".$dia;

include("../Modelo/usuario.php");
include("../Persistencia/usuarioDAO.php");

$usuarioModificar = new Usuario();
$usuarioDao = new UsuarioDAO();

$usuarioModificar->setIdUsuario($id);
$usuarioModificar->setNombres($nombres);
$usuarioModificar->setApellidos($apellidos);
$usuarioModificar->setCorreo($correo);
$usuarioModificar->setDomicilio($domicilio);
$usuarioModificar->setFechaNac($fecha);

/*
echo $usuarioModificar->getIdUsuario()."<br>";
echo $usuarioModificar->getNombres()."<br>";
echo $usuarioModificar->getApellidos()."<br>";
echo $usuarioModificar->getCorreo()."<br>";
echo $usuarioModificar->getDomicilio()."<br>";
*/

$usuarioDao->modificarUsuario($usuarioModificar);
header("Location: ../index.php");