<?php $title = "Billet simple pour l'Alaska | Jean Forteroche"; ?>

<?php ob_start(); ?>

<h3 id="chapter">Les derniers épisodes :</h3>

<?php while ($data = $posts->fetch()) { ?>
    <div class="news">
        <h4>
            <?= $data['title'] ?> /
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h4>
        <p><?= $data['content'] ?>...</p>
    </div>
    <div>
        <em><a class="article-home" href="index.php?action=article&amp;id=<?= $data['id'] ?>">Lire la suite</a></em>
    </div>
    <div class="article-border"></div>

<?php } $posts->closeCursor(); ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>