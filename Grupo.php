<?php

class Grupo {
    private string $nome;
    private int $idade;
 
    
    public function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
  
    public function __toString(){
        return $this->nome;
    }

    public function exibirDados(){
        
    
         echo 'O nome da Pessoa é: ' . $this->nome;
    
       
    }
}