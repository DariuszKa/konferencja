<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

session_start();
if ($_SESSION['MODE']=='ADMIN') {
	$f3 = require('fatfree/lib/base.php');
	$db = require('dbConnection.php');
	$usersMapper=new DB\SQL\Mapper($db,"USERS");
	$users=$usersMapper->find();
	$nPass=generateRandomString();
	$nLogin=generateRandomString();
	$isNewLogin=true;
	do {
		$nLogin=generateRandomString();
		foreach ($users as $user) {
			if ($user->LOGIN==$nLogin) $isNewLogin=false;
		}
	}
	while ($isNewLogin!=true);
	$f3->set('newLogin',$nLogin);
	$f3->set('newPassword',$nPass);
	$template=new Template();
	echo $template->render('elements/addReviewerTemplate.html');
}
else header('Location: login.php?message=accessDenied');