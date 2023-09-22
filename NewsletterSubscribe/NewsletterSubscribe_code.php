<?php

//Redirect if form hasn't been submitted
if (!isset($_POST['submit'])){
    header('Location: NewsletterSubscribe_form.php');
    exit();
}

session_start();

require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
Autoloading::autoloader();

$_SESSION['email_NewsletterSubscribe_form'] = $_POST['email_NewsletterSubscribe_form'];

$email = filter_input(INPUT_POST, 'email_NewsletterSubscribe_form', FILTER_VALIDATE_EMAIL);

if (empty($_POST['email_NewsletterSubscribe_form'])){
    handleErrorAndRedirect::handleErrorRedirectM('empty_email', 'Please enter the email', 'NewsletterSubscribe_form.php');
    exit();
}

if (!$email){
    handleErrorAndRedirect::handleErrorRedirectM('uncorrect_email', 'Please enter correct email', 'NewsletterSubscribe_form.php');
    exit();
}

require_once realpath('C:\xampp\htdocs\Projects\Newsletter\database.php');

$query1 = $db->prepare("SELECT email FROM users where email = :email");
$query1->bindParam(':email', $email, PDO::PARAM_STR);
$query1->execute();

$rowCountQuery = $query1->rowCount();
if ($rowCountQuery > 0){
    handleErrorAndRedirect::handleErrorRedirectM('occupied_email', 'This email is occupied', 'NewsletterSubscribe_form.php');
    exit();
}

$_SESSION['Newsletter_subscribed'] = true;
//Put email in database
$query2 = $db->query("INSERT INTO users VALUES (null, '$email')");
$query2->execute();

header("Location: NewsletterSubscribe_info.php");



