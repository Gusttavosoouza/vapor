<?php
    require('./modulos/conexao.php');
$id_mensagem = $_GET['id'] ?? null;
$nome_suporte = $_POST['nome_suporte'] ?? null;
$email_suporte = $_POST['email_suporte'] ?? null;
$assunto_suporte = $_POST['assunto_suporte'] ?? null;
$texto_suporte = $_POST['texto_suporte'] ?? null;

$query_suporte_vapor="INSERT INTO suporte_vapor (nome, email, assunto, mensagem) values ('{$nome_suporte}', '{$email_suporte}', '{$assunto_suporte}', '{$texto_suporte}')";
$lista_suporte = mysqli_query($conn, $query_suporte_vapor);

$query_mensagem_arquivada="INSERT INTO mensagem_arquivada (nome, email, assunto, mensagem) values ('{$nome_suporte}', '{$email_suporte}', '{$assunto_suporte}', '{$texto_suporte}')";
$query_arquivo = mysqli_query($conn, $query_mensagem_arquivada);

header("location: suporte.php?error=Sua mensagem foi enviada com sucesso!");
?>

