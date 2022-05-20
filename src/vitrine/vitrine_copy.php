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
    <link rel="stylesheet" href="./vitrine.css">

    <title>Vitrine | Sua Mesa Posta</title>

</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <!--CARDS-->
    <section class="product">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1>Produtos</h1>
                    <h5 class="h5">Poe da Mesa</h5>
                </div>
            </div>
            <div class="row">
                <!-- inicio da linha 1 de produtos -->
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="../detalhes/produto1.php">
                            <img src="../../assets/img/taça com dourado.jpg" class="img-fluid produto" alt="">
                        </a>
                        </div>
                    </div>
                    <h6>Kit de Taças</h6>
                    <p>R$ 90,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails">
                            <a href="../detalhes/produto2.php" class="btndetails"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                        </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="../detalhes/produto3.php">
                            <img src="../../assets/img/Guardanpo girassol.jpg" class="img-fluid produto" alt="">
                        </a>
                        </div>
                    </div>
                    <h6>Kit Guardanapo Girassol</h6>
                    <p>R$ 50,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails">
                            <a href="../detalhes/produto4.php" class="btndetails"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                        </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="../detalhes/produto4.php">
                            <img src="../../assets/img/Jogo de Xicara com Pires.jpg" class="img-fluid produto"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <h6>Jogo de Xicara com Pires</h6>
                    <p>R$ 100,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails">
                            <a href="../detalhes/produto4.php" class="btndetails"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                        </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <a href="../detalhes/produto4.php">
                            <img src="../../assets/img/guardanapo rosa.jpg" class="img-fluid produto" alt="">
                        </a>
                        </div>
                    </div>
                    <h6>Kit Guardanapo Rosa</h6>
                    <p>R$ 60,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails">
                            <a href="../detalhes/produto4.php" class="btndetails"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                        </button>
                    </p>
                </div>
            </div> <!-- fim da linha 1 de produtos -->
            <br>
            <div class="row">
                <!-- inicio da linha 2 de produtos -->
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/soulplast palha.JPG" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Soulplast Palha</h6>
                    <p>R$ 50,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Soulplast crochê.JPG" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Soulplast de Crochê Branco</h6>
                    <p>R$ 70,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Mesa Verde.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Jogo de Jantar Verde</h6>
                    <p>R$ 350,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Mesa Azul.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Jogo de Jantar Azul</h6>
                    <p>R$ 370,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>
            </div> <!-- fim da linha 2 de produtos -->
            <br>
            <div class="row">
                <!-- inicio da linha 3 de produtos -->
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Mesa Posta Páscoa 1_vitrine.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Mesa Posta Páscoa</h6>
                    <p>R$ 250,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Mesa Posta Páscoa Poá_vitrine.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Mesa Posta Páscoa Poá</h6>
                    <p>R$ 270,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Mesa Posta Páscoa 2_vitrine.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Conjunto completo Páscoa</h6>
                    <p>R$ 250,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="../../assets/img/Porta Guardanapo Coelho_vitrine.jpg" class="img-fluid produto" alt="">
                        </div>
                    </div>
                    <h6>Porta Guardanapo Coelho</h6>
                    <p>R$ 70,00
                    </p>
                    <p>
                        <button class="btndetails"> <i class="fa fa-cart-plus" aria-hidden="true"></i> </button>
                        <button class="btndetails"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                    </p>
                </div>
            </div> <!-- fim da linha 3 de produtos -->
            <!--ADD MAIS 2 LINHAS PARA DEIXAR A PAGE MAIS COMPLETA-->

            <br>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1">Clique Para Mais</button>
                </div>
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
<?php ob_end_flush(); ?>