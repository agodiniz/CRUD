<?php

$mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

    $resultados = '';
    foreach($tarefas as $tarefa){
        $resultados .= '<tr>
                            <td>'.$tarefa->id.'</td>
                            <td>'.$tarefa->tarefa.'</td>
                            <td>'.$tarefa->descricao.'</td>
                            <td><span class="badge badge-info">'.($tarefa->pendente == 's' ? 'Pendente' : 'Concluída').'</span></td>
                            <td>'.$tarefa->organizacao.'</td>
                            <td>'.$tarefa->usuario.'</td>
                            <td>'.date('d/m/Y à\s H:i:s',strtotime($tarefa->data)).'</td>
                            <td>
                            <a href="editar.php?id='.$tarefa->id.'" style="text-decoration:none;">
                            <button type="button" class="btn"><i class="bi bi-pencil-square" style="color: #6f67d6;"></i></button>
                            </a>

                            <a href="excluir.php?id='.$tarefa->id.'" style="text-decoration:none;>
                            <button type="button" class="btn"><i class="bi bi-trash" style="color: red;"></i></button>
                            </a>
                        
                            </td>
                        </tr>';
                           
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma Tarefa foi criada
                                                       </td>
                                                    </tr>';

?>

<main>

<?=$mensagem?>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success"><i class="bi bi-plus" style="margin: 0 5px 0 0;"></i>Criar tarefa</button>
        </a>
    </section>

    <section class="mt-5">

    <table class="table" style="background-color:#fff; border-radius:10px 10px 0 0;">
    
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