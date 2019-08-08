<?php

class Conexion {
    
    private $host="localhost";
    private $user="sharecom_manuel";
    private $password="G0[E++qKxBCU";
    private $database="sharecom_enlinea_telecomunicacion";
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
