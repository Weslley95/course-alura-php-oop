<?php

/**
 * Função verifica se a classe existe
 * PSR-4
 */
spl_autoload_register(function(string $nomeCompletoDaClasse){

    // Alura\Banco\Modelo\Endereco -> src/Modelo/Endereco.php
    // src/Modelo/Endereco.php
    /**
     * \\ -> uma barra pode acabar se tornando caracter especial, por garantia utilize duas barra (\\)
     * DIRECTORY_SEPARATOR -> identifica o sistema operação na utiliza da barra, windows (\) - linux & Mac (/)
     *  
     */
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
    // Se caminho existe faça
    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});