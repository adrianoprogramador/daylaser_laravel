<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");

?>
<!----------------Container-------------->
<main role="main" class="container">

<div class="container">
        <div class="jumbotron">
          <span class="caminho"><h1>Dashboard &raquo; Cadastar Imagem</h1></span>
        </div>
             
        <?php
        if(isset($_POST['enviar-formulario'])):
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");            
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)):
              $pasta = "../images/";
              $temporario = $_FILES['arquivo']['tmp_name'];
              $novoNome = uniqid().".$extensao";

              if(move_uploaded_file($temporario, $pasta.$novoNome)):
                $mensagem = "Arquivo";
              else:
                $mensagem = "formato invalido";
              endif;
          else:
              $mensagem = "formato invalido";
          endif;
        
         echo $mensagem;
         
        endif;
       ?>

        

        <div class="container">
            <fieldset class="col-lg-12">
                <!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"  method="POST">
                    <input type="file" name="arquivo">
                    <input type="submit" name="enviar-formulario">               
                </form>                                 
            </fieldset>
        </div>
        
          
          
          
                      
</div>

<!----------------Rodape-------------->
<?php
require_once("adm-rodape.php");
?>

</main>
    <!------------fim body------------->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
</body>  
</html>