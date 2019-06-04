<?php $title = 'Modifier un article'; ?>
<head>
	<script src="./Public/js/tinymce/tinymce.min.js"></script>
	<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=23bq6vwnrc2kbayhp4sqbemkz7wc9g8q5eml59zwytdo50hb"></script>
	<script src="https://cdn.tiny.cloud/1/23bq6vwnrc2kbayhp4sqbemkz7wc9g8q5eml59zwytdo50hb/tinymce/5/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({ selector: '#mytextarea' });
	</script>
</head>

<?php ob_start(); ?>

<h2 id="modify">Modifier l'article</h2>
<div id="divmodify">
	<?php while($datas = $modify->fetch()) { ?>
	<form method="post" action="index.php?id=<?= $datas['id'];?>&action=validModif">
		<label for="title">Titre : </label>
		<input type="text" name="title" value="<?= $datas['title'];?>">
		<textarea name="mytextarea" id="mytextarea">
		<?= $datas['content']; ?>
		</textarea> <?php } ?>
		<input type="submit" value="Modifier">
	</form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
