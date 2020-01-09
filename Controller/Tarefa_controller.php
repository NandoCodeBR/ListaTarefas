<?php

require 'TarefaModel.php';
require 'Conexao.php';
require 'TarefaService.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
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
} else if ($acao == 'atualizar') {
    
    $tarefa = new tarefa();
    $conexao = new Conexao();
    $tarefa->__set('tarefa', $_POST['tarefa']);
    $tarefa->__set('id', $_POST['id']);
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->Atualizar();
    header('Location: todas_tarefas.php?alteracao=1');
} else if ($acao =='deletar') {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $tarefa = new tarefa();
    $conexao = new Conexao();
    $tarefa->__set('id', $_POST['idDel']);
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->Deletar();
    header('Location: todas_tarefas.php?exclusao=1');

} else if($acao=='confirmar'){
    $tarefa = new tarefa();
    $conexao = new Conexao();
    $tarefa->__set('id', $_POST['id']);
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->Confirmar();
    header('Location: todas_tarefas.php?confirma=1');
}

?>