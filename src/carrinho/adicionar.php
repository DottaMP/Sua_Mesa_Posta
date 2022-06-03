<?php


if(isset($_GET["codigo"])){
	$codigo = $_GET["codigo"];
	session_start();
	$sessionId = session_id();

	$conexao = new mysqli("localhost","root","root","bdsite");
	
	$sql = "select codigo from cesta where codigoProduto='$codigo' and sessionId='$sessionId'";
	$resultado = mysqli_query($conexao, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		$codigoItem = $reg["codigo"];
		$sql = "update cesta set qtd = qtd + 1 where codigo=$codigoItem";
	} else {
		$sql = "insert into cesta(codigoProduto, sessionId, qtd) values('$codigo','$sessionId','1')";
	}
	mysqli_query($conexao, $sql);
	mysqli_close($conexao);
	header("location:carrinho.php");
} else {
	echo "<h4>Codigo invalido</h4>!!";	
}

?>