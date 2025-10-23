<?php

class Media {
    private $nome;
    private $nota;



    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNota($nota){
        $this->nota = $nota;
    }
    public function getNota(){
        return $this->nota;
    }


    public function calculaMedia($nota){
        $acc = 0;
        $media = 0;

        foreach ($nota as $notas){
            $acc += $notas;
            $media = $acc / count($nota);
        }


        return $media;
    }

    public function exibirDados(){
        echo 'Aluno: ' . $this->nome . '<br>';
        var_dump($this->nota) . '<br>';
        echo 'Media: ' . $this->calculaMedia($this->nota) . '<br>';
       
    
    }


}