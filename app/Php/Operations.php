<?php
    include __DIR__.'/Connection.php';
    try{
        $queryCtg = $dbConnect->prepare("SELECT name_category FROM category_register_tbl");
        $queryCtg->execute();
    }catch(PDOException $e){
        echo("Falha ao recuperar os registros da tabela de Categorias: " . $e->getMessage());
    }

    try{
        $queryCnt = $dbConnect->prepare("SELECT id_content, image_content, title_content FROM content_register_tbl");
        $queryCnt->execute();
    }catch(PDOException $e){
        echo("Falha ao recuperar os registros da tabela de Conteúdo de Novidades : " . $e->getMessage());
    }

    try{
        $queryMain = $dbConnect->prepare("SELECT * FROM content_register_tbl ORDER BY id_content ASC");
        $queryMain->execute();
    }catch(PDOException $e){
        echo("Falha ao recuperar os registros da tabela de Conteúdo de Notícias : " . $e->getMessage());
    }
?>