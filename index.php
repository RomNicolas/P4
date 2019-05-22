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
		elseif($_GET['action'] == 'reportComment') {
			reportComment($_GET['id']);
		}
		elseif ($_GET['action'] == 'connexion') {
			connectAdmin();
		}
		elseif ($_GET['action'] == "administration") {
			if(!empty($_POST['name']) && !empty($_POST['password'])) {
				$pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
				if($_POST['name'] == "admin" && $pwd == password_verify('admin', $pwd)) {
					$_SESSION['name'] = $_POST['name'];
					/*header('Location: index.php?action=administration'); // permet d'éviter le souci de cache*/
					espaceAdmin();
				}
				else {
				echo 'mauvaise combinaison de connexion';
				$errors['connexion'] = "Mauvaise combinaison de connexion";
				}
			}
		}
		elseif (!empty($_SESSION['name'])) {
          espaceAdmin();
      }

	}else {
		listArticles();
	}

}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}