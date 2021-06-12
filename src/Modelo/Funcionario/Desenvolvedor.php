<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Funcionario;

/**
 * Description of Desenvolvedor
 * @author wesll
 */
class Desenvolvedor extends Funcionario {
    
    /**
     * @Override
     * @return float
     */
    public function sobeDeNivel(): float
    {
       return $this->recebeAumento($this->getSalario() * 0.75);
    }
    
    public function calculaBonificacao(): float 
    {
        return 500.0;
    }
}
