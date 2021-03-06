<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>

<p align="center"><b>Tematy prac:</b></p>
<table border=1 bgcolor="#ffffff">
<tr bgcolor="#dddddd"><th>L.p.</th><th>Tytuł</th><th>Kategoria</th><th>Recenzja</th><th>Praca</th><th></th></tr>

<?php foreach (($articles?:array()) as $article): ?>
<tr>
<td><?php echo $article->ID; ?></td>
<td><?php echo $article->ARTICLE_NAME; ?></td>
<td><?php echo $article->CATEGORY_NAME; ?></td>
<td><?php echo $article->REVIEW_EVALUATION; ?></td>
<td><a href="insertFile.php?ARTICLE_ID=<?php echo $article->ID; ?>">Wstaw/zmień plik</a> 
<a href="downloadFile.php?ARTICLE_ID=<?php echo $article->ID; ?>">Pobierz plik</a>
</td>
<td><a href="doDelete.php?ARTICLE_ID=<?php echo $article->ID; ?>">Usuń</a></td>
</tr>
<?php endforeach; ?>

</table>

<p><a href="newArticleForm.php">Dodaj artykuł</a></p>
<p><a href="doLogout.php">Wyloguj się</a></p>
<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>