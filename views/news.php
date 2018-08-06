<?php
include('includes/header.php');
include('includes/banner.php');

?>

    <div class="container">
        <div class="row">

            <?php

            if (isset($_GET['id']) AND $_GET['id'] > 0) {
                $_GET['id'] = intval($_GET['id']);
                $id = getIdNews(array($_GET['id']));

                foreach ($id as $k) {
                    echo '
			<div class="col-xs-12">
			<div class="card mb-3">
			<img class="card-img-top" src="' . $k['imgurl'] . '" alt="Card image cap">
			<div class="card-body">
			<h4 class="card-title">' . $k['title'] . '</h4>
			<p class="card-text">' . $k['content'] . '</p>
			<a href="index.php?page=news" class="btn btn-primary pull-down">Go back</a>
			</div>
			</div>
			</div>';
                }
            }
            else {
                foreach ($news as $key) {
                    echo '
			<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="card text-center mb-3">
			<img class="card-img-top" src="' . $key['imgurl'] . '" alt="Card image cap">
			<div class="card-body">
			<h5 class="card-title">' . substr($key['title'], 0, 50) . '</h5>
			<a href="index.php?page=news&id=' . $key['id'] . '" class="btn btn-primary">Go somewhere</a>
			</div>
			</div>
			</div>
			';
                }}
            ?>
        </div>
    </div>

<?php
include('includes/footer.php')
?>