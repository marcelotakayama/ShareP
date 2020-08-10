<h4 class='center'>Cadastrar Produto</h4><br>
<?php
    if (!isset($_POST["prod"])) {
        $_POST["prod"] = "";
    }
    $prod = $_POST["prod"];

    if (!isset($_POST["qtd"])) {
        $_POST["qtd"] = "";
    }
    $qtd = $_POST["qtd"];

    if (!isset($_POST["prc"])) {
        $_POST["prc"] = "";
    }
    $prc = $_POST["prc"];

    mysqli_query($con, "INSERT INTO produtos (ID,PRODUTO,QUANTIDADE,PRECO)  VALUES ('','$prod','$qtd','$prc')");
?>

<div class='container'>
    <form action="index.php" method="post"> 
        <label>Produto:</label><br/>
        <input type="text" name="prod"><br/>

        <label>Quantidade:</label><br/>
        <input type="text" name="qtd"><br/>

        <label>Preço:</label><br/>
        <input type="text" name="prc"><br/>

        <button type="submit" name="botao" value='cadastrar.php' class='red'>Cadastrar</button>
        <button type="submit" name="" class='red'>Voltar</button>
    </form>
</div>