<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");

?>

<main role="main" class="container">
    <div class="starter-template">
    <div class="jumbotron">
        <span class="caminho"><h1>Dashboard &raquo; Posts Cadastrados</h1></span>
    </div>  

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
?>
    <p class="alert-success">Post <?=$id?> removido com sucesso!</p> 
<?php
} 
?>

<?php
if(array_key_exists("alterado", $_GET) && $_GET["alterado"] == "true") {
?>
    <p class="alert-success">Post <?=$id?> alterado com sucesso!</p> 
<?php
} 
?>



<table class="table table-striped table-bordered">
<tr>
        <th>Titulo</th>
        <th>Texto</th>
        <th>Imagem</th>
        <th>Categoria</th>
        <th>Editar</th>
        <th>Excluir</th>
</tr>
    <?php
        $posts = ListaPosts($conexao);
        foreach($posts as $post):
    ?>
    
    <tr>
        <td><?=$post['titulo']?></td>
        <td><?= substr($post['texto'],0,112)."..."?></td>
        <td>
        <img src="../images/<?=$post['imagem_nome']?>" width="45" height="45">        
        </td>
        <td><?=$post['categoria_nome']?></td>
        <td><a class="btn btn-primary" href="post-altera.php?id=<?=$post['id_post']?>">Editar</a></td>
        <td>
            <form action="remove-post.php" method="POST">
                <input type="hidden" name="id" value="<?=$post['id_post']?>">
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