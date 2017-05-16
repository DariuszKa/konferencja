<?php
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$f3->set('mode','admin');
	$template=new Template();
	echo $template->render('elements/adminTemplate.html');