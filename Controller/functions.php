<?php

// Chargement des classes
require_once('model/articleManager.php');
require_once('model/commentManager.php');

function listArticles() {
	$postManager = new \OpenClassrooms\Blog\Model\ArticleManager();
	$posts = $postManager->getArticles();
	require('View/listArticlesView.php');
}

function article() {
	$postManager = new \OpenClassrooms\Blog\Model\ArticleManager();
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$post = $postManager->getArticle($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);
	require('View/articleView.php');
}

function addComment($postId, $author, $comment) {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$affectedLines = $commentManager->createComment($postId, $author, $comment);
	if ($affectedLines === false) {
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else {
		header('Location: index.php?action=article&id=' . $postId);
	}
}

function viewComment() {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$comment = $commentManager->getComment($_GET['id']);
	require('View/editComView.php');
}

function editComment($id, $comment) {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$newComment = $commentManager->updateComment($id, $comment);
	if ($newComment === false) {
		throw new Exception('Impossible de modifier le commentaire !');
	}
	else {
		echo 'commentaire : ' . $_POST['comment'];
		header('Location: index.php');
	}
}

function delComment($id) {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$deleteComment = $commentManager->deleteComment($id);
	if ($deleteComment === false) {
		throw new Exception('Impossible de modifier le commentaire !');
	}
	else {
		echo 'commentaire : ' . $_POST['comment'];
		header('Location: index.php');
	}
}

function reportComment($id) {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$reportComment = $commentManager->reportComment($id);
	if ($reportComment === false) {
		throw new Exception('Impossible de signaler le commentaire !');
	}
	else {
		header('Location: index.php');
	}
}