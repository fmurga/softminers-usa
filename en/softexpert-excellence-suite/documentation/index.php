<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SoftExpert Partners Hotsite</title>
	<link rel="stylesheet" type="text/css" href="css/documentation.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">	
	<link rel="shortcut icon" href="https://sesuite.softexpert.com/se/v98675/ui/desktop/lite/resources/images/favicons/16.png">

	<!-- CDN Fonte ROBOTO -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- FIM CDN Fonte ROBOTO -->
	<link rel="stylesheet" href="bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/magnific-popup.css">
	<script type="text/javascript" src="dist/jquery.magnific-popup.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="robots" content="noindex">
</head>
<body class="single single-login l-body Zephyr_99.5.1 header_hor softexpert wpb-js-composer js-comp-ver-4.12 vc_responsive">
	<div class="fundo-modal-cinza esconder"></div>
	<header>
		<nav class="documentation-nav sombra">			
			<div class="navbar-container">
				<div class="navbar-esquerda">					
					<div class="navbar-logo">
						<img src="imgs/softexpert-branca.png" class="svg-inject" alt="SoftExpert Software">					
					</div>
					<div class="menu-toggle">
						<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>					
				</div>				
			</div>			
		</nav>			
	</header>
	<div class="introducao-documentacao">
		<div class="introducao-container">
			<h1>Welcome to the Documentation for <br>implementation of the SoftExpert Hot Site</h1>
			<div class="introducao-botoes">
				<p>
					Before anything else, download the hot site through the button below
				</p>
				<div class="botao-download">
					<a href="sesuite-en.zip" download="sesuite-en.zip">Download the Hotsite</a>	
				</div>
				<div class="botao-download">
					<a href="https://www.softexpert.com/hotsite/sesuite/en" target="_blank">Hotsite live preview</a>
				</div>
			</div>
			<div class="introducao-texto">
				<p>
					Inside the downloaded file (sesuite-en.rar) you will find the folder "softexpert-excellence-suite"<br>
					In this folder all the files necessary for the operation of the SoftExpert Hot Site are available.<br>
					Upload this folder to the root directory of your site using your FTP.<br>
					The URL should follow the pattern of this example: www.yourwebsite.com/softexpert-excellence-suite 
				</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="wrapper-conteudo">
		
		<section class="conteudo-container">		
			<div class="menu-lateral sombra">
				<div class="close-icon">
					<span>
						<i class="fas fa-times"></i>					
					</span>
				</div>				
				<div class="content-menu-container">
					
					<h3>Tópicos</h3>					
					<div class="menu-listas">
						<ul>
							<li id="config-anchor"><a href="javascript:void(0)">1 - Configuration</a></li>
							<ul id="submenus">									
								<li><a href="#configuracao_url">1.2 - URL Configuration</a></li>
								<li><a href="#configuracao_email">1.3 - Configuration for receiving and sending emails</a></li>
								<li><a href="#configuracao_msg">1.4 - Message Configuration</a></li>															
							</ul>
							<li><a href="#configuracao_logomarca">2 - Adding your brand to the Hot Site</a></li>
						</ul>
					</div>				
					<div class="menu-duvidas">
						<h6>For further information, please contact:</h6>				
						<ul class="canais">
							<li>
								<strong>Email: </strong>
								<a href="mailto:site@softexpert.com">site@softexpert.com</a>
								<p style="font-size: 14px;"><strong>Or contact you Channel Analyst</strong></p>
							</li>							
						</ul>						
					</div>
				</div>
			</div>	
			
			<div class="conteudo">
				<div class="box-conteudo">				
					
					
					<h2 id="configuracao"> 1 - Configuration</h2>
					<p>
						There are several ways to configure your hot site. To facilitate this task, our team has brought together the most important ones in a single file: <em>functions.php</em>.
						<br>
						<strong>Lugar del archivo:</strong>
					</p>
					<ul style="margin-top: 20px;" class="tree">
						<li><span><i class="fa fa-folder-open" aria-hidden="true"></i></span>softexpert-excellence-suite
							<ul >
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> css</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> dist</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> downloads</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> imgs</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> includes</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> js</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> material</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> produto</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> solucion</li>
								<li><span><i class="far fa-file-code"></i></span> functions.php</li>
							</ul>
						</li>
					</ul>
					<p style="text-align: left;"><a href="#diretorios">(View the Complete Directory Structure)</a></p>
					<p style="margin-top: 20px;">
						To edit this file you need to open it in a code editor. 
						If you do not have a Code Editor, you can open the file in the  <em>Windows Notepad (txt)</em> or <em>MAC Text Editor.</em>
					</p>									
					<div class="publicacao-titulo">
						<h2 id="configuracao_url">1.1 - URL Configuration </h1>
						</div>					
						<div class="print-tela">
							<img src="imgs/function_tela2.jpg" alt="">
						</div>
						<p>
							This step defines that the browser will add your URL automatically, so the hot site will load inside your site.
							<br>
							For everything to work perfectly add the URL of <strong>"your site"</strong> in:
							<code>http://www.<strong>yoursite</strong>.com.br/softexpert-excellence-suite</code>
						</p>
						<p>
							<strong>Important:</strong> Be careful not to remove the single quotes that start and end the URL in the file, as removing these quotes may result in failure to load the files generating ERROR 400 or ERROR 500.
						</p>
						<div class="publicacao-titulo">
							<h2 id="configuracao_email">1.2 - Configuration for receiving and sending emails</h1>
							</div>
							<p>
								We will also perform the email STMP settings within <em>functions.php</em>.
							</p>
							<div class="print-tela">
								<img src="imgs/function_tela3.jpg" alt="">
							</div>
							<p>
								<strong>Important:</strong> If you do not have this data, request this information from the company responsible for hosting your site. If you use <em>“free email”</em> (Gmail, Outlook, among others) just log in to your email account and access the settings.
							</p>
							<p>
								<ol>
									<li><p>In the first part at <code>define("SERVER_ADDRESS", "smtp.yourdomain.com");</code>, change <strong>smtp.yourdomain.com</strong> with the SMTP address of your email provider.</p></li>
									<li><p>In the next part, at <code>define("SERVER_USERNAME","your_user");</code>, exchange your_user with the email address. Remember that in most cases you will need to add your full email address, for example<code>your_email@provider.com</code>.</p></li>
									<li><p>In the next part, at <code>define("SERVER_PASS", "your_password");</code>, exchange your_password with the SMTP password of the email provider. Remember that you should not enter the password to access your e-mail, but rather the SMTP password of the e-mail. If you have any questions, check the information with your email provider or site host.</li>
									<p><strong>Attention:</strong> In the Google account, for example, it is necessary to enable Multi-factor authentication and obtain the app password, however there will be providers that will be the email password itself.</p>	
									<li><p>Now, at define("SERVER_PORT", 000);, change the 000 with the PORT number that your email uses to receive and send e-mail. In most cases these values ​​will be <strong>25</strong>, <strong>465</strong> or <strong>587</strong>. To be sure, access the email or hosting configurations of your site.</li>
											<li><p>Finally, at <code>define("SERVER_ENCRYPT", "tls");</code>, exchange tls for the type of encryption used by the email server. In most cases these values ​​may be <strong>localhost</strong>, <strong>SSL</strong> or <strong>TLS</strong>. To be sure, access the email or hosting configurations of your site.</p></li>
										</ol>
									</p>
									<div class="publicacao-titulo">
										<h2 id="configuracao_msg">1.3 - Message Configuration</h2>
									</div>
									<p>
										When someone completes a "Download" or "More Information" form on the hot site, you will receive an email with the lead's data. This part was already configured in <a href="#configuracao_email" style="text-transform: none;">step 1.2</a> of this documentation.
									</p>

									<p>
										By default, the <strong>Acknowledgment Message</strong> that the lead receives in their email inbox is:
									</p>
									<div class="exemplo-mensagem">
										<div class="texto-mensagem">	
											<strong>Hello Lead Name,</strong><p>You have registered on our website to download the material: </p><strong>Category  > Name of the Material </strong><br><a href="#">link to the PDF </a><p>Thank you for your interest in the solutions from Your Company Name.  <br>For more information about our products and services, send an e-mail to: <a href="mailto:SALES_EMAIL">company sales email</a> </p><br><p>Regards, <br><a href="HOME_URL">Your Company Name</a></p>
										</div>
									</div>	
									<p>
										To configure this acknowledgment message you need to edit the <em>functions.php</em>:
									</p>
									<div class="print-tela">
										<img src="imgs/function_tela6.jpg" alt="">
									</div>							
									<ol>
										<li><p>Change <code>Your Company Name</code>, with the name of your company,</p></li>
										<li><p>Exchange <code>the company sales email</code>, with the email of your company's sales area. If you do not have a sales department, add the email of the person responsible for customer service,</p></li>
										<li><p>Change the <code>Department Name</code>, with the name of your company's sales department. If you do not have a sales department, add the department or name of the person responsible for customer service.</p></li>
										<li><p>Exchange <code>youremail@yourcompany.com</code>, with your e-mail.</p></li>
									</ol>
								</p>
								<p>
									Customizing this message is also simple! Just access the <em>wpesEnviaEmail.php</em>:
								</p>
								<ul class="tree">
									<li><span><i class="fa fa-folder-open" aria-hidden="true"></i></span>softexpert-excellence-suite
										<ul >
											<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> css</li>
											<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> dist</li>
											<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> downloads</li>
											<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> imgs</li>
											<li><span><i class="fa fa-folder" aria-hidden="true"></i></span> includes
												<ul>
													<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> vendor
														<li ><span><i class="far fa-file-code"></i></span> wpesEnviaEmail.php</li>
													</ul>
												</li>
												<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> js</li>
												<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> material</li>
												<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> producto</li>
												<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> solucion</li>	
											</ul>
										</li>
									</ul>
									<p style="text-align: left;"><a href="#diretorios">(View the Complete Directory Structure)</a></p>
									<p>
										Edit the sentences in the codes below as needed (only change the acknowledgement texts):
									</p>
									<div class="print-tela">
										<img src="imgs/function_tela7.jpg" alt="">
									</div>
								</p>
								<div class="publicacao-titulo">
									<h2 id="configuracao_logomarca">Adding your brand to the Hot Site</h1>
									</div>
									<p>
										By default, the browser tab displays the SoftExpert icon, as shown below.
									</p>
									<p>
										Follow the steps below if you want to change your brand:
										<ol>
											<li><p>Your logo file cannot exceed the size of 20x20 pixels.</p></li>
											<li><p>Host your logo on your site, so that it generates a URL.</p></li>
											<li><p>In the part where it shows <code>$companyIcon = " ";</code>, , add the URL of the image generated by the server between double quotation marks “ ” .</p></li>
										</ol>															
									</p>
									<div class="print-tela">
										<img src="imgs/function_tela5.jpg" alt="">
									</div>
									<div class="publicacao-titulo" style="display:none;">
										<h2 id="diretorios">Directory Structure</h1>
										</div>
										<p style="display:none;">
											Below is the list of folders and files. Understanding this structure is essential for setting up your Hot site.
										</p>
										<p style="display:none;">
											Click the folders to expand or collapse the subdirectories.
										</p>
										<ul style="margin-top: 20px;" class="tree">
											<li style="display:none;"><span><i class="fa fa-folder-open" aria-hidden="true"></i></span>softexpert-excellence-suite
												<ul >
													<li><span><i class="fa fa-folder" aria-hidden="true"></i></span> 
														css
														<ul class="esconder">
															<li><span><i class="fa fa-folder" aria-hidden="true"></i> font-awesome</span>
																<ul>
																	<li><span><i class="fa fa-folder" aria-hidden="true"></i> css</span>
																		<ul>
																			<li><span><i class="fab fa-css3"></i> font-awesome.css</span> </li>
																			<li><span><i class="fab fa-css3"></i> font-awesome.min.css</span> </li>			
																		</ul>
																	</li>
																	<li><span><i class="fa fa-folder" aria-hidden="true"></i> fonts</span>
																		<ul>
																			<li><span><i class="fas fa-font"></i> FontAwesome</span></li>
																			<li><span><i class="fas fa-font"></i> fontawesome-webfont.eot</span></li>
																			<li><span><i class="fas fa-font"></i> fontawesome-webfont.svg</span></li>
																			<li><span><i class="fas fa-font"></i> fontawesome-webfont</span></li>
																			<li><span><i class="fas fa-font"></i> fontawesome-webfont.woff</span></li>
																			<li><span><i class="fas fa-font"></i> fontawesome-webfont.woff2</span></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li><span><i class="fa fa-folder" aria-hidden="true"></i> fonts</span>
																<ul>
																	<li><span><i class="fas fa-font"></i> mdfonticon.eot</span></li>
																	<li><span><i class="fas fa-font"></i> mdfonticon.svg</span></li>
																	<li><span><i class="fas fa-font"></i> mdfonticon</span></li>			
																	<li><span><i class="fas fa-font"></i> mdfonticon.woff</span></li>			
																</ul>
															</li>
															<li><span><i class="fab fa-css3"></i> custom.css</span> </li>
															<li><span><i class="fab fa-css3"></i> responsive.css</span> </li>
															<li><span><i class="fab fa-css3"></i> style.css</span> </li>
															<li><span><i class="fab fa-css3"></i> style-old.css</span> </li>
															<li><span><i class="fab fa-css3"></i> theme-options.css</span> </li>
															<li><span><i class="fab fa-css3"></i> us-base.css</span> </li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> dist</span>
														<ul class="esconder">
															<li><span><i class="fab fa-js-square"></i> jquery.magnific-popup.js</span></li>
															<li><span><i class="fab fa-js-square"></i> jquery.magnific-popup.min.js</span></li>
															<li><span><i class="fab fa-css3"></i> magnific-popup.css</span></li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> downloads</span>
														<ul class="esconder">
															<li><span><i class="far fa-file-pdf"></i> 3-Key-Practices-to-Improve-Talent-Management-HDM.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 5-Key-Stages-to-Effective-Risk-Management.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 5-strategic-processes-for-ECM-success.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 6-Key-Tools-for-GRC-Excellence.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 7-Capital-Tools-for-Management-Excellence.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 7-Crucial-Elements-in-IT-Service-Management.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 7-Must-Have-Resources-for-Every-Environmen-al-Management-System.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 7-Resources-Every-Asset-Management-Solution-Should-Have.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 8-essential-features-of-great-performance-managemen-solutions.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 8-Resources-Every-PLM-Solution-Should-Have.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 10-Advanced-features-every-BPM-solution-should-have.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> 10-knowledges-Skills-Project-Manager-Should-Have.pdf</span></li>	
															<li><span><i class="far fa-file-pdf"></i> 13-processes-every-Enterprise-Quality-Management-Software-EQMS-should-automate.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-Improve-Environmental-Health-Safety-Management.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-Successfully-Manage-Company-Asset.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-Technology-can-Improve-Food-Safety-Management.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-create-effective-KPI-dashboards.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> how-to-develop-risk-management-plan-12-practical-steps.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-Implement-IT-Service-Management-that-Supports-Your-Company-Strategy-and-Objectives.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-improve-your-company-quality-management-system.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-improve-your-document-management-system.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-improve-your-talent-management-system.pdf</span></li>					
															<li><span><i class="far fa-file-pdf"></i> How-to-Streamline-Project-Management-at-Your-Company.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> How-to-Successfully-Manage-Company-Product-Lifecycle.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> ISO-9001-2015-Are-you-ready.pdf</span></li>						
															<li><span><i class="far fa-file-pdf"></i> ISO-14001-2015-Dont-miss-the-deadline .pdf</span></li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> imgs</span> 
														<ul class="esconder">
															<li><span><i class="fas fa-file-image"></i> se-suite-2-0.svg</span></li>													
															<li><span><i class="fas fa-file-image"></i> softexpert.svg</span></li>													
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> includes</span> 
														<ul class="esconder">
															<li><span><i class="fa fa-folder" aria-hidden="true"></i> vendor</span>
																<ul>
																	<li><span><i class="fa fa-folder" aria-hidden="true"></i> composer</span>
																		<ul>
																			<li><span><i class="fab fa-php"></i> autoload_classmap.php</span></li>
																			<li><span><i class="fab fa-php"></i> autoload_namespaces.php</span></li>
																			<li><span><i class="fab fa-php"></i> autoload_psr4.php</span></li>
																			<li><span><i class="fab fa-php"></i> autoload_real.php</span></li>
																			<li><span><i class="fab fa-php"></i> autoload_static.php</span></li>
																			<li><span><i class="fab fa-php"></i> ClassLoader.php</span></li>
																			<li><span><i class="fab fa-js-square"></i> installed.json</span></li>
																			<li><span><i class="fab fa-readme"></i> LICENSE</span></li>
																		</ul>
																	</li>
																	<li><span><i class="fa fa-folder" aria-hidden="true"></i> phpmailer</span>
																		<ul>
																			<li><span><i class="fa fa-folder" aria-hidden="true"></i> phpmailer</span>
																				<ul>
																					<li><span><i class="fa fa-folder" aria-hidden="true"></i> language</span>
																						<ul>
																							<li><span><i class="fab fa-php"></i> phpmailer.lang-pl.php</span></li>
																							<li><span><i class="fab fa-php"></i> phpmailer.lang-pt.php</span></li>
																							<li><span><i class="fab fa-php"></i> phpmailer.lang-pt_br.php</span></li>
																						</ul>
																					</li>
																					<li><span><i class="fa fa-folder" aria-hidden="true"></i> src</span>
																						<ul>
																							<li><span><i class="fab fa-php"></i> Exception.php</span></li>
																							<li><span><i class="fab fa-php"></i> OAuth.php</span></li>
																							<li><span><i class="fab fa-php"></i> PHPMailer.php</span></li>
																							<li><span><i class="fab fa-php"></i> POP3.php</span></li>
																							<li><span><i class="fab fa-php"></i> SMTP.php</span></li>
																						</ul>
																					</li>
																					<li><span><i class="fab fa-php"></i> get_oauth_token</span></li>
																					<li><span><i class="fab fa-readme"></i> LICENSE</span></li>
																					<li><span><i class="fab fa-readme"></i> README.md</span></li>
																					<li><span><i class="fab fa-readme"></i> SECURITY.md </span></li>
																					<li><span><i class="fab fa-readme"></i> VERSION </span></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li><span><i class="far fa-file-code" aria-hidden="true"></i> autoload.php</span></li>
																</ul>
															</li>													
															<li><span><i class="far fa-file-code" aria-hidden="true"></i> compposer.json</span></li>													
															<li><span><i class="far fa-file-code" aria-hidden="true"></i> compposer.lock</span></li>													
															<li><span><i class="far fa-file-code" aria-hidden="true"></i> wpesEnviaEmail.php</span></li>													

														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> js</span> 
														<ul class="esconder">
															<li><span><i class="fab fa-js-square"></i> custom.js</span></li>
															<li><span><i class="fab fa-js-square"></i> mfp.js</span></li>
															<li><span><i class="fab fa-js-square"></i> owl.carousel.js</span></li>
															<li><span><i class="fab fa-js-square"></i> utils.js</span></li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> material</span> 
														<ul class="esconder">
															<li><span><i class="fab fa-php"></i> 3-key-practices-to-improve-talent-management-hdm.php</span></li>
															<li><span><i class="fab fa-php"></i> 5-key-stages-to-effective-risk-management.php</span></li>
															<li><span><i class="fab fa-php"></i> 5-strategic-processes-for-ecm-success.php</span></li>
															<li><span><i class="fab fa-php"></i> 6-key-tools-for-grc-excellence.php</span></li>
															<li><span><i class="fab fa-php"></i> 7-capital-tools-for-management-excellence.php</span></li>
															<li><span><i class="fab fa-php"></i> 7-crucial-elements-in-it-service-management.php</span></li>
															<li><span><i class="fab fa-php"></i> 7-must-have-resources-environmental-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> 7-resources-every-asset-management-solution-should-have.php</span></li>
															<li><span><i class="fab fa-php"></i> 8-essential-features-of-great-performance-management-solutions.php</span></li>
															<li><span><i class="fab fa-php"></i> 8-resources-every-product-lifecyle-management-solution-should-have.php</span></li>
															<li><span><i class="fab fa-php"></i> 9-essential-features-food-safety-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> 10-advanced-features-every-bpm-solution-should-have.php</span></li>
															<li><span><i class="fab fa-php"></i> 10-knowledge-and-skills-every-project-manager-should-have.php</span></li>
															<li><span><i class="fab fa-php"></i> 13-processes-enterprise-quality-management-software-automate-eqms.php</span></li>
															<li><span><i class="fab fa-php"></i> how-successfully-manage-companys-assets.php</span></li>
															<li><span><i class="fab fa-php"></i> how-successfully-manage-companys-product-lifecycle.php</span></li>
															<li><span><i class="fab fa-php"></i> how-technology-improve-food-safety-management.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-create-effective-kpi-dashboards.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-develop-risk-management-plan-12-practical-steps.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-implement-it-service-management-that-supports-your-companys-strategy-and-objectives.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-business-process-management-9-steps.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-environmental-health-safety-ehs.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-governance-risk-compliance-management.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-your-document-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-your-quality-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-improve-your-talent-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> how-to-streamline-project-management-in-your-company.php</span></li>
															<li><span><i class="fab fa-php"></i> iso-14001-2015-dont-miss-the-deadline.php</span></li>
															<li><span><i class="fab fa-php"></i> iso-22000-food-safety-management-system.php</span></li>
															<li><span><i class="fab fa-php"></i> iso-90012015-are-you-ready.php</span></li>
															<li><span><i class="fab fa-php"></i> understanding-food-safety-under-iso-22000.php</span></li>
															<li><span><i class="fab fa-php"></i> what-is-an-end-to-end-process-architecture.php</span></li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> product</span> 
														<ul class="esconder">
															<li><span><i class="fab fa-php"></i> all-products.php</span></li>
															<li><span><i class="fab fa-php"></i> apqp-ppap.php</span></li>
															<li><span><i class="fab fa-php"></i> asset-management.php</span></li>
															<li><span><i class="fab fa-php"></i> audit-planning-control.php</span></li>
															<li><span><i class="fab fa-php"></i> business-intelligence.php</span></li>
															<li><span><i class="fab fa-php"></i> calibration-management.php</span></li>
															<li><span><i class="fab fa-php"></i> competence-mapping-assessment.php</span></li>
															<li><span><i class="fab fa-php"></i> document-capture.php</span></li>
															<li><span><i class="fab fa-php"></i> document-record-management.php</span></li>
															<li><span><i class="fab fa-php"></i> fmea.php</span></li>
															<li><span><i class="fab fa-php"></i> food-safety-management.php</span></li>
															<li><span><i class="fab fa-php"></i> form-management.php</span></li>
															<li><span><i class="fab fa-php"></i> incident-management.php</span></li>
															<li><span><i class="fab fa-php"></i> inspection-goods-materials.php</span></li>
															<li><span><i class="fab fa-php"></i> maintenance-management.php</span></li>
															<li><span><i class="fab fa-php"></i> mcad-connector.php</span></li>
															<li><span><i class="fab fa-php"></i> msa-measurement-systems-analysis.php</span></li>
															<li><span><i class="fab fa-php"></i> performance-management.php</span></li>
															<li><span><i class="fab fa-php"></i> physical-record-management.php</span></li>
															<li><span><i class="fab fa-php"></i> problem-management.php</span></li>
															<li><span><i class="fab fa-php"></i> process-management.php</span></li>
															<li><span><i class="fab fa-php"></i> product-service-lifecycle-management.php</span></li>
															<li><span><i class="fab fa-php"></i> project-portfolio-management.php</span></li>
															<li><span><i class="fab fa-php"></i> project-service-management.php</span></li>
															<li><span><i class="fab fa-php"></i> risk-control-management.php</span></li>
															<li><span><i class="fab fa-php"></i> service-request-management.php</span></li>
															<li><span><i class="fab fa-php"></i> sharepoint-connector.php</span></li>
															<li><span><i class="fab fa-php"></i> statistical-process-control.php</span></li>
															<li><span><i class="fab fa-php"></i> storeroom-management.php</span></li>
															<li><span><i class="fab fa-php"></i> supply-management.php</span></li>
															<li><span><i class="fab fa-php"></i> survey-management.php</span></li>
															<li><span><i class="fab fa-php"></i> task-action-plan-management.php</span></li>
															<li><span><i class="fab fa-php"></i> test-management.php</span></li>
															<li><span><i class="fab fa-php"></i> time-control.php</span></li>
															<li><span><i class="fab fa-php"></i> training-planning-control.php</span></li>
															<li><span><i class="fab fa-php"></i> transmittal-document-management.php</span></li>
															<li><span><i class="fab fa-php"></i> waste-management.php</span></li>
															<li><span><i class="fab fa-php"></i> workflow.php</span></li>
														</ul>
													</li>
													<li><span><i class="fa fa-folder" aria-hidden="true"></i> solucao</span> 
														<ul class="esconder">
															<li><span><i class="fab fa-php"></i> business-process-management-bpm.php</span></li>
															<li><span><i class="fab fa-php"></i> by-business-needs.php</span></li>
															<li><span><i class="fab fa-php"></i> corporate-performance-management-cpm.php</span></li>
															<li><span><i class="fab fa-php"></i> enterprise-asset-management-eam.php</span></li>
															<li><span><i class="fab fa-php"></i> enterprise-content-management-ecm.php</span></li>
															<li><span><i class="fab fa-php"></i> enterprise-quality-management-eqm.php</span></li>
															<li><span><i class="fab fa-php"></i> enterprise-risk-management-erm.php</span></li>
															<li><span><i class="fab fa-php"></i> environment-health-safety-management-ehsm.php</span></li>
															<li><span><i class="fab fa-php"></i> food-and-beverage.php</span></li>
															<li><span><i class="fab fa-php"></i> governance-risk-compliance-management-grc.php</span></li>
															<li><span><i class="fab fa-php"></i> human-development-management-hdm.php</span></li>
															<li><span><i class="fab fa-php"></i> it-service-management-itsm.php</span></li>
															<li><span><i class="fab fa-php"></i> medical-devices.php</span></li>
															<li><span><i class="fab fa-php"></i> pharmaceuticals-and-biotechnology.php</span></li>
															<li><span><i class="fab fa-php"></i> product-lifecycle-management-plm.php</span></li>
															<li><span><i class="fab fa-php"></i> project-portfolio-management-ppm.php</span></li>
														</ul>
													</li>
													<li><span><i class="fab fa-css3"></i> font-awesome.css</span> 
														<li><span><i class="fab fa-php"></i> functions.php</span> 
															<li><span><i class="fab fa-php"></i> header.php</span> 
																<li><span><i class="fab fa-php"></i> index.php</span> 
																	<li><span><i class="fab fa-php"></i> thankyou.php</span> 

																	</li>
																</ul>
															</li>
														</ul>

													</div>
												</div>	
											</section>
										</div>
										<div class="clear"></div>
										<!-- Circulo que sobe a pagina -->

										<div class="sobePagina esconder">
											<a href="#top">
												<span>
													<i class="fas fa-angle-up"></i>
												</span>
											</a>

										</div>
										<script type="text/javascript" src="js/utils.js"></script>
										<script type="text/javascript">
											jQuery('.form-mais-info .bt-soft-enviar').on("click",function(){
												return wpesValidateForm();
											});
											jQuery('.contato-form-wrapper .enviar').on("click",function(){
												return wpesValidateForm();
											});
										</script>
										<a class="w-header-show" href="javascript:void(0);"></a>
									</body>
									</html>
