<?php $title = 'Espace Admin'; ?>

<?php ob_start(); ?>
<div id="space"></div>

<?php if(empty($_SESSION['name'])) {
    session_start(); } ?>

<div id="title-admin">
    <h2>Administration</h2>
    <p>Bonjour Mr <em id="author-admin"><?= $_SESSION['name']; ?></em></p>
</div>

<?php
    while($datas = $posts->fetch()) {
?>

<table id="table">
    <tbody>
        <tr>
            <td><?= $datas['title'];?></td>
            <td><a href="index.php?id=<?= $datas['id'];?>&action=article">Lire</a></td>
            <td><a href="index.php?id=<?= $datas['id'];?>&action=modifyArticle">Modifier</a></td>
            <td><a href="index.php?id=<?= $datas['id'];?>&action=deleteArticle">Supprimer</a></td>
        </tr>
    </tbody>
</table>

<?php } ?>

<div id="createArticle">
    <a href="index.php?action=createArticle">Création d'un article</a>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
