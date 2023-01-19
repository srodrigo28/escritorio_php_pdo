<?php
   include_once("templates/header.php");
?>
<style>
    .container-card{
        max-width: 800px;
        margin: 0 auto;
    }
    .card-f{
    width: 256px;
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 10px;
  }
</style>
<div class="container">
    <h1 id="main-title">Controle</h1>
    <div class="container-card">
        <div class="card-f card">
            <h2>LP Engenharia</h2>
            <span>R$ 500,00</span>
        </div>
        <div class="card-f card">
            <h2>Tauros</h2>
            <span>R$ 700,00</span>
        </div>
        <div class="card-f card">
            <h2>Seb App</h2>
            <span>R$ 900,00</span>
        </div>
    </div>
    <?php if(count($shows) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($shows as $row): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $row["id"] ?></td>
                        <td scope="row"><?= $row["nome"] ?></td>
                        <td scope="row"><?= $row["descricao"] ?></td>
                        <td scope="row"><?= $row["valor"] ?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $row["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $row["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                            <form id="delete-form" action="config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há contas, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a></p>
    <?php endif; ?>
</div>
<?php
    include_once("templates/footer.php");
?>