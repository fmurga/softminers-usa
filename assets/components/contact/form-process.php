<?php

$errorMSG = "";
$aux_campaing = "";
$domain="https://global.softminers.com";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Company is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// MSG phone
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

if (empty($_POST["campaign"])) {
    $errorMSG .= "Campaign is required ";
} else {
    $campaign = $_POST["campaign"];
    $aux_campaing = $campaign;
}

// Realizamos la petición de control: 
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6Lfue6YZAAAAAKBZ_THuCWLLjrpkKauHn745TwfF'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 
// Miramos si se considera humano o robot: 
if($recaptcha->score >= 0.6){

    $EmailTo = "contacto@softminers.com";
    $EmailFrom = "contacto@softminers.com";
    $Subject = "Nueva comunicación desde campaña: ".$campaign;

    // prepare email body text
    $Body = "";
    $Body .= "Nombre y Apellido: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Empresa: ";
    $Body .= $msg_subject;
    $Body .= "\n";
    $Body .= "Teléfono: ";
    $Body .= $phone;
    $Body .= "\n";
    $Body .= "Mensaje: ";
    $Body .= $message;
    $Body .= "\n";
    $Body .= "Campaña: ";
    $Body .= $campaign;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$EmailFrom);

    // redirect to success page
    if ($success && $errorMSG == ""){
        if (strcasecmp($aux_campaing, "ESP") === 0) {
            header("Location: $domain/es/thank-you/");
        } 
        if (strcasecmp($aux_campaing, "USA") === 0) {
            header("Location: $domain/en/thank-you/");
        } 
        exit();
    }else{
        if($errorMSG == ""){
            echo "Ha ocurrido un error :(";
        } else {
            echo $errorMSG;
        }
    }
}
?>