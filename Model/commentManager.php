<?php

namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class CommentManager extends Manager
{

	//Récupère les commentaires d'un article
    public function getComments($postId) {
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id_article = ? ORDER BY date_creation DESC');
		$comments->execute(array($postId));
		return $comments;
	}

	//Récupère un commentaire pour pouvoir le modifier
	public function getComment($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
		$req->execute(array($id));
		$comment = $req->fetch();
		return $comment;
	}

	//Permet la création d'un commentaire
	public function createComment($postId, $author, $comment) {
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(id_article, author, comment, date_creation) VALUES(?, ?, ?, NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));
		return $affectedLines;
	}

	//Confirme la modification du commentaire
	public function updateComment($id, $comment) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET comment = ?, date_creation = NOW() WHERE id = ?');
		$newComment = $req->execute(array($comment, $id));
		return $newComment;
	}

	//Confirme la suppression du commentaire
	public function deleteComment($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$deleteComment = $req->execute(array($id));
		return $deleteComment;
	}

	//Confirme le signalement du commentaire
	public function reportComment($id) {
		$db = Manager::connectionBdd();
		$comments = $pdo->prepare('UPDATE comments SET report = 1 WHERE id = ?');
		$comments->execute(array($id));
		return $comments;
    }

	//Récupère les commentaires qui ont été signalés
	public function reportComments() {
		//SELECT
	}

}