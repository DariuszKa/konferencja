<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Nowy artykuł</h2>
<form action='doNewArticle.php' method='POST'>
<input type="hidden" name="AUTHOR_ID" value="<?php echo $_SESSION['ID']; ?>">
<input type="hidden" name="AUTHOR_NAME" value="<?php echo $_SESSION['AUTHOR_NAME']; ?>">
<input type="hidden" name="AUTHOR_DEGREE" value="<?php echo $_SESSION['AUTHOR_DEGREE']; ?>">
Tytuł pracy: <input type="text" name="ARTICLE_NAME"><br>
Kategoria: <input type="text" name="CATEGORY_NAME"><br>
<input type="submit" value="Dodaj artykuł">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>