<?php
include('includes/header.php');
include('includes/banner.php');
?>

<?php
if (isset($_COOKIE['username'])) {
    header('Location: ./index.php?page=news');
    return true;
}
?>
<div class="container text-center">	
	<h2>Enregistrement</h2>
	<form action="" method="POST" class="mb-5">
		<div class="form-group">
			<label for="InputUser">Identifiant</label>
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		
		<div class="form-group">
			<label for="InputPswd">Mot de Passe</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>

		<div class="form-group">
			<label for="InputPswd2">Mot de Passe</label>
			<input type="password" class="form-control" name="password2" placeholder="Retype your password">
		</div>
		<input type="submit" class="btn btn-primary" />
	</form>
</div>

<?php

if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){
	//On vérifie que password et password2 sont identiques
	if($_POST["password"] == $_POST["password2"]){
		$postArray = array($_POST['username'], $_POST['password']);
	register($postArray);
	} 
}
?>

<?php
include('includes/footer.php')
?>