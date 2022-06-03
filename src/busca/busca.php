<?php ob_start(); ?>
<!DOCTYPE html>
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

    <title>Pesquisa | Sua Mesa Posta</title>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Bitter', serif;
}

.produto {
    max-width: 100%;
    width: 295px;
    height: 195px;
    object-fit: cover;
}

.titulo {
    font-weight: 700;
    font-family: 'Bitter', serif;
}

.subtitulo{
    color: red;
    font-family: 'Bitter', serif;
    font-weight: bold;
    font-size: 16px;
}

.fa-cart-plus {
    font-size: 1.5rem;
    cursor: pointer;
    padding-right: 5px;
    color: rgb(248, 26, 92);
}

.fa-cart-plus:hover {
    color: rgb(250, 125, 125);
    transition: 0.5s;
}

.card:hover {
    box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    -webkit-box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    transition: 0.5s;
}

</style>
</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <!--CARDS-->
    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1 class="titulo">Produtos</h1>
                    <h5 class="subtitulo">Poe da Mesa</h5>
                </div>
            </div>
            <div class="row">
                <?php if (isset($_POST["busca"])) pesquisar ($_POST["busca"]); ?>
            </div>

        </div>
    </section>
    <!--/CARDS-->

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

    function pesquisar($busca){
        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        $sql = "SELECT * FROM produto WHERE titulo like '%$busca%'";

        $resultado = mysqli_query($conexao, $sql);

        while($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $descritivo = $reg["descritivo"];
            $valor = $reg["valor"];
    
            echo "<div class='col-lg-3 p-2 text-center'>
                <div class='card border-0 bg-light mb-2'>
                    <div class='card-body'>
                    <a href='../detalhe/detalhe.php?codigo=$codigo'>
                        <img src='../../assets/img/$codigo.jpg' class='img-fluid produto' alt=''></a>
                    </div>
                    <h5 class='text-center'>$titulo</h5>
                    <h6 class='text-center font-weight-light'>R$ $valor</h6>
                    <a href='../carrinho/adicionar.php?codigo=$codigo'><i class='fa fa-cart-plus mb-3' aria-hidden='true'></i></a>
                </div>
            </div>";
        }
        mysqli_close($conexao);
    }

?>
<?php ob_end_flush(); ?>