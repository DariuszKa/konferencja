<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<p><a href="doLogout.php">Wyloguj się</a></p>
<p>Termin recenzji upływa 2017-07-01</p>
<p align="center"><b>Tematy prac:</b></p>

<table border=1 bgcolor="#ffffff">
<tr bgcolor="#dddddd"><th>L.p.</th><th>Tytuł nauk.</th><th>Autor</th><th>Tytuł</th><th>Kategoria</th><th>Artykuł</th><th>Recenzent</th><th>Recenzja</th><th></th></tr>
<?php foreach (($articles?:array()) as $article): ?>
<tr>
<td><?php echo $article->ID; ?></td>
<td><?php echo $article->AUTHOR_DEGREE; ?></td>
<td><?php echo $article->AUTHOR_NAME; ?></td>
<td><?php echo $article->ARTICLE_NAME; ?></td>
<td><?php echo $article->CATEGORY_NAME; ?></td>
<td><a href="downloadFile.php?ARTICLE_ID=<?php echo $article->ID; ?>">Pobierz plik</a></td>
<td><?php echo $article->REVIEWER_ID; ?></td>
<td><?php echo $article->REVIEW_EVALUATION; ?></td>
<td><a href="setReviewer.php?ARTICLE_ID=<?php echo $article->ID; ?>">Wybierz recenzenta</a></td>
</tr>
<?php endforeach; ?>
</table>

<p align="center"><b>Recenzenci:</b></p>
<table border=1 bgcolor="#ffffff">
<tr bgcolor="#dddddd"><th>ID</th><th>stopień</th><th>imię i nazwisko</th><th>E-mail</th><th></th></tr>
<?php foreach (($reviewers?:array()) as $reviewer): ?>
<tr>
<td><?php echo $reviewer->ID; ?></td>
<td><?php echo $reviewer->DEGREE; ?></td>
<td><?php echo $reviewer->NAME; ?></td>
<td><?php echo $reviewer->E_MAIL; ?></td>
<td><a href="sendMailToReviewer.php?REVIEWER_ID=<?php echo $reviewer->ID; ?>">Wyślij e-mail</a>
<a href="deleteReviewer.php?REVIEWER_ID=<?php echo $reviewer->ID; ?>">Usuń</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<p>
<a href="addReviewer.php">Dodaj recenzenta</a>
</p>
<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>