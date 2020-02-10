<?php
require_once("adm-cabecalho.php");
require_once("banco-post.php");
?>

<?php
$id       = $_POST ["id"];
$titulo   = $_POST ["titulo"];
$detalhe  = $_POST ["detalhe"];
$img      = $_POST ["imagem_id"];
$valor    = $_POST ["valor"];
$pacote   = $_POST ["pacote"];
?>


<body class="text-center">

    <div class ="container">

        <div class="starter-template">
            <h3>Editado!</h3>
                                
        </div>

        <?php        
                            
        if (alteraServ($conexao, $id, $titulo, $detalhe, $img, $valor, $pacote)) { 
            header("Location: servicos-lista.php?alterado=true"); 
            ?>
        
        <?php } else {
            $msg = mysqli_error($conexao);
        ?>
            <p class="alert-danger"> Servico não alterado: <?=$msg?></p>
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