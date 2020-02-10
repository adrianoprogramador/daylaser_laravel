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
             
        <div class="container">
        

            
                <fieldset class="col-lg-12">                
                    <form class="col-md-12 col-xl-12" action="adiciona-imagem.php" enctype="multipart/form-data"  method="POST">
                        <div class="input-group mb-3">
                            <label for="file">Arquivo</label>
                            <input type="file" class=" form-control" name="arquivo">
                            
                            <div class="imgbtn col-lg-4">
                                <input type="submit" class="btn btn-primary" name="envia" value="Enviar">             
                            </div>
                        </div>
                    </form>                                 
                </fieldset>
            
        
        
          
        </div>  
          
                      
</div>

        
        <img src="../images/logoday3.png" alt="Daylaser">                      


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