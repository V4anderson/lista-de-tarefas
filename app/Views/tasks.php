<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .group-button{
            display: flex;
            justify-content:space-between;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tarefas</h2>
    <div class="group-button">
    <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar tarefa</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Tarefa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Titulo:</label>
            <input type="text" class="form-control" id="recipient-name" name="titulo">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descrição:</label>
            <textarea class="form-control" id="message-text" name="descricao"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Salvar Tarefa</button>
      </div>
    </div>
  </div>
</div>
     <!-- Fim do modal -->
    <a href="<?php echo base_url('logout'); ?>" class="btn btn-warning">Sair</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
                <td>Dev</td>
                <td>Desenvolvimento de Tasklists</td>
                <td>Pendente</td>
                <td><button class="btn btn-secondary">Finalizar</button></td>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
