<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logoday3.png">

    <title>Login</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- Custom styles for this template -->
    <link  rel="stylesheet" href="css/acesso.css">
</head>

  <body class="text-center" >
    <form class="form-signin" action="logar.php" method="post" enctype="multipart/form-data">
      <img class="mb-4" src="../images/logoday3.png" alt="" width="223" height="130">
      <h1 class="h3 mb-3 font-weight-normal">Acessar Painel</h1>
      <?php
      @$v = $_GET['valor'];
      if($v) {
        echo " <span color:'red'>Todos os campos devem ser preenchidos</span>";
      }
      ?>
     
      <label for="inputEmail" class="sr-only">email</label>
      <input id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="" type="email" name="email">
      
      <label for="inputPassword" class="sr-only">senha</label>
      <input id="inputPassword" class="form-control" placeholder="Senha"  required="" type="password" name="senha">
      
      <div class="checkbox mb-3">
        <label>
          <input value="remember-me" type="checkbox"> Lembrar senha
        </label>
      </div>
      <button class="form-control btn btn-lg btn-primary" type="submit">Entrar</button>
      <button class="form-control btn btn-lg btn-warning" type="reset">Limpar</button>
      <p class="mt-5 mb-3 text-muted">© 2018</p>
    </form>
  
</body>
</html>