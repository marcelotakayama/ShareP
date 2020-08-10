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

        <button type="submit" name="botao" value='cadastrar.php' class='button button1'>Cadastrar</button>
        <button type="submit" name="" class='button button1'>Voltar</button>
    </form>
</div>

<style>
    tr:nth-child(odd) { background-color : #f5f5f5; }
    tr:nth-child(even) { background-color : #f5f5f5; }
    tr:hover { background-color : #bdbdbd; }

    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>