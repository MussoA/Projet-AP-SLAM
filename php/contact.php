<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require_once 'C:\xampp\htdocs\projet-1 alex\vendor\autoload.php';

// Function to verify reCAPTCHA
function isValid($code, $ip = null)
{
    if (empty($code)) {
        return false;
    }
    $params = [
        'secret'    => "6LfaRzUpAAAAABwbqhjnpSqHwUoRmWibMfzf2kV8",
        'response'  => $code
    ];
    if ($ip) {
        $params['remoteip'] = $ip;
    }
    $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
    if (function_exists('curl_version')) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
        $response = curl_exec($curl);
    } else {
        $response = file_get_contents($url);
    }

    if (empty($response) || is_null($response)) {
        return false;
    }

    $json = json_decode($response);
    return $json->success;
}

// Check if the form is submitted and reCAPTCHA is valid
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["g-recaptcha-response"])) {
    if (isValid($_POST["g-recaptcha-response"])) {
        // Get form data
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // PHPMailer initialization
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'projetslamap@gmail.com';
            $mail->Password = 'fbgy vvwb dgsc lqng';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';

                    // Sender and recipient settings
        $mail->setFrom('projetslamap@gmail.com', 'Dev Local');
        $mail->addAddress('projetslamap@gmail.com', 'Dev Local');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Formulaire reçus';
        $mail->Body = "prenom: $prenom<br>nom: $nom<br>Email: $email<br>message: $message";

        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }

        $mail->smtpClose();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
}
?>