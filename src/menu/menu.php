<?php ob_start(); ?>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Bitter', serif;
    }

    .navbar-brand {
        font-size: 2rem;
        color: black;
        font-family: 'Lobster', cursive;
    }

    .navbar-brand:hover {
        color: black;
    }

    .nav-link {
        margin-right: 10px; 
        margin-left: 10px;
        color: black;
        font-family: 'Bitter', serif;
        text-transform: uppercase;
    }

    .nav-link:hover {
        color: black;
    }

    .fa-user-circle-o {
        font-size: 1.5em;
        color: rgb(59, 59, 59);
    }

    .fa-shopping-bag {
        font-size: 1.5em;
        color: rgb(59, 59, 59);
    }

    .fa-sign-out{
        font-size: 1.5em;
        color: rgb(59, 59, 59);
    }

    .fa-lock {
        font-size: 1.5em;
        color: rgb(59, 59, 59);
    }

    .fa-user-circle-o:hover {
        color: rgb(250, 125, 125);
        transition: 0.5s;
    }

    .fa-shopping-bag:hover {
        color: rgb(250, 125, 125);
        transition: 0.5s;

    }

    .fa-sign-out:hover {
        color: rgb(250, 125, 125);
        transition: 0.5s;
    }

    .fa-lock:hover {
        color: rgb(250, 125, 125);
        transition: 0.5s;

    }

    b {
        font-size: 0.75em;
        color: rgb(59, 59, 59);
    }

    .pesquisa {
        height: 40px;
        width: 80%;
        border-radius: 60px;
        outline: none;
        margin-right: -35px;
        font-family: 'Bitter', serif;
        border: 2px solid rgb(248, 26, 92);
    }

    .placeholder {
        color: pink;
    }

    .btn0 {
        outline: none;
        border: none;
        color: rgb(248, 26, 92);
        border-radius: 10px;
        background-color: transparent;
        cursor: pointer;
    }

    .btn0:hover{
        color: #ff85aa;
    }
</style>

<!--MENU-->
<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../home/home.php">Sua Mesa Posta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../home/home.php" target="_top">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../vitrine/vitrine.php" target="_top">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../home/home.php#contato" target="_top">Contato</a>
                </li>
            </ul>
            <ul class="navbar-nav m-auto">
                <form method="post" action="../busca/busca.php">
                    <li class="nav-item">
                        <input name="busca" class="px-2 pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn0" target="_top"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </li>
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="../carrinho/carrinho.php" target="_top"><i class="fa fa-shopping-bag"
                            aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cadastrar/perfil.php" target="_top"><?php if (isset($_SESSION["nome"])){ ?>
                        <?php $nome = "admin"; if ($_SESSION["nome"] == $nome){ ?>
                            <li><a class="nav-link" href="../admin/adm.php" target="_top"><i class="fa fa-lock" aria-hidden="true"></i></a></li>
                            <li><a class="nav-link" href="../login/logoff.php" target="_top"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                            <?php } else { ?>
                            <b class="nav-link"><?php echo "Olá, ". $_SESSION["nome"];?></b>
                        <li><a class="nav-link" href="../login/logoff.php" target="_top"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        <?php } ?>
                        <?php } else { ?>
                            <li><a class="nav-link" href="../login/login.php" target="_top"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                        <?php } ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/MENU-->
<?php ob_end_flush(); ?>