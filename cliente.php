<?php
class Cliente {

    private $nombre;
    private $apellido;
    private $estado;
    private $documento;
    private $tipoDoc;

    //constructor

    public function __construct($nombre, $apellido, $estado, $documento, $tipoDoc)
    {
        $this->nombre = $apellido;
        $this->apellido = $estado;
        $this->estado = $property;
        $this->documento = $documento;
        $this->tipoDoc = $tipoDoc;
    }

    //getters y setters


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }
}

