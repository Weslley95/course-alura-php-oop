<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Modelo;

/**
 * Interface -> todos os métodos serão abstracts, ao implementar interface será obrigatório o uso dos métodos
 * Pode-se usar quantas interfaces quiser, diferente de extends que é apenas uma
 * Description of Autenticavel
 *
 * @author wesll
 */
interface Autenticavel {
    
    public function podeAutenticar(string $senha): bool;
}
