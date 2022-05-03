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
    <link rel="stylesheet" href="./cadastrar.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Loja Virtual!</title>
</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <div class="container py-5">
        <div class="col-md-12">
            <div class="row d-flex align-items-center">

                <div class="col-md-6 mt-2 p-5 ">
                    <div class="row d-flex justify-content-center">

                        <div class="card-fluid center">
                            <div class="card__face">
                                <div class="card__header">
                                    <h2 class="text-center">Cadastro</h2>
                                </div>

                                <div class="card__body">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input class="form-control" type="text" name="nome" id="nome"
                                            onkeyup="validaNome()" required placeholder="Seu nome">
                                        <div id="txtNome"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email"
                                            onkeyup="validaEmail()" required placeholder="Seu email">
                                        <div id="txtEmail"></div>
                                    </div>

                                    <div class="row d-flex">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="senha">Senha</label>
                                                <input class="form-control" type="password" name="senha" id="senha"
                                                    onkeyup="validaSenha()" required placeholder="Sua senha">
                                                <div id="txtSenha"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="confirmSenha">Confirmar Senha</label>
                                                <input class="form-control" type="password" name="confirSenha"
                                                    id="confirSenha" onkeyup="validaConfirmaSenha()" required
                                                    placeholder="Confirme sua senha">
                                                <div id="txtConfirSenha"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="cpfc">CPF</label>
                                        <input class="form-control" type="text" name="cpfc" id="cpfc" value=""
                                            maxlength="14"
                                            onkeyup="validarCPF()"
                                            onkeypress="formatarCPF('###.###.###-##', this);" required
                                            placeholder="Seu CPF">
                                        <div id="txtCpf"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefone">Celular</label>
                                        <input class="form-control" type="tel" name="telefone" id="telefone"
                                            maxlength="14" onkeyup="validaTelefone()"
                                            onkeypress="formatarTelefone('## #.####-####', this);" required
                                            placeholder="(99) 9.9999-9999">
                                    </div>

                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn00 mr-5"><a class="text-white"
                                                href="../login/login.php" target="_top">Cancelar</a></button>
                                        <button type="submit" class="btn1" onclick="enviar()">Cadastrar</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 mt-2 mb-5 p-5">
                    <img class="img-fluid" src="../../assets/img/cadastro.gif" alt="Imagem">
                </div>

            </div>
        </div>

    </div>

    <!--FOOTER-->
    <?php include("../footer/footer.php"); ?>
    <!--/FOOTER-->


    <!--add o script do js-->
    <script src="./cadastrar.js"></script>

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