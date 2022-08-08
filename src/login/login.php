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
                                <form class="card__face" id="frm1" method="post" action="login.php?logar=1" >
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
                                            <button class="btn1" type="button" onclick="validar()">Entrar</button>
                                        </div>
                                        <p class="text-center text-danger"><a class="tm" id="flip-card-back">Esqueci minha
                                                senha</a></p>
                                        <hr class="mb-3">
                                        <p class="text-center">Não tem uma conta? </br><a
                                                href="../cadastrar/cadastrar.php" target="_top">Cadastre-se</a>
                                        </p>
                                    </div>
                                </form>
                                <?php fazerLogin()?>

                                <form class="card__face card__face--back" id="frm2" method="post" action="login.php?enviar=1">
                                    <div class="card__content">

                                        <div class="card__header">
                                            <h2>Recupere sua senha</h2>
                                        </div>
                                        <div class="card__body">
                                            <div class="form-group">
                                                <label for="email" class="mt-3 mb-3">Email</label>
                                                <input class="form-control" type="email" name="email"
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
                                </form>
                                <?php enviarEmail()?>
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
let email = document.querySelector("#email")
let senha = document.querySelector("#senha")
let emailLogin = document.querySelector("#emailLogin")
let txtEmailLogin = document.querySelector("#txtEmailLogin")
let txtSenha = document.querySelector("#txtSenha")
let txtEmail = document.querySelector("#txtEmail")
let emailOk = false
let emailLoginOk = false
let senhaOk = false

document.addEventListener('DOMContentLoaded', function (event) {

    document.getElementById('flip-card-back').style.visibility = 'visible';
    document.getElementById('flip-card-front').style.visibility = 'visible';

    document.getElementById('flip-card-back').onclick = function () {
        document.getElementById('flip-card').classList.toggle('do-flip');
    };

    document.getElementById('flip-card-front').onclick = function () {
        document.getElementById('flip-card').classList.toggle('do-flip');
    };

});

function validaEmail() {
    if (email.value.indexOf("@") && email.value.indexOf(".com") == -1) { //indexOf = conteudo
        txtEmail.innerHTML = "Email Inválido"
        txtEmail.style.color = "red"
    } else {
        txtEmail.innerHTML = "Email Válido"
        txtEmail.style.color = "green"
        emailOk = true
    }
}

function validaSenha() {
    if (senha.value.length < 6 || senha.value.length > 15) { //length = tamanho
        txtSenha.innerHTML = "Min 6 Max 15 caracteres"
        txtSenha.style.color = "red"
    } else {
        txtSenha.innerHTML = "Válido"
        txtSenha.style.color = "green"
        senhaOk = true
    }
}

function validar() {
    if (email.value.length < 6 || email.value.indexOf("@") <= 0 || email.value.lastIndexOf(".") <= email.value.indexOf("@")) {
        alert("Email ou Senha inválidos");
        email.value = "";
        email.focus();
        return false;
    }

    if (senha.value.length < 6 || senha.value.length > 15) {
        alert("Email ou Senha inválidos");
        senha.value = "";
        senha.focus();
        return false;
    }

    frm1.submit(); //o submit envia o form via post para o php
}

function validaLogin() {
    if (emailLogin.value.indexOf("@") && emailLogin.value.indexOf(".com") == -1) {
        txtEmailLogin.innerHTML = "Email Inválido"
        txtEmailLogin.style.color = "red"
    } else {
        txtEmailLogin.innerHTML = "Email Válido"
        txtEmailLogin.style.color = "green"
        emailLoginOk = true
    }
}

function enviarEsqueciSenha() {
    if (emailLoginOk == true) {
        frm2.submit(); //o submit envia o form via post para o php
    } else {
        return false;
    }
}

</script>

<?php 
    function fazerLogin(){
        if(isset($_GET["logar"])){
            $email = $_POST["email"];
            $senha = $_POST["senha"];
    
            $conexao = new mysqli("localhost", "root", "root", "bdsite"); //conexão com o BD
    
            //para inserir é criado a variável sql e executado o comando sql de insert, onde vai inserir um registro no BD usando as variáveis ($) que recuperou do formulário enviado via post
            $sql = "select * from cliente where email='$email' and senha=md5('$senha')"; //a senha será criptografada utilizando o md5
            
            $resultado = mysqli_query($conexao, $sql); //será retornado um resultado
    
            if($reg = mysqli_fetch_array($resultado)){//se encontrar quer dizer que encontrou o e-mail e a senha criptografada           
                //para guardar o código do cliente é utilizado variáveis de sessão
                //é a conexão entre navegador e o servidor de aplicação
                //para cada usuário/navegador que está acessando vai criar uma sessão
    
                session_start(); //se conseguir logar será iniciado a sessão
    
                //variavel global
                $_SESSION["codigo"] = $reg["codigo"];
                $_SESSION["nome"] = $reg["nome"];
                $_SESSION["sobrenome"] = $reg["sobrenome"];
                $_SESSION["email"] = $reg["email"];
                $_SESSION["cpfc"] = $reg["cpfc"];
                $_SESSION["telefone"] = $reg["telefone"];
                
                //redirecionar para outra página, após logado
                header("location: ../vitrine/vitrine.php");
    
            }else{ //se não consegue extrair um registro irá cair direto no else
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Email ou senha inválidos!')
                    window.location.href='../login/login.php';
                    </SCRIPT>");
            }
    
            mysqli_close($conexao); //desconectar
        }
    }

    function enviarEmail(){
        
        if(isset($_GET["enviar"])){
            $email = $_POST["email"];

            $conexao = new mysqli("localhost", "root", "root", "bdsite"); //conexão com o BD

            $sql = "select * from cliente where email='$email'";

            $resultado = mysqli_query($conexao, $sql); //será retornado um resultado

            //configurar os arquivos sendmail.ini e php.ini no xampp com as informações do e-mail.
            if($reg = mysqli_fetch_array($resultado)){//se passar quer dizer que encontrou o e-mail   
                $email = $_POST["email"];
                $body = "Solicitação de Reset de Senha";
                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; harset=UTF-8" . "\r\n";
                $headers .= "From: Equipe Fatec <equipe.fatec.ipiranga@outlook.com>" . "\r\n";                       
                if(mail($email, $body, $headers)){
                    echo "<script lang='javascript'>alert('Email enviado com sucesso!')</script>";
                }
            }else{ //se não consegue extrair um registro irá cair direto no else  
                echo "Email inválido!";
            }
    
            mysqli_close($conexao); //desconectar
        }
    }
?>
<?php ob_end_flush(); ?>