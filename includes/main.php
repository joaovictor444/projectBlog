<?php 
    include __DIR__.'../../app/Php/Operations.php';
?>
<section id="contentReturn" class="contentReturn">
    <?php 
        while($rowResulted = $queryMain->fetch(PDO::FETCH_ASSOC)){ 
            extract($rowResulted);
            $title_content = $rowResulted['title_content'];
            $imagem_content = $rowResulted['image_content'];
            $description_content = $rowResulted['description_content'];
    ?>
    <section id="cardContentPage" class="cardContentPage">
        <h1><?php echo($title_content); ?></h1>
        <img src="<?php echo($imagem_content); ?>" alt="Imagem do Conteúdo">
        <p><?php echo($description_content); ?></p>
    </section><!-- end class cardContentPage -->
    <?php } ?>
</section><!-- end class contentReturn -->