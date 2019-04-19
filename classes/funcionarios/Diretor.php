<?php

namespace classes\funcionarios;
use classes\abstratas\FuncionarioAutentivavel;

class Diretor extends FuncionarioAutentivavel
{
    public function getBonificacao(){
        return $this->salario * 0.5;

    }
}