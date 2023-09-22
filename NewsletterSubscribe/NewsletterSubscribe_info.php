
<?php

session_start();

if (!isset($_SESSION['Newsletter_subscribed'])){
    header('Location: NewsletterSubscribe_form.php');
    exit();
}

unset($_SESSION['Newsletter_subscribed']);

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Projekt 4 piękny</title>
    <link rel="stylesheet" type="text/css" href="NewsletterSubscribe&Unsubscribe.css" />
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
    <span id="podziekowanie">Dziękujemy za zapisanie się na listę mailową naszego newslettera!</span>

</div>


</body>

</html>

