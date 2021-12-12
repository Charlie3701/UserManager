<?php

class UsuarioDAO
{
    public function Conectar()
    {
        $servidor = "localhost";
        $usuario = "root";
        $pws = "root";
        $db = "usuarios";
        $conexion = mysqli_connect($servidor, $usuario, $pws);

        mysqli_select_db($conexion,$db);

        return $conexion;
    }

    public function leerUsuarios()
    {
        $conexion = $this->Conectar();
        $consulta = "select * from usuario";
        $resultado = mysqli_query($conexion, $consulta);

        return $resultado;
    }

    public function verIDs()
    {
        $conexion = $this->Conectar();
        $consulta = "select idUsuario from usuario";
        $resultado = mysqli_query($conexion, $consulta);

        return $resultado;
    }

    public function agregaUsuario(Usuario $usuario)
    {
        $conectar = $this->Conectar();
        $agregarUsuario = "INSERT INTO usuario (nombres,apellidos,correo,domicilio,fechaNac) values ('" . $usuario->getNombres()
            . "' , '" . $usuario->getApellidos() . "' , '" . $usuario->getCorreo() . "' , '" . $usuario->getDomicilio() . "' , '"
            . $usuario->getFechaNac() . "')";
        $resultado = mysqli_query($conectar, $agregarUsuario);

        return $resultado;
    }

    public function modificarUsuario(Usuario $usuario)
    {
        $conectar = $this->Conectar();
        $modificacion = "UPDATE usuario set nombres='" . $usuario->getNombres() . "', apellidos='" . $usuario->getApellidos() .
            "', correo='" . $usuario->getCorreo() . "', domicilio='" . $usuario->getDomicilio() . "', fechaNac='" . $usuario->getFechaNac() .
            "' where idUsuario='" . $usuario->getIdUsuario() . "'";
        $resultado = mysqli_query($conectar, $modificacion);

        return $resultado;
    }

    public function eliminarUsuario(Usuario $usuario)
    {
        $conectar = $this->Conectar();
        $eliminacion = "DELETE FROM usuario WHERE idUsuario=" . $usuario->getIdUsuario();
        $resultado = mysqli_query($conectar, $eliminacion);

        return $resultado;
    }

    public function buscarPorID($id)
    {
        $conectar = $this->Conectar();
        $busqueda = "SELECT * FROM usuario WHERE idUsuario='" . $id . "'";
        $resultado = mysqli_query($conectar, $busqueda);

        return $resultado;
    }
}
