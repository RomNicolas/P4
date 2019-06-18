<?php

namespace OpenClassrooms\Blog\Model;
require_once("Manager.php");

class ArticleManager extends Manager {

	//Récupère la liste des articles
	public function getArticles() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, SUBSTRING(content,1,500) AS content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY date_creation DESC');
		return $req;
	}

	//Récupère un article
	public function getArticle($postId) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}

	//Récupère un article à modifier
	public function modifyArticle($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute(array($id));
        return $req;
    }

	//Permet la création d'un article
	public function createArticle() {
		$bd = $this->dbConnect();
		$req = $bd->prepare('INSERT INTO articles (author, title, content, date_creation, date_modification) VALUES ("Jean Forteroche", :title, :content, NOW(), NOW())');
		$req->execute(array('title' => $_POST['title'], 'content' => $_POST['createtextarea'] ));
        return $req;
	}

	//Confirme la modification de l'article
    public function valideModifArticle($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE articles SET title = :title, content = :content, date_modification = NOW() WHERE id = :id');
        $req->execute(array('title' => $_POST['title'], 'content' => $_POST['mytextarea'], 'id' => $_GET['id'] ));
        return $req;
    }

	//Confirme la suppression de l'article
	public function deleteArticle($id) {	
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM articles WHERE id = ?');
		$deleteArticle = $req->execute(array($id));
		return $deleteArticle;
	}

}