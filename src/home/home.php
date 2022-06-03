<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php session_start();?>
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
    <link rel="stylesheet" href="./home.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>Home | Sua Mesa Posta</title>

</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <!-- 1 Imagem -->
    <section class="main py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-7 text-center mt-5">
                    <h1>Aqui a Sua Mesa Está Posta</h1>
                    <a href="../vitrine/vitrine.php" target="_top">
                        <button class="btn1 mt-3 vermais">Veja Nossas Mesas Postas</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /1 Imagem  -->

    <!--MAIS VENDIDOS-->
    <?php include("../maisVendidos/maisVendidos.php"); ?>
    <!--/MAIS VENDIDOS-->

    <!--CONTATO-->
    <?php include("../contato/contato.php"); ?>
    <!--/CONTATO-->

    <!-- SOBRE NÓS -->
    <?php include("../equipe/equipe.php"); ?>
    <!-- SOBRE NÓS -->

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
<?php ob_end_flush(); ?>