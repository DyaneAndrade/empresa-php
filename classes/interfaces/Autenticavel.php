<?php

namespace classes\interfaces;
use classes\abstratas\FuncionarioAutentivavel;

interface Autenticavel
{
    public function Autentique(FuncionarioAutentivavel $funcionario, $senha);
}