<?php ob_start(); ?>
<?php        
    session_start();
    //para autenticar a página, 
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

.was-validated{
    color: black;
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
                                    <h2 class="text-center p-3 titulo">Finalizar Pedido</h2>
                                </div>
                                
                                <div class="card__body">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center">
                                            <div class="col-lg-6">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="fname"><i class="fa fa-user mr-2"></i>Nome Completo</label>
                                                        <input type="text" class="form-control" id="fname" name="nome"
                                                        style="text-transform:uppercase" placeholder="Informe o nome" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cpfc"><i class="fa fa-id-card-o mr-2"></i> CPF</label>
                                                        <input type="text" class="form-control" id="cpfc" name="cpfc" maxlength="14"
                                                            onkeypress="formatarCPF('###.###.###-##', this);" 
                                                            style="text-transform:uppercase" placeholder="Seu CPF">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="adr"><i class="fa fa-address-card-o mr-2"></i> Endereço de entrega</label>
                                                        <input type="text" class="form-control" id="adr" name="address"
                                                        style="text-transform:uppercase" placeholder="Rua examplo, 1000" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city"><i class="fa fa-institution mr-2"></i> Cidade</label>
                                                        <input type="text" class="form-control" id="city" name="city" style="text-transform:uppercase" placeholder="São Paulo" >
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="uf" class="mr-2">Estado</label>
                                                                <input type="text" class="form-control" id="uf" name="uf" style="text-transform:uppercase" placeholder="SP" size=2 required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="zip" class="text-center">CEP</label>
                                                                <input type="text" class="form-control" id="cep" name="cep" size=“10” maxlength=“8” 
                                                                style="text-transform:uppercase" placeholder="09900000" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="fname" class="font-weight-bold"><i class="fa fa-money mr-2"></i>Escolha a forma de pagamento</label>
                                                <form class="was-validated">
                                                    <div class="custom-control mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required checked>
                                                        <label class="custom-control-label text-dark fa fa-exchange" for="customControlValidation1">Pix</label>
                                                        <div class="invalid-feedback text-dark">
                                                            <div class="form-group">
                                                                <label for="cname">Copie e Cole</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" disabled placeholder="Pix Copie e Cole" aria-describedby="button-addon2">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-success" type="button" id="button-addon2">Copie Aqui</button>
                                                                    </div>
                                                                </div>
                                                                <small class="text-muted">Realize o pagamento e finalize sua compra</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
      
                                                <form class="was-validated">
                                                    <div class="custom-control mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation2" required checked>
                                                        <label class="custom-control-label text-dark fa-barcode" for="customControlValidation2">Boleto</label>
                                                        <div class="invalid-feedback text-dark">
                                                            <div class="form-group">
                                                                <label for="cname">Será enviado para o email informado</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" disabled placeholder="Enviar por email" aria-describedby="button-addon2">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-success" type="button" id="button-addon2">Enviar</button>
                                                                    </div>
                                                                </div>
                                                                <small class="text-muted">Realize o pagamento e finalize sua compra</small>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </form>

                                                <form class="was-validated">
                                                    <div class="custom-control text-danger mb-3 ">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation3" required checked>
                                                        <label class="custom-control-label text-dark fa fa-credit-card-alt" for="customControlValidation3">Cartão de Crédito</label>
                                                        <div class="invalid-feedback text-dark">
                                                            <div class="form-group">
                                                                <label for="cname">Preencha os dados</label>
                                                                <div class="icon-container form-control">
                                                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cname">Nome conforme cartão</label>
                                                                <input type="text" class="form-control" id="cname" name="cardname" style="text-transform:uppercase" placeholder="Informe o nome impresso no cartão">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ccnum">Número do cartão</label>
                                                                <input type="text" class="form-control" id="ccnum" name="cardnumber" style="text-transform:uppercase" placeholder="1111-2222-3333-4444">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="expmonth">Mês de vencimento</label>
                                                                <input type="text" class="form-control" id="expmonth" name="expmonth" style="text-transform:uppercase" placeholder="01">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="expyear">Ano de vencimento</label>
                                                                        <input type="text" class="form-control" id="expyear" name="expyear" style="text-transform:uppercase" placeholder="2022">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="cvv">CVV</label>
                                                                        <input type="text" class="form-control" id="cvv" name="cvv" style="text-transform:uppercase" placeholder="352">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <table class="text-center table table-hover mt-3">
                                            <h5 class="text-center mt-3">Resumo da compra</h5>
                                            <thead>
                                                <tr class="linha">
                                                <th scope="col">##</th>
                                                <th scope="col">Título</th>
                                                <th scope="col">Quantidade</th>
                                                <th scope="col">Sub Total</th>
                                                </tr>
                                            </thead>
                                            <?php listarCesta(); ?>
                                        </table>  
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn01 ml-5 m-3" onclick="validar()"><a class="text-white"
                                                        href="../carrinho/esvaziar.php?codigo=$codigo" target="_top">Finalizar</a></button>
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
<script lang="javascript">

function validar() {
        alert("Confirmação de compra enviada por e-mail!");
        window.location.href = "../home/home.php";
}
</script>

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
            $qtd = $reg["qtd"];
            $total  = $reg["total"];
            echo "<tr class='align-self-center'>
                    <th><img src='../../assets/img/$codigo.jpg' class='img-fluid produto'></th>
                    <th>$titulo</th>
                    <th>$qtd</th>
                    <th>R$ $total</th>
                </tr>";
            $totalPedido = $totalPedido + $total;
        }
        mysqli_close($conexao);
        echo "<tr class='align-self-center'>
                <tr><td colspan='9'><b>Total Pedido: R$ $totalPedido</b></td></tr>
            </tr>";
    }
?>