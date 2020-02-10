<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");
?>

<main role="main" class="container">
    <div class="starter-template">
    <div class="jumbotron">
        <span class="caminho"><h1>Dashboard &raquo; Serviços Cadastrados</h1></span>
    </div>
    
    <?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
?>
    <p class="alert-success">Serviço <?=$id?> removido com sucesso!</p> 
<?php
} 
?>

<?php
if(array_key_exists("alterado", $_GET) && $_GET["alterado"] == "true") {
?>
    <p class="alert-success">Serviço <?=$id?> alterado com sucesso!</p> 
<?php
} 
?>

<table class="table table-striped table-bordered">

    <tr>
        <th>Titulo</th>
        <th>Detalhe</th>
        <th>Imagem</th>
        <th>Valor</th>        
        <th>Pacote</th>        
        <th>Editar</th>
        <th>Cancelar</th>
    </tr>
    <?php
        $servs = ListaServs($conexao);
        foreach($servs as $serv):
    ?>
       
    <tr>
        <td><?=$serv['titulo']?></td>
        <td><?= substr($serv['detalhe'],0,112)."..."?></td>
        <td>
            <img src="../images/<?=$serv['imagem_nome']?>" width="45" height="45">
        </td>
        <td><?=$serv['valor']?></td>        
        <td><?= $serv['pacote'] == 1 ? 'Sim' : 'Não' ?></td>        
        <td><a class="btn btn-primary" href="servicos-altera.php?id=<?=$serv['id_servico']?>">Editar</a></td>
        <td>
            <form action="remove-serv.php" method="POST">
                <input type="hidden" name="id" value="<?=$serv['id_servico']?>">
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