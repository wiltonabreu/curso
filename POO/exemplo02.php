<?php
class Carro{
    
    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getAno():int{
        return $this->ano;
    }
    
    public function setAno($ano){
        $this->ano = $ano;
    }
    
    public function getMotor():float{
        return $this->motor;
    }
    
    public function setMotor($motor){
        $this->motor = $motor;
    }
    
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "Ano"=>$this->getAno()
            
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2010");

var_dump($gol->exibir());
?>