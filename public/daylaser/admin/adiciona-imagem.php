<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");
?>

<?php
$nome = ($_FILES ["arquivo"]["name"]);
?>

<body class="text-center">

    <div class ="container">
        <div class="jumbotron">
            <span class="caminho"><h1>Dashboard &raquo; Cadastar Imagem</h1></span>
        </div>
            
        <?php        
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");            
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);            
            
            if(in_array($extensao, $formatosPermitidos)) {
            }else{ ?>
                <p class="alert-danger">Formato invalido</p>
            <?php }            
                        
            $pasta = "../images/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = $_FILES['arquivo']['name'];

            if(move_uploaded_file($temporario, $pasta.$novoNome)) { ?>
                <p class="alert-success"> Imagem adicionada com sucesso!</p>
            <?php }else {?>
                <p class="alert-danger"> Imagem não adicionada!</p>
            <?php }?>        

            <?php         

            if (insereImagem ($conexao, $nome)) { ?>
            <p class="alert-success"> Imagem incluida na galeria!</p>
            <?php } else {
                $msg = mysqli_error($conexao);
            ?>
                <p class="alert-danger"> Imagem não incluida na galeria! <?=$msg?></p>
            <?php                
            } 
            ?>

            <img class="mb-4" src="../images/logoday3.png" alt="Daylaser" width="160" height="93">
            <h1 class="h3 mb-3 font-weight-normal">Cadastrar Imagem</h1>      
            <a href="post-lista.php">Voltar para Home</a><br>        
        
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