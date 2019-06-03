<?php ob_start(); ?>
<img src="./public/images/alaska.png">
<div id="title-home">
    <a href="index.php?action=connexion" id="connexion">Espace Administrateur</a>
	<a id="back" href="index.php">Liste des articles</a>
	<?php if (!empty($_SESSION['name'])) { ?>
		<a class="deconnexion" href="index.php?action=deconnexion">Déconnexion</a>
	<?php } else { ?>
		<a class="deconnexion" href="index.php?action=connexion">Connexion</a>
	<?php } ?>
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Jean Forteroche</h2>
</div>
<?php $header = ob_get_clean(); ?>

