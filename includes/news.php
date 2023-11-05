<?php 
    include __DIR__.'../../app/Php/Operations.php';
?>
<section id="newsContent" class="newsContent">
    <?php
        while($rowResulted = $queryCnt->fetch(PDO::FETCH_ASSOC)){
            extract($rowResulted);
            $id_content = $rowResulted['id_content'];
            $image_content = $rowResulted['image_content'];
            $title_content = $rowResulted['title_content'];
        ?>
            <a href="https://page_content.php?id_content=<?php echo $id_content; ?>" name="submitButton" id="id_content" class="id_content">
                <section id="singleCardNew" class="singleCardNew">
                        <img src="<?php echo $image_content; ?>" alt="foto de curso de Programação">
                        <p><?php echo $title_content; ?></p>
                    </section><!-- end class singleCardNew -->
                </a>
            <?php
        }
    ?>
</section><!-- end class newsContent -->