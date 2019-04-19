<?php


namespace classes\abstratas;

abstract class FuncionarioAutentivavel extends Funcionario
{
    public $senha;

    public function autenticar($senha){
        return $this->senha == $senha; //retorne true ou false
    }
}