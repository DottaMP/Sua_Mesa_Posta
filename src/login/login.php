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
    <link rel="stylesheet" href="./login.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Login | Sua Mesa Posta</title>

</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <div class="container py-5">
        <div class="col-md-12 py-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 mt-5 mb-5 p-5">
                    <img class="img-fluid animationLeft" src="../../assets/img/Online shopping-pana.png"
                        alt="Imagem">
                </div>

                <div class="col-md-4 mb-5">
                    <div class="row d-flex justify-content-center">

                        <div class="card center">
                            <div id="flip-card">
                                <div class="card__face">
                                    <div class="card__header">
                                        <h2 class="text-center">Entrar</h2>
                                    </div>
                                    <div class="card__body">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" name="email" id="email"
                                                onkeyup="validaEmail()" placeholder="Seu email">
                                            <div id="txtEmail"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="senha">Senha</label>
                                            <input class="form-control" type="password" name="senha" id="senha"
                                                onkeyup="validaSenha()" placeholder="Sua senha">
                                            <div id="txtSenha"></div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4 mb-3">
                                            <button class="btn1" type="submit">Entrar</button>
                                        </div>
                                        <p class="text-center text-danger"><a class="tm" id="flip-card-back">Esqueci minha
                                                senha</a></p>
                                        <hr class="mb-3">
                                        <p class="text-center">Não tem uma conta? </br><a
                                                href="../cadastrar/cadastrar.php" target="_top">Cadastre-se</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="card__face card__face--back">
                                    <div class="card__content">

                                        <div class="card__header">
                                            <h2>Recupere sua senha</h2>
                                        </div>
                                        <div class="card__body">
                                            <div class="form-group">
                                                <label for="emailLogin" class="mt-3 mb-3">Email</label>
                                                <input class="form-control" type="email" name="emailLogin"
                                                    id="emailLogin" onkeyup="validaLogin()" placeholder="Seu email">
                                                <div id="txtEmailLogin"></div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn2 mt-5 mb-5 mr-5"
                                                    id="flip-card-front">Cancelar</button>
                                                <button type="submit" class="btn1 mt-5 mb-5"
                                                    onclick="enviarEsqueciSenha()">Enviar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 mt-5 mb-5 p-5">
                    <img class="img-fluid animationRight" src="../../assets/img/login2.png" alt="Imagem">
                </div>

            </div>
        </div>
    </div>

    <!--FOOTER-->
    <?php include("../footer/footer.php"); ?>
    <!--/FOOTER-->

    <!--add o script do js-->
    <script src="./login.js"></script>

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