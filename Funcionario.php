<?php

class Funcionario{
    private $nome;
    private $salario;



    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setSalario($salario){
        if($salario >= 1212){
            $this->salario = $salario;
        }else{
          $this->salario = 'Esse valor é inválido';
            echo '<br>';
        }
    }
    public function getSalario(){
        return $this->salario;
    }

    public function exibirDados(){
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Salário: ' . $this->salario . '<br>';
    }
}