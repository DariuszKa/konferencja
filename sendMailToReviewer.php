<?php
session_start();
if ($_SESSION['MODE']=='ADMIN' && isset($_REQUEST['REVIEWER_ID'])) {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$mapper=new DB\SQL\Mapper($db,"USERS");
	$mapper->load(array('ID=?',$_REQUEST['REVIEWER_ID']));
	$mailAddress=$mapper->E_MAIL;
	$subject="Zaproszenie do recenzji!";
	$msg1="Drogi Panie/Pani ".$mapper->DEGREE." ".$mapper->NAME."\n";
	$msg2="Chcielibyśmy zaprosić Pana/Panią do recenzowania naszych artykułów naukowych.\n";
	$msg3="Proszę zajrzeć na stronę www.konferencja.com.\n";
	$msg4="Pana/Pani login: ".$mapper->LOGIN."\nPana/Pani hasło: ".$mapper->PASSWORD."\nZ poważaniem.\nOrganizatorzy konferencji.";
	$msg=$msg1.$msg2.$msg3.$msg4;
	//mail($mailAddress,$subject,$msg);
	header('Location: admin.php?message=mailSent');
}
else header('Location: login.php?message=accessDenied');