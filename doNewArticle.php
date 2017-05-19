<?php
session_start();
if ($_SESSION['AUTHOR_NAME']!='') {
	if (!empty($_REQUEST['ARTICLE_NAME']) && !empty($_REQUEST['CATEGORY_NAME'])) {
		$f3 = require('fatfree/lib/base.php');
		$db = require('dbConnection.php');
		$mapper=new DB\SQL\Mapper($db,"ARTICLES");
		$mapper->copyfrom('POST');
		$mapper->save();
		header('Location: author.php?message=newArticle');
	}
	else header('Location: newArticleForm.php?message=blank');
}
else header('Location: login.php?message=accessDenied');