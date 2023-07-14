<?php

/*
|=====================================================================|
|                    DEFINIR CONFIGURAÇÕES DE URL                     |
|=====================================================================|
|	La url de su sitio no debe terminar con barra(/). Deja tu url     |
|   como en el ejemplo siguiente                                      |
|                                                        	          |
|*/define('HOME_URL', '/es/softexpert-excellence-suite');/* ´                |
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
|*/ define("SERVER_ENCRYPT", "ssl");/*    	                            |  
|																		|
|																	    |
|_______________________________________________________________________|
*/

/*
 * The variables below, serve to configure the name of your company.
 * this information will be displayed in the customer's response email
 * when a download is made
 */

$companyIcon = "";

if($companyIcon == ""){

    $companyIcon = "https://global.softminers.com/assets/img/favicon/favicon.png";
}

define("THUMB_LOGO", $companyIcon );





define("COMPANY_NAME", "SoftMiners");
define("SALES_EMAIL", "contacto@softminers.com");
define("DEPARTMENT", "Sales SoftMiners");
define("DEPARTMENT_EMAIL","contacto@softminers.com");

/* If you want to change the response emails your customer will receive,
 * just open the file includes / wpesEnviaEmail.php and change the text of the variable
 * $downloadMessage and $thankYou.
*/

?>