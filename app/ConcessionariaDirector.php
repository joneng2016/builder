<?php 

namespace App;

class ConcessionariaDirector {
    protected $montadora;
    public function __construct(CarroBuilder $montadora) 
    {
        $this->montadora = $montadora;
    }
    public function construirCarro()
    {
        $this->montadora->buildPreco();
        $this->montadora->buildAnoDeFabricacao();
        $this->montadora->buildDscMotor();
        $this->montadora->buildModelo();
        $this->montadora->buildMontadora();
    }
    public function getCarro()
    {
        return $this->montadora->getCarro();
    }
}
