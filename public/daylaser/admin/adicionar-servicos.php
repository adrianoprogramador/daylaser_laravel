<?php
require_once("adm-cabecalho.php");
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h3>Usuario: <?php echo $login;?></h3>
        <p class="lead"><a style="margin-left:2%" href="index.php">Ir para Home </a>|<a  href="form_postar.php"> Postagem</a> |
        <a href="logout.php">Sair</a><br> Conteúdo dinâmico!</p>
      </div>
        
    

    <?php
    require_once("adm-rodape.php");
    ?>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  
  </body>
</html>