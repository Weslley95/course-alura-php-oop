<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\{Funcionario};
/**
 * Description of ControladorDeBonificacoes
 *
 * @author wesll
 */
class ControladorDeBonificacoes {
    
    private $totalBonificacoes = 0;
    
    /**
     * Calcula a bonificação
     * @param Funcionario $funcionario
     */
    public function adicionaBonificacaoDe(Funcionario $funcionario) 
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }
    
    /**
     * Recupera bonificação do funcionário
     * @return float
     */
    public function recuperaTotal(): float  
    {   
        return $this->totalBonificacoes;
    }
}
