<?php
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
	
	$f3->set('mode','author');
	$template=new Template();
	echo $template->render('elements/authorTemplate.html');
	
	if ($_REQUEST['message']=="newArticle") echo "Nowy artykuł został dodany.";