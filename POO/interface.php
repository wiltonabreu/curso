<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velovidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{
    
    public function acelerar($velocidade){
        echo "O veiculo acelerou até: " . $velocidade . " Km/h<br/>";
    }
    
    public function frenar($velovidade){
        echo "O veiculo frenou até: " . $velocidade . " Km/h<br/>";
    }
    
    public function trocarMarcha($marcha){
        echo "O veiculo engatou a machar: " . $marcha . "<br/>";
    }
    
}

$carro = new Civic();
$carro->trocarMarcha(1);
?>