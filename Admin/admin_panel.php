<?php
session_start();
require_once realpath('C:\xampp\htdocs\Projects\Newsletter\database.php');
$querry2 = $db->query("SELECT id, email FROM users");
$querry2->execute();

$user = $querry2->fetchAll();

if (!isset($_SESSION['zalogowany_admin'])){
    header("Location: Admin_form.php");
    exit();
}

?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Projekt 4 piękny</title>
    <link rel="stylesheet" type="text/css" href="admin_panel.css" />
    <meta name="description" content="To jest opis strony" />
    <meta name="keywords" content="To są słowa kluczowe" />
    <meta name="author" content="To jest nazwa autora" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <style>

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }


    </style>
</head>

<body>


<div id="container">

<table>

    <thead>
    <tr>
        <th  id="Newsletter" colspan="2"><span id="newsletterr">Newsletter</span>  </th>
    </tr>
    <tr>
        <th colspan="2">Liczba rekordów:<?php
            $totalRecords = count($user);
            echo $totalRecords; ?></th>
    </tr>
    <tr>
        <th>ID</th>
        <th>Email</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach ($user as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="2"><a href="wyloguj.php" class="logout-link">Wyloguj się</a></td>
    </tr>

    </tbody>
</table>

</div>
<br>


</body>

</html>

