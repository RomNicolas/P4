<?php

require('controller/functions.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listArticles') {
			listArticles();
		}
		elseif ($_GET['action'] == 'article') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				article();
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
	}else {
		listArticles();
	}

}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}