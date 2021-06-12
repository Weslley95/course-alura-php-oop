<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\{Autenticavel};

/**
 * Description of Autenticador
 *
 * @author wesll
 */
class Autenticador {
    
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Logado com sucesso!";
        } else {
            echo "Senha incorreta";
        }
    }
}
