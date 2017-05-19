<?php
	session_start();
	if ($_SESSION['AUTHOR_NAME']!='' && isset($_REQUEST['ARTICLE_ID'])) {
		$f3 = require('fatfree/lib/base.php');
		$db = require('dbConnection.php');
		$articleMapper=new DB\SQL\Mapper($db,"ARTICLES");
		$articleMapper->load(array('ID=?',$_REQUEST['ARTICLE_ID']));
		if ($articleMapper->AUTHOR_ID==$_SESSION['AUTHOR_ID']) {
			$articleMapper->erase();
			header('Location: author.php?message=articleDeleted');
		}
		else header('Location: author.php?message=accessDenied');
	}
	else header('Location: login.php?message=accessDenied');