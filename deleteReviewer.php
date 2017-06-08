<?php
session_start();
if ($_SESSION['MODE']=='ADMIN' && isset($_REQUEST['REVIEWER_ID'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"USERS");
	$mapper->load(array('ID=?',$_REQUEST['REVIEWER_ID']));
	$mapper->erase();
	$armapper=new DB\SQL\Mapper($db,"ARTICLES");
	$articles=$armapper->find("REVIEWER_ID=".$_REQUEST['REVIEWER_ID']);
	foreach ($articles as $article) {
		$article->REVIEW_EVALUATION="";
		$article->REVIEWER_ID="";
		$article->update();
	}
	header('Location: admin.php?message=reviewerDeleted');
}
else header('Location: login.php?message=accessDenied');