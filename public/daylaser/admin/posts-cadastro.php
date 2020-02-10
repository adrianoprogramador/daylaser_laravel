<?php
require_once("adm-cabecalho.php");
require_once("adm-menu.php");
require_once("banco-post.php");
$categorias = listaCategorias($conexao);
?>

<!----------------Container-------------->
   
<main role="main" class="container">
 

<!------formulario------------------>
    <div class="container">
        
             
          <div class="jumbotron">
            <span class="caminho"><h1>Dashboard &raquo; Cadastar Post</h1></span>
          </div>
          
          

            <fieldset class="col-lg-12">
                <form action="adiciona-post.php" method="POST" class="col-md-12 col-xl-12" >
                                                    
                      <div class="form-group">
                          <label for="titulo">Titulo</label>
                          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo" autofocus required>
                      </div>               
                                      
                      <div class="form-group">
                          <label for="texto">Texto</label>
                          <textarea class="form-control" id="texto" name="texto" rows="2" placeholder="Digite o texto"></textarea>
                      </div>

                    <!------imagem------->

                      <div class="input-group mb-3">
                          <label for="imagem">Imagem</label>
                          <input class="form-control" id="imagem" name="imagem" placeholder="Digite a imagem">
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
                            $postagens = mysqli_query($conexao, "SELECT id_post, titulo, texto, imagem, data, hora, visitas, categoria_id  FROM conteudo ORDER BY data DESC");
                                
                                    
                                while ($post = mysqli_fetch_array($postagens)):
                                    $id_post      = $post [0];
                                    $titulo       = $post [1];
                                    $texto        = $post [2];
                                    $imagem       = $post [3];
                                    $data         = $post [4];
                                    $hora         = $post [5];
                                    $visitas      = $post [6];
                                    $categoria_id = $post [7];
                                
                            ?>
                                
                                <img class="close" data-dismiss="modal" aria-label="Fechar" src="../images/<?=$post['imagem']?>" width="200" height="200" id="adriano" onclick="img('<?=$post['imagem']?>');">
                                
                                <?php endwhile; ?>
                                                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="hidden" class="btn btn-primary">Salvar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                      </div>          
                      

                    <!------imagem------->            
                       
                        <div class="form-group">
                            <label>Categoria</label>
                                <select name="categoria_id" class="form-control">
                                    <?php foreach($categorias as $categoria):?>
                                    <option  value="<?=$categoria['id_categoria']?>">
                                            <?=$categoria ['nome']?>
                                    </option>
                                    <?php endforeach ?>
                                </select>                        
                        </div>
                    
                    <div class="form-group botoes col-lg-3">
                    <table class="botoes">
                        <tbody>
                            <tr>
                                <td><input type="submit" class="btn btn-primary" value="Cadastrar"></td>
                                <td><input type="reset"  class="btn btn-secondary" value="Limpar"></td>
                            </tr>
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
    function img (name){
        document.getElementById("imagem").value = name;
    }
</script>


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