<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Edycja recenzji</h2>
<p>
Kategoria: <?php echo $category; ?><br>
Artykuł: <?php echo $articlename; ?>
</p>
<form action="doEditReview.php" method="POST" id="erform">
<input type="hidden" name="ARTICLE_ID" value="<?php echo $articleid; ?>">
Recenzja: <textarea name="REVIEW_EVALUATION" form="erform">
</textarea>
<br><br>
<input type="submit" value="Edytuj recenzję">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>