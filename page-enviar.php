<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$respuesta;

$mail = new PHPMailer;
$my_email = 'contacto@sancor.cl';
try {        
        $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $nombre = $_POST['nombreDePila'];
        $nombre = utf8_decode($nombre); 
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $msj = $_POST['mensaje'];
        $msj = utf8_decode($msj);

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.sancor.cl ';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $my_email;                 // SMTP username
        $mail->Password = '@Sancor123';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom($my_email, 'sancor.cl');
        $mail->addAddress($my_email, $nombre);     


        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nuevo mensaje de sancor.cl';
        $mail->Body    = '<style>
                                h1{padding-bottom:10px;margin-bottom:0;}
                                h3{font-weight:normal;}
                                p{padding-top:100px;}
                          </style>
                          <h1>Tiene un nuevo Mensaje de sancor.cl</h1>
                          <h3><b>Nombre del Cliente: </b>'.$nombre.'</h3>
                          <h3><b>e-mail: </b>'.$correo.'</h3>
                          <h3><b>Telefono: </b>'.$telefono.'</h3>
                          <p><b>Mensaje: </b>'.$msj.'</p>';
        $mail->send();
        $respuesta = 'El mensaje fue enviado correctamente';
} catch (Exeption $e) {
        $respuesta = "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

echo $respuesta;
header("location:../contacto/");
?>