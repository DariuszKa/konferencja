<?php
session_start();
if ($_SESSION['MODE']=='REVIEWER' && isset($_REQUEST['ARTICLE_ID']) && isset($_REQUEST['REVIEW_EVALUATION'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
	$articleMapper->load(array('ID=?',$_REQUEST['ARTICLE_ID']));
	if ($articleMapper->REVIEWER_ID!=$_SESSION['AUTHOR_ID']) header('Location: reviewer.php?message=accessDenied');
	else {
		$articleMapper->REVIEW_EVALUATION=$_REQUEST['REVIEW_EVALUATION'];
		$articleMapper->save();
		header('Location: reviewer.php');
	}
}
else header('Location: login.php?message=accessDenied');