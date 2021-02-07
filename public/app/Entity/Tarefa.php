<?php

namespace App\Entity;

use \App\Db\Database;
use PDO;

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
        $obDatabase = new Database('tarefas');
        $this->id = $obDatabase->insert([
            'tarefa' => $this->tarefa,
            'descricao' => $this->descricao,
            'status' => $this->pendente,
            'organizacao' => $this->organizacao,
            'usuario' => $this->usuario,
            'data' => $this->data
        ]);

        //retornar sucesso
        return true;

    }

    //METODO RESPONSAVEL POR OBTER AS VAGAS NO BANCO
    public static function getTarefas($where = null, $order = null, $limit = null){
        return (new Database('tarefas'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
}