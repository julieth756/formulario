<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
include_once ('./clases/Empleado.php');

class controladorEmpleado{
    private $empleado;
    
    public function __construct() {
        $this->empleado = new Empleado();
    }
    
    public function index() {
        $resultado = $this->empleado->listarAll();
        return $resultado;
    }
    
    public function crear($cedula, $nombre, $apellido, $fecha_nac, $sede, $sexo, $direccion, $telefono_movil, $foto) {
        $this->empleado->set("cedula", $cedula);
        $this->empleado->set("nombre", $nombre);
        $this->empleado->set("apellido", $apellido);
        $this->empleado->set("fecha_nac", $fecha_nac);
        $this->empleado->set("sede", $sede);
        $this->empleado->set("sexo", $sexo);
        $this->empleado->set("direccion", $direccion);
        $this->empleado->set("telefono_movil", $telefono_movil);
        $this->empleado->set("foto", $foto);
        
        $resultado = $this->empleado->crear(); 
        return $resultado;
    }
    
    public function eliminar($id) {
        $this->empleado->set("id", $id);
        $this->empleado->eliminar();
    }
    
     public function listarUnico($id) {
        $this->empleado->set("id", $id);
        $this->empleado->listarUnico();
    }
    
    public function editar($id) {
        $this->empleado->set("id", $id);
        $this->empleado->listarUnico();
        $this->empleado->editar();
    }
}