    <?php

include_once 'moto.php';


    class Venta{

        private $numero;
        private $fecha;
        private $refCliente;
        private $refMotos;
        private $precio;

        public function __construct($numero, $fecha, $refCliente, $refMotos = [], $precio) {
            $this->numero = $numero;
            $this->fecha = $fecha;
            $this->refCliente = $refCliente;
            $this->refMotos = $refMotos;
            $this->precio = $precio;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;

            return $this;
        }

        public function getFecha()
        {
            return $this->fecha;
        }

        public function setFecha($fecha)
        {
            $this->fecha = $fecha;

            return $this;
        }

        public function getRefCliente()
        {
            return $this->refCliente;
        }

        public function setRefCliente($refCliente)
        {
            $this->refCliente = $refCliente;

            return $this;
        }

        public function getRefMotos()
        {
            return $this->refMotos;
        }

        public function setRefMotos($refMotos)
        {
            $this->refMotos = $refMotos;

            return $this;
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;

            return $this;
        }

        public function incorporarMoto($objMoto){

            $disponible = $objMoto->getActiva(); //Accedemos al estado de la moto(disponible o no)
            $precioFinal = -1; //Si la moto no esta disponible retorna -1

            if($disponible == true){
                $coleccionMotos = $this->getRefMotos(); //Inicializamos Array
                $coleccionMotos[] = $objMoto; //Añadimos moto a la coleccion
                $this->setRefMotos($coleccionMotos); //Añadimos moto a la coleccion
                $this->setPrecio($objMoto -> calcularVenta());;//Calculamos el precio final, llamando a la funcion "calcularVenta"
                $precioFinal = $this->getPrecio(); 
            }

            return $precioFinal; //Retornamos en precio final, en caso de ser -1 la moto no esta disponible

        }    

    }   
