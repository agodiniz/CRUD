<main>
    <section>
        <a href="index.php">
            <button class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i>Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Criar nova tarefa</h2>

    <form method="post">

    <div class="form-group mt-3">
    <label class="form-label">Tarefa</label>
    <input type="text" class="form-control" name="tarefa" placeholder="Nome da tarefa">
    </div>

    <div class="form-goup mt-3">
    <label class="form-label">Descrição</label>
    <textarea class="form-control" name="descricao" placeholder="Descreva sua tarefa" rows="5"></textarea>
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Status:</label>
    <div class="form-check form-check-inline">
    <label>
    <input type="radio" name="pendente" value="pendente" checked> Pendente
    </label>
    </div>

    <div class="form-check form-check-inline">
    <label>
    <input type="radio" name="progresso" value="progresso"> Em progresso
    </label>
    </div>

    <div class="form-check form-check-inline">
    <label>
    <input type="radio" name="concluida" value="concluida"> Concluída
    </label>
    </div>
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Organização</label>
    <input type="text" class="form-control" name="organizacao" placeholder="Digite o nome da Empresa">
    </div>

    <div class="form-group mt-3">
    <label class="form-label">Usuário</label>
    <input type="text" class="form-control" name="usuario" placeholder="Para quem você deseja atribuir essa tarefa?">
    </div>

    <div class="form-group mt-3">
    <button type="submit" class="btn btn-success">Criar tarefa</button>
    </div>



    </form>

</main>