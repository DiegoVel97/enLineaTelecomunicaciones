<?php

class Conexion {
    

    private $host="10.158.117.168";
    private $user="super-admin";
    private $password="El*90160+";
    private $database="enlineatelecomunicaciones";
    private $conn;
    
    public function __construct() {
        $this->conectar();
    }
    
    public function conectar() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
    
    public function cerrar(){
        mysqli_close($this->conn);
    }
    
    function getConn(){
        return $this->conn;
    }
    
}
