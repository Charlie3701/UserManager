<?php
$id = $_POST['id'];

include("../Modelo/usuario.php");
$eliminarPorId = new Usuario();

$eliminarPorId->setIdUsuario($id);
//echo $eliminarPorId->getIdUsuario();

include("../Persistencia/usuarioDAO.php");
$usuarioDao = new UsuarioDAO();
$usuarioDao->eliminarUsuario($eliminarPorId);
header("Location: ../index.php");
