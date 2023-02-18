<?php


class Producto {
    //put your code here
    
    private $nombre;
    private $descripcion;
    private $imagen;
    
    function Producto() {
        
    }
    
    
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }


}
