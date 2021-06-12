<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Conta;

/**
 * Description of Conta
 * @author wesll
 * Para ter um método abstract, é necessário que a classe também seja abstract, então
 * todas as classes que herdarem (exteds) está classe (Conta) necessitar ter todos os métodos contidos nessa classe,
 * então para complementar esses métodos e utiliza-los, é necessário utiliza-los em outras Classes
 * Resumindo: se necessitar obrigar que todas as classes tenham certos métodos, use-se abstract
 */
abstract class Conta
{

    // Atributos
    private $titular;
    protected $saldo;
    private $cpf;
    private static $numeroDeContas = 0;

    // Método construtor|construct
    public function __construct($titular)
    {

        $this->titular = $titular;  
        $this->saldo = 0;
        
        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {

        if (self::$numeroDeContas > 2);
        echo "Há mais de uma conta ativda";
    }

    // Métodos

    /**
     *
     * @param float $valorSacar
     */
    public function saca(float $valorSacar): void
    {   
        
        $tarifa = $valorSacar * $this->percentualTarifa();
        $valorSacar += $tarifa;
        
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
            $this->saldo -= $valorSacar;
    }

    /**
     *
     * @return float
     */
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * 
     * @return string
     */
    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    /**
     * 
     * @return 
     */
    public function recuperaCpfTitular(): string
    {
        return $this->titular->getCPF();
    }
    
    public function recuperaEndereco(): string
    {
        return $this->titular->getEndereco();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
    
    /**
     * Método abstract -> todas as classes que herdarem este método precisam implemetar
     * Método protected -> demais classes que herda está classe (Conta) identifcam este método percentualTarifa
     * @return float
     */
    abstract protected function percentualTarifa(): float;
}




