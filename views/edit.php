<?php
if (!isConnected() || !isAdmin($_COOKIE['username'])) {
    header('Location: ./index.php?page=news');
}

if (isset($_POST) AND $_POST != NULL) {
		$idNews = idNews(array_keys($_POST));
	}
	else {
		die('NON');
	}
?>


<?php
include('includes/header.php');
include('includes/banner.php');
?>

<div class="container">
<?php
foreach ($idNews as $key) {
	echo '<form method="post" action="">
		<div class="form-group">
			<label for="id">ID :</label>
			<input type="text" class="form-control disabled" name="id" value="' . $key['id'] . '">
		</div>
		<div class="form-group">
			<label for="title">Titre :</label>
			<input type="text" class="form-control" name="title" value="' . $key['title'] . '">
		</div>
		<div class="form-group">
			<label for="content">Contenu :</label>
			<textarea name="content" class="form-control" name="content" cols="30" rows="10">' . $key['content'] . '</textarea>
		</div>
		<div class="form-group">
			<label for="imgurl">Url :</label>
			<input type="text" class="form-control" name="imgurl" value="' . $key['imgurl'] . '">
		</div>

		<button type="submit" class="btn btn-primary">Envoyer</button>
	</form>';
} ?>
</div>

<?php
if(isset($_POST["content"]) && isset($_POST["title"]) && isset($_POST["imgurl"]))
{
	$postArray = array($_POST['title'], $_POST['content'], $_POST['imgurl'], $_POST['id']);
	updateEdit($postArray);
}
?>

<?php
include('includes/footer.php')
?>