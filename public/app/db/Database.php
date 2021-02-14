<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{
    const HOST = 'localhost';

    const NAME = 'ic_tarefas';

    const USER = 'root';

    const PASS = '';


    //Nome da tabela a ser manipulada
    private $table;


    //Conexão com o banco
    private $connection;



    //Definir a tabela
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
          $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
          die('ERROR: '.$e->getMessage());
        }
      }


    //Metodo responsavel por execultar queries dentro do banco
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
          die('ERROR: '.$e->getMessage());
        }

    }

       //metodo responsavel por inserir dados no banco
    public function insert ($values){
        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        

        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
        

        //EXECUTA O INSERT
        $this->execute($query,array_values($values));

        //RETORNA O ID INSERIDO
        return $this->connection->lastInsertId();
    }

    //METODO RESPONSAVEL POR EXECULTAR UMA CONSULTA NO BANCO
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $where = strlen($order) ? 'ORDER BY '.$order : '';
        $where = strlen($limit) ? 'LIMIT '.$limit : '';

        //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;   
    
        //EXECULTA A QUERY
        return $this->execute($query);
    }

    
    //METODO RESPONSAVEL POR EXECUTAR ATUALIZAÇÕES NO BANCO DE DADOS

    public function update($where,$values){
       //DADOS DA QUERY
    $fields = array_keys($values);

    //MONTA A QUERY
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //EXECUTAR A QUERY
    $this->execute($query,array_values($values));

    //RETORNA SUCESSO
    return true;;
    }

    //METODO RESPONSAVEL POR EXCLUIR DADOS DO BANCO
    public function delete($where){
      //MONTA A QUERY
      $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

      //EXECUTA A QUERY
      $this->execute($query);

      //RETORNA SUCESSO
      return true;
    }

 }


   