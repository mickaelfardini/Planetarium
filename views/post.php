<?php
if (!isConnected()) {
    header('Location: ./index.php?page=news');
}
?>

<?php
include('includes/header.php');
include('includes/banner.php');
?>

<div class="container">

	<form method="post" action="">
		<div class="form-group">
			<label for="title">Titre :</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label for="content">Contenu :</label>
			<textarea name="content" class="form-control" name="content" cols="30" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label for="imgurl">Url de l'image :</label>
			<input type="text" class="form-control" name="imgurl">
		</div>

		<button type="submit" class="btn btn-primary">Envoyer</button>
	</form> 
</div>

<?php
if(isset($_POST["content"]) && isset($_POST["title"]) && isset($_POST["imgurl"]))
{
	$postArray = array($_POST['title'], $_POST['content'], $_POST['imgurl']);
	upImg($postArray);
}
?>

<?php
include('includes/footer.php')
?>