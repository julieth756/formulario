<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Enrutador{
    public function cargarVista($vista) {
        switch ($vista):
            case "crear":
                include_once ('vista./'.$vista.'.php');
            break;
            default :
                include_once ('vista/error.php');
        endswitch;
    }
    
    function validarGET($variable) {
        if (empty($variable)) {
            include_once ('vista/inicio.php');
        }else{
            return true;
        }
    }
}

