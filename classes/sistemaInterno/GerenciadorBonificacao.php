<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutentivavel;
use classes\interfaces\Autenticavel;

class GerenciadorBonificacao implements Autenticavel
{
    private $totalBonificacoes;
    private $autenticado;

    public function Autentique(FuncionarioAutentivavel $funcionario, $senha)
    {
        $this->autenticado = $funcionario->autenticar($senha);

    }
    public function registrar(Funcionario $funcionario){
        if($this->autenticado){
            $this->totalBonificacoes += $funcionario->getBonificacao();
        }else{
            throw new \Exception("Você não está logado!");
        }
    }
    public function getTotalBonificacoes(){
        return $this->totalBonificacoes;
    }
}