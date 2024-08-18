<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): bool
    {
        if ($autenticavel->podeAutenticar($senha)) {
            var_dump('Ok. Usuário logado no sistema.');
            return true;
        }

        var_dump('Ops. Senha incorreta.');
        return false;
    }
}
