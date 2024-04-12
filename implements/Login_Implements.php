<?php

namespace Implements;

require __DIR__.'/../vendor/autoload.php';

use Implements\UsuarioFactory;

class Login_Implements
{
    public function executar($lo, $se)
    {
        $login = $lo;
        $senha = $se;

        $perfil = 'professor';

        $usuario = UsuarioFactory::criar($perfil);

        if ($usuario->autenticar($login, $senha)) {
            $autorizacoes = $usuario->autorizar();

            echo "Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes)."\n";+



        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}


