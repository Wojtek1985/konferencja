<?php echo $this->render('elements/_header.html',$this->mime,get_defined_vars(),0); ?>
<h2>Nowa rejestracja</h2>
Możesz zarejestrować się tylko jako autor.
<form action='doRegistration.php' method='POST'>
Login: <input type="text" name="LOGIN"><br>
Hasło: <input type="password" name="PASSWORD"><br>
<input type="hidden" name="MODE" value="AUTHOR">
<input type="submit" value="Zarejestruj się">
</form>

<?php echo $this->render('elements/_footer.html',$this->mime,get_defined_vars(),0); ?>