<?php

session_start();

session_unset();
header("Location:Admin_form.php");
exit();
