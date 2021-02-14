<main>
    <section>
        <a href="index.php">
            <button class="btn btn-outline-secondary"><i class="bi bi-arrow-left" style="margin: 0 5px 0 0"></i>Voltar</button>
        </a>
    </section>

<div class="container-fluid card mt-3">
    <h3 class="mt-3">Excluir tarefa</h3>

    <form method="post">

    <div class="form-group mt-3">
    <p>Você deseja realmente exluir a tarefa <strong><?=$obTarefa->tarefa?></strong></p>
    
   
   </div>
    <div class="form-group mt-3 mb-3">
    <a href="index.php" style="text-decoration:none;">
            <button type="button" class="btn btn-secondary">Cancelar</button>
        </a>
    <button type="submit" name="excluir" class="btn btn-danger"><i class="bi bi-trash" style="color: white; margin:0 5px 0 0;"></i>Exluir</button></button>
    </div>



    </form>

</div>
</main>