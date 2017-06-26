<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Nowy recenzent</h2>
<form action='doAddReviewer.php' method='POST'>
Login: <?php echo $newLogin; ?> <br><br>
Hasło: <?php echo $newPassword; ?> <br><br>
<input type="hidden" name="LOGIN" value="<?php echo $newLogin; ?>">
<input type="hidden" name="PASSWORD" value="<?php echo $newPassword; ?>">
Imię i nazwisko: <input type="text" name="NAME"><br><br>
Stopień naukowy: <input type="text" name="DEGREE"><br><br>
Adres e-mail: <input type="text" name="E_MAIL"><br><br>
<input type="hidden" name="MODE" value="REVIEWER">
<input type="submit" value="Utwórz konto recenzenta">
</form>
<p>
<a href="admin.php">Wycofaj</a>
</p>
<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>