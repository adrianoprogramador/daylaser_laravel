<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");
?>

<?php

$titulo          = $_POST ["titulo"];
$texto           = $_POST ["texto"];
$imagem          = $_POST ["imagem"];
$categoria_id    = $_POST ["categoria_id"];

?>
 

<body class="text-center">

    <div class ="container">
        <div class="jumbotron">
            <span class="caminho"><h1>Dashboard &raquo; Cadastar Post</h1></span>
        </div>
            
            <?php                           
            if (inserePost($conexao, $titulo, $texto, $imagem, $categoria_id)) { ?>
            <p class="alert-success"> Post adicionado com sucesso.</p>
            <?php } else {
                $msg = mysqli_error($conexao);
            ?>
                <p class="alert-danger"> Post não cadastrado: <?=$msg?></p>
            <?php                
            } 
            ?>
             
        <img class="mb-4" src="../images/logoday3.png" alt="Daylaser" width="160" height="93">
        <h1 class="h3 mb-3 font-weight-normal"></h1>      
        <a href="post-lista.php">Voltar para Home</a>
        
        
        <?php
        require_once("adm-rodape.php");
        ?>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../assets/js/vendor/popper.min.js"></script>
<script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>