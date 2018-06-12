<?php
include '../bootstrap.php';

$article = [];

$article['title'] = $_POST['title'];
$article['content'] = $_POST['content'];
$article['category_id'] = $_POST['category_id'];
$article['author_id'] = $_POST['author_id'];
$article['id'] = $_POST['article_id'];

saveArticle($article);

writeLog('Redirection vers admin.php');
header('Location: admin.php');