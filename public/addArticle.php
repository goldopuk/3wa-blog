<?php

include '../bootstrap.php';

$article = [];

$article['content'] = $_POST['content'];
$article['title'] = $_POST['title'];
$article['category_id'] = $_POST['category_id'];
$article['author_id'] = $_POST['author_id'];

saveArticle($article);


header('Location: home.php');
