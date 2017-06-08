<?php
session_start();
if ($_SESSION['MODE']=='ADMIN' && isset($_REQUEST['REVIEWER_ID']) && isset($_REQUEST['ARTICLE_ID'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
	$articleMapper->load(array('ID=?',$_REQUEST['ARTICLE_ID']));
	$articleMapper->REVIEWER_ID=$_REQUEST['REVIEWER_ID'];
	$articleMapper->REVIEW_EVALUATION='';
	$articleMapper->save();
	header('Location: admin.php');
}
else header('Location: login.php?message=accessDenied');