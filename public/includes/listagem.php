<?php

    $resultados = '';
    foreach($tarefas as $tarefa){
        $resultados .= '<tr>
                            <td>'.$tarefa->id.'</td>
                            <td>'.$tarefa->tarefa.'</td>
                            <td>'.$tarefa->descricao.'</td>
                            <td>'.$tarefa->status.'</td>
                            <td>'.$tarefa->organizacao.'</td>
                            <td>'.$tarefa->usuario.'</td>
                            <td>'.$tarefa->data.'</td>';
                           
    }

?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success"><i class="bi bi-plus"></i>Criar tarefa</button>
        </a>
    </section>

    <section class="mt-5">

    <table class="table mt-3">
    
        <thead style="background-color:#b7b9f4; color:#fff;">
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Organização</th>
                <th>Usuário</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>

    </table>

    </section>


</main>