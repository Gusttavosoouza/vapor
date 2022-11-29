<?php 
    $titulo_pagina = "Suporte";
    $error = $_GET['error'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php');
       
    ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
                <div id="content-suporte">
                    <div id="header-suporte">SUPORTE</div>
                        <form class="formsuporte" action="enviar_mensagem.php" method="POST">
                            <input class="campo" name="nome_suporte" type="text" placeholder="nome" required>
                            <input class="campo" name="email_suporte" type="email" placeholder="email" required>
                            <select class="campo" name="assunto_suporte" id="Assuntos_suporte" required>
                            <option value="selecione um assunto"selected disabled="">Selecione um assunto</option>
                            <option value="sugestao">Sugestão</option>   
                            <option value="critica">Crítica</option>
                            <option value="elogio">Elogio</option>
                            <option value="duvida">Dúvida</option>
                            <option value="suporte">Suporte</option>
                            <option value="outros">Outros</option>
                            </select>
                            <textarea id="campotext" name="texto_suporte" id="" cols="30" rows="10" placeholder="digite sua mensagem" required></textarea>
                            <button id="botao">Enviar</button>
                        </form>

                        <?php if ($error != null) { ?>
                            <div class="error-message"><?= $error ?></div>
                        <?php } ?>
                    
            </div>
        </div>
    </body>
    


</html>