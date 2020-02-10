<?php
	require_once("conexaobanco.php");
	require_once("admin/banco-post.php");	                               
	//selecionando os dados no banco
		
	$posts = ListaPostsSite($conexao);
	foreach($posts as $post):

?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                <a href="page.php?pagina=<?=$post['id_post']?>" class="hoverlink">
                    
                    <div class="row row-30">
                        <div class="col-md-6"><img src="images/<?=$post['imagem_nome']?>" alt="" width="770" height="207"/>
                        </div>
                        
                        <div class="col-md-6">
                            <h4><?=$post['titulo']?></h4>
                            <p><?=substr ($post['texto'],0,303)."..."?></p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        
        <?php
endforeach
?>