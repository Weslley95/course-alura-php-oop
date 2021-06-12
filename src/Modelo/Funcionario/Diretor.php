<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Autenticavel};

/**
 * Description of Diretor
 *
 * @author wesll
 * 
 * Herança-> classes que extende (extends) outras não precisa necessáriamente ter só os métodos da classe extendida, pode ter seus
 * próprios métodos
 */
class Diretor extends Funcionario implements Autenticavel {
    
    /**
     * @Override
     * Método que irá sobrescrever o método em funcionário, para calcular a bonificação
     * @return float
     */
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }
    
    /**
     * Método de autenticação do funcionário
     * @param string $senha
     * @return bool
     */
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}