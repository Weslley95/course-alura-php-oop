<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

/**
 * Description of Funcionario
 *
 * @author wesll
 */
abstract class Funcionario extends Pessoa
{

    private $salario;


    public function __construct(string $nome, CPF $cpf, float $salario)
    {

        /**
         * Referenciado a classe que estou herdando (Pessoa)
         * Chamando métodos da classe superior (pai -> Pessoa) utilizando parent::_consttruct()
         */
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    /**
     * 
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }
    
    /**
     * 
     * @param string $nome
     * @return void
     */
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    
    /**
     * Retornar salário
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }
    
    public function recebeAumento(float $valorAumento): float 
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positiva!";
        } 
        
        return $this->salario += $valorAumento;
    }
    
    abstract public function calculaBonificacao(): float;
    
}



