<?php
	$f3 = require('fatfree/lib/base.php');
	$template=new Template();
	echo $template->render('elements/registrationTemplate.html');
	if ($_REQUEST['message']=="alreadyExists") echo "Użytkownik już istnieje!";
	if ($_REQUEST['message']=="blank") echo "Puste dane";
