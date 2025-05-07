<?php
    class Cuota{
        private $monto;
        private $monto_cuota;
        private $monto_interes;
        private $cancelada;

        public function __construct($monto, $monto_cuota, $monto_interes, $cancelada){
            $this-> monto = $monto;
            $this-> monto_cuota = $monto_cuota;
            $this-> monto_interes = $monto_interes;
            $this-> cancelada = $cancelada;
        }

        public function getMonto(){
            return $this-> monto;
        }
        public function getMonto_cuota(){
            return $this-> monto_cuota;
        }
        public function getMonto_interes(){
            return $this-> monto_interes;
        }
        public function getCancelada(){
            return $this-> cancelada;
        }

        public function setMonto($monto){
            $this-> monto = $monto;
        }
        public function setMonto_cuota($monto_cuota){
            $this-> monto_cuota = $monto_cuota;
        }
        public function setMonto_interes($monto_interes){
            $this-> monto_interes = $monto_interes;
        }
        public function setCancelada($cancelada){
            $this-> cancelada = $cancelada;
        }

        public function darMontoFinalCuota(){
            
        }
    }