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
    <link rel="stylesheet" href="./carrinho.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>Carrinho | Sua Mesa Posta</title>

</head>

<body>
    <!--MENU-->
    <?php include("../menu/menu.php"); ?>
    <!--/MENU-->

    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-5 m-auto text-center">
                <h1>Carrinho</h1>
                <h5>Sua Mesa Posta</h5>
            </div>
        </div>

        <!--add produtos no carrinho-->
        <!--foto|descrição|quantidade|valor|icone de excluir-->
        <div class="table-responsive">
            <table class="linhacarrinho table table-striped">
                <tr>
                    <th> Produto </th>
                    <th> Descrição </th>
                    <th> Qtd </th>
                    <th> R$ </th>
                    <th> Opções </th>
                </tr>

                <tr class="linhacarrinho">
                    <td><img class="imagem imgcar img-fluid" src="../../assets/img/Soulplast crochê.JPG" alt=""></td>
                    <td>Kit Soulplast de Crochê Branco</td>
                    <td>2</td>
                    <td>140,00</td>
                    <td><button class="btn0"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                </tr>

                <tr class="linhacarrinho">
                    <td><img class="imagem imgcar img-fluid" src="../../assets/img/Guardanpo girassol.jpg" alt="">
                    </td>
                    <td class="align-center">Kit Guardanapo Girassol</td>
                    <td>1</td>
                    <td>50,00</td>
                    <td><button class="btn0"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                </tr>

                <tr class="linhacarrinho">
                    <td><img class="imagem imgcar img-fluid" src="../../assets/img/Jogo de Xicara com Pires.jpg"
                            alt=""></td>
                    <td class="d-flex justify-content-center">Jogo de Xicara com Pires</td>
                    <td>2</td>
                    <td>200,00</td>
                    <td><button class="btn0"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                </tr>

                <tr class="linhacarrinho">
                    <td><img class="imagem imgcar img-fluid" src="../../assets/img/Taça3 - Resultado Busca.jpg"
                            alt=""></td>
                    <td>Kit de Taças com Preto</td>
                    <td>3</td>
                    <td>300,00</td>
                    <td><button class="btn0"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td><b>690,00</b></td>
                    <td></td>
                </tr>
            </table>
        </div>


        <form>
            <div class="row">
                <div class="col">
                    <input type="CEP" class="form-control" placeholder="CEP" name="cep">
                </div>
                <div class="col">
                    <input type="CUPOM" class="form-control" placeholder="CUPOM" name="pswd">
                </div>
            </div>
        </form>
        <br>
        <div class="d-flex justify-content-start">
            <button type="submit" class="btnfinalizar py-auto">Finalizar Compra</button>
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