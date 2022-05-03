<style>
    h6{
        color: red;
        font-family: 'Bitter', serif;
        font-weight: bold;
    }

    #txtEmail {
        margin-top: 10px;
        font-size: 12px;
        line-height: 1.4;
    }

    #txtAssunto {
        margin-top: 10px;
        font-size: 12px;
        line-height: 1.4;
    }
</style>

<!--CONTATO-->
    <div id="contato"></div>
    <hr>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 m-auto text-center">
                <h1>Contato</h1>
                <h6 >Envie sua mensagem que entraremos em contato</h6>
            </div>
        </div>
        <div class="row d-flex align-items-center mt-4">
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" onkeyup="validaEmail()"
                            required placeholder="Seu email">
                        <div id="txtEmail"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Mensagem</label>
                        <textarea class="form-control" type="text" id="assunto" onkeyup="validaAssunto()" rows="5"
                            required placeholder="Escreva aqui sua mensagem"></textarea>
                        <div id="txtAssunto"></div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button onclick="enviar()" class="btn1">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <p>Av. Paulista, 119 | São Paulo - SP | CEP 01311-903</p>
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.9421084618425!2d-46.64781205011366!3d-23.570522584603115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59be77f8594b%3A0xf36fd363e5c6728a!2sSesc%20Avenida%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1646163814972!5m2!1spt-BR!2sbr"
                    width="400" height="250" style="border:5;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
<!--/CONTATO-->

<!--add o script do js-->
<script lang="javascript">
    let email = document.querySelector("#email") 
    let assunto = document.querySelector("#assunto")
    let emailOk = false
    let assuntoOk=false

    nome.style.width = "100%"
    email.style.width = "100%"

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

    function validaAssunto (){
        let txtAssunto = document.querySelector("#txtAssunto")
        if(assunto.value.length > 100){
            txtAssunto.innerHTML = "Digite até 100 caracteres"
            txtAssunto.style.color = "red"
        } else{
            assuntoOk=true
        }
    }

    function enviar() {
        if (emailOk == true && assuntoOk == true) {
            alert("Forumulário enviado com sucesso!")
        } else {
            alert("Preencha todos os campos corretamente!")
        }
    }
</script>