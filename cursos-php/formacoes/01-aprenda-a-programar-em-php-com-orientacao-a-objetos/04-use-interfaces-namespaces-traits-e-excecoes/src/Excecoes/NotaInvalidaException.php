<?php

namespace ScreenMatch\Excecoes;

class NotaInvalidaException extends \InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('A nota precisa ser entre 0 e 10.');
    }
}
