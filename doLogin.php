<?php
	$theLogin=$_REQUEST['login'];
	$thePass=$_REQUEST['pass'];

	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"REGISTRATIONS");
	$record=$mapper->load(array('LOGIN = ? and PASSWORD = ?',$theLogin,$thePass));
	if ($record!=FALSE) {
		if ($record->MODE=='ADMIN')
		header('Location: admin.php');
		else header('Location: author.php');
	}
	else {
		header('Location: login.php');
	}