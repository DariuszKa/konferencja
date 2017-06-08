<?php
session_start();
if ($_SESSION['AUTHOR_NAME']!='') {
	if (!empty($_FILES['FILE_NAME'])) {
		$id=$_REQUEST['ARTICLE_ID'];
		$f=$_FILES['FILE_NAME'];
		$filename=$f['tmp_name'];
		$blob=fopen($filename,'rb');
		$mysqli=new mysqli('localhost','root','','conference');
		$stmt=$mysqli->prepare("UPDATE articles SET ARTICLE=? WHERE ID=?");
		$stmt->bind_param("bi", $blob, $id);
		while (!feof($blob)) {
			$stmt->send_long_data(0, fread($blob,8192));
		}
		fclose($blob);
		$stmt->execute();
		header('Location: author.php?message=fileInserted');
	}
	else header('Location: author.php?message=blank');
}
else header('Location: login.php?message=accessDenied');