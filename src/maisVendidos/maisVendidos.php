<?php ob_start(); ?>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Bitter', serif;
}

.produto {
    max-width: 100%;
    width: 295px;
    height: 195px;
    object-fit: cover;
}

.titulo {
    font-weight: 700;
    font-family: 'Bitter', serif;
}

.subtitulo{
    color: red;
    font-family: 'Bitter', serif;
    font-weight: bold;
    font-size: 16px;
}

.valor{
    color: black;
}

.fa-cart-plus {
    font-size: 1.5rem;
    cursor: pointer;
    padding-right: 5px;
    color: rgb(248, 26, 92);
}

.fa-cart-plus:hover {
    color: rgb(250, 125, 125);
    transition: 0.5s;
}

.card:hover {
    box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    -webkit-box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: -2px -1px 25px -4px rgba(0,0,0,0.75);
    transition: 0.5s;
}

</style>
<!--MAIS VENDIDOS-->
<div class="container">
    <div class="row py-3">
        <div class="col-lg-5 m-auto text-center">
            <h1 class="titulo">Mais Vendidos</h1>
            <h6 class="subtitulo">Poe da Mesa</h6>
        </div>
    </div>
    <div class="row">
        <?php listar(); ?>
    </div>
    <div class="row py-5">
        <div class="col-lg-6 text-center m-auto">
            <button class="btn1"><a class="text-white"
            href="../vitrine/vitrine.php" target="_top">Clique Para Mais</a></button>
        </div>
    </div>
</div>
<!--/MAIS VENDIDOS-->
<?php 
    function listar(){
        $conexao = new mysqli("localhost", "root", "root", "bdsite"); 

        $sql = "select * from produto limit 4";

        $resultado = mysqli_query($conexao, $sql);

        while($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $valor = $reg["valor"];
            $qtd = $reg["qtd"];

            echo "<div class='col-lg-3 p-2 text-center'>
                <div class='card border-0 bg-light mb-2'>
                    <div class='card-body'>
                    <a href='../detalhe/detalhe.php?codigo=$codigo'>
                        <img src='../../assets/img/$codigo.jpg' class='img-fluid produto' alt=''></a>
                    </div>
                    <h5 class='text-center'>$titulo</h5>
                    <h6 class='text-center font-weight-light valor'>R$ $valor</h6>
                    <a href='../carrinho/adicionar.php?codigo=$codigo'><i class='fa fa-cart-plus mb-3' aria-hidden='true'></i></a>
                </div>
            </div>";
        }
        mysqli_close($conexao);
    }
?>
<?php ob_end_flush(); ?>