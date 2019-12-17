<?php
require 'TarefaModel.php';
require 'Conexao.php';
require 'TarefaService.php';
echo '<pre>';
print_r($_POST['tarefa']);
echo '</pre>';

$tarefa = new tarefa(); 
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$service = new TarefaService($conexao, $tarefa);
$service->Criar();
echo '<pre>';
print_r($service);
echo '</pre>';
?>