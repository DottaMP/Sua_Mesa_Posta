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

function validaLogin() {
    if (emailLogin.value.indexOf("@") && emailLogin.value.indexOf(".com") == -1) { //indexOf = conteudo
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
        alert("Link de recuperação enviado para o e-mail informado!")
    } else {
        alert("Preencha o campo informando seu e-mail cadastrado!")
    }
}