<?php
require_once("../conexaobanco.php");
session_start(); 
//inicia ou recupea sessao
if($_SESSION['login'] != null && $_SESSION['password'] != null){
    $login = $_SESSION['login'];
    $senha_log = $_SESSION ['password'];
    $sql = mysqli_query($conexao, "SELECT * FROM user WHERE email = '$login'");
    while ($line = mysqli_fetch_array($sql)) {
        $senha = $line ['senha'];
        $nivel = $line ['nivel'];
        $foto = $line ['foto'];
        $id = $line ['id'];
    }
    if ($senha_log == $senha && $nivel == 1) {
        
    }else {
        header('location:../index.php');
    }
} else {
        header('location:../admin/login.php');
}

?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logoday3.png">

    <title>Painel Administrativo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adm.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/scss/reboot.scss" rel="stylesheet" >
    <link href="assets/scss/input-group.scss" rel="stylesheet" >
    <link href="assets/scss/custom-forms.scss" rel="stylesheet" >
    <link href="assets/scss/reboot.scss" rel="stylesheet" >
    <link href="assets/scss/root.scss" rel="stylesheet" >
    <?php require_once("scripts.php");?>
    
    
    
  </head>
  
  <body class="text-center">
    