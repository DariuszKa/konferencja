<?php
	session_start();
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	if ($_SESSION['AUTHOR_NAME']!='') {
		$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
		$allarticles=$articleMapper->find();
		$articles=array();
		foreach($allarticles as $article) {
			if ($article->AUTHOR_ID==$_SESSION['AUTHOR_ID']) $articles[]=$article;
		} //filtrowanie artykułów, mając dane $_SESSION['AUTHOR_ID']
		$f3->set('articles',$articles);
		$f3->set('mode','author');
		$template=new Template();
		echo $template->render('elements/authorTemplate.html');
		if ($_REQUEST['message']=="newArticle") echo "Nowy artykuł został dodany.";
		if ($_REQUEST['message']=="articleDeleted") echo "Artykuł został usunięty.";
		if ($_REQUEST['message']=="accessDenied") echo "Odmowa dostępu!";
	}
	else header('Location: login.php?message=accessDenied');