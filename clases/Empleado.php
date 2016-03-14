<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author Julieth
 */
include_once 'Conexion.php';

class Empleado {
    
    private $id;
    private $cedula;
    private $nombre;
    private $apellido;
    private $fecha_nac;
    private $sede;
    private $sexo;
    private $direccion;
    private $telefono_movil;
    private $foto;
    private $conexion;
    
    public function __construct() {
        $this->conexion = new Conexion();        
    }
    
    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }
    
    public function get($atributo) {
        return $this->$atributo;
    }
    
    public function crear() {
        $sql2 = "SELECT * FROM empleado WHERE cedula = '{$this->cedula}'";
        $resultado = $this->conexion->retorno($sql2);
        $num = mysql_num_rows($resultado);
        if ($num != 0) {
            return FALSE;
        }else{
        $sql = "INSERT INTO empleado (cedula, nombre, apellido, fecha_nac, sede, sexo, direccion, telefono_movil, foto) VALUES 
        ('{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->fecha_nac}','{$this->sede}','{$this->sexo}','{$this->direccion}','{$this->telefono_movil}','{$this->foto}')";
        $this->conexion->consulta($sql);
        return TRUE;
        }
    }
    
    public function eliminar() {
        $sql = "DELETE FROM empleado WHERE id = '{$this->id}'";
        $this->conexion->consulta($sql);
    }
    
    public function listarUnico() {
        $sql = "SELECT * FROM empleado WHERE id = '{$this->id}' LIMIT 1";
        $resultado = $this->conexion->retorno($sql);
        $row = mysql_fetch_assoc($resultado);
        $this->id = $row['id'];
        $this->id = $row['cedula'];
        $this->id = $row['nombre'];
        $this->id = $row['apellido'];
        $this->id = $row['fecha_nac'];
        $this->id = $row['sede'];
        $this->id = $row['sexo'];
        $this->id = $row['direccion'];
        $this->id = $row['telefono_movil'];
        $this->id = $row['foto'];
    }
    
    public function listarAll() {
        $sql = "SELECT * FROM empleado";
        $resultado = $this->conexion->retorno($sql);
        return $resultado;
    }
    
    public function editar(){
        $sql = "UDATE empleado SET nombre = '{$this->nombre}', apellido = '{$this->apellido}', fecha_nac = '{$this->fecha_nac}', sede = '{$this->sede}',
            sexo = '{$this->sexo}', direccion = '{$this->direccion}', telefono_movil = '{$this->telefono_movil}', foto = '{$this->foto}'";
        $this->conexion->consulta($sql);
    }
}
