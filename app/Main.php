<?php 
    
namespace App;

class Main
{
    public function run()
    {
        $concessionaria = new ConcessionariaDirector(new FiatBuilder);
        $concessionaria->construirCarro();
        $carro = $concessionaria->getCarro();
        echo "Carro: ".$carro->modelo." Ano: ".$carro->anoDeFabricacao." Motor: ".$carro->dscMotor." Valor ".$carro->preco;
    }
}
