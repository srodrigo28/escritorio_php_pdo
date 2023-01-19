<?php
    include_once("templates/header.php");
?>
    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title"><?= $show["nome"] ?></h1>
        <p class="bold">Descrição:</p>
        <p><?= $show["descricao"] ?></p>
        <p class="bold">Valor:</p>
        <p><?= $show["valor"] ?></p>

        <p class="bold">Data:</p>
        <p><?= $show["data_cad"] ?></p>
    </div>
<?php
    include_once("templates/footer.php");
?>