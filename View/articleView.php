<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div id="back-index"></div>
<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    <?= $post['content'] ?>
</div>

<h2 id="com">Commentaires</h2>
<form id="form-com" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author"></label><br />
        <input type="text" id="author" name="author" placeholder="Pseudo" />
    </div>
    <div>
        <label for="comment"></label><br />
        <textarea id="comment" name="comment" placeholder="Votre commentaire"></textarea>
    </div>
    <div>
        <input type="submit"/>
    </div>
</form>

<?php while ($comment = $comments->fetch()) { ?>

<div class="all-com">
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p>
    	<?= nl2br(htmlspecialchars($comment['comment'])) ?>
    	<a href="index.php?action=viewComment&amp;id=<?= $comment['id'] ?>"> (modifier)</a> /
    	<a href="index.php?action=reportComment&amp;id=<?= $comment['id'] ?>"> (signaler)</a>
    </p>
</div>

<?php } ?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
