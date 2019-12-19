<?php
require 'TarefaModel.php';
require 'Conexao.php';
require 'TarefaService.php';


$tarefa = new tarefa(); 
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$service = new TarefaService($conexao, $tarefa);
$service->Criar();

header('Location: nova_tarefa.php?inclusao=1');
?>
