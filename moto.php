<?php

class Moto{

    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentIncremAnual;
    private $activa; 

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentIncremAnual, $activa) {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentIncremAnual = $porcentIncremAnual;
        $this->activa = $activa;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

    public function setAnioFabricacion($anioFabricacion)
    {
        $this->anioFabricacion = $anioFabricacion;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPorcentIncremAnual()
    {
        return $this->porcentIncremAnual;
    }

    public function setPorcentIncremAnual($porcentIncremAnual)
    {
        $this->porcentIncremAnual = $porcentIncremAnual;

        return $this;
    }

    public function getActiva()
    {
        return $this->activa;
    }

    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }
    
    public function calcularVenta() {
        //INT $venta
        $venta = -1; //inicializo variable de venta.
        
        if($this->getActiva() == true){
            $venta = $this->getCosto() + $this->getCosto() * ((date("Y") - $this->getAnioFabricacion()) * $this->getPorcentIncremAnual());
        } 
        return $venta;
    }
}
