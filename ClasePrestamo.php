<?php
    class Prestamo{
        private $identificacion;
        private $cod_electrodom;
        private $fecha;
        private $monto;
        private $cant_cuotas;
        private $tasa_interes;
        private $col_cuotas;
        private $ref_cliente;

        public function __construct($monto, $cant_cuotas, $tasa_interes, $ref_cliente){
            $this-> monto = $monto;
        }
    }