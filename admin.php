<?php
	session_start();
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	if ($_SESSION['AUTHOR_NAME']!='') {
		$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
		$articles=$articleMapper->find();
		$f3->set('mode','admin');
		$f3->set('articles',$articles);
		$template=new Template();
		echo $template->render('elements/adminTemplate.html');
	}
	else header('Location: login.php?message=accessDenied');