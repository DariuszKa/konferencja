<?php
if (!empty($_REQUEST['LOGIN']) && !empty($_REQUEST['PASSWORD'])) {

	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"REGISTRATIONS");

	if ($mapper->load(array('LOGIN = ?',$_REQUEST['LOGIN']))!=FALSE) {
		header('Location: registration.php');
	} //je¿eli ju¿ istnieje to nie rejestruj jeszcze raz
	else {
		$mapper->copyfrom('POST');
		$mapper->save();
		header('Location: login.php');
	} //dodaj nowego autora
}
else header('Location: registration.php');