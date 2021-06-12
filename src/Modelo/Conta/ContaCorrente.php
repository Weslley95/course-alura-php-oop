<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Conta;

/**
 * Description of ContaCorrente
 *
 * @author wesll
 */
class ContaCorrente extends Conta {
    
     /**
     * Método herdado da classe Conta
     * @return float
     */
    protected function percentualTarifa(): float {
        return 0.05;
    }
    
    /**
     *
     * @param float $valorDepositar
     * @return void
     */
    public function deposita(float $valorDepositar): void
    {

        if ($valorDepositar > 0) {

            $this->saldo += $valorDepositar;
            return;
        }

        echo "Não é possível depositar saldo negativo!";
    }

    /**
     *
     * @param float $valorATransferir
     * @param Conta $contaDestino
     * @return void
     */
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {

        if ($valorATransferir > $this->saldo) {

            echo "Saldo indisponível para realizar a transferência!";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
        echo "Valor de R$ $valorATransferir,00 transferido com sucesso, de $this->nomeTitular para a conta de $contaDestino->nomeTitular";
    }
}
