<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Conta;

/**
 * Description of ContaPoupanca
 *
 * @author wesll
 */
class ContaPoupanca extends Conta {
    
    /**
     * Método herdado da classe Conta
     * @return float
     */
    protected function percentualTarifa(): float
    {    
        return 0.03;
    }
 
}
