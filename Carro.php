<?php

class Carro {
    private $marca;
    private $modelo;
    private $ano;



    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno(){
        return $this->ano;
    }


    public function exibirDados(){
        echo 'Marca: ' . $this->marca . '<br>';
        echo 'Modelo: ' . $this->modelo . '<br>';
        echo 'Ano: ' . $this->ano . '<br';
    }
}