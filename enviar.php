<?php

date_default_timezone_set('Etc/UTC');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'bancaqabi@gmail.com';                 // SMTP username
$mail->Password = 'bancaqabi123456';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'faristizabal@qabi.co';
$mail->FromName = 'Correo de contacto de la pagina qabi.co';
$mail->addAddress('faristizabal@qabi.co', 'webmaster');     // Add a recipient
$mail->addAddress('faristizabal@qabi.co');               // Name is optional
$mail->addReplyTo('faristizabal@qabi.co', 'webmaster');
$mail->addCC('faristizabal@qabi.co');
$mail->addBCC('faristizabal@qabi.co');

                              // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<h1>Banca de inversión</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Nombre:</td>
                        <td>'.$_POST['nombre'].'</td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td>'.$_POST['correo'].'</td>
                    </tr>
                     <tr>
                        <td>Motivo:</td>
                        <td>'.$_POST['motivo'].'</td>
                    </tr>
                    <tr>
                        <td>Mensaje:</td>
                        <td>'.$_POST['mensaje'].'</td>
                    </tr>
                </tbody>
            </table>
               ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$enviar=new enviar();
if(!$mail->send()) {
    $enviar->sendMessaje("El correo no fue enviado");
    header('location:contacto.php');
} else {
    $enviar->sendMessaje('El correo fue enviado correctemente');
    header('location:contacto.php');
}

class enviar{
    private $mensaje;
    public function sendMessaje($mensaje)
    {
        $this->mensaje=$mensaje;
    }
    public function getMessage()
    {
        return $this->mensaje;
    }

}