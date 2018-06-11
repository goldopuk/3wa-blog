<?php


function getConnection() {
	$user = 'root';
	$password = 'troiswa';

	$db = new PDO(
		'mysql:host=localhost;dbname=myblog', 
		$user, 
		$password,
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
	);

	$db->exec('SET NAMES UTF8');

	return $db;
}


function saveArticle(array $article) {

	writeLog('save Article');
	writeLog($article);

	$article['content'] = strip_tags($article['content'], "<p>");

	$db = getConnection();

	$sql = "
	INSERT INTO article 
	(id, title, content, created_at, updated_at, author_id, category_id)
	VALUES (NULL, :title, :content, NOW(), NOW(), :author_id, :category_id)";

	$statement = $db->prepare($sql);

	$statement->execute($article);
}

function getCategoryList() {

	$db = getConnection();

	$sql = "SELECT * FROM category ORDER BY name";

	$statement = $db->prepare($sql);

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getArticleList() {

	$db = getConnection();

	$sql = "SELECT * FROM article ORDER BY updated_at DESC";

	$statement = $db->prepare($sql);

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function getAuthorList() {

	$db = getConnection();

	$sql = "SELECT * FROM author ORDER BY lastname";

	$statement = $db->prepare($sql);

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_ASSOC);
}
