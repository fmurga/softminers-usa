<?php
	require_once("../includes/downloads.config.php");

	$id_pagina = $_POST['postid'];

	$textThanks = "Você se cadastrou em nosso site para receber mais informações.";
	$textContact = "Pronto nos pondremos en contacto con usted.";

	$msg='
		<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\">
		<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
			<style type="text/css">
				body{color:#000000;font-size:14px;font-family:Arial, Helvetica, sans-serif;background-color:#FFFFFF;}
				.corpo{color:#000000;font-size:14px;font-family:Arial, Helvetica, sans-serif;background-color:#FFFFFF;}
				.endereco{color:#0000CC;}
				.titulo{color:#FFFFFF;}
			</style>
		</head>
		<body class="corpo">'
		."<p align=\"justify\" class=\"style1\"> <b>Hola ".utf8_encode($_POST['your-name'])."</b>,</p>"
		."<p align=\"justify\" class=\"style1\">" . $textThanks . "</p>"
		."<p align=\"justify\" class=\"style1\"> " . $textContact . "</p>";


	/*ENVIAR O E-MAIL PARA O CLIENTE*/
	$mail = new phpmailer();
	$mail->AddAddress($_POST['your-email']);
	$mail->IsSMTP();
	$mail->Host = END_SERVIDOR_EMAIL2;
	$mail->SMTPAuth = true;
	$mail->Username= USER_SERVIDOR_EMAIL;
	$mail->Password= PASS_SERVIDOR_EMAIL;
	$mail->Port = 2525;
	$mail->From = "";
	$mail->FromName = "SoftExpert";
	$mail->IsHTML(true);
	$mail->Subject ='Agradecimiento SoftExpert';
	$mail->Body = $msg;
	$send=$mail->Send(); 
	unset($mail);



	$message = "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
	<html xmlns=\"http://www.w3.org/1999/xhtml\">
		<head>
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
			<title>Registro</title>
		</head>

		<body>
			<span style=\"font-size: 12pt;\">&nbsp;</span></font></div>
			
			<div style=\"text-align: center;\" align=\"center\">
			<table style=\"width: 450pt; border: 1pt outset rgb(0, 0, 102);\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"750\">
				<tbody>
					<tr>
						<td style=\"padding: 0pt; border: 1pt inset rgb(0, 0, 102);\">
							<table style=\"width: 450pt;\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" width=\"750\">
								<tbody>
									<tr>
										<td colspan=\"2\" style=\"background-color: rgb(50, 147, 241); padding: 0.75pt;\"><span style=\"background-color: rgb(50, 147, 241);\">
											<div style=\"text-align: center; margin: 0pt;\" align=\"center\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"white\"><b>Registro - SoftExpert Sitemod - Ebook</b></font></span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(209, 231, 252);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">E-mail:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\"><span style=\"background-color: rgb(209, 231, 252);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . utf8_encode($_POST['your-email']) . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(175, 214, 250);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Nome:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\"><span style=\"background-color: rgb(175, 214, 250);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . utf8_encode($_POST['your-name']) . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(209, 231, 252);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Cargo:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\"><span style=\"background-color: rgb(209, 231, 252);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $_POST['cargo'] . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(175, 214, 250);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Telefone:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\"><span style=\"background-color: rgb(175, 214, 250);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $_POST['telefone'] . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(209, 231, 252);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Empresa:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\"><span style=\"background-color: rgb(209, 231, 252);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $_POST['mais-empresa'] . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(175, 214, 250);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Indústria:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\"><span style=\"background-color: rgb(175, 214, 250);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . utf8_encode($_POST['mais-industria']) . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(209, 231, 252);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">País:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\"><span style=\"background-color: rgb(209, 231, 252);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $_POST['mais-pais'] . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(175, 214, 250);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Estado:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\"><span style=\"background-color: rgb(175, 214, 250);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . utf8_encode($_POST['mais-estado']) . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(209, 231, 252);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Necessidade de compra:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(209, 231, 252); padding: 0.75pt;\"><span style=\"background-color: rgb(209, 231, 252);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $_POST['mais-necessidade'] . "</span></font></div>
											</span>
										</td>
									</tr>
									<tr style=\"height: 18pt;\" height=\"30\">
										<td style=\"width: 187.5pt; height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\" width=\"312\">
											<span style=\"background-color: rgb(175, 214, 250);\">
												<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\"><font color=\"#000066\">Página de download:</font></span></font></div>
											</span>
										</td>
										<td style=\"height: 18pt; background-color: rgb(175, 214, 250); padding: 0.75pt;\"><span style=\"background-color: rgb(175, 214, 250);\">
											<div style=\"margin: 0pt;\"><font size=\"3\" face=\"Times New Roman,serif\"><span style=\"font-size: 12pt;\">" . $id_pagina . "</span></font></div>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>";

					$message .="
					<tr>
						<td colspan ='2'>Idioma: ES</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
	</html>";

	/*ENVIAR O E-MAIL DE INFO DO CADASTRO*/
	$mail = new phpmailer();
	$mail->AddAddress('');
	$mail->IsSMTP();
	$mail->Host = END_SERVIDOR_EMAIL2;
	$mail->SMTPAuth = true;
	$mail->Username= USER_SERVIDOR_EMAIL;
	$mail->Password= PASS_SERVIDOR_EMAIL;
	$mail->Port = 2525;
	$mail->From = "";
	$mail->FromName = "SoftExpert";
	$mail->IsHTML(true);
	$mail->Subject ='Agradecimiento SoftExpert';
	$mail->Body = $message;
	$send=$mail->Send(); 
	unset($mail);



	error_log($send);
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=https://www.softexpert.com/es/sesuite-sitemod\"><script type=\"text/javascript\">alert('FORMULARIO ENVIADO CON ÉXITO.');</script>";
	

?>