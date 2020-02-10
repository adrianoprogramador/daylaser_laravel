<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");

$img = ListaImgServ($conexao, $id);
$imagem= ListaImagem($conexao);
?>

<!----------------Container-------------->
   
<main role="main" class="container">
 

<!------formulario------------------>
    <div class="container">
        
             
          <div class="jumbotron">
            <span class="caminho"><h1>Dashboard &raquo; Cadastar Serviços</h1></span>
          </div>
          
          

            <fieldset class="col-lg-12">
                <form action="adiciona-servicos.php" method="POST" class="col-md-12 col-xl-12" >
                                                
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo" autofocus required>
                    </div>               
                                    
                    <div class="form-group">
                        <label for="texto">Detalhe</label>
                        <textarea class="form-control" id="detalhe" name="detalhe" rows="2" placeholder="Digite o texto"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label for="imagem">Imagem</label>
                        
                         <input type="text" class="form-control" id="imagem" name="imagem" placeholder="Imagem">
                        <input type="hidden" class="form-control" id="id_imagem" name="imagem_id"                                                                  
                        value="<?= $img[0]['imagem_id'];?>">
                       
                            <!-- Botão para acionar modal -->
                            <div class="imgbtn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                            Escolher imagem
                            </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Galeria de imagens</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  
                            <?php                            
                            foreach($imagem as $imagens):
                            ?>
                                              
                                <img class="close" data-dismiss="modal" aria-label="Fechar" src="../images/<?=$imagens['imagem']?>" width="200" height="200" id="adriano" onclick="img('<?=$imagens['imagem']?>','<?=$imagens['id_imagem']?>');">
                            <?php
                            endforeach
                            ?>
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="hidden" class="btn btn-primary">Salvar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                      </div>                         

                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input class="form-control" id="valor" name="valor" placeholder="Digite o valor">
                    </div>                     
                        
                    <div class="form-group">
                        <label>Mostrar precos</label>
                            <select name="pacote" class="form-control">         
                                <option value="true">Sim</option>
                                <option value="false">Não</option>
                            </select>                        
                    </div>             

                    <div class="form-group botoes col-lg-3">
                        <table class="botoes">
                        <tbody>
                        <td>
                        <input type="submit" class="btn btn-primary" value="Cadastrar"></td>
                        <td><input type="reset"  class="btn btn-secondary" value="Limpar">
                        </td>
                        </tbody>
                        </table>

                    </div>

                </form> 
            </fieldset>   
                 
    </div>
</div>
  <!-----------fim formulario ---------------->




<!----------------Rodape-------------->
<?php
    
require_once("adm-rodape.php");
?>

<script>
    function img (name, id_imagem){
        document.getElementById("imagem").value = name;
        document.getElementById("id_imagem").value = id_imagem;
    }
</script>

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