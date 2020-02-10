<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['password']);
header("Location: ../index.php");
      //session_start(); // Inicia a sessão
      //session_destroy(); // Destrói a sessão limpando todos os valores salvos
      //header("Location: index.php"); exit; // Redireciona o visitante
?>