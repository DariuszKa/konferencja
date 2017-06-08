<?php
	session_start();
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	if ($_SESSION['AUTHOR_NAME']!='') {
		$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
		$allarticles=$articleMapper->find();
		$articles=array();
		foreach($allarticles as $article) {
			if ($article->REVIEWER_ID==$_SESSION['AUTHOR_ID']) $articles[]=$article;
		}
		$f3->set('articles',$articles);
		$f3->set('mode','reviewer');
		$template=new Template();
		echo $template->render('elements/reviewerTemplate.html');
		if ($_REQUEST['message']=='accessDenied') echo "Odmowa dostępu!";
	}
	else header('Location: login.php?message=accessDenied');