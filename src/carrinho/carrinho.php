<?php ob_start(); ?>
<?php session_start();?>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Bitter', serif;
}

:root {
    --primary: rgb(248, 26, 92);
    --secondary: rgb(248, 26, 92);
    --dark: rgb(248, 26, 92);
    --light: #ffffff;
}

body {
    font-family: montserrat, sans-serif;
    width: 100%;
    min-height: 100vh;
}

.card {
    margin: 6px auto 0;
    width: 500px;
    height: 500px;
    perspective: 1000px;
    position: relative;
    min-height: 1px;
}

.card__face {
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0px 3px 18px 3px rgba(0, 0, 0, 0.2);
}
    
.produto {
    max-width: 100%;
    width: 55px;
    height: 55px;
    object-fit: cover;
    border: 2px solid red;
    border-radius: 15px 50px 30px
}

tr{
    font-size: 12px;
}

td{
    font-size: 20px;
}

.titulo {
    font-weight: 700;
    font-family: 'Bitter', serif;
}

.linha {
    background: pink;
}

.btn00 {
    height: 40px;
    width: 15%;
    outline: none;
    border: none;
    background: rgb(248, 26, 92);
    color: white;
    font-size: 12px;
    border-radius: 60px;
    font-weight: 700;
    font-family: 'Bitter', serif;
    cursor: pointer;
}

.btn00:hover {
    background-color: rgb(187, 10, 63);
    transition: 0.5s;
}

.btn01 {
    height: 40px;
    width: 30%;
    outline: none;
    border: none;
    font-size: 12px;
    background: rgb(18, 159, 41);
    color: white;
    border-radius: 60px;
    font-weight: 700;
    font-family: 'Bitter', serif;
    cursor: pointer;
}

.btn01:hover {
    background-color: rgb(0, 115, 19);
    transition: 0.5s;
}


.fa-plus-circle {
    cursor: pointer;
    padding-right: 5px;
    color: green;
}

.fa-plus-circle:hover {
    color: rgb(129, 246, 116);
    transition: 0.5s;
}

.fa-times-circle {
    cursor: pointer;
    padding-right: 5px;
    color: red;
}

.fa-times-circle:hover {
    color: rgb(250, 125, 125);
    transition: 0.5s;
}

</style>
<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;600&family=Lobster&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Loja Virtual!</title>
</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->
    <div class="container py-5">
        <div class="col-lg-12">
            <div class="row d-flex align-items-center">

                <div class="col-lg-12 mt-2 p-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="card-fluid center">
                            <div class="card__face">
                                <div class="card__header">
                                    <h2 class="text-center p-3 titulo">Carrinho</h2>
                                </div>
                                <div class="d-flex justify-content-start mt-4">
                                    <button type="submit" class="btn00 ml-3"><a class="text-white"
                                                href="esvaziar.php?codigo=$codigo" target="_top">Esvaziar</a></button>
                                </div>
                                <div class="card__body">
                                    <div class="col-lg-12">

                                        <table class="text-center table table-hover mt-3">
                                            <thead>
                                                <tr class="linha">
                                                <th scope="col">#</th>
                                                <th scope="col">##</th>
                                                <th scope="col">Título</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col">Quantidade</th>
                                                <th scope="col">Total Item</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <?php listarCesta(); ?>
                                        </table>  
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="submit" class="btn01 ml-5 m-5"><a class="text-white"
                                                        href="finalizarPedido.php?codigo=$codigo" target="_top">Finalizar</a></button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <?php include("../footer/footer.php"); ?>
    <!--/FOOTER-->

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>

<?php 
    function listarCesta(){
        $sessionId = session_id();

        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        $sql = "select p.codigo, p.titulo, c.qtd, p.valor, p.valor*c.qtd as total from 
        produto p inner join cesta c on p.codigo=c.codigoProduto where c.sessionId='$sessionId' order by p.titulo";
        $totalPedido = 0;
        $resultado = mysqli_query($conexao, $sql);

        while($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $valor = $reg["valor"];
            $qtd = $reg["qtd"];
            $total  = $reg["total"];
            echo "<div class='container justify-content d-flex '>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <tr class='align-self-center'>
                            <th>$codigo</th>
                            <th><img src='../../assets/img/$codigo.jpg' class='img-fluid produto'></th>
                            <th>$titulo</th>
                            <th>R$ $valor</th>
                            <th>$qtd</th>
                            <th>R$ $total</th>
                            <th><a href='diminuir.php?codigo=$codigo'><i class='fa fa-minus-circle' aria-hidden='true'></i></a></th>
                            <th><a href='adicionar.php?codigo=$codigo'><i class='fa fa-plus-circle' aria-hidden='true'></i></a></th>
                            <th><a href='remover.php?codigo=$codigo'><i class='fa fa-times-circle' aria-hidden='true'></i></a></th>
                            </tr>
                        </div>
                    </div>
                </div>";
            $totalPedido = $totalPedido + $total;
        }
        mysqli_close($conexao);
        echo "<tr class='align-self-center'>
                <tr><td colspan='9'><b>Total Pedido: R$ $totalPedido</b></td></tr>
            </tr>";
    }
?>
<?php ob_end_flush(); ?>