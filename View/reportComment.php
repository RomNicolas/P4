<?php $title = "Modération des commentaires"; ?>

<?php ob_start(); ?>

<div id="moderate">
    <h2>Modération des commentaires</h2>
    <p>Si il n'y a aucun commentaire visible c'est qu'il n'y a pas de commentaire signalé !</p>
    <p>Sinon, voici la liste des possibles indésirés :</p>
</div>

<?php while ($datas = $moderateComments->fetch()) { ?>
    <?php if ($datas['report'] == 1) { ?>
    <div class="all-com">
        <p><strong><?= $datas['author']; ?></strong> le <?= $datas['date_creation'] ?></p>
        <p>
            <?= $datas['comment']; ?>
            <a href="index.php?action=viewComment&amp;id=<?= $datas['id'] ?>"> (modifier)</a> /
            <a href="index.php?action=delComment&amp;id=<?= $datas['id'] ?>">(supprimer)</a> 
            <?php } ?>
        </p>
    </div>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>