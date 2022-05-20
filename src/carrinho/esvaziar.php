<?php
if(isset($_GET["codigo"])){
    $codigo = $_POST["codigo"];
    session_start();
    $sessionId = session_id();

    $conexao = new mysqli("localhost", "root", "root", "produto");
    $sql = "delete from cesta where sessionId='$sessionId'";

    mysqli_query($conexao, $sql); 
    mysqli_close($conexao);
    header("location:../vitrine/vitrine.php");
}
?>