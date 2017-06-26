<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<p align="center"><b>Wybierz recenzenta:</b></p>

<table border=1 bgcolor="#ffffff">
<tr bgcolor="#dddddd"><th>ID</th><th>stopień</th><th>imię i nazwisko</th><th>E-mail</th><th></th></tr>
<?php foreach (($reviewers?:array()) as $reviewer): ?>
<tr>
<td><?php echo $reviewer->ID; ?></td>
<td><?php echo $reviewer->DEGREE; ?></td>
<td><?php echo $reviewer->NAME; ?></td>
<td><?php echo $reviewer->E_MAIL; ?></td>
<td><a href="doSetReviewer.php?REVIEWER_ID=<?php echo $reviewer->ID; ?>&ARTICLE_ID=<?php echo $ARTID; ?>">Wybierz recenzenta</a></td>
</tr>
<?php endforeach; ?>
</table>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>