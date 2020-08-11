<?php
$id = $_GET['id'];
$dbname = "sistemaCadastro";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM produtos WHERE ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>