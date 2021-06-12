<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\{ControladorDeBonificacoes};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor('Oswaldo', new CPF('123.456.789-10'), 1000);
$umaFuncionaria = new Gerente('Priscila', new CPF('123.456.789-11'), 3000);
$umDiretor = new Diretor('Ana Paula', new CPF('987.654.321-10'), 5000);
$umEditor = new EditorVideo('Jodé', new CPF('123.456.789-10'), 3500);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;
echo $umDiretor->calculaBonificacao() - $umDiretor->getSalario() . PHP_EOL;