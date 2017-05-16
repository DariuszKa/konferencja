<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<p><a href="login.php">Wyloguj się</a></p>
<p>Termin recenzji upływa 2017-06-10</p>
<p align="center"><b>Tematy prac:</b></p>
<table border=1>
<tr><th>L.p.</th><th>Tytuł nauk.</th><th>Autor</th><th>Tytuł</th><th>Kategoria</th><th>Recenzent</th><th>Ocena recenzji (1-5)</th></tr>
<tr><td>1</td><td>Prof. dr hab.</td><td>Tony Halik</td><td>"Zachowania ludów pierwotnych podczas migracji"</td><td>Etnologia</td><td>Recenzent 1</td><td>4.0</td></tr>
<tr><td>2</td><td>Prof. dr hab.</td><td>Alfred Miodowicz</td><td>"Wpływ dżdżownic na kultywację gruntów"</td><td>Biologia</td><td>Recenzent 2</td><td>4.0</td></tr>
<tr><td>3</td><td>dr hab.</td><td>Marek Belka</td><td>"Podatki dla opornych"</td><td>Ekonomia</td><td>Recenzent 3</td><td>1.0</td></tr>
<tr><td>4</td><td>prezenter</td><td>Krzysztof Ibisz</td><td>"Jak wyglądać jeszcze lepiej po 50-tce"</td><td>Zdrowie i uroda</td><td>Recenzent 4</td><td>5.0</td></tr>
</table>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>