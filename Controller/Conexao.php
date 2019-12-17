<?php


class Conexao{

private $host='localhost';
private $user='root';
private $dbname='lista_tarefas';
private $senha='';

public function conectar(){
    try{
        $conexao = new PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            "$this->user",
            "$this->senha"
        );
        return $conexao;
        
    }
    catch(PDOException $e){
        echo "ERRO!", $e->getMessage();
    }
}
}
?>