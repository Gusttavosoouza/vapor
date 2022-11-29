<?php

require('./modulos/top-menu.php');

$query_suporte_vapor = "SELECT * FROM suporte_vapor";
$suportes= mysqli_query($conn, $query_suporte_vapor);

?>
<?php if ($suportes->num_rows ==0 ){ ?>
    <h1 id="mensagem-contato">Não há mensagem no momento!</h1>
    <?php } else { ?>
<div id="content-container">
    <div id="button-container">
        <a href="suporte.php"></a>
    </div>
    <div id="list-container">
        <table>
            <tr>
                
                <th class="center">Nome</th>
                <th class="center">Assunto</th>
                <th class="center">Visualizar</th>
                <th class="center">Arquivar</th>

            </tr>

            <?php while ($suporte = mysqli_fetch_array($suportes)) { ?>

                <tr>
                    <td><?= $suporte['nome'] ?></td>
                    <td><?= $suporte['assunto'] ?></td>
                    <td class="center"><a href="vizualizar-mensagem.php?id=<?= $suporte['id' ] ?>">Visualizar</a></td>
                    <td class="center"><a href="arquivar.php?id=<?= $suporte['id'] ?>">Arquivar</a></td>
                </tr>

            <?php } ?>
            

        </table>
    </div>
</div>
<?php } ?>
<?php require('./modulos/footer.php') ?>