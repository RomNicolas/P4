<?php

namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class PostManager extends Manager {
	public function getPosts() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 5');
		return $req;
	}