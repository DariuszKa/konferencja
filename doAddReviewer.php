<?php
session_start();
if ($_SESSION['MODE']=='ADMIN') {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"USERS");
	$mapper->copyfrom('POST');
	$mapper->save();
	header('Location: admin.php');
}
else header('Location: login.php?message=accessDenied');