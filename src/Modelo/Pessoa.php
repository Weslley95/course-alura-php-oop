<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo;

/**
 * Description of Pessoa
 *
 * @author wesll
 */
abstract class Pessoa
{
    // Utlização da class trait
    use AcessoPropriedades;
    /**
     * Atributo protected onde as classes filhas de Pessoa (Funcionario e Titular) conseguem ter acesso
     * 
     * Atributos estando como "Protected" classes filhas herdando (extends) a classe Pessoa conseguem ter acesso
     * ao atributos
     * 
     * public permite que todos possam acessar o membro, inclusive fora da classe onde foi definido, 
     * através de uma instância. protected permite que a classe atual e as classes filhas tenham acesso. 
     * private permite que apenas a classe atual tenha acesso.
     */
    protected $nome;
    protected $cpf;

    /**
     * 
     * @param string $nome
     * @param string $cpfs
     */
    public function __construct(string $nome, CPF $cpf)
    {

        $this->valida($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    /**
     * 
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * 
     * @return CPF
     */
    public function getCPF(): string
    {
        return $this->cpf->recuperaNumero();
    }
}
