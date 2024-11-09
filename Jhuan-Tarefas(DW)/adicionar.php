
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar tarefas</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">
                    <h4> <b>Adicionar Tarefa</b> <i class="bi bi-clipboard-minus-fill"></i>
                        <a href="index.php" button type="button" class="btn btn-outline-danger float-end" ><b>Voltar</b></button></a>
                    </h4>
                </div>
            </div>
        </div>
        <form action="acao.php" method="POST">
            <div class="tudo float-start">

            <div class="mb-3">
                <label for="txtTarefa" class="form-label"><b>Tarefa:</b></label>
                <input type="text" class="form-control" name="txtTarefa" id="txtTarefa">
              </div>

            <div class="mb-3">
                <label for="txtFazer" class="form-label"><b>Descrição:</b></label>
                <textarea class="form-control" name="txtFazer" id="txtFazer" rows="2"></textarea>
              </div>

              <div class="form-check">
              <input type="checkbox" class="custom_checkbox01" value="Pendente" name="txtPendente" id="txtPendente">
                <label for="txtPendente" name="txtPendente"><b>Pendente</b></label>

                <input type="checkbox" class="custom_checkbox02" value="Fazendo" name="txtPendente" id="txtPendente">
                <label for="txtPendente" name="txtPendente"><b>Fazendo</b></label>

                <input type="checkbox" class="custom_checkbox03" value="Concluido" name="txtPendente" id="txtPendente">
                <label for="txtPendente" name="txtPendente"><b>Concluido</b></label> 
              </div>

                    <div class="data">
                        <label class="form-check-label" for="txtData"><b>Data:</b></label>
                        <br>
                        <input type="date"name="txtData" id="txtData" class="data">
                    </div>
                    <br>
                    <button class="btn btn-outline-success" name="create_usuario" id="create_usuario" type="submit"><b>Adicionar Tarefa</b></button>
                </div>
                <h4 class="tarefa"><b>Adicione Sua Tarefa!</b></h4> 
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>