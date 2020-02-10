<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");

$id = $_POST['id'];
removePost($conexao, $id);
?>

<?php
header ("Location: post-lista.php?removido=true");
die();

?>
<div class ="container">
    <body class="text-center">
              

        <?php
        require_once("adm-rodape.php");
        ?>
    </div>
</div>
   
