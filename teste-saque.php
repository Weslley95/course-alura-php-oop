<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(new Titular(new CPF('123.456.789-10'), 'Weslley', new Endereco('São Paulo', 'Jardins', 'Maf', '18')));
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;
echo $conta->recuperaNomeTitular() . PHP_EOL;
echo $conta->recuperaCpfTitular() . PHP_EOL;

