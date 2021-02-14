<?php

    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Editar vaga');
    define('BTN','Salvar vaga');

    use \App\Entity\Tarefa;

    //VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  }
    

    //CONSULTA A TAREFA
    $obTarefa = Tarefa::getTarefa($_GET['id']);
    
    //VALIDAR A TAREFA
    if(!$obTarefa instanceof Tarefa){
        header('location: index.php?status=error');
        exit;
      }


    // VALIDAÇÃO DO POST
    if(isset($_POST['tarefa'],$_POST['descricao'],$_POST['organizacao'],$_POST['usuario'])){
        
        $obTarefa->tarefa = $_POST['tarefa'];
        $obTarefa->descricao = $_POST['descricao'];
        $obTarefa->pendente = $_POST['pendente'];
        $obTarefa->organizacao = $_POST['organizacao'];
        $obTarefa->usuario = $_POST['usuario'];
        $obTarefa->atualizar();

        header('location: index.php?status=success');
        exit;
    }


    include __DIR__.'/includes/header.php';
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';
