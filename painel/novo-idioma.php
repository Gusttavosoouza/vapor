<?php 
    require('./modulos/top-menu.php'); 
    $error = $_GET['error'] ?? null;
?>

<div id="content-container">
    <form action="cadastrar-idioma.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="idiom">Idioma</label>
                <input onclick="removeMessagErrorIdioma()" name="idiom" id="idiom" class="row-input" type="text">
            </div>
        </div>

        <?php if($error != null) { ?>
            <div id="erro-idioma" class="row error-message"><?=$error?></div>
        <?php } ?>

        <div class="row row-button">
            <button class="button-default" type="submit">Salvar</button>
        </div>
    </form>
</div>

<?php require('./modulos/footer.php') ?>