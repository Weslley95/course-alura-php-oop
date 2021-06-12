<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo;

/**
 * Description of Endereco
 *
 * @author wesll
 * @property-read string $Rua
 * @property-read string $numero
 * @property-read string $bairro
 * @property-read string $cidade
 */
final class Endereco
{   
    // Tulização da class trait
    use AcessoPropriedades;
    
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    
    /**
     * 
     * @param string $cidade
     * @param string $bairro
     * @param string $rua
     * @param string $numero
     */
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {

        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    /**
     * 
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * 
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * 
     * @return string
     */
    public function getRua(): string
    {
        return $this->rua;
    }

    /**
     * 
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }
    
    /**
     * 
     * @return string
     */
    public function getEndereco(): string
    {
       return "Rua {$this->rua} nº {$this->numero}, {$this->bairro}, {$this->cidade}"; 
    }
    
    /**
     * 
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    
    /**
     * Acessar diretamente os atributos
     * @param string $nomeAtributo
     * @return type
     */
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}






