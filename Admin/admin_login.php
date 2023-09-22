<?php
session_start();
require_once realpath('C:\xampp\htdocs\Projects\Newsletter\database.php');

if (!isset($_SESSION['zalogowany'])) {

    if (isset($_POST['login'])) {
        $_SESSION['login'] = $_POST['login'];

        $login = filter_input(INPUT_POST, 'login');
        $password = filter_input(INPUT_POST, 'password');

        $querry = $db->prepare("SELECT id, password FROM admin WHERE login=:login and password=:password");
        $querry->bindValue(':login', $login, PDO::PARAM_STR);
        $querry->bindValue(':password', $password, PDO::PARAM_STR);
        $querry->execute();

        $user = $querry->rowCount();
        if ($user === 1) {
            $_SESSION['zalogowany_admin'] = true;
            unset($_SESSION['Uncorrect_login']);
            header('Location: admin_panel.php');
        } else {
            require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
            Autoloading::autoloader();
            handleErrorAndRedirect::handleErrorRedirectM('Uncorrect_login', 'Uncorerct login or password', 'Admin_form.php');
            exit();
        }

    } else {
        header("Location:Admin_form.php");
        exit();
    }
}
