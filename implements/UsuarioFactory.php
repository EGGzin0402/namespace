<?php

namespace Implements;

use Implements\Usuario;
use Implements\Professor;
use Implements\Administrador;
use Implements\AdministradorSupremo;
use Exception;

class UsuarioFactory
{
    public static function criar(string $perfil): Usuario
    {
        switch ($perfil) {
            case 'professor':
                return new Professor();
            case 'administrador':
                return new Administrador();
            case 'administrador_supremo':
                return new AdministradorSupremo();
            default:
                throw new Exception('Perfil inválido');
        }
    }
}

