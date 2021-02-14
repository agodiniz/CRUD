<?php

    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Cadastrar vaga');
    define('BTN','Criar Tarefa');
    

    use \App\Entity\Tarefa;
    $obTarefa = new Tarefa;
    

    // Validando tarefas e instanciando
    if(isset($_POST['tarefa'],$_POST['descricao'],$_POST['pendente'],$_POST['organizacao'],$_POST['usuario'])){
        
        $obTarefa->tarefa = $_POST['tarefa'];
        $obTarefa->descricao = $_POST['descricao'];
        $obTarefa->pendente = $_POST['pendente'];
        $obTarefa->organizacao = $_POST['organizacao'];
        $obTarefa->usuario = $_POST['usuario'];
        $obTarefa->cadastrar();

        header('location: index.php?status=success');
        exit;
    }


    include __DIR__.'/includes/header.php';
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';
