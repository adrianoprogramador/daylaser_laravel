<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");

?>

<main role="main" class="container">
    <div class="starter-template">
    <div class="jumbotron">
        <span class="caminho"><h1>Dashboard &raquo; Imagens Cadastrados</h1></span>
    </div>  

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
?>
    <p class="alert-success">Post <?=$id?> removido com sucesso!</p>; 
<?php
} 
?>

<?php
if(array_key_exists("alterado", $_GET) && $_GET["alterado"] == "true") {
?>
    <p class="alert-success">Post <?=$id?> alterado com sucesso!</p>; 
<?php
} 
?>



<table class="table table-striped table-bordered">
<tr>
        
        
        <th>Imagem</th>
        <th>Nome da imagem</th>
        <th>Editar</th>
        <th>Excluir</th>
</tr>
    <?php
        $imgs = ListaImagem($conexao);
        foreach($imgs as $img):
    ?>
    
    <tr>
        
        
        <td>
        <img src="../images/<?=$img['imagem']?>" width="50" height="50"> 
        </td>
        <td><?=$img['imagem']?></td>
        <td><a class="btn btn-primary" href="imagens-altera.php?id=<?=$img['id_imagem']?>">Editar</a></td>
        <td>
            <form action="remove-post.php" method="POST">
                <input type="hidden" name="id" value="<?=$img['id_imagem']?>">
                <button class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>

    <?php
    endforeach
    ?>
</table>




<!----------------Container-------------->




    
</div>
<!----------------Rodape-------------->
<?php
require_once("adm-rodape.php");
?>
</body>
</main>
    <!------------fim body------------->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  
</html>