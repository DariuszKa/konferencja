<?php
	session_start();
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	if ($_SESSION['AUTHOR_NAME']!='') {
		$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
		$articles=$articleMapper->find();
		$f3->set('mode','admin');
		$f3->set('articles',$articles);
		$usersMapper=new DB\SQL\Mapper($db,"USERS");
		$users=$usersMapper->find();
		$reviewers=array();
		foreach ($users as $user) {
			if ($user->MODE=='REVIEWER') $reviewers[]=$user;
		}
		$f3->set('reviewers',$reviewers);
		$template=new Template();
		echo $template->render('elements/adminTemplate.html');
		if ($_REQUEST['message']=="mailSent") echo "Wysłano e-maila z powiadomieniem do recenzenta.";
	}
	else header('Location: login.php?message=accessDenied');
	