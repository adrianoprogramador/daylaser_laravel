
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      
      <a class="navbar-brand" href="index.php"><h2>Dashboard</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       

        <ul class="navbar-nav mr-auto">          
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Serviços
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="servicos-cadastro.php">Cadastrar serviços</a>
              <a class="dropdown-item" href="servicos-lista.php">Listar Serviços</a>              
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Postagens
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="posts-cadastro.php">Cadastrar Postagens</a>
              <a class="dropdown-item" href="post-lista.php">Listar Postagens</a>              
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produtos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="produtos-cadastro.php">Cadastrar Produtos</a>
              <a class="dropdown-item" href="produtos-lista.php">Listar Produtos</a>              
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Imagens
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="imagens-cadastro.php">Cadastrar Imagens</a>
              <a class="dropdown-item" href="imagem-lista.php">Listar imagens</a>              
            </div>
          </li>
                                     
          <li>
          <a class="nav-link" href="logout.php">Sair</a>
          </li>

        </ul>        
          
        <div class="nav-link-user">
            Usuario: <?php echo $login;?>
        </div>
          
            <img src="<?php echo "../user/user$id/$foto"; ?>" width="45" height="45";>
        
        
      </div>
</nav>