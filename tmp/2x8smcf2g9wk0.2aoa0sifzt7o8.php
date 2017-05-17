<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Nowy artykuł</h2>
<form action='doNewArticle.php' method='POST'>
<input type="hidden" name="AUTHOR_ID" value="1">
Stopień naukowy: <input type="text" name="DEGREE"><br>
Imię i nazwisko: <input type="text" name="AUTHOR_NAME"><br>
Tytuł pracy: <input type="text" name="ARTICLE_NAME"><br>
Kategoria: <input type="text" name="CATEGORY_NAME"><br>
<input type="submit" value="Dodaj artykuł">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>