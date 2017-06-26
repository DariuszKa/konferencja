<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Wstaw plik</h2>
<form name="form" action='doInsertFile.php' method='POST' enctype='multipart/form-data'>
<input type="hidden" name="ARTICLE_ID" value="<?php echo $_SESSION['ARTICLE_ID']; ?>">
Plik: <input type="file" name="FILE_NAME" id="fn">
<input type="submit" value="Wstaw plik">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>