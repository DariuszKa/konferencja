<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<p><a href="doLogout.php">Wyloguj się</a></p>
<p>Termin recenzji upływa 2017-06-10</p>
<p align="center"><b>Tematy prac:</b></p>
<table border=1 bgcolor="#ffffff">
<tr bgcolor="#dddddd"><th>L.p.</th><th>Tytuł nauk.</th><th>Autor</th><th>Tytuł</th><th>Kategoria</th><th>Recenzent</th><th>Ocena recenzji (1-5)</th><th></th></tr>

<?php foreach (($articles?:array()) as $article): ?>
<tr>
<td><?php echo $article->ID; ?></td>
<td><?php echo $article->AUTHOR_DEGREE; ?></td>
<td><?php echo $article->AUTHOR_NAME; ?></td>
<td><?php echo $article->ARTICLE_NAME; ?></td>
<td><?php echo $article->CATEGORY_NAME; ?></td>
<td><?php echo $article->REVIEWER_ID; ?></td>
<td><?php echo $article->REVIEW_EVALUATION; ?></td>
<td></td>
</tr>
<?php endforeach; ?>

</table>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>