<?php 
    session_start();
    include __DIR__.'../../app/Php/Operations.php';
?>
<section id="contentCategory" class="contentCategory">
    <h1>CATEGORIA DE CURSOS</h1>
    <ul id="linksCategory" class="linksCategory">
        <?php 
            while($rowResulted = $queryCtg->fetch(PDO::FETCH_ASSOC)){
                extract($rowResulted);
                $name_category = $rowResulted['name_category'];
        ?> 
        <li><a href="#"><?php echo($name_category); ?></a></li>
        <?php } ?>
    </ul><!-- end class linksCategory -->
</section><!-- end class contentCategory -->