<?php
session_start();
require_once('conexao.php');

if (isset($_POST['create_usuario'])) {
    $tarefa = trim($_POST['txtTarefa']);
    $fazer = trim($_POST['txtFazer']);
    $termino =  trim($_POST['txtPendente']);
    $data = trim($_POST['txtData']);

    $sql = "INSERT INTO tarefas (tarefa, fazer, termino ,data) VALUES ('$tarefa', '$fazer', '$termino', '$data')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}

 if (isset($_POST['delete_usuario'])) {
    $tarefaId = mysqli_real_escape_string($conn, $_POST['delete_usuario']);
    $sql = "DELETE FROM tarefas WHERE id = '$tarefaId'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['message'] = "Usuário com ID {$tarefaId} excluído com sucesso!";
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = "Ops! Não foi possível excluir o usuário";
        $_SESSION['type'] = 'error';
    }

    header('Location: index.php');
    exit;
}

if (isset($_POST['edita_usuario'])) {
    $tarefaId = mysqli_real_escape_string($conn, $_POST['tarefa_id']);
    $tarefa = mysqli_real_escape_string($conn, $_POST['txtTarefa']);
    $fazer = mysqli_real_escape_string($conn, $_POST['txtFazer']);
    $termino = mysqli_real_escape_string($conn, $_POST['txtPendente']);
    $data = mysqli_real_escape_string($conn, $_POST['txtData']);

    $sql = "UPDATE tarefas SET tarefa = '{$tarefa}', fazer = '{$fazer}', termino = '{$termino}',data = '{$data}' ";
    }
    
    $sql .= " WHERE id = '{$tarefaId}'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['message'] = "Usuário {$tarefaId} atualizado com sucesso!";
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = "Não foi possível atualizar o usuário {$tarefaId}";
        $_SESSION['type'] = 'error';
    }

    header("Location: index.php");
    exit;

