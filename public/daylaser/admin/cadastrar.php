<?php
//arquivo de conexao
require_once("../conexaobanco.php");
date_default_timezone_set('America/Sao_Paulo');

//varriaveis do formulario de cadastro
$nome     = $_POST ['nome'];
$email    = $_POST ['email'];
$senha    = $_POST ['senha'];
$resenha  = $_POST ['repetesenha'];
$lembrete = $_POST ['lembrete'];
$foto     = $_FILES['foto']['name'];
$tipo     = $_FILES['foto']['type'];

//variavel reigistro - validar campos do formulario
$registro = false;
if ($nome != "" && $email != "" && $senha != "" && $lembrete != "" && $foto != "") {
    if ($senha != $resenha) {
        echo "<script>alert('Senhas diferentes');window.history.go(-1);</script>";
    }else{
        
        //usuario habilitado
        $registro = true;
    }
}else{
    echo "<script>alert('Preencha os campos');window.history.go(-1);</script>";
}

    //fazendo consulta para pegar id
    $sql = mysqli_query($link, "SELECT * FROM user order by id desc limit 1");
    while($line = mysqli_fetch_array($sql)) {
        $id = $line ['id'];
        $email_user = $line['email'];
    }

    $id = $id+1;
    $pasta = "user".$id; //user - ultimo + 1
    
    //verifica existencia da pasta
    if(file_exists("user/".$pasta)) {
        //echo "<script>alert('Essa pasta ja existe');</script>"; 
        //rmdir($pasta);
    }else {
        mkdir("user/".$pasta,0777);
        //echo "<script>alert('a pasta".$pasta." foi criada com sucesso!');</script>";
    }

    //substituindo caracteres indesejados
    //Adriano Carvalho
    require_once("substituicao.php");

    //verifica formatos suportados para upload
    $formatos = array(1=>'image/png',2=>'image/jpg', 3=> 'image/jpeg',4=>'image/gif');

    //verifica os formatos permitidos de arquivos para upload
    $teste = array_search($tipo,$formatos); //4
    if ($teste == true) {
        move_uploaded_file($_FILES['foto']['tmp_name'],"user/".$pasta."/".$foto); //user/user4/
    }else {
        echo "<script>alert('o tipo de arquivo não é suportado!');</script>";
    }

    //pegando data e hora do servidor
    $data = date ('Y-m-d');
    $hora = date ('H:i:s');

    //cadastra novo usuario no banco de dados
    if ($registro == true && $email != $email_user) {
    mysqli_query($link,"INSERT INTO user(nome, email, senha, lembrete, foto, nivel, data, hora) values
    ('$nome', '$email', '$senha', '$lembrete', '$foto',5, '$data', '$hora') ");
    
    echo "<p style='text-align:center;color:#333;padding:5px;'>Usuario cadastrado!</br>";
    echo "<a href='index.php' style='color:#59f'>Ir para Home</a> | <a href='login.php' style='color:59f'>Login</a>";
    echo " </p>";

   
    }else{
        echo "<script>window.history.go(-1)</script>";
    }