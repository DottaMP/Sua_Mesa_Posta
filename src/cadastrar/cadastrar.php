<?php ob_start(); ?>
<!doctype html>
<html lang="pt-br">
<style>
    .btn1 {
        height: 40px;
        width: 30%;
        outline: none;
        border: none;
        background: rgb(255, 160, 189);
        color: white;
        border-radius: 60px;
        font-weight: 700;
        font-family: 'Bitter', serif;
        cursor: pointer;
    }

    .btn1:hover {
        background-color: rgb(18, 159, 41);
        transition: 0.5s;
        color: #fff;
    }
</style>
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
                                    <form id="frm1" method="post" action="cadastrar.php?enviar=1"> <!--parametro via get ?enviar=1"-->
                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input class="form-control" type="text" name="nome" id="nome"
                                                onkeyup="validaNome()" required placeholder="Seu nome">
                                            <div id="txtNome"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sobrenome">Sobrenome</label>
                                            <input class="form-control" type="text" name="sobrenome" id="sobrenome"
                                                onkeyup="validaNome()" required placeholder="Seu Sobrenome">
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
                                                maxlength="14" onkeyup="validarCPF()"
                                                onkeypress="formatarCPF('###.###.###-##', this);" required
                                                placeholder="Seu CPF">
                                            <div id="txtCpf"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefone">Celular</label>
                                            <input class="form-control" type="tel" name="telefone" id="telefone"
                                                maxlength="14" onkeyup="validaTelefone()"
                                                onkeypress="formatarTelefone('## #.####-####', this);" required
                                                placeholder="(99)9.9999-9999">
                                        </div>

                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="button" class="btn00 mr-5"><a class="text-white"
                                                    href="../login/login.php" target="_top">Cancelar</a></button>
                                            <button id="btn1" type="button" onclick="validar()" class="btn1">Cadastrar</button>
                                        </div>
                                    </form>
                                    <?php enviarCadastro()?>
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
let nome = document.querySelector("#nome") 
let sobrenome = document.querySelector("#sobrenome") 
let email = document.querySelector("#email") 
let senha = document.querySelector("#senha")
let confirSenha = document.querySelector("#confirSenha")
let cpfc = document.querySelector("#cpfc")
let nomeOk = false
let emailOk = false
let senhaOk = false
let confirSenhaOk = false
let cpfOk =  false

function validaEmail() {
    let txtEmail = document.querySelector("#txtEmail")
    if (email.value.indexOf("@") && email.value.indexOf(".com") == -1) {
        txtEmail.innerHTML = "Email Inválido"
        txtEmail.style.color = "red"
    } else {
        txtEmail.innerHTML = "Email Válido"
        txtEmail.style.color = "green"
        emailOk = true
    }
}

function validaSenha() {
    let txtSenha = document.querySelector("#txtSenha")
    if (senha.value.length < 6 || senha.value.length > 15) { 
        txtSenha.innerHTML = "Min 6 Max 15 caracteres"
        txtSenha.style.color = "red"
    } else {
        txtSenha.innerHTML = "Válido"
        txtSenha.style.color = "green"
        senhaOk = true
    }
}

function validaConfirmaSenha() {
    let txtConfirSenha = document.querySelector("#txtConfirSenha")
    if (senha.value === confirSenha.value) {
        txtConfirSenha.innerHTML = "Válido"
        txtConfirSenha.style.color = "green"
        confirSenhaOk = true
    } else {
        txtConfirSenha.innerHTML = "Diferente"
        txtConfirSenha.style.color = "red"
    }
}

function formatarCPF(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1); var texto = mascara.substring(i)
    if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); }
}

function validarCPF(cpfc) {
    cpfc = cpfc.replace(/[^\d]+/g, '');
    if (cpfc == '') return true;
    // Elimina CPFs invalidos conhecidos	
    if (cpfc.length != 11 ||
        cpfc == "00000000000" ||
        cpfc == "11111111111" ||
        cpfc == "22222222222" ||
        cpfc == "33333333333" ||
        cpfc == "44444444444" ||
        cpfc == "55555555555" ||
        cpfc == "66666666666" ||
        cpfc == "77777777777" ||
        cpfc == "88888888888" ||
        cpfc == "99999999999")
        return false;
    // Valida 1o digito	
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpfc.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpfc.charAt(9)))
        return false;
    // Valida 2o digito	
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpfc.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpfc.charAt(10)))
        return false;

    cpfOk = true
    return true;
}
    
cpfc.addEventListener("blur", function () {
    let txtCpf = document.querySelector("#txtCpf")
    if (!validarCPF(cpfc.value) || cpfc.value.length < 11) {
        txtCpf.innerHTML = "CPF Inválido"
        txtCpf.style.color = "red"
    }else{
        txtCpf.innerHTML = "CPF Válido"
        txtCpf.style.color = "green"
    }
}, false);

function formatarTelefone(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1); var texto = mascara.substring(i)
    if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); }
}

function validar() {
    if (nome.value.length < 3 || sobrenome.value.length < 3) {
        alert("Digite seu nome e sobrenome!");
        nome.value = "";
        nome.focus();
        return false;
    }

    if (email.value.length < 6 || email.value.indexOf("@") <= 0 || email.value.lastIndexOf(".") <= email.value.indexOf("@")) {
        alert("Email Inválido!");
        email.value = "";
        email.focus();
        return false;
    }

    if (senha.value.length < 6 || senha.value.length > 15) {
        alert("A senha precisa ter no min 6 e no max 15 caracteres");
        senha.value = "";
        senha.focus();
        return false;
    }

    if (senha.value != confirSenha.value) {
        alert("A senha está diferente");
        confirSenha.value = "";
        confirSenha.focus();
        return false;
    }

    if (!validarCPF(cpfc.value) || cpfc.value.length < 11) {
        alert("Verifique seu CPF");
        cpfc.value = "";
        cpfc.focus();
        return false;
    }
    
    if (telefone.value.length < 14 || telefone.value.length > 14) {
        alert("Seu telefone precisa ter 11 números no formato (99)9.9999-9999");
        phone.value = "";
        phone.focus();
        return false;
    }

    frm1.submit(); //o submit envia o form via post para o php
}
</script>

<?php
    function enviarCadastro(){
        //se o parâmetro via get foi transmitido vai recuperar todos os demais parametros e enviar por email
        if(isset($_GET["enviar"])){
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $cpfc = $_POST["cpfc"];
            $telefone = $_POST["telefone"];
    
            //abrindo a conexão com o banco de dados mysql
            $conexao = new mysqli("localhost", "root", "root", "bdsite"); //informar o endereço do banco, usuário, senha, nome do banco de dados que será utilizado
    
            //para inserir é criado a variável sql e executado o comando sql de insert, onde vai inserir um registro no BD usando as variáveis ($) que recuperou do formulário enviado via post
            $sql = "insert into cliente (nome, sobrenome, email, senha, cpfc, telefone) 
                values ('$nome', '$sobrenome', '$email', md5('$senha'), '$cpfc', '$telefone')"; //a senha será criptografada utilizando o md5

            //para executar o comando do sql utiliza o mysqli_query onde é passado a conexão aberta e o comando sql que deverá ser executado
            mysqli_query($conexao, $sql);

            //redirecionar para outro página, após logado
            header("location: ../login/login.php");

            //por último, deverá desconectar do banco de dados, fechando a conexão.
            mysqli_close($conexao);
            echo "<br><h4>Registro inserido com sucesso!</h4>";
        }
    }           
?>
<?php ob_end_flush(); ?>