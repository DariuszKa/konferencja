<?php
session_start();
if ($_SESSION['AUTHOR_NAME']!='') {
	if (isset($_REQUEST['ARTICLE_ID'])) {
		$f3 = require('fatfree/lib/base.php');
		$template=new Template();
		$_SESSION['ARTICLE_ID']=$_REQUEST['ARTICLE_ID'];
		echo $template->render('elements/insertFileTemplate.html');
	}
	else header('Location: author.php?message=accessDenied');
}
else header('Location: login.php?message=accessDenied');