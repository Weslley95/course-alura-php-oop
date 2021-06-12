<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo;

/**
 * Description of AcessoPropriedades
 *
 * @author wesll
 */
trait AcessoPropriedades {
    
    /**
     * 
     * @param string $nomeAtributo
     * @return type
     */
    public function __get(string $nomeAtributo) 
    {
        $metodo = 'recupera' . ucfisrt($nomeAtributo);        
        return $this->$metodo();
    }
}