<?php
function gerarSenha($tamanho = 8) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $senha = '';
    
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    
    return $senha;
}

$tamanhoSenha = 10;

$senhaGerada = gerarSenha($tamanhoSenha);

echo "Senha gerada: " . $senhaGerada;

