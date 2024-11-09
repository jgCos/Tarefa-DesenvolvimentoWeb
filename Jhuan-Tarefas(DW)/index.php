<?php
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM tarefas";
$tarefa = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tarefa</title>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <div class="p-2 mb-2 bg-dark-subtle text-dark-emphasis">
                <h4> <i class="bi bi-list-check float-start"></i> <b class="text_tarefa">Tarefas</b>
                <a href="adicionar.php" button type="button" class="btn btn-outline-primary float-end" id="btn_adicionar"><i class="bi bi-clipboard-minus-fill"></i><b>Adicionar tarefas</b></button></a>
                </h4>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="card">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
             <tbody>
                <?php foreach ($tarefa as $tarefas): ?>
                    <tr>
                        <td><?php echo $tarefas['id']; ?></td>
                        <td><?php echo $tarefas['tarefa']; ?></td>
                        <td><?php echo $tarefas['fazer']; ?></td>
                        <td><?php echo $tarefas['termino']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tarefas['data'])); ?></td>
                        <td>
                            <a href="tarefa-edit.php?id=<?=$tarefas['id']?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <form action="acao.php" method="POST" class="d-inline">
                                <button onclick="return confirm('Tem certeza que deseja excluir?')" name="delete_usuario" type="submit" value="<?=$tarefas['id']?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
 </div>
 </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>