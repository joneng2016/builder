<?php

namespace App;

abstract class CarroBuilder
{
    protected $carro;

    public function __construct()
    {
        $carro = new CarroProduct; 
    }
    
    abstract protected function buildPreco();
    abstract protected function buildDscMotor();
    abstract protected function buildAnoDeFabricacao();
    abstract protected function buildModelo();
    abstract protected function buildMontadora();
    public function getCarro()
    {
        return $carro;
    }
}
