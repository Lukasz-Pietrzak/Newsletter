<?php
session_start();

if (isset($_POST['email'])){
    $email = filter_input(INPUT_POST, 'email');

    require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
    Autoloading::autoloader();

    require_once realpath('C:\xampp\htdocs\Projects\Newsletter\database.php');

$query1 = $db->prepare("SELECT email FROM users where email =:email");
$query1->bindValue(':email', $email, PDO::PARAM_STR);
$query1->execute();

if ($query1->rowCount() < 1) {
    handleErrorAndRedirect::handleErrorRedirectM('no_email_database', 'There is no such an email in Newsletter', 'Newsletter_unsubscribe_form.php');
    exit();
}

$query2 = $db->query("DELETE from users where email = '$email'");
$query2->execute();

$_SESSION['deleted-email'] = true;
header("Location: Newsletter_unsubscribe_info.php");
exit();


}else{
    header('Location:Newsletter_unsubscribe_form.php');
    exit();
}