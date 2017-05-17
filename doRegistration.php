<?php
if (!empty($_REQUEST['LOGIN']) && !empty($_REQUEST['PASSWORD']) && !empty($_REQUEST['NAME']) && !empty($_REQUEST['DEGREE'])) {

	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"USERS");

	if ($mapper->load(array('LOGIN = ?',$_REQUEST['LOGIN']))!=FALSE) {
		header('Location: registration.php?message=alreadyExists');
	} //je¿eli ju¿ istnieje to nie rejestruj jeszcze raz
	else {
		$mapper->copyfrom('POST');
		$mapper->save();
		header('Location: login.php?message=newAuthor');
	} //dodaj nowego autora
}
else header('Location: registration.php?message=blank');