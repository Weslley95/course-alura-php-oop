<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Pessoa, CPF, Endereco};
use Alura\Banco\Modelo\{Autenticavel};

/**
 * Description of Titular
 *
 * @author wesll
 */
class Titular extends Pessoa implements Autenticavel
{

    private $endereco;

    /**
     * Método construtor
     * @param string $cpf
     * @param string $nome
     */
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // Referenciado a classe que estou herdando (Pessoa)
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    /**
     * 
     * @return Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
    
    /**
     * 
     * @param string $senha
     * @return bool
     */
    public function podeAutenticar(string $senha): bool 
    {
        return $senha === 'abcd';
    }
}
