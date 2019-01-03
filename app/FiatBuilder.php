<?php 

namespace App;

class FiatBuilder extends CarroBuilder
{
    public function buildPreco()
    {
        return $this->carro->preco;
    }
    public function buildDscMotor()
    {
        $this->carro->dscMotor = "Fire Flex 1.0";
    }
    public function buildAnoDeFabricacao()
    {
        $this->carro->anoDeFabricacao = 2011;
    }
    public function buildModelo()
    {
        $this->carro->modelo = "Palio";
    }
    public function buildMontadora()
    {
        $this->carro->montadora = "Fiat";
    }
}
