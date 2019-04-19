<?php
ini_set("display_errors", 1);
require_once "autoload.php";

use classes\abstratas\Funcionario;
use classes\funcionarios\Diretor;
use classes\funcionarios\Designer as Desenhista;
use classes\sistemaInterno\GerenciadorBonificacao;

echo "<pre>";

Funcionario::setPiso(3000);

$diretor = new Diretor("476.402.348-21", 10000.00);
$designer = new Desenhista("265-562-418-25");
$diretor->senha = 123456;

$gerenciador = new GerenciadorBonificacao();
$gerenciador->Autentique($diretor, "123456");
$gerenciador->registrar($diretor);
$gerenciador->registrar($designer);

var_dump($gerenciador->getTotalBonificacoes());

var_dump($diretor);
var_dump($designer);

$designer->getBonificacao();
$diretor->ajusteSalario();

$designer->ajusteSalario();

var_dump($diretor);
var_dump($designer);

var_dump($diretor->autenticar(123456));

?>