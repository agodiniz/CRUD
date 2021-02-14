<?php

    require __DIR__.'/vendor/autoload.php';

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
    if(isset($_POST['excluir'])){
        
      
        $obTarefa->excluir();

        header('location: index.php?status=success');
        exit;
    }


    include __DIR__.'/includes/header.php';
    include __DIR__.'/includes/confirmar-exclusao.php';
    include __DIR__.'/includes/footer.php';
