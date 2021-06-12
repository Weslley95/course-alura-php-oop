<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\{Autenticador};
use Alura\Banco\Modelo\Funcionario\{Diretor};

$autenticador = new Autenticador();
$umDiretor = new Alura\Banco\Modelo\Conta\Titular(new CPF('123.456.789-10'), 'João Carlos', new Alura\Banco\Modelo\Endereco('', '', '', ''), 10000);

$autenticador->tentaLogin($umDiretor, '4321');