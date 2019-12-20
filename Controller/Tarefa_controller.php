<?php
require 'TarefaModel.php';
require 'Conexao.php';
require 'TarefaService.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao =='inserir') {
$tarefa = new tarefa(); 
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$service = new TarefaService($conexao, $tarefa);
$service->Criar();

header('Location: nova_tarefa.php?inclusao=1');
} else if ($acao == 'recuperar') {
    
    $tarefa = new tarefa();
    $conexao = new Conexao();
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->Recuperar();
}
?>