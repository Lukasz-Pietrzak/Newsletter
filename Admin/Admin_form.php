<?php
session_start();
require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
Autoloading::autoloader();

if (isset($_SESSION['zalogowany'])){
    header("Location:admin_login.php");
    exit();
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Projekt 4 piękny</title>
    <link rel="stylesheet" type="text/css" href="formularz.css" />
    <meta name="description" content="To jest opis strony" />
    <meta name="keywords" content="To są słowa kluczowe" />
    <meta name="author" content="To jest nazwa autora" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">

    <div class="contents">
        <span id="newsletter">Admin</span>
        <form method="post" action="admin_login.php">


            <div class="form-group">
                <label for="login">Login: admin</label>
                <input type="text" class="form-control" id="login" name="login" value="<?php
                issetSession::issetSessionM('login');
                ?>" >
            </div>

            <div class="form-group">
                <label for="password">Password: adminek123</label>
                <input type="text" class="form-control" id="password" name="password"?>
            </div>


            <?=
            issetSession::issetSessionM('Uncorrect_login');

            ?>

            <br>
            <button id="submit" type="submit" name="submit" class="btn btn-primary">Zapisz się</button>


        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

