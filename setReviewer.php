<?php
session_start();
if ($_SESSION['MODE']=='ADMIN' && isset($_REQUEST['ARTICLE_ID'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$artid=$_REQUEST['ARTICLE_ID'];
	$usersMapper=new DB\SQL\Mapper($db,"USERS");
	$users=$usersMapper->find();
	$reviewers=array();
	foreach ($users as $user) {
		if ($user->MODE=='REVIEWER') $reviewers[]=$user;
	}
	$f3->set('reviewers',$reviewers);
	$f3->set('ARTID',$artid);
	$template=new Template();
	echo $template->render('elements/setReviewerTemplate.html');
}
else header('Location: login.php?message=accessDenied');