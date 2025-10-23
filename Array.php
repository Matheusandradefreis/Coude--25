<?php

class Grupo {
    private $nome = [];
    private $idade= [];
 
    
    public function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibirDados(){
        
    foreach($this->nome as $nomes){
        $nome = $this->nome[$nomes];  
         echo 'O nome da Pessoa é: ' . $this->nome;
    }
       
    }
}