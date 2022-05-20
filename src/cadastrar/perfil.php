<?php ob_start(); ?>
<?php
    session_start();
    //para autenticar a página, 
    if (isset($_SESSION["codigo"])==false){
        header("location: ../login/login.php"); //se não estiver logado voltar para a página de login
    }

?>
<style>
    i {
        font-size: 14px;
        color: gray;
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
    <link rel="stylesheet" href="./cadastrar.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Loja Virtual!</title>
</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->
    <div class="container py-2">
        <div class="col-md-12">
            <div class="row d-flex align-items-center">

                <div class="col-md-12 mt-2 p-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="card-fluid center">
                            <div class="card__face">
                                <div class="card__header">
                                    <h2 class="text-center">Meus Dados</h2>
                                </div>
                                <div class="card__body">
                                    <form> <!--parametro via get ?enviar=1"-->
                                        <div class="form-group">
                                            <label for="nome">Nome: 
                                                <i><?php if(isset($_SESSION["nome"])) echo $_SESSION["nome"];?></i>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="sobrenome">Sobrenome: 
                                                <i><?php if(isset($_SESSION["sobrenome"])) echo $_SESSION["sobrenome"];?></i>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">E-mail: 
                                                <i><?php if(isset($_SESSION["email"])) echo $_SESSION["email"];?></i>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpfc">CPF: 
                                                <i><?php if(isset($_SESSION["cpfc"])) echo $_SESSION["cpfc"];?></i>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefone">Telefone: 
                                                <i><?php if(isset($_SESSION["telefone"])) echo $_SESSION["telefone"];?></i>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button id="bt1" type="button" class="btn btn-danger"><a class="text-white"
                                                    href="../cadastrar/alterar_cadastro.php" target="_top">Editar Cadastro</button>
                                        </div>
                                    </form>
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
<?php ob_end_flush(); ?>