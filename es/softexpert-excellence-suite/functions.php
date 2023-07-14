<?php

/*
|=====================================================================|
|                    DEFINIR CONFIGURAÇÕES DE URL                     |
|=====================================================================|
|	La url de su sitio no debe terminar con barra(/). Deja tu url     |
|   como en el ejemplo siguiente                                      |
|                                                        	          |
|*/define('HOME_URL', '/es/softexpert-excellence-suite');/* ´                 |
|																	  |
|_____________________________________________________________________|
*/

/*
|=======================================================================|
|                    DEFINIR CONFIGURAÇÕES DE E-MAIL                    |
|=======================================================================|
|																	    |
|*/ define("SERVER_ADDRESS", "smtp.gmail.com");/*               		|
|*/ define("SERVER_USERNAME","contacto@softminers.com");/*              |
|*/ define("SERVER_PASS","MIners&7226");/* 							    |
|*/ define("SERVER_PORT", 465);/*										|
|*/ define("SERVER_ENCRYPT", "ssl");/*  	                            |  
|																		|
|																	    |
|_______________________________________________________________________|
*/

/*
 *  Las variables abajo, sirven para configurar el logo de su empresa
 *  Las dimensiones ideales para esta sesión son 90x90 píxeles
 *  Formatos de ideas para la imagen: .ico, .png, .jpeg, .gif
 *  Si no se ha rellenado, se añadirá automáticamente el logotipo de SoftExpert Excellence Suite
 */

$companyIcon = "";

if($companyIcon == ""){

    $companyIcon = "https://global.softminers.com/assets/img/favicon/favicon.png";
}

define("THUMB_LOGO", $companyIcon );



/*
 *  Las variables abajo, sirven para configurar el nombre de su empresa.
 *  esta información se mostrará en el correo electrónico de respuesta del cliente
 *  cuando se realiza una descarga
 */

define("COMPANY_NAME", "SoftMiners");
define("SALES_EMAIL", "contacto@softminers.com");
define("DEPARTMENT", "Ventas SoftMiners");
define("DEPARTMENT_EMAIL","contacto@softminers.com");

/* Si desea cambiar los mensajes de correo electrónico de respuesta que recibirá su cliente,
 * basta con abrir el archivo includes / wpesEnviaEmail.php y cambiar el texto de la variable
 * $downloadMessage y $thankYou.
*/

?>