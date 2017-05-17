<?php
	$f3 = require('fatfree/lib/base.php');
	$template=new Template();
	echo $template->render('elements/loginTemplate.html');
	if ($_REQUEST['message']=="newAuthor") echo "Nowe konto użytkownika zostało dodane";
	if ($_REQUEST['message']=="wrongloginorpass") echo "Błędna nazwa użytkownika lub hasło";
