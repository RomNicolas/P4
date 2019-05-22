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
		elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (!empty($_POST['author']) && !empty($_POST['comment'])) {
					addComment($_GET['id'], $_POST['author'], $_POST['comment']);
				}
				else {
					throw new Exception('Tous les champs ne sont pas remplis !');
				}
			} else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'viewComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewComment();
			}
			else {
				throw new Exception('Aucun commentaire trouvé !');
			}
		}
		elseif ($_GET['action'] == 'editComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (!empty($_POST['comment'])) {
					editComment($_GET['id'], $_POST['comment']);  
				}
				else {
					throw new Exception('Tous les champs ne sont pas remplis !');
				}
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'delComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				delComment($_GET['id']);
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