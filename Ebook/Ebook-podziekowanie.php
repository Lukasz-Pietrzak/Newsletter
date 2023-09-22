
<?php
session_start();

if (!isset($_SESSION['ebook_sended'])){
    header("Location: Ebook_form.php");
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #promised-ebook {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
        }
    </style>
</head>
<body>
<span id="promised-ebook">We've sent you a link to the promised ebook</span>
</body>
</html>
