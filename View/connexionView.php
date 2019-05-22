<?php $title = 'Connexion || Admin'; ?>

<?php ob_start(); ?>

<p><a href="index.php">Retour à la liste des billets</a></p>

<h2>Administration</h2>
<div class="contact-form">
	<form method="post" action="index.php?action=administration">
		<p><input id="name" type="text" name="name" placeholder="Name"></p>
		<p><input id="password" type="password" name="password"></p>
		<p><input type="submit" value="Se connecter"></p>
	</form>
</div>
               
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>