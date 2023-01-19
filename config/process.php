
<?php
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // MODIFICAÇÕES NO BANCO
    if (!empty($data)) {
        
        //Criar contato
        if ($data["type"] === "create") {
            $txt_nome        = $data["nome"];
            $txt_desc        = $data["descricao"];
            $txt_valor       = $data["valor"];

            $query = " INSERT INTO financeiro (nome, descricao, valor)
                       VALUES(:nome, :descricao, :valor)
                    ";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":nome", $txt_nome);
            $stmt->bindParam(":descricao", $txt_desc);
            $stmt->bindParam(":valor", $txt_valor);

            try {
    
                $stmt->execute();
            } catch (PDOException $e) {
                 //erro de conexão
                 $error = $e->getMessage();
                 echo "Erro: $error";
            }
        
        }elseif($data["type"] === "delete") {
            $id = $data["id"];
            $query = "DELETE FROM financeiro WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam("id", $id);

            try {
    
                $stmt->execute();
            } catch (PDOException $e) {
                 //erro de conexão
                 $error = $e->getMessage();
                 echo "Erro: $error";
            }
        }elseif($data["type"] === "edit") {

            $id = $data["id"];
            $txt_nome         = $data["nome"];
            $txt_desc         = $data["descricao"];
            $txt_valor        = $data["valor"];

            $query = "UPDATE financeiro SET nome=:nome, descricao=:descricao, valor=:valor WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam("id", $id);
            $stmt->bindParam(":nome", $txt_nome);
            $stmt->bindParam(":descricao", $txt_desc);
            $stmt->bindParam(":valor", $txt_valor);

            try {
                $stmt->execute();
            } catch (PDOException $e) {
                 //erro de conexão
                 $error = $e->getMessage();
                 echo "Erro: $error";
            }
        }
        header("Location: " . $BASE_URL . "../index.php");
    }
    // SELEÇÃO DE DADOS 
    else {
        $id;   
        if (!empty($_GET)) {
            $id = $_GET["id"];
        }
            //Retorna o dado de um contato
            if (!empty($id)) {
                $query = "SELECT * FROM financeiro WHERE id = :id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam("id", $id);
                $stmt->execute();
                $show = $stmt->fetch();
            }else{
                //Retorna todos os contatos
                $shows = [];
                $query = "SELECT * FROM financeiro";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $shows = $stmt->fetchAll();
            }
    }
    //FECHAR CONEXÃO
    $conn = null;