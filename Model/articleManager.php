<?php

namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class ArticleManager extends Manager {

	public function getArticles() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 5');
		return $req;
	}

	public function getArticle($postId) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}
