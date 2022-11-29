<?php

require('./modulos/top-menu.php');
$id_mensagem = $_GET['id'] ?? null;
$query_suporte_vapor = "SELECT * FROM suporte_vapor where id='{$id_mensagem}'";
$suportes= mysqli_fetch_array(mysqli_query($conn, $query_suporte_vapor));

?>


<div id="list-container">
        <div class="mensagem">
            <h3>Nome</h3>
            <div id="nome"  ><?=$suportes['nome']?></div>
        </div>
        <div class="mensagem">
            <h3>Email</h3>
            <div id="email"  ><?=$suportes['email']?></div>
        </div>
        <div class="mensagem">
            <h3>Assunto</h3>
            <div id="assunto"  ><?=$suportes['assunto']?></div>
        </div>
        
    
        
</div>
<div class="mensagem">
            <h3>Mensagem</h3>
            <textarea id="textmensagem" readonly name="mensagem" id="mensagem" cols="30" rows="10"><?=$suportes['mensagem']?></textarea>
        </div>
<a href="contato.php"><button id='voltar'>Voltar</button></a>

<?php require('./modulos/footer.php') ?>