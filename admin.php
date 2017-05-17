<?php
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
	$articles=$articleMapper->find();
	$f3->set('mode','admin');
	$f3->set('articles',$articles);
	$template=new Template();
	echo $template->render('elements/adminTemplate.html');