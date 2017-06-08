<?php
if (isset($_REQUEST['ARTICLE_ID'])) {
	$id=$_REQUEST['ARTICLE_ID'];
	$pdo=new PDO('mysql:host=localhost;port=3306;dbname=CONFERENCE','root',''); 
	$sql='SELECT ARTICLE FROM ARTICLES WHERE ID=:ID;';
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(":ID"=>$id));
	$stmt->bindColumn(1,$file,PDO::PARAM_LOB);
	$stmt->fetch(PDO::FETCH_BOUND);
	header("Content-Disposition: attachment; filename=article.pdf");
	header("Content-Type: application/pdf");
	echo $file;
}
else header('Location: author.php');