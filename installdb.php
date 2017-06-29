<?php
$conn1=mysqli_connect('localhost','root','');
$stmt1="CREATE DATABASE IF NOT EXISTS CONFERENCE DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
$qry1=mysqli_query($conn1,$stmt1);
if (!$qry1) {
	echo "Błąd1, baza nie została utworzona<br>";
	}
	else {
		echo "OK1<br> ";
		$conn2=mysqli_connect('localhost','root','','CONFERENCE');
		  $stmt2="CREATE TABLE IF NOT EXISTS ARTICLES(ARTICLE LONGBLOB, AUTHOR_DEGREE TEXT, AUTHOR_NAME TEXT, ID INTEGER PRIMARY KEY AUTO_INCREMENT, AUTHOR_ID NUMERIC, ARTICLE_NAME TEXT, CATEGORY_NAME TEXT, REVIEWER_ID NUMERIC, REVIEW_EVALUATION TEXT);";
		$qry2=mysqli_query($conn2,$stmt2);
		if (!$qry2) {
			echo "Błąd2, tabela nie została utworzona<br>";
		}
		else {
			echo "OK2<br> ";
			$conn3=mysqli_connect('localhost','root','','CONFERENCE');
			$stmt3="CREATE TABLE IF NOT EXISTS USERS (E_MAIL TEXT, DEGREE TEXT, NAME TEXT, MODE TEXT, PASSWORD TEXT, LOGIN TEXT, ID INTEGER PRIMARY KEY AUTO_INCREMENT);";
			$qry3=mysqli_query($conn3,$stmt3);
			if (!$qry3) {
				echo "Błąd3, tabela nie została utworzona<br>";
			}
			else {
				echo "OK3<br> ";
				$conn4=mysqli_connect('localhost','root','','conference');
				$stmt4="REPLACE INTO USERS VALUES('-','-','-','ADMIN','admin','admin',1);";
				$qry4=mysqli_query($conn4,$stmt4);
				if (!$qry4) {
					echo "Błąd4, insert nie został wykonany<br>";
				}
				else {
					echo "OK4<br> ";
					$conn5=mysqli_connect('localhost','root','','conference');
					$stmt5="SET GLOBAL max_allowed_packet=10073741824;";
					$qry5=mysqli_query($conn5,$stmt5);
					if (!$qry5) {
						echo "Błąd5, set nie został wykonany<br>";
					}
					else echo "OK5<br><a href='login.php'>Przejdź do logowania</a>";
				}
			}
		}
	}