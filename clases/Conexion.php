<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author Julieth
 */
class Conexion {
     
    private $host;
    private $user;
    private $pass;
    private $db;
    
    public function __construct() {
        $this->host = '127.0.0.1';
        $this->user = 'root';
        $this->pass = 'Rayco4553';
        $this->db = 'empleados';
        
        $conexion = mysql_connect($this->host, $this->user, $this->pass);
        if ($conexion) {
            mysql_select_db($this->db, $conexion);
        }
    }
    
    public function consulta($sql){
        mysql_query($sql);
    }
    
    public function retorno($sql){
        $consulta = mysql_query($sql);
        return $consulta;
    }
}
