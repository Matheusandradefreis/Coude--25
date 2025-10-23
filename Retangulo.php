<?php

class Retangulo{

    private $largura;
    private $altura;
    private $area;
    private $perimetro;



    public function setLargura($largura){
        $this->largura = $largura;
    }
    public function getLargura(){
        return $this->largura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getAltura(){
        return $this->altura;
    }
    
    public function calculaArea(){
        $this->area = $this->largura * $this->altura;
        return $this->area;
    }
    
    public function getArea(){
        return $this->area;
    }

     public function calculaperimetro(){
        $this->perimetro = 2 * ($this->largura + $this->altura);
        return $this->perimetro;
    }
      public function getPerimetro(){
        return $this->perimetro;
    }



   public function exibirDados(){
    echo 'O Retangulo tem ' . $this->largura . 'de largura <br>' . $this->altura . 'de altura <br>' . $this->calculaArea() . 'de area <br>' . $this->calculaperimetro() . 'de perimetro <br>';

   }
}