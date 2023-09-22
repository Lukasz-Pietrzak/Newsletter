<?php
session_start();
require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
Autoloading::autoloader();
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Projekt 4 piękny</title>
    <link rel="stylesheet" type="text/css" href="Ebook_form.css" />
    <meta name="description" content="To jest opis strony" />
    <meta name="keywords" content="To są słowa kluczowe" />
    <meta name="author" content="To jest nazwa autora" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>


<div class="container">

        <span id="newsletter">Darmowy ebook dla Ciebie</span><br>

    <div class="contents">

        <span id="text">
        Zapisz się na naszą listę mailową, dzięki czemu otrzymasz zupełnie ZA DARMO fantastycznego,
        legendarnego ebooka pod tytułem "HTML na przykładach", który już zdołał odmienić życie zawodowe 2147483647 przyszłych programistów!

        <br><br>

        Nauka HTML jeszcze nigdy nie była tak prosta! Wyjaśnienia udzielone na memach zostaną
        wręcz wdrukowane w Twoją podśwaidomość - CIA, FBI oraz inne KGB i Mosady go nienawidzą,
        gdyż użył ich tajnych metod wywiadowczych do nauczania HTML. Sztuczna inteligencja,
        która przyswoiła niniejszego ebooka stworzyła później front-endowy design znanego serwisu ePUAP.

        <br>Zapraszamy do lektury! </span>

        <img id="ebook" src="../Images/Ebook.png">


        <form method="post" action="Ebook_sending.php">


            <div class="form-group">
                <label for="email"><br>Wpisz poniżej swój poprawny adres email:</label>
                <input type="text" class="form-control" id="email" name="email">

            </div>

            <br>
            <button id="submit" type="submit" name="submit" class="btn btn-primary">Hurra! Wyślij mi tego ebooka</button>

            <?php
             issetSession::issetSessionM("empty_email");
            issetSession::issetSessionM("incorrect_email");
            ?>

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

