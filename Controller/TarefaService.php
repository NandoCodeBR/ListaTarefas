<?php

Class TarefaService{
    
    private $tarefa;
    private $conexao;
    
    public function __construct(Conexao $conexao, tarefa $tarefa) {
        
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }
    //CRUD
    public function Criar(){ //Create
        $query = 'INSERT INTO tb_tarefas (tarefa) VALUES (:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }
    public function Recuperar(){ //Read
        $query = 'select'
                . ' t.id, s.status, tarefa'
                . ' from'
                . ' tb_tarefas as t'
                . ' left join tb_status as s on (t.id_status = s.id)';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        
    }
    public function Atualizar (){ //Update

    }
    public function Remover(){ //Delete

    }
}

?>