<?php
   include_once("templates/header.php")
?>

<div class="container">
<?php include_once("templates/backbtn.html")?>
    <h1 id="main-title">Adicionando</h1>
    <form action="config/process.php" id="create-form" method="POST">
        <input type="hidden" name="type" value="create"> 
        <div class="form-group">
            <label for="name">Responsável:</label>
            <!-- <input  
                id="name"
                name="nome"
                type="text" 
                class="form-control" 
                placeholder="Digite seu nome" 
                required
            > -->
            <select name="nome" class="form-control">
                <option value="LP Engenharia">LP Engenharia</option>
                <option value="Tauros">Tauros</option>
                <option value="Seb App">Seb App</option>
            </select>
        </div>
        <div class="form-group">
            <label 
                for="phone">Descrição
            </label>
            <input 
                type="text" 
                class="form-control"
                name="descricao" 
                id="phone" 
                placeholder="Descrição do pagamento ou gasto" 
                required>
        </div>
        <div class="form-group">
        <input 
                type="number" 
                class="form-control"
                name="valor"
                placeholder="R$ 0,00" 
                required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>