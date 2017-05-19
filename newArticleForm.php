<?php
	session_start();
	if ($_SESSION['AUTHOR_NAME']!='') {
		$f3 = require('fatfree/lib/base.php');
		$template=new Template();
		echo $template->render('elements/newArticleTemplate.html');
		if ($_REQUEST['message']=="blank") echo "Puste dane!";
	}
	else header('Location: login.php?message=accessDenied');