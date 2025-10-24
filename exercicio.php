<?php 
// QUESTÃO 1
// require_once('Livro.php');
// $livro1 = new Livro ('Cartas á Igreja', 'Francis Chan', 192);
// $livro2 = new Livro ('O Peregrino', 'John Buynan', 320);
// $livro1->exibirDados();
// $livro2->exibirDados();
// QUESTÃO 2
// require_once('Aluno.php');
// $aluno1 = new Aluno ('Wagner', 2025198);
// $aluno2 = new Aluno ('Wesley', 2025199);
// $aluno1->exibirdados();
// $aluno2->exibirdados();
// QUESTÃO 3
// require_once('Produto.php');
// $produto1 = new Produto('Beyblad', 'R$ 25,50');
// $produto2 = new Produto('Camisa', 'R$ 60');
// $produto1->exibirdados();
// $produto2->exibirdados();
// QUESTÃO 4
// require_once('Usuario.php');
// $usuario1 = new Usuario();
// $usuario2= new Usuario();
// $usuario1->setNome('Matheus Reis');
// $usuario1->setEmail('Matheus.reis@example.com');
// $usuario2->setNome('Wagner Feijó');
// $usuario2->setEmail('Wagner.feijó@example.com');
// $usuario1->exibirDados();
// $usuario2->exibirDados();
// QUESTÃO 5
// require_once('Contabancaria.php');
// $conta1 = new Contabancaria();
// $conta1->setSaldo(550);
// $conta1->exibirDados();
// QUESTÃO 6
// require_once('Carro.php');
// $carro1 = new Carro();
// $carro1->setMarca('BMW');
// $carro1->setModelo('X1');
// $carro1->setAno(2025);
// $carro1->exibirDados();
// QUESTÃO 7
// require_once('Funcionario.php');
// $funcionario1 = new Funcionario();
// $funcionario2 = new Funcionario();
// $funcionario1->setNome('Wesley');
// $funcionario1->setSalario(1200);
// $funcionario2->setNome('Matheus');
// $funcionario2->setSalario(1500);
// $funcionario1->exibirDados();
// $funcionario2->exibirDados();
// QUESTÃO 8
// require_once('Temperatura.php');
// $temperatura1 = new Temperatura();
// $temperatura1->setCelsius(54);
// $temperatura1->exibirDados();
// QUESTÃO 9
// require_once('Retangulo.php');
// $retangulo1 = new Retangulo();
// $retangulo1->setLargura(50);
// $retangulo1->setAltura(40);
// $retangulo2 = new Retangulo();
// $retangulo2->setLargura(50);
// $retangulo2->setAltura(40);
// $retangulo1->exibirDados();
// $retangulo2->exibirDados();
// QUESTÃO 10
// require_once('Media.php');
// $aluno1 = new Media();
// $aluno1->setNome('Matheus');
// $aluno1->setNota([10,10,9]);
// $aluno1->exibirDados();
// QUESTÃO 11 - NÃO CONSEGUI DIREITO
require_once('Grupo.php');
$aluno1 = new Grupo ('Matheus',22);
$aluno2 = new Grupo ('Matheuss',24);
$array = [$aluno1,$aluno2];
foreach($array as $arrayss){
    echo $arrayss;
}
// $array->exibirDados();
// QUESTÃO 12