<?php
include '../bootstrap.php';

$articleId = myGet('id');

$article = getArticleById($articleId);

include '../views/editArticle.phtml';