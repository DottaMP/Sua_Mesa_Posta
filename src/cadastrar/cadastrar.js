let nome = document.querySelector("#nome") //window.document ou apenas document
let email = document.querySelector("#email") //no seletor chama por Id (#) ou Class (.), no caso email é um Id.
let senha = document.querySelector("#senha")
let confirSenha = document.querySelector("#confirSenha")
let cpf = document.querySelector("#cpf")
let nomeOk = false
let emailOk = false
let senhaOk = false
let confirSenhaOk = false

//é possível alterar o style direto pelo js.
nome.style.width = "100%"
email.style.width = "100%"

//js é uma linguagem orientada a funções (blocos de códigos)

//Validação do nome
function validaNome() {
    let txtNome = document.querySelector("#txtNome")
    if (nome.value.length < 3) { //length = tamanho
        txtNome.innerHTML = "Nome Inválido"
        txtNome.style.color = "red"
    } else {
        txtNome.innerHTML = "Nome Válido"
        txtNome.style.color = "green"
        nomeOk = true
    }
}
//Validação do email
function validaEmail() {
    let txtEmail = document.querySelector("#txtEmail")
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
    let txtSenha = document.querySelector("#txtSenha")
    if (senha.value.length < 6 || senha.value.length > 15) { //length = tamanho
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
    if (senha.value === confirSenha.value) { //length = tamanho
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
    return true;
}
    
let cpfc = document.querySelector('#cpfc');
cpfc.addEventListener("blur", function () {
    let txtCpf = document.querySelector("#txtCpf")
    if (!validarCPF(cpfc.value)) {
        txtCpf.innerHTML = "CPF Inválido"
        txtCpf.style.color = "red"
        //cpfc = document.getElementById("cpfc").value = "";
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

//Validação do botão enviar, será enviado apenas se nome, email e assunto estiverem validados.
function enviar() {
    if (nomeOk == true && emailOk == true && senhaOk == true && confirSenhaOk == true) {
        alert("Forumulário enviado com sucesso!")
    } else {
        alert("Preencha todos os campos corretamente!")
    }
}