<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");
?>

<main role="main" class="container">
    <div class="starter-template">
    <div class="jumbotron">
        <span class="caminho"><h1>Dashboard &raquo; Produtos Cadastrados</h1></span>
    </div>
    
    <?php
if(array_key_exists("removido", $_GET)) {
?>
    <p class="alert-success">Produto <?=$id?> removido com sucesso!</p> 
<?php
} elseif (array_key_exists("alterado", $_GET)) {
?>
    <p class="alert-success">Produto <?=$id?> alterado com sucesso!</p> 
<?php
} 
?>

<table class="table table-striped table-bordered">

    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Valor</th>        
        <th>Site</th>        
        <th>Editar</th>
        <th>Cancelar</th>
    </tr>
    <?php
        $produtos = ListaProdutos($conexao);
        foreach($produtos as $produto):
    ?>
       
    <tr>
        <td><?=$produto['nome']?></td>
        <td><?= substr($produto['descricao'],0,112)."..."?></td>
        <td>
            <img src="../images/<?=$produto['imagem_nome']?>" width="45" height="45">
        </td>
        <td><?=$produto['preco']?></td>        
        <td><?= $produto['postar'] == 1 ? 'Sim' : 'Não' ?></td>        
        <td><a class="btn btn-primary" href="produtos-altera.php?id=<?=$produto['id']?>">Editar</a></td>
        <td>
            <form action="remove-produto.php" method="POST">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
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