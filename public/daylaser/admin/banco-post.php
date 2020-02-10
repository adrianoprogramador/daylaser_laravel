<?php
function ListaPosts($conexao) {
    $posts = array();
    $resultado = mysqli_query($conexao,
        "select p.*, i.imagem as imagem_nome, c.nome as categoria_nome
        from conteudo as p 
        join imagens as i on p.imagem_id = i.id_imagem
        join categorias as c on p.categoria_id = c.id_categoria    
    ");
    while($post = mysqli_fetch_assoc($resultado)) {
        array_push($posts, $post);
    }
    return $posts;
}

function ListaPostsSite($conexao) {
    $posts = array();
    $resultado = mysqli_query($conexao,
        "select p.*, i.imagem as imagem_nome, c.nome as categoria_nome
        from conteudo as p 
        join imagens as i on p.imagem_id = i.id_imagem
        join categorias as c on p.categoria_id = c.id_categoria LIMIT 0, 20    
    ");
    while($post = mysqli_fetch_assoc($resultado)) {
        array_push($posts, $post);
    }
    return $posts;
}

function ListaPostList($conexao) {
    $postlists = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from conteudo as p join imagens as c on p.imagem_id = c.id_imagem");
    
    while($serv = mysqli_fetch_assoc($resultado)) {
        array_push($postlists, $postlist);
    }
    return $postlists;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function ListaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query ($conexao, "select p.*, c.imagem as imagem_nome from produtos as p join imagens as c on p.imagem_id = c.id_imagem");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function ListaServs($conexao) {
    $servs = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from servicos as p join imagens as c on p.imagem_id = c.id_imagem");
    
    while($serv = mysqli_fetch_assoc($resultado)) {
        array_push($servs, $serv);
    }
    return $servs;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function ListaServsDestaques($conexao) {
    $servs = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from servicos as p join imagens as c on p.imagem_id = c.id_imagem LIMIT 0, 3");
    
    while($serv = mysqli_fetch_assoc($resultado)) {
        array_push($servs, $serv);
    }
    return $servs;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function inserePost($conexao, $titulo, $texto, $imagem, $categoria_id) {
    $query = "INSERT INTO conteudo (titulo, texto, imagem, categoria_id)
              VALUES ('{$titulo}', '{$texto}', '{$imagem}', '{$categoria_id}')";
    return mysqli_query($conexao, $query);
}

function alteraPost($conexao, $id, $titulo, $texto, $imagem, $categoria_id) {
    $query = "UPDATE conteudo SET titulo = '{$titulo}', texto = '{$texto}',
    imagem_id = '{$imagem}', categoria_id = {$categoria_id} where id_post = '{$id}'";
    return mysqli_query($conexao, $query);
}


function alteraServ($conexao, $id, $titulo, $detalhe, $img, $valor, $pacote) {
    $query = "UPDATE servicos SET titulo = '{$titulo}', detalhe = '{$detalhe}',
    imagem_id = '{$img}', valor = '{$valor}', pacote = '{$pacote}' where id_servico = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removePost ($conexao, $id) {
    $query = "delete from conteudo where id_post = {$id}";
    return mysqli_query($conexao, $query);
}

function removeServ ($conexao, $id) {
    $query = "delete from servicos where id_servico = {$id}";
    return mysqli_query($conexao, $query);
}

function listaCategorias ($conexao) {
    $categorias = array ();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria );
    }
    return $categorias;
}

function ListaImagem($conexao) {
    $imagens = array();
    $query = "select * from imagens";
    $resultado = mysqli_query($conexao,$query);
    while($imagem = mysqli_fetch_assoc($resultado)) {
        array_push($imagens, $imagem);
    }
    return $imagens;
}

function ListaImgServ($conexao, $id) {
    $imgs = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from servicos as p join imagens as c on p.imagem_id = c.id_imagem where id_servico = {$id}");
    while($img = mysqli_fetch_assoc($resultado)) {
        array_push($imgs, $img);
    }
    return $imgs;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function ListaImgProduto($conexao, $id) {
    $imgs = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from produtos as p join imagens as c on p.imagem_id = c.id_imagem where id = {$id}");
    while($img = mysqli_fetch_assoc($resultado)) {
        array_push($imgs, $img);
    }
    return $imgs;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function ListaImgPost($conexao, $id) {
    $imgs = array();
    $resultado = mysqli_query($conexao, "select p.*, c.imagem as imagem_nome from conteudo as p join imagens as c on p.imagem_id = c.id_imagem where id_post = {$id}");
    while($img = mysqli_fetch_assoc($resultado)) {
        array_push($imgs, $img);
    }
    return $imgs;
    //$resultado = mysqli_query($conexao, "select * from servicos");
}

function buscaPost($conexao, $id) {
    $query = "select * from conteudo where id_post = {$id}";
    $resultado = mysqli_query ($conexao, $query);
    return mysqli_fetch_assoc ($resultado);
}

function buscaServs($conexao, $id) {
    $query = "select * from servicos where id_servico = {$id}";
    $resultado = mysqli_query ($conexao, $query);
    return mysqli_fetch_assoc ($resultado);
}

function insereImagem($conexao, $novoNome) {
    $query = "INSERT INTO imagens (imagem)
              VALUES ('{$novoNome}')";
    return mysqli_query($conexao, $query);
}


function insereServ($conexao, $titulo, $detalhe, $img, $valor, $pacote) {
    $query = "INSERT INTO servicos (titulo, detalhe, imagem_id, valor, pacote)
              VALUES ('{$titulo}', '{$detalhe}', '{$img}', '{$valor}', {$pacote})";
    return mysqli_query($conexao, $query);
}

function insereProduto($conexao, $nome, $descricao, $img, $preco, $site) {
    $query = "INSERT INTO produtos (nome, descricao, imagem_id, preco, postar) 
            VALUES ('{$nome}', '{$descricao}', '{$img}', '{$preco}', {$site})";
    return mysqli_query($conexao, $query);
}

function buscaProdutos($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query ($conexao, $query);
    return mysqli_fetch_assoc ($resultado);
}

function alteraProduto($conexao, $id, $nome, $descricao, $img, $preco, $site) {
    $query = "UPDATE produtos SET nome = '{$nome}', descricao = '{$descricao}',
    imagem_id = '{$img}', preco = '{$preco}', postar = '{$site}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}
