<?php require('header.php') ?>
<?php require('footer.php') ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="Public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <header>
            <?= $header ?>
        </header>
    <?= $content ?>
        <footer>
            <?= $footer ?>
        </footer>
    </body>

</html>