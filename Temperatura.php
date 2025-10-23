<?php

class Temperatura {
    private $celsius;


    public function setCelsius($celsius){
        $this->celsius = $celsius + 32;
    }

    public function getCelsius(){
        return $this->celsius;
    }

    public function exibirDados(){

        echo 'Está fazendo: ' . $this->celsius . ' º Fahrenheit' . '<br>';
    }
}