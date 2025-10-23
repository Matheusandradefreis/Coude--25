<?php

class Produto{
    private $nome;
    private $preço;


    public function __construct($nome,$preço){
        $this->nome = $nome;
        $this->preço = $preço;
     }

     public function exibirdados(){
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Preço: ' . $this->preço . '<br>';
        echo '<hr> <hr>';
     }
}