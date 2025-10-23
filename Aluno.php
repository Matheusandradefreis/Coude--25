<?php 


class Aluno{
    private $nome;
    private $matricula;


    public function __construct($nome,$matricula){
        $this->nome = $nome;
        $this->matricula = $matricula; }



    public function exibirdados(){
            echo 'Nome: ' . $this->nome . '<br>';
            echo 'Matrícula: ' . $this->matricula . '<br>';
            echo  '<hr> <hr>';

    }
    
}