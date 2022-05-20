<?php
if(isset($_GET["codigo"])){
	$codigo = $_GET["codigo"];
	session_start();
	$sessionId = session_id();

	$conexao = new mysqli("localhost","root","root","produto");
	
	$sql = "select codigo from cesta where codigoProduto='$codigo' and sessionId='$sessionId'";
	$resultado = mysqli_query($conexao, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		$codigoItem = $reg["codigo"];
		$sql = "delete from cesta where codigo=$codigoItem";
	}
    
	mysqli_query($conexao, $sql);
	mysqli_close($conexao);
	header("location:carrinho.php");
}
?>