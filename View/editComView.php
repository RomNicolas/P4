<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>

<div id="the-com">
<h2>Modifier un commentaire</h2>
<form id="modify-com" action="index.php?action=editComment&amp;id=<?= $comment['id'] ?>" method="post">
    <div>
        <p id="author2">Auteur : <?= $comment['author'] ?></p>
        <label for="comment"></label><br />
        <textarea id="comment" name="comment"><?= $comment['comment'] ?></textarea>
    </div>
    <div>
        <input type="submit" value="Modifier">
    </div>
</form>
</div>
  
<script> document.addEventListener('submit', function(){window.alert('Votre commentaire a été modifié')}); </script> 

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>