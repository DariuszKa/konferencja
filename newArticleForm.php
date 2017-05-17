<?php
	$f3 = require('fatfree/lib/base.php');
	$template=new Template();
	echo $template->render('elements/newArticleTemplate.html');
	
	if ($_REQUEST['message']=="blank") echo "Puste dane!";