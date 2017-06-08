<?php
	$theLogin=$_REQUEST['login'];
	$thePass=$_REQUEST['pass'];

	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"USERS");
	$record=$mapper->load(array('LOGIN = ? and PASSWORD = ?',$theLogin,$thePass));
	if ($record!=FALSE) {
		session_start();
		$_SESSION['AUTHOR_ID']=$record->ID;
		$_SESSION['AUTHOR_NAME']=$record->NAME;
		$_SESSION['AUTHOR_DEGREE']=$record->DEGREE;
		$_SESSION['MODE']=$record->MODE;
		if ($record->MODE=='ADMIN') header('Location: admin.php');
		else if ($record->MODE=='REVIEWER') header('Location: reviewer.php');
		else {
			header('Location: author.php');	
		}
	}
	else {
		header('Location: login.php?message=wrongloginorpass');
	}