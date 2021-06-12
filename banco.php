<?php

require_once 'autoload.php';

/**
 * namespace não necessita ser o mesmo nome das pastas mas é ideal ter nomes em comum na hora de
 * declara-las
 */

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, Conta, ContaCorrente};

$primeiraConta = new ContaPoupanca(new Titular(new CPF('123.456.789-10'), 'Rodrigo', new Endereco('São Paulo', 'JD', 'RT', '45')));

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
