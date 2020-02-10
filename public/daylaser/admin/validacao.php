<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "", "site") or trigger_error(mysql_error());
    $dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = 1 ");
    $usuario = mysqli_fetch_array($dados);
    //var_dump($produto['nome']);
    ?>
  <!--// Tenta se conectar ao servidor MySQL
  
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('usuarios') or trigger_error(mysql_error());
    Formulário de Login -->
  <form action="validacao.php" method="post">
  <fieldset>
  <legend>Dados de Login</legend>
      <label for="txUsuario">Usuário</label>
      <input type="text" name="usuario" id="txUsuario" maxlength="25" />
      <label for="txSenha">Senha</label>
      <input type="password" name="senha" id="txSenha" />
    
      <input type="submit" value="Entrar" />
  </fieldset>
  </form>
  
  <?= $usuario['id'] ?>


  <?php
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

    
    
  $usuario = mysql_real_escape_string($_POST['usuario']);
  $senha = mysql_real_escape_string($_POST['senha']);

  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysql_fetch_assoc($query);

      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    
      // Redireciona o visitante
      header("Location: restrito.php"); exit;
  }
    
  ?>
  <script type="text/javascript" src="../js/produto.js"></script>