<?php
require_once("adm-cabecalho.php");
require_once("banco-post.php");
?>

<?php
$id        = $_POST ['id'];
$nome      = $_POST ["nome"];
$descricao = $_POST ["descricao"];
$img       = $_POST ["imagem_id"];
$preco     = $_POST ["preco"];
$site      = $_POST ["postar"];
?>


<body class="text-center">

    <div class ="container">

        <div class="starter-template">
            <h3>Editado!</h3>
                                
        </div>

        <?php        
                            
        if (alteraProduto($conexao, $id, $nome, $descricao, $img, $preco, $site)) { header("Location: produtos-lista.php?alterado=true"); exit;?>
        <p class="alert-success"> Produto alterado com sucesso.</p>
        
        <?php } else {
            $msg = mysqli_error($conexao);
        ?>
            <p class="alert-danger"> Produto não alterado: <?=$msg?></p>
        <?php
        
        } 
        ?>     
       
        <img class="mb-4" src="../images/logoday3.png" alt="Daylaser" width="160" height="93">
        <br>
        <a href="index.php">Voltar para Home</a>
        
        
        <?php
        require_once("adm-rodape.php");
        ?>
    </div>
 
</body>

</html>