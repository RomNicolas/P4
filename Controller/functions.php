<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listArticles() {
	$postManager = new \OpenClassrooms\Blog\Model\PostManager();
	$posts = $postManager->getPosts();
	require('View/listArticlesView.php');
}

function post() {
	$postManager = new \OpenClassrooms\Blog\Model\PostManager();
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);
	require('View/articleView.php');
}