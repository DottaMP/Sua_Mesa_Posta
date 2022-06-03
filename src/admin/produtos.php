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


    .btn00 {
        height: 40px;
        width: 30%;
        outline: none;
        border: none;
        background: rgb(248, 26, 92);
        color: white;
        border-radius: 60px;
        font-weight: 700;
        font-family: 'Bitter', serif;
        cursor: pointer;
    }

    .btn00:hover {
        background-color: rgb(187, 10, 63);
        transition: 0.5s;
    }

    .btn1 {
        height: 40px;
        width: 30%;
        outline: none;
        border: none;
        border: solid 1px rgb(248, 26, 92);
        background: #FFF;
        color: rgb(248, 26, 92);
        border-radius: 60px;
        font-weight: 700;
        font-family: 'Bitter', serif;
        cursor: pointer;
    }

    .btn1:hover {
        background-color: rgb(250, 125, 125);
        transition: 0.5s;
        color: #fff;
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
                                    <form method="post" action="produtos.php">
                                        <div class="form-group">
                                            <label for="codigo">Código</label>
                                            <input class="form-control" type="text" name="codigo" id="codigo" placeholder="Código do Produto">
                                        </div>
                                        <div class="form-group">
                                            <label for="titulo">Título</label>
                                            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título">
                                        </div>

                                        <div class="form-group">
                                            <label for="descritivo">Detalhe</label>
                                            <input class="form-control desc" type="text" name="descritivo" id="descritivo" placeholder="Detalhe">
                                        </div>

                                        <div class="form-group">
                                            <label for="especificacao">Especificação Técnica</label>
                                            <input class="form-control desc" type="text" name="especificacao" id="especificacao" placeholder="Especificação Técnica">
                                        </div>

                                        <div class="form-group">
                                            <label for="valor">Valor</label>
                                            <input class="form-control" type="number" name="valor" id="valor" step="0.01" placeholder="R$ 00.00">
                                        </div>

                                        <div class="form-group">
                                            <label for="valor">Quantidade</label>
                                            <input class="form-control" type="number" name="qtd" id="qtd" placeholder="Quantidade">
                                        </div>

                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="submit" class="btn btn-primary mr-3" name="b1">Inserir</button>
                                            <button type="submit" class="btn btn-primary mr-3" name="b2">Pesquisar</button>
                                            <button type="submit" class="btn btn-primary mr-3" name="b3">Alterar</button>
                                            <button type="submit" class="btn btn-primary mr-3" name="b4">Remover</button>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="button" class="btn btn-primary mr-3" name="b5">
                                            <a class="text-white" href="lista.php" target="_top">Listar Produtos</a></button>
                                        </div>
                                    </form>
                                    <?php 
                                        if (isset($_POST["b1"])) inserir ();
                                        if (isset($_POST["b2"])) pesquisar ($_POST["codigo"]); //o parametro da pesquisa será o campo código
                                        if (isset($_POST["b3"])) alterar ();
                                        if (isset($_POST["b4"])) remover ();   
                                        if (isset($_GET["codigo"])) pesquisar ($_GET ["codigo"],); //parametro de função GET               
                                    ?>
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
    function inserir(){
        $titulo = $_POST["titulo"];
        $descritivo = $_POST["descritivo"];
        $especificacao = $_POST["especificacao"];
        $valor = $_POST["valor"];
        $qtd = $_POST["qtd"];

        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        $sql = "insert into produto (titulo, descritivo, especificacao, valor, qtd) 
            values ('$titulo', '$descritivo', '$especificacao', '$valor', '$qtd')"; 
        
        if(mysqli_query($conexao, $sql)){
            echo "<br><h4>Registro inserido com sucesso!</h4>";
        } else{
            echo "<br><h4>Ocorreu um erro, tente mais tarde!</h4>";
        }

        mysqli_close($conexao);
    
    }

    function pesquisar($codigo){

        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        $sql = "select * from produto where codigo='$codigo'";

        $resultado = mysqli_query($conexao, $sql);

        if($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $descritivo = $reg["descritivo"];
            $especificacao = $_POST["especificacao"];
            $valor = $reg["valor"];
            $qtd = $reg["qtd"];

            echo "<script lang='javascript'>";
            echo "codigo.value='$codigo';";
            echo "titulo.value='$titulo';";
            echo "descritivo.value='$descritivo';";
            echo "especificacao.value='$especificacao';";
            echo "valor.value='$valor';";
            echo "qtd.value='$qtd';";
            echo "</script>";

        }else{ 
            echo "<br><h4>Registro não encontrado!</h4>";
        }
        mysqli_close($conexao);
    }

    function alterar(){
        $codigo = $_POST["codigo"];
        $titulo = $_POST["titulo"];
        $descritivo = $_POST["descritivo"];
        $especificacao = $_POST["especificacao"];
        $valor = $_POST["valor"];
        $qtd = $_POST["qtd"];

        $conexao = new mysqli("localhost", "root", "root", "bdsite");

        $sql = "update produto set titulo='$titulo', descritivo='$descritivo', especificacao='$especificacao', 
        valor='$valor', qtd='$qtd' where codigo='$codigo'";
        
        mysqli_query($conexao, $sql); 
        mysqli_close($conexao); 
        
        echo "<br><h4>Registro alterado com sucesso!</h4>";
    }

    function remover(){
        $codigo = $_POST["codigo"];
        $conexao = new mysqli("localhost", "root", "root", "bdsite");
        $sql = "delete from produto where codigo='$codigo'";
        
        mysqli_query($conexao, $sql); 
        mysqli_close($conexao);
    
        echo "<br><h4>Registro removido com sucesso!</h4>";

    }
?>
<?php ob_end_flush(); ?>