<?php

namespace App\Entity;

use \App\Db\Database;

class Tarefa {
    //identificador único para cada tarefa

    public $id;

    public $tarefa;

    public $descricao;

   
    //Ela pode ser pendente, progresso ou concluída
    public $pendente;

    public $organizacao;

    public $usuario;

    public $data;


    //Metodo responsavel por cadastrar nova tarefa
    public function cadastrar(){
        //definir a data
        $this->data = date('Y-m-d H:i:s');

        //inserir a tarefa no banco
        $obDatabase = new Database('ic_tarefas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;

        //atribuir o id da tarefa na instacia

        //retornar sucesso

    }
}