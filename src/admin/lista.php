<?php ob_start(); ?>
<?php        
    session_start();
    if (isset($_SESSION["codigo"])==false){
        header("location: ../login/login.php"); //se não estiver logado voltar para a página de login
    }
?>
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

    .card__body {
        padding: 30px;
        font-weight: bold;
    }

    .card__body h3 {
        color: var(--dark);
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .card__body p {
        color: var(--dark);
        font-size: 18px;
        line-height: 1.4;
    }

    .card__header {
        position: relative;
        padding: 30px 30px 40px;
        font-family: 'Bitter', serif;
        text-transform: uppercase;
    }

    .card__header h2 {
        color: #FFF;
        font-size: 25px;
        font-weight: 900;
        text-transform: uppercase;
        text-align: center;
    }

    .card__header:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: linear-gradient(to bottom left, var(--primary) 10%, var(--secondary) 115%);
        z-index: -1;
        border-radius: 0px 0px 50% 0px;
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
                                    <h2 class="text-center">Produtos</h2>
                                </div>
                                <div class="card__body">
                                    <div class="col-lg-12">

                                        <form method="post" action="lista.php">
                                            <!--não esquecer de informar o método e a action-->
                                            <div class="form-floating mt-3 mb-3">
                                                <div class="col-sm-6 text-end">
                                                    <input type="text" class="form-control" id="busca" name="busca" placeholder="busca">
                                                    <button type="submit" class="btn btn-primary mt-2" name="btnBusca">Pesquisar</button>
                                                </div>
                                            </div>
                                        </form>

                                        <table class="text-center table table-hover mt-3">
                                            <thead>
                                                <tr class="table-info">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Imagem</th>
                                                    <th scope="col">Título</th>
                                                    <th scope="col">Descritivo</th>
                                                    <th scope="col">Especiaifcações Técnicas</th>
                                                    <th scope="col">Valor</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <?php listar(); ?>
                                        </table>

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
    function listar(){
        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        if(isset ($_POST["btnBusca"])){ 
            $busca = $_POST["busca"];
            $sql = "select * from produto where titulo like '%$busca%' or descritivo like '%$busca%' ";
        } else{ 
            $sql = "select * from produto order by codigo";
        }

        $resultado = mysqli_query($conexao, $sql);

        while($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $descritivo = $reg["descritivo"];
            $especificacao = $reg["especificacao"];
            $valor = $reg["valor"];
            $qtd = $reg["qtd"];

            echo "<tr class='align-self-center'>
                    <th>$codigo</th>
                    <th><img src='../../assets/img/$codigo.jpg' class='img-fluid'></th>
                    <th>$titulo</th>
                    <th>$descritivo</th>
                    <th>$especificacao</th>
                    <th>$valor</th>
                    <th>$qtd</th>
                    <th><a href='produtos.php?codigo=$codigo'>editar</a></th>
                </tr>";
        }
        mysqli_close($conexao);
    }
?>