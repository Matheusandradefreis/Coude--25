<?php

class Livro {
    private $titulo;
    private $autor;
    private $npaginas;


    public function __construct($titulo,$autor,$npaginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->npaginas = $npaginas;
    }


    public function exibirDados(){
        echo 'Titulo: ' . $this->titulo . '<br>';
        echo 'Autor: ' . $this->autor . '<br>';
        echo 'Número de Páginas: ' . $this->npaginas . '<br>';
    }
}