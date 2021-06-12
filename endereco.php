<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco};

$umEndereco = new Endereco('São Paulo', 'Chácara Mafalda', 'Paulina', '75');

// echo $umEndereco->getEndereco();
// echo $umEndereco . PHP_EOL;
echo $umEndereco->bairro . PHP_EOL;
$umEndereco->bairro = 'Jardim';
echo $umEndereco->bairro;
