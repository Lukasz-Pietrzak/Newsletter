<?php
session_start();
if (!isset($_SESSION['deleted-email'])){
    header('Location: Newsletter_unsubscribe_form.php');
    exit();
}

unset($_SESSION['deleted-email']);

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Projekt 4 piękny</title>
    <link rel="stylesheet" type="text/css" href="../NewsletterSubscribe/NewsletterSubscribe&Unsubscribe.css" />
    <meta name="description" content="To jest opis strony" />
    <meta name="keywords" content="To są słowa kluczowe" />
    <meta name="author" content="To jest nazwa autora" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
    <span id="newsletter">Newsletter</span>
    <br>
    <span id="podziekowanie">Zostałeś wypisany z Newslettera!</span>

</div>

</body>
</html>



