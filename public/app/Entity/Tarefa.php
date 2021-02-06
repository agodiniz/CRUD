<?php

namespace App\Entity;

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


    //Metodo responsavel por cadastrar nova vaga
    public function cadastrar(){
        //definir a data
        $this->data = date('Y-m-d H:i:s');

        //inserir a tarefa no banco


        //atribuir o id da tarefa na instacia

        //retornar sucesso

    }
}