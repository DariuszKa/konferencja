<?php
session_start();
if ($_SESSION['MODE']=='REVIEWER' && isset($_REQUEST['ARTICLE_ID'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
	$articleMapper->load(array('ID=?',$_REQUEST['ARTICLE_ID']));
	if ($articleMapper->REVIEWER_ID!=$_SESSION['AUTHOR_ID']) header('Location: reviewer.php?message=accessDenied');
	else {
		$f3->set('articleid',$_REQUEST['ARTICLE_ID']);
		$f3->set('category',$articleMapper->CATEGORY_NAME);
		$f3->set('articlename',$articleMapper->ARTICLE_NAME);
		$template=new Template();
		echo $template->render('elements/editReviewTemplate.html');
	}
}
else header('Location: login.php?message=accessDenied');