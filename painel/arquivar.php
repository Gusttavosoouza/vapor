<?php

require('./modulos/top-menu.php');
$id_mensagem = $_GET['id'] ?? null;
$query_suporte_vapor = "DELETE FROM suporte_vapor where id='{$id_mensagem}'";
$suportes=mysqli_query($conn, $query_suporte_vapor);
header('location: contato.php')
?>
