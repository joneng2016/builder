<?php

namespace App;

abstract class CarroBuilder
{

    public function __construct()
    {
        $this->carro = new CarroProduct; 
    }
    
    abstract protected function buildPreco();
    abstract protected function buildDscMotor();
    abstract protected function buildAnoDeFabricacao();
    abstract protected function buildModelo();
    abstract protected function buildMontadora();
    public function getCarro()
    {
        return $this->carro;
    }
}
