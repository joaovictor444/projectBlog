<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app/Css/style.css">
    <title>Blog in Tecnology</title>
</head>
    <body>
        <?php
            require __DIR__.'/vendor/autoload.php';

            include __DIR__.'/includes/header.php';
            include __DIR__.'/includes/search.php';
            include __DIR__.'/includes/category.php';
            include __DIR__.'/includes/news.php';
            include __DIR__.'/includes/main.php';
            include __DIR__.'/includes/footer.php';
        ?>
    </body>
</html>
