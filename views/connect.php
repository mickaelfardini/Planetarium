<?php
include('includes/header.php');
include('includes/banner.php');
?>

<?php
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3);
    header('Location: ./index.php?page=news');
    return true;
}
?>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (isset($_POST["username"]) && isset($_POST["password"])) {
                    if (connect($postArray = array($_POST['username'], $_POST['password'], isset($_POST['remember'])))) {
                        header('Location: ./index.php?page=news');
                    } else {
                        echo "Username ou Mot de passe incorrect";
                    }
                } ?>
                <form action="index.php?page=connect" method="POST" class="form-signin">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="checkbox mb-2">
                        <label>
                            <input value="remember-me" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary align-content-md-center" value="Connexion"/>
                </form>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php')
?>