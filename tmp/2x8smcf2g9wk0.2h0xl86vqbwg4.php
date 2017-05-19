<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>

<a href="registration.php">Rejestracja - załóż konto!</a>
<br>
<br>
<form action='doLogin.php' method='POST'>
Login: <input type="text" name="login"><br><br>
Hasło: <input type="password" name="pass"><br><br>
<input type="submit" value="Zaloguj się">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>