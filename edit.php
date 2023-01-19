<?php
   include_once("templates/header.php");
   include_once("config/process.php");
?>

<div class="container">
<?php include_once("templates/backbtn.html")?>
    <h1 id="main-title">Alterando</h1>
    <form action="config/process.php" id="edit-form" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $show["id"] ?>"> 
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" value="<?= $show["nome"] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Digite o Telefone" value="<?= $show["descricao"] ?>" required>
        </div>
        <div class="form-group">
            <label for="observations">Valor:</label>
            <input type="text" class="form-control" name="valor" id="valor" placeholder="Digite o Telefone" value="<?= $show["valor"] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>