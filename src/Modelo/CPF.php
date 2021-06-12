<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo;

/**
 * Class final, não podera ser extendida (extends)
 * Description of Cpf
 *
 * @author wesll
 */
final class CPF
{
    /**
     * 
     * @var string
     */
    private $numero;

    public function __construct(string $numero)
    {

        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "CPF inválido";
            exit();
        }

        $this->numero = $numero;
    }

    /**
     * 
     * @return string
     */
    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
