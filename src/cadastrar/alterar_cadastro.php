<?php ob_start(); ?>
<?php
    session_start();
    //para autenticar a págiga, 
    if (isset($_SESSION["codigo"])==false){
        header("location: login.php"); //se não estiver logado voltar para a página de login
    }

?>
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
    <div class="container py-5">
        <div class="col-md-12">
            <div class="row d-flex align-items-center">

                <div class="col-md-12 mt-2 p-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="card-fluid center">
                            <div class="card__face">
                                <div class="card__header">
                                    <h2 class="text-center">Atualize seu Cadastro</h2>
                                </div>
                                <div class="card__body">
                                    <form id="frm1" method="post" action="alterar_cadastro.php?alterar=1"> <!--parametro via get ?enviar=1"-->
                                    <div class="form-group">
                                        <label for="codigo">Codigo</label>
                                        <input class="form-control" type="text" name="codigo" id="codigo"
                                        placeholder="<?php if(isset($_SESSION["codigo"])) echo $_SESSION["codigo"];?>" readonly>
                                    </div>

                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input class="form-control" type="text" name="nome" id="nome"
                                                onkeyup="validaNome()" placeholder="<?php if(isset($_SESSION["nome"])) echo $_SESSION["nome"];?>">
                                            <div id="txtNome"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sobrenome">Sobrenome</label>
                                            <input class="form-control" type="text" name="sobrenome" id="sobrenome"
                                                onkeyup="validaNome()" placeholder="<?php if(isset($_SESSION["sobrenome"])) echo $_SESSION["sobrenome"];?>">
                                            <div id="txtNome"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" name="email" id="email"
                                                onkeyup="validaEmail()" placeholder="<?php if(isset($_SESSION["email"])) echo $_SESSION["email"];?>">
                                            <div id="txtEmail"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="senha">Senha</label>
                                            <input class="form-control" type="password" name="senha" id="senha"
                                                onkeyup="validaSenha()" placeholder="******">
                                            <div id="txtSenha"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfc">CPF</label>
                                            <input class="form-control" type="text" name="cpfc" id="cpfc" value=""
                                                maxlength="14" onkeyup="validarCPF()"
                                                onkeypress="formatarCPF('###.###.###-##', this);"
                                                placeholder="<?php if(isset($_SESSION["cpfc"])) echo $_SESSION["cpfc"];?>">
                                            <div id="txtCpf"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefone">Celular</label>
                                            <input class="form-control" type="tel" name="telefone" id="telefone"
                                                maxlength="14" onkeyup="validaTelefone()"
                                                onkeypress="formatarTelefone('## #.####-####', this);"
                                                placeholder="<?php if(isset($_SESSION["telefone"])) echo $_SESSION["telefone"];?>">
                                        </div>

                                        <div class="d-flex justify-content-center mt-4">
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary" name="b3" onclick="validar()">Alterar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php alterar();?>
                                    <form id="frm2" method="post" action="alterar_cadastro.php?excluir=1">
                                        <div class="d-flex justify-content-center mt-4">
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary" name="b4" onclick="excluir()">Excluir Conta</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php remover();?>
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
let nome = document.querySelector("#nome") 
let sobrenome = document.querySelector("#sobrenome") 
let email = document.querySelector("#email") 
let senha = document.querySelector("#senha")
let cpfc = document.querySelector("#cpfc")
let nomeOk = false
let emailOk = false
let senhaOk = false
let confirSenhaOk = false
let cpfOk =  false

/*function validaNome() {
    let txtNome = document.querySelector("#txtNome")
    if (nome.value.length < 3 && sobrenome.value.length < 3) { //length = tamanho
        txtNome.innerHTML = "Nome Inválido"
        txtNome.style.color = "red"
    } else {
        txtNome.innerHTML = "Nome Válido"
        txtNome.style.color = "green"
        nomeOk = true
    }
}*/

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
function excluir() {

    alert("Seu cadastro será excluído!");

    frm2.submit(); //o submit envia o form via post para o php
}
</script>

<?php
    function alterar(){
        if(isset($_GET["alterar"])){
            $codigo = $_SESSION["codigo"];
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $cpfc = $_POST["cpfc"];
            $telefone = $_POST["telefone"];
            
            //abre conexão
            $conexao = new mysqli("localhost", "root", "root", "bdsite");
    
            //para alterar é criado a variável sql e executado o comando sql de update
            $sql = "update cliente set nome='$nome', sobrenome='$sobrenome', email='$email', 
            senha=md5('$senha'), cpfc='$cpfc', telefone='$telefone' where codigo='$codigo'";
            
            mysqli_query($conexao, $sql); //executa o comando sql
            $_SESSION["codigo"] = $reg["codigo"];
            $_SESSION["nome"] = $reg["nome"];
            $_SESSION["sobrenome"] = $reg["sobrenome"];
            $_SESSION["email"] = $reg["email"];
            $_SESSION["cpfc"] = $reg["cpfc"];
            $_SESSION["telefone"] = $reg["telefone"];
            header("location: ../login/login.php");
            mysqli_close($conexao); //fecha conexão
        
            echo "<br><h4>Registro alterado com sucesso!</h4>";
        }
    }

    function remover(){
        if(isset($_GET["excluir"])){
            $codigo = $_SESSION["codigo"];
            
            //abre conexão
            $conexao = new mysqli("localhost", "root", "root", "bdsite");
    
            //para alterar é criado a variável sql e executado o comando sql de update
            $sql = "delete from cliente where codigo='$codigo'";
            
            mysqli_query($conexao, $sql); //executa o comando sql
            session_destroy(); //mata as variáveis globais de sessão
            header("location: ../login/login.php");
            mysqli_close($conexao); //fecha conexão
        }

    }
?>
<?php ob_end_flush(); ?>