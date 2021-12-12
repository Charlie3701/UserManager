<?php
class Usuario {
    private $idUsuario;
    private $nombres;
    private $apellidos;
    private $correo;
    private $domicilio;
    //private $dia;
    //private $mes;
    //private $anio;
    private $fechaNac;

    //Set's
    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
    }

    /*
    public function setDia($dia){
        $this->dia = $dia;
    }

    public function setMes($mes){
        $this->mes = $mes;
    }

    public function setAnio($anio){
        $this->anio = $anio; 
    }
    */
    public function setFechaNac($fecha){
        $this->fechaNac = $fecha;
    }

    //Get's
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    /*
    public function getDia(){
        return $this->dia;
    }

    public function getMes(){
        return $this->mes;
    }

    public function getAnio(){
        return $this->anio;
    }*/
    public function getFechaNac(){
        return $this->fechaNac;
    }
}