<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

// Recuperar los datos enviados por JavaScript
$data = json_decode(file_get_contents('php://input'), true);

//Datos del formulario
$name = $data['name'];
$email = $data['mail'];
$tel = $data['tel'];
$message = $data['description'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.traperosdeemausms.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'informes@traperosdeemausms.org';                     //SMTP username
    $mail->Password   = 'n1Nxg+7KT{]~';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('informes@traperosdeemausms.org', 'Traperos de Emaus MS');
    $mail->addAddress('emausmanossolidarias@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva donacion desde Traperos de Emaus MS';
    $mail->Body    = "Hola, quisiera realizar una donacion.<br/>Mis datos son los siguientes<br/>Nombre: $name<br/>Correo electronico: $email<br/>Telefono: $tel<br/>Comentario: $message";

    $mail->send();
    echo 'Correo enviado exitosamente';
} catch (Exception $e) {
    echo "El mensaje no fue enviado. Mailer Error: {$mail->ErrorInfo}";
}