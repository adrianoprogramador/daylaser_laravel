<?php
require_once("../conexaobanco.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email != "" && $senha != "") {
    //echo "usuario esta logado";
$sql = mysqli_query($conexao, "SELECT * FROM user WHERE email = '$email'");
$registro = mysqli_num_rows($sql);
while ($line = mysqli_fetch_array($sql)) {
    $senha_user = $line ['senha'];
    $nivel = $line['nivel'];
}
if($registro) {
    if($senha_user == $senha) {
        SESSION_START();
        $_SESSION ['login'] = $email;
        $_SESSION ['password'] = $senha;
        if ($nivel == 1) {
            header('location:index.php');
       }else {
            header('location:cliente.php');
       }
    }else{
        echo "senha ou email invalido";
        echo "<a href='login.php'> Login</a>";
    }

}else {
    echo "Voce não possui cadastro.";
    echo "<a href='login.php'> Login</a>";

}

}else{
    header('location:login.php?valor=1');
}

?>