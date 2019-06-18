<?php $title = 'Connexion || Admin'; ?>

<?php ob_start(); ?>

<h2 id="co-admin">Connexion administration</h2>
<div class="contact-form">
	<form id="co-form" method="post" action="index.php?action=administration">
		<p><input id="name" type="text" name="name" placeholder="Pseudo"></p>
		<p><input id="password" type="password" name="password" placeholder="Password"></p>
		<p><input type="submit" value="Se connecter" id="co-send"></p>
	</form>
</div>
               
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>