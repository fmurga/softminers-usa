<?php
require("../functions.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

send_material_interested();
send_contact_company();

function send_material_interested(){

    $thankYou = 
        "<p><b>Hola ". $_POST['your-name'].",</b></p>
        <p>Usted se registró en nuestro sitio web para la descarga del material:</p>
        <p><b>".$_POST['postid']."</b><br>".$_POST['url']."</p>
        <p>Gracias por su interés en las soluciones de SoftExpert.<br>
        Para más información sobre nuestros productos y servicios, envíe un e-mail a:<br>
        ".SALES_EMAIL."</p><br>
        <p>Tuyo sinceramente,<br>
        ".COMPANY_NAME."</p>";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->CharSet = 'UTF-8';
        $mail->Host       = SERVER_ADDRESS;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = SERVER_USERNAME;                     //SMTP username
        $mail->Password   = SERVER_PASS;                               //SMTP password
        $mail->SMTPSecure = SERVER_ENCRYPT;            //Enable implicit TLS encryption
        $mail->Port       = SERVER_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(DEPARTMENT_EMAIL, COMPANY_NAME);
        $mail->addAddress($_POST['your-email'], $_POST['your-name']);     //receptor de correo electrónico


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reconocimiento '.COMPANY_NAME;

        $body = $thankYou;  //mensaje que se envía por correo electrónico
        

        $mail->Body = $body;
    //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo 'Email enviado con éxito';

    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }

};

function send_contact_company(){

    $downloadMessage = 
        "<p>Nombre: ".$_POST['your-name']."</p>
        <p>Email: ".$_POST['your-email']."</p>
        <p>Cargo: ".$_POST['cargo']."</p>
        <p>Teléfono: ".$_POST['telefone']."</p>
        <p>Empresa: ".$_POST['mais-empresa']."</p>
        <p>Sector: ".$_POST['mais-industria']."</p>
        <p>Pais: ".$_POST['mais-pais']."</p>
        <p>Tiempo estimado para la adquisición: ".$_POST['mais-necessidade']."</p>
        <p>Descripción: ".$_POST['postid']."</p>";
    
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->CharSet = 'UTF-8';
        $mail->Host       = SERVER_ADDRESS;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = SERVER_USERNAME;                     //SMTP username
        $mail->Password   = SERVER_PASS;                               //SMTP password
        $mail->SMTPSecure = SERVER_ENCRYPT;            //Enable implicit TLS encryption
        $mail->Port       = SERVER_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom(DEPARTMENT_EMAIL, DEPARTMENT);
        $mail->addAddress(DEPARTMENT_EMAIL, DEPARTMENT);     //Add a recipient
        //$mail->addReplyTo(DEPARTMENT_EMAIL, DEPARTAMENT);
    

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Reconocimiento '.COMPANY_NAME;
    
        $body = $downloadMessage;
    
        $mail->Body = $body;
    //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header("Location:".HOME_URL."/gracias.php");
        echo 'Email enviado con éxito';
    
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
};