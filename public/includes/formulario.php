<main>
    <section>
        <a href="index.php">
            <button class="btn btn-outline-secondary"><i class="bi bi-arrow-left" style="margin: 0 5px 0 0;"></i>Voltar</button>
        </a>
    </section>

<div class="container-fluid card mt-3">
    <h3 class="mt-3"><?=TITLE?></h3>

    <form method="post">

    <div class="form-group mt-3">
    <label class="form-label">Tarefa</label>
    <input type="text" class="form-control" name="tarefa" value="<?=$obTarefa->tarefa?>">
    </div>

    <div class="form-goup mt-3">
    <label class="form-label">Descrição</label>
    <textarea class="form-control" name="descricao" placeholder="Descreva sua tarefa" rows="5"><?=$obTarefa->descricao?></textarea>
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Status:</label>
    <div class="form-check form-check-inline">
    <label>
    <input type="radio" name="pendente" value="s" checked> Pendente
    </label>
    </div>

    <div class="form-check form-check-inline">
    <label>
    <input type="radio" name="pendente" value="n"> Concluída
    </label>
    </div>
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Organização</label>
    <input type="text" class="form-control" name="organizacao" value="<?=$obTarefa->organizacao?>">
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Usuário</label>
    <input type="text" class="form-control" name="usuario" value="<?=$obTarefa->usuario?>">
    </div>

    <div class="form-group mt-3 mb-3">
    <button type="submit" class="btn btn-success"><?=BTN?></button></button>
    </div>



    </form>

</div>
</main>