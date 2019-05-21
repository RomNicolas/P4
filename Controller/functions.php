<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts() {
	$postManager = new \OpenClassrooms\Blog\Model\PostManager();
	$posts = $postManager->getPosts();
	require('view/frontend/listPostsView.php');
}