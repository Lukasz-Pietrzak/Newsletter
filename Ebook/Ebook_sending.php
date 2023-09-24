
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    require_once realpath('C:\xampp\htdocs\Projects\Newsletter\database.php');

//If email hasn't been sent, redirect
    if (!isset($_POST['email'])){
        header("Location: Ebook_form.php");
        exit();
    }else{
        require_once realpath('C:\xampp\htdocs\Projects\Login_and_Registration\Login\Autoloading.php');
        Autoloading::autoloader();

        $emailSanitize = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $emailValidate = filter_var($emailSanitize, FILTER_VALIDATE_EMAIL);

        if (empty($emailSanitize)){
            handleErrorAndRedirect::handleErrorRedirectM("empty_email", 'Email cannot be empty', 'Ebook_form.php');
            exit();
        }

        if (!$emailValidate){
            handleErrorAndRedirect::handleErrorRedirectM("incorrect_email", 'Email is incorrect', "Ebook_form.php");
            exit();
        }



        require '../PHPMailer/src/Exception.php';
        require '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';




//Create a new PHPMailer instance

        try {
            $mail = new PHPMailer();

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();

            $mail->SMTPAuth   = true;

            $mail->Host = 'smtp.gmail.com';

            $mail->Username   = 'lukobyznes@gmail.com';                     //SMTP username

            $mail->Password   = 'geiuptzdzklvxzra';                               //SMTP password

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

            $mail->Port  = 465;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('no-reply@domena.com', 'Ebook do programowania');

            $mail->addAddress($emailValidate);

            $mail->addReplyTo('lukobyznes@gmail.com', 'Information');

            $mail->isHTML(true);

            $mail->Subject = "Darmowy świetny ebook - HTML na przykładach";

            $mail->Body = '<html>
	        <head>
	          <title>Twój darmowy ebook!</title>
	        </head>
	        <body>
	          <h1>Dzień dobry!</h1>
	          <p>Oto link do naszego świetnego ebooka: <a href="http://localhost:63342/PHP-Pasja%20Informatyki/Lekcja%205%20-%20PDO/Ebook_form.php?_ijt=jnfunu0vejhk50lql0jhehilbf&_ij_reload=RELOAD_ON_SAVE">POBIERZ EBOOKA</a>
	          </p>
	          <hr>
	          <p>Administratorem Twoich danych osobowych jest:</p>
	          <p>Ebooki uczące sztuki Sp.z.o_O, ul. Wiejska 4/6/8, 00-902 Warszawa</p>
	          <p>Wypisz się z newslettera: <a href="https://domena.pl/unsubscribe">UNSUB</a>
	          </p>
	        </body>
	        </html>
    ';
            $mail->addAttachment('../Images/Ebook.png');

            // Send the email

            $mail->send();



        }catch (Exception $e){
            echo "Błąd wysyłania emaila: {$mail->ErrorInfo}";
        }


//        function save_mail($mail)
//        {
//            //You can change 'Sent Mail' to any other folder or tag
//            $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';
//
//            //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
//            $imapStream = imap_open($path, $mail->Username, $mail->Password);
//
//            $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
//            imap_close($imapStream);
//
//            return $result;
//        }
//
//        save_mail($mail);

        $_SESSION['ebook_sended'] = true;
        header("Location: Ebook-podziekowanie.php");
        exit();


    }






