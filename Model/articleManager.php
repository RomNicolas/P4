<?php

namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class ArticleManager extends Manager {

	//Recupère la liste des articles
	public function getArticles() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 5');
		return $req;
	}

	//Recupère un article
	public function getArticle($postId) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}

	//Recupère un article à modifier
	public function modifyArticle() {
		//SELECT
	}

	//Permet la création d'un article
	public function createArticle() {
		//INSERT
	}

	//Confirme la modification de l'article
	public function validateModifyArticle() {
		//UPDATE
	}

	//Confirme la suppression de l'article
	public function deleteArticle() {
		//DELETE
	}

}