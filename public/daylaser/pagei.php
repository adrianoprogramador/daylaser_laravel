<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Equipe</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/logoday3.png">
    <link rel="shortcut icon" href="images/logoday3.png" />
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='//fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script>
    $(document).ready(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
    })
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
      </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
  </head>
  <body id="top">
    <div class="main_color">
<!--==============================header=================================-->
      <header>
        <div class="clear"></div>
        <div class="container_12">
          <div class="grid_12">
            <h1>
              <a href="index.php">
                <img src="images/logoday3.png" alt="Your Happy Family">
              </a>
            </h1>
          </div>
        </div>
        <div class="clear"></div>
        <div class="menu_block">
          <div class="container_12">
            <div class="grid_12">
            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index-1.php">Serviços</a></li>
                  <li><a href="index-2.php">Equipe</a></li>
                  <li><a href="index-3.php">Preços</a></li>
                  <li><a href="index-4.php">Contatos</a></li>
                </ul>
              </nav>
              
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </header>
<!--==============================Content=================================-->
      <div class="cont_wrapper">
        <div class="content"><div class="ic"></div>
          <div class="container_12">
            <div class="grid_12">
             
             <!--========Conteudo - deletado ============-->
             <?php

             require_once("conexaobanco.php");     
             $pagina = $_GET['pagina'];                         
             //selecionando os dados no banco
                          
             $paginas  = mysqli_query($conexao,
                                    "select p.*, i.imagem as imagem_nome, c.nome as categoria_nome
                                    from conteudo as p 
                                    join imagens as i on p.imagem_id = i.id_imagem
                                    join categorias as c on p.categoria_id = c.id_categoria
                                    where id_post = '$pagina'");
                                    
            
                                    
            while ($retorno_paginas = mysqli_fetch_array($paginas)):
                $id_post   = $retorno_paginas [0];
                $titulo   = $retorno_paginas [1];
                $texto   = $retorno_paginas [2];
                $imagem   = $retorno_paginas [3];
                $imagem_nome= $retorno_paginas[8];             
                               
             ?>   
             
             <div class="grid_3">          
                      
                <h3>Tratamentos</h3> 
                                  
                              
                  <img src="images/<?= $imagem_nome ?>" alt="" class="img_inner i1" width="600" height="547">               
                  <div class="text1">               
                    <h4><?=$titulo?></h4><br>               
                    <p><?=$texto?></p>
                  </div>
            
                  
                  <?php endwhile; ?>
            <!--========Conteudo - deletado ============-->
              
              
            
            
            </div>
          <div class="clear"></div>
        </div>
      </div>
<!--==============================footer=================================-->
    </div>
    <div class="clear"></div>
    <?php 	

    $rodape_li_class = 
      '<li class=""><a href="index.php">Home</a></li>
      <li><a href="index-1.php">Serviços</a></li>
      <li><a href="index-2.php">Equipe</a></li>
      <li><a href="index-3.php">Preços</a></li>
      <li><a href="index-4.php">Contato</a></li>';

      include("rodape.php");
      ?>
  </body>
</html>
