<?php      
    $con = mysqli_connect("localhost", "root", "", "sistemaCadastro");
      // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    //mysqli_query($con, "INSERT INTO produtos (ID,PRODUTO,QUANTIDADE,PRECO)  VALUES ('','CELULAR','15','1500.99')");
    //mysqli_query($con, "UPDATE teste SET NOME ='Uns' WHERE ID= '1' ");
    //mysqli_query($con, "DELETE FROM teste WHERE ID = '1' ");

    $result10  =  mysqli_query($con, "SELECT * FROM produtos");

    // while ($linha = mysqli_fetch_array($result10)) {
    //     $PRODUTO     = $linha["PRODUTO"];
    //     echo $PRODUTO;
    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Cadastro</title>
</head>
<body>
    <nav class='blue lighten-3'>
        <div class="container nav-wrapper">
        <a href="#" class="brand-logo">SistemaCadastro</a>
            <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul> -->
        </div>
    </nav>

    <?php 
            if (!isset($_POST["botao"])) {
                $_POST["botao"] = "";
            }
            $botao = $_POST["botao"];
            if ($botao != ""){
                include "./$botao";
            } else {   
    ?>
    <h4 class='center'>Produtos Cadastrados</h4><br>
    <div class='container center'>
        <form action="" method='post'>
            <button name='botao' value='cadastrar.php' type='submit' class='button button1'>Cadastrar Novo Produto</button>
        </form>
    </div><br><br>
    <div class="container grey lighten-4">
        <table>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Apagar</th>
            </tr>

            <?php
                while ($row = mysqli_fetch_array($result10)) {
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['PRODUTO'] . "</td>";
                    echo "<td>" . $row['QUANTIDADE'] . "</td>";
                    echo "<td>" . $row['PRECO'] . "</td>";
                    echo "<td><a href='delete.php?id=".$row['ID']."'>Apagar</a></td>";
                    echo "</tr>";
                }
            ?>

        </table>
    </div>
    <?php 
        }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>



    <footer class="page-footer blue lighten-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer bem Top</h5>
                    <p class="grey-text text-lighten-4">Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text
            </div>
        </div>
    </footer>

        
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

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
</html>