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
			<h1>Bienvenido a la Documentación para<br> implementación de Hotsite SoftExpert</h1>
			<div class="introducao-botoes">
				<p>
					Antes de más nada, descárguelo del hotsite a través del botón abajo 
				</p>
				<div class="botao-download">
					<a href="sesuite-es.zip" download="sesuite-es.zip">Descargar Hotsite</a>	
				</div>
				<div class="botao-download">
					<a href="https://www.softexpert.com/hotsite/sesuite/es" target="_blank">Vista previa del Hotsite </a>
				</div>
			</div>
			<div class="introducao-texto">
				<p>
					Dentro del archivo descargado (sesuite-es.rar) encontrará la carpeta “softexpert-excellence-suite”.<br>
					En esta carpeta están disponibles todos los archivos necesarios para el funcionamiento de Hotsite SoftExpert.<br>
					Cargue esta carpeta dentro de la raíz de su sitio, utilizando su FTP. <br>
					La URL deberá seguir el estándar de este ejemplo: www.susitio.com.es/softexpert-excellence-suite
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
							<li id="config-anchor"><a href="javascript:void(0)">1 - Configuración</a></li>
							<ul id="submenus">									
								<li><a href="#configuracao_url">1.2 - Configuración de la URL</a></li>
								<li><a href="#configuracao_email">1.3 - Configuración de la recepción y envío de e-mails</a></li>
								<li><a href="#configuracao_msg">1.4 - Configuración de Mensajes</a></li>															
							</ul>
							<li><a href="#configuracao_logomarca">2 - Añadiendo su marca al Hotsite</a></li>
						</ul>
					</div>				
					<div class="menu-duvidas">
						<h6>En caso de dudas entrar en contacto:</h6>				
						<ul class="canais">
							<li>
								<strong>Email: </strong>
								<a href="mailto:site@softexpert.com">site@softexpert.com</a>
								<p style="font-size: 14px;"><strong>O contacte su Analista de Canal</strong></p>
							</li>	
						</ul>						
					</div>
				</div>
			</div>	
			
			<div class="conteudo">
				<div class="box-conteudo">				
					
					
					<h2 id="configuracao"> 1 - Configuración</h2>
					<p>
						Hay varias formas de configurar su Hotsite. Para facilitar este trabajo, nuestro equipo unió las más importantes en un solo archivo: <em>functions.php</em>.
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
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> producto</li>
								<li style="color:rgba(20,20,20,0.3);"><span><i class="fa fa-folder" aria-hidden="true"></i></span> solucion</li>
								<li><span><i class="far fa-file-code"></i></span> functions.php</li>
							</ul>
						</li>
					</ul>
					<p style="text-align: left;"><a href="#diretorios">(Vea la Estructura Completa de Directorios)</a></p>
					<p style="margin-top: 20px;">
						Para editar este archivo es necesario abrirlo en un editor de código.
						Si no tiene un editor de código, puede abrir el archivo en el <em>Bloc de Notas (txt)</em> de Windows o en el  <em>Editor de Texto</em> de MAC..
					</p>									
					<div class="publicacao-titulo">
						<h2 id="configuracao_url">1.1 - Configuración de la URL </h1>
						</div>					
						<div class="print-tela">
							<img src="imgs/function_tela2.jpg" alt="">
						</div>
						<p>
							En este paso está definiendo que el navegador añade su URL automáticamente, por lo que Hotsite se cargará dentro de su sitio.
							<br>
							Para que todo funcione perfectamente añada la URL de <strong>"su sitio"</strong> en:
							<code>http://www.susitio.com.es/softexpert-excellence-suite</code>
						</p>
						<p>
							<strong>Importante:</strong> Tenga cuidado de no quitar las comillas simples que inician y finalizan la URL en el archivo, la eliminación de estas comillas puede resultar en el error de carga de los archivos generando ERROR 400 o ERROR 500.
						</p>
						<div class="publicacao-titulo">
							<h2 id="configuracao_email">1.2 - Configuración de la recepción y envío de e-mails</h1>
							</div>
							<p>
								Todavía en el <em>functions.php</em>, vamos a las configuraciones del STMP del e-mail. 
							</p>
							<div class="print-tela">
								<img src="imgs/function_tela3.jpg" alt="">
							</div>
							<p>
								<strong>Importante:</strong>Si no tiene estos datos, solicite esta información con la empresa responsable del hospedaje de su sitio. Si utilizas <em>“free email”</em> (Gmail, Outlook, entre otros) simplemente ingrese a su cuenta de e-mail y acceda a las configuraciones.
							</p>
							<p>
								<ol>
									<li><p>En la primera parte donde se define <code>define("SERVER_ADDRESS", "smtp.suservidor.com");</code>, cambie el <strong>smtp.suservidor.com</strong> por la dirección SMTP de su proveedor de e-mail.</p></li>
									<li><p>En la siguiente parte, donde se define <code>define("SERVER_USERNAME","su_usuario");</code>, cambie su usuario por la dirección de e-mail. Recordando que en la mayoría de los casos será necesario agregar su dirección de e-mail completa, como por ejemplo <code>su_email@provedor.com</code>.</p></li>
									<li><p>En la próxima parte, donde está <code>define("SERVER_PASS","su contraseña");</code>, você vai trocar o <strong>su contraseña</strong> cambie su_contraseña por la contraseña del SMTP del proveedor de e-mail. Recordando que no debe ingresar la contraseña para acceder a su e-mail, sino la contraseña del SMTP del e-mail. Si tiene alguna duda, consulte la información con su proveedor de e-mail o hospedaje de su sitio web.
									<br></br><b>Atención:</b> En la cuenta de Google, por ejemplo, es necesario habilitar la autenticación de dos factores para obtener lo que llamamos una contraseña de la aplicación, también hay excepciones que los proveedores trabajan con la contraseña del correo en sí.</p></li>
									<li><p>4. Ahora, donde está definido <code>define("SERVER_PORT", 000);</code>, vcambie el 000 por el número de la PUERTA que su e-mail utiliza para recibir y enviar e-mail. En la mayoría de los casos estos valores pueden ser <strong>25</strong>, <strong>465</strong> o <strong>587</strong>. Para estar seguro, accede a las configuraciones de tu e-mail u hospedaje de su sitio.</p></li>
									<li><p>Por último, donde se define <code>define("SERVER_ENCRYPT", "tls");</code>, troque o <strong>tls</strong> cambie el tls por el tipo de cifrado que el servidor de e-mail utiliza. En la mayoría de los casos estos valores pueden ser <strong>localhost</strong>, <strong>SSL</strong> o <strong>TLS</strong>. Para estar seguro, accede a las configuraciones de tu e-mail u hospedaje de su sitio.</p></li>
									Por último, donde se define define("SERVER_ENCRYPT", "tls");, troque o  tipo de cifrado que el servidor de e-mail utiliza. En la mayoría de los casos estos valores pueden ser "ENCRYPTION_SMTPS" para SSL, o "PHPMailer::ENCRYPTION_STARTTLS" para TLS. Para estar seguro, accede a las configuraciones de tu e-mail u hospedaje de su sitio.
								</ol>
							</p>
							<div class="publicacao-titulo">
								<h2 id="configuracao_msg">1.3 - Configuración de Mensajes</h2>
							</div>
							<p>
								Cuando alguien rellene un formulario de “Download” o “Más informaciones” no Hotsite, en Hotsite, recibirá un e-mail con los datos del lead. Esta parte ya fue configurada en la <a href="#configuracao_email" style="text-transform: none;">etapa 1.2</a> de esta documentación.
							</p>

							<p>
								Por defecto, el <strong>Mensaje de Agradecimiento</strong> que el lead recibe en la bandeja de su e-mails es:
							</p>
							<div class="exemplo-mensagem">
								<div class="texto-mensagem">	
									<strong>Hola Nombre del Lead,</strong><p>Usted se registró en nuestro sitio web para la descarga del material: </p><strong>Categoría > Nombre del Material</strong><br><a href="#">enlace al PDF</a><p>Gracias por su interés en las soluciones del nombre de su Empresa. <br>Para más información sobre nuestros productos y servicios, envíe un e-mail a <a href="mailto:SALES_EMAIL">email de ventas de la empresa</a> </p><br><p>Atentamente, <br><a href="HOME_URL">Nombre de Su Empresa</a></p>
								</div>
							</div>	
							<p>
								Para configurar este mensaje de agradecimiento es necesario editar el archivo <em>functions.php</em>:
							</p>
							<div class="print-tela">
								<img src="imgs/function_tela6.jpg" alt="">
							</div>							
							<ol>
								<li><p>Cambie el <code>Nombre de su Empresa</code>, por el nombre de su empresa;</p></li>
								<li><p>Cambie el <code>e-mail de ventas de la empresa</code> por el e-mail del área de ventas de su empresa. Si no tiene un sector de ventas, añada el e-mail del responsable del servicio al cliente.</p></li>
								<li><p>Cambie el <code>nombre del departamento</code> por el nombre del departamento de ventas de su empresa. Si no tiene un sector de ventas, añada el departamento o el nombre del responsable del atención al cliente.</p></li>
								<li><p>Cambie <code>suemail@suempresa.com</code> por su e-mail.</p></li>
							</ol>
						</p>
						<p>
							¡Si desea personalizar este mensaje también es sencillo! Basta con acceder el archivo <em>wpesEnviaEmail.php</em>:
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
							<p style="text-align: left;"><a href="#diretorios">(Vea la Estructura Completa de Directorios)</a></p>
							<p>
								Edite las frases en los códigos abajo según su necesidad (cambie sólo los textos de agradecimiento):
							</p>
							<div class="print-tela">
								<img src="imgs/function_tela7.png" alt="">
							</div>
						</p>
						<div class="publicacao-titulo">
							<h2 id="configuracao_logomarca">2 - Añadiendo su marca al Hotsite</h1>
							</div>
							<p>
								De forma predeterminada, la pestaña del navegador muestra el icono de SoftExpert, como se muestra a continuación.
							</p>
							<p>
								Siga los pasos a continuación, si desea cambiar por su marca:
								<ol>
									<li><p>El archivo de su logotipo no puede sobrepasar el tamaño de 20x20 píxeles.</p></li>
									<li><p>Hospede su logomarca en su sitio web, para que este genere una url.</p></li>
									<li><p>En la parte donde muestra <code>$companyIcon = " ";</code>, agregue entre las comillas dobles "la url de la imagen generada por el servidor.</p></li>
								</ol>															
							</p>
							<div class="print-tela">
								<img src="imgs/function_tela5.jpg" alt="">
							</div>
							<div class="publicacao-titulo" style="display: none;">
								<h2 id="diretorios" style="display: none;">Estructura de Directorios</h1>
								</div>
								<ul style="margin-top: 20px;display: none;" class="tree" style="display: none;">
									<li><span><i class="fa fa-folder-open" aria-hidden="true"></i></span>softexpert-excellence-suite
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
													<li><span><i class="far fa-file-pdf"></i> 3-Praticas-Chave-para-aprimorar-a-Gestao-de-Talentos-HDM.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 5-processos-estrategicos-para-o-sucesso-em-ECM.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 6-Ferramentas-Chave-para-a-Excelencia-em-GRC.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 7-elementos-cruciais-para-o-Gerenciamento-de-Servicos-de-TI.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 7-Ferramentas-Capitais-para-Excelencia-na-Gestao.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 7-recursos-indispensaveis-em-um-sistema-de-gestao-ambiental.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 7-recursos-que-toda-solucao-de-gestao-de-ativos-deve-possuir.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 8-recursos-essenciais-solucao-gestao-estrategia-desempenho.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 8-recursos-que-toda-solucao-de-PLM-deve-possuir.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 10-Conhecimentos-Habilidades-Gerente-Projeto-Deve-Possuir.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 10-recursos-avancados-que-toda-solucao-de-BPM-deveria-ter.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> 13-processos-que-todo-Software-de-Gestao-da-Qualidade-Empresarial-EQMS-deveria-automatizar.pdf</span></li>	
													<li><span><i class="far fa-file-pdf"></i> Alavancando-Organizacoes-Setor-Alimentos-Bebidas-com-SE-Suite.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-a-gestao-da-governanca-riscos-e-conformidade.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-a-gestao-da-qualidade-em-sua-empresa.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-a-gestao-de-documentos-em-sua-empresa.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-a-gestao-de-talentos-em-sua-empresa.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-gestao-ativos-empresa.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-aprimorar-gestao-processos-negocio-9-etapas.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-criar-paineis-de-desempenho-eficazes.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> como-elaborar-plano-gestao-de-riscos-12-passos.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Como-implementar-Gestao-Servicos-de-TI-suportem-estrategia-objetivos-empresa.pdf</span></li>					
													<li><span><i class="far fa-file-pdf"></i> Como-tecnologia-melhorar-gestao-seguranca-alimentos.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Do-you-listen-to-your-performance-measures.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> ISO-9001-2015-Voce-esta-preparado.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> ISO-14001-2015-Nao-perca-o-prazo.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> ISO-22000-Food-Safety-Management-System.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Seven-Mistakes-to-Avoid-When-Integrating-New-Product-Development-Processes.pdf</span></li>					
													<li><span><i class="far fa-file-pdf"></i> The-Role-of-Service-Request-Management.pdf</span></li>						
													<li><span><i class="far fa-file-pdf"></i> Useful-Key-Performance-Indicators-for-Maintenance.pdf</span></li>						
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
											<li><span><i class="fa fa-folder" aria-hidden="true"></i> materiales</span> 
												<ul class="esconder">
													<li><span><i class="fab fa-php"></i> 3-praticas-chave-para-aprimorar-a-gestao-de-talentos-hdm.php</span></li>
													<li><span><i class="fab fa-php"></i> 5-etapas-fundamentais-para-uma-gestao-de-riscos-eficaz.php</span></li>
													<li><span><i class="fab fa-php"></i> 6-ferramentas-chave-para-a-excelencia-em-grc.php</span></li>
													<li><span><i class="fab fa-php"></i> 7-elementos-cruciais-para-o-gerenciamento-de-servicos-de-ti.php</span></li>
													<li><span><i class="fab fa-php"></i> 7-ferramentas-capitais-para-a-excelencia-na-gestao.php</span></li>
													<li><span><i class="fab fa-php"></i> 7-recursos-indispensaveis-sistema-de-gestao-ambiental.php</span></li>
													<li><span><i class="fab fa-php"></i> 7-recursos-toda-solucao-gestao-ativos-deve-possuir.php</span></li>
													<li><span><i class="fab fa-php"></i> 8-recursos-essenciais-solucao-gestao-estrategia-desempenho.php</span></li>
													<li><span><i class="fab fa-php"></i> 8-recursos-que-toda-solucao-de-gestao-de-ciclo-de-vida-de-produtos-deve-possuir.php</span></li>
													<li><span><i class="fab fa-php"></i> 10-conhecimentos-habilidades-todo-gerente-de-projeto-deve-possuir.php</span></li>
													<li><span><i class="fab fa-php"></i> 10-recursos-avancados-que-toda-solucao-de-bpm-deveria-ter.php</span></li>
													<li><span><i class="fab fa-php"></i> 13-processos-software-gestao-da-qualidade-automatizar-eqms.php</span></li>
													<li><span><i class="fab fa-php"></i> alavancando-organizacoes-alimentos-bebidas.php</span></li>
													<li><span><i class="fab fa-php"></i> aprimorando-conformidade-regulatoria-atraves-da-abordagem-integrada.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-a-gestao-da-qualidade-em-sua-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-a-gestao-de-documentos-em-sua-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-a-gestao-de-projetos-em-sua-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-a-gestao-de-talentos-em-sua-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-gestao-ativos-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-gestao-governanca-riscos-conformidade.php</span></li>
													<li><span><i class="fab fa-php"></i> como-aprimorar-gestao-processos-9-etapas.php</span></li>
													<li><span><i class="fab fa-php"></i> como-criar-paineis-de-desempenho-eficazes.php</span></li>
													<li><span><i class="fab fa-php"></i> como-elaborar-plano-gestao-de-riscos-12-passos.php</span></li>
													<li><span><i class="fab fa-php"></i> como-tecnologia-melhorar-gestao-seguranca-alimentos.php</span></li>
													<li><span><i class="fab fa-php"></i> conduzindo-a-transicao-da-isots-16949-para-a-iatf-16949.php</span></li>
													<li><span><i class="fab fa-php"></i> ebook-iso-90012015-voce-esta-preparado.php</span></li>
													<li><span><i class="fab fa-php"></i> encontrando-indicadores-chave-de-desempenho-kpis-gestao-manutencao.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-de-servicos-de-ti-para-atingir-metas-e-objetivos-da-sua-empresa.php</span></li>
													<li><span><i class="fab fa-php"></i> iso-14001-2015-nao-perca-o-prazo.php</span></li>
													<li><span><i class="fab fa-php"></i> iso-22000-sistema-gestao-seguranca-alimentos.php</span></li>
													<li><span><i class="fab fa-php"></i> o-papel-da-gestao-de-solicitacoes-de-servico.php</span></li>
													<li><span><i class="fab fa-php"></i> sete-erros-evitar-quando-integrar-novos-processos-desenvolvimento-produto.php</span></li>
													<li><span><i class="fab fa-php"></i> visao-estrategica-gestao-de-ativos-iso-55000.php</span></li>
													<li><span><i class="fab fa-php"></i> voce-ouve-seus-indicadores-de-desempenho.php</span></li>
												</ul>
											</li>
											<li><span><i class="fa fa-folder" aria-hidden="true"></i> producto</span> 
												<ul class="esconder">
													<li><span><i class="fab fa-php"></i> apqp-ppap.php</span></li>
													<li><span><i class="fab fa-php"></i> business-intelligence.php</span></li>
													<li><span><i class="fab fa-php"></i> calibracao-equipamentos.php</span></li>
													<li><span><i class="fab fa-php"></i> captura-documentos.php</span></li>
													<li><span><i class="fab fa-php"></i> cep-controle-estatistico-processos.php</span></li>
													<li><span><i class="fab fa-php"></i> controle-atividades.php</span></li>
													<li><span><i class="fab fa-php"></i> fmea.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-almoxarifado.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-atividades-planos-acao.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-ativos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-ciclo-vida-produtos-servicos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-conformidade-regulamentar.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-desempenho.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-documentos-fisicos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-documentos-registros.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-documentos-tramites.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-formularios.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-incidentes.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-insumos-materia-prima.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-manutencao.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-portfolio-projetos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-problemas.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-processos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-projetos-servicos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-questionarios.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-residuos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-riscos-controles.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-seguranca-alimentar.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-solicitacoes-servicos.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-testes.php</span></li>
													<li><span><i class="fab fa-php"></i> inspecao-materiais-produtos.php</span></li>
													<li><span><i class="fab fa-php"></i> mapeamento-avaliacao-competencias.php</span></li>
													<li><span><i class="fab fa-php"></i> mcad-connector.php</span></li>
													<li><span><i class="fab fa-php"></i> msa-analise-sistemas-medicao.php</span></li>
													<li><span><i class="fab fa-php"></i> planejamento-controle-auditorias.php</span></li>
													<li><span><i class="fab fa-php"></i> planejamento-controle-treinamentos.php</span></li>
													<li><span><i class="fab fa-php"></i> sharepoint-connector.php</span></li>
													<li><span><i class="fab fa-php"></i> todos-os-produtos.php</span></li>
													<li><span><i class="fab fa-php"></i> workflow.php</span></li>
												</ul>
											</li>
											<li><span><i class="fa fa-folder" aria-hidden="true"></i> solucion</span> 
												<ul class="esconder">
													<li><span><i class="fab fa-php"></i> gestao-da-qualidade-empresarial-eqm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-de-governanca-riscos-e-regulamentos-grc.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-de-projetos-e-portfolios-ppm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-de-riscos-corporativos-erm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-de-servicos-de-ti-itsm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-do-ciclo-de-vida-do-produto-plm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-do-conteudo-empresarial-ecm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-do-desempenho-corporativo-cpm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-do-desenvolvimento-humano-hdm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-do-meio-ambiente-saude-e-seguranca-ehsm.php</span></li>
													<li><span><i class="fab fa-php"></i> gestao-dos-ativos-empresariais-eam.php</span></li>
													<li><span><i class="fab fa-php"></i> por-necessidade-de-negocio.php</span></li>
													<li><span><i class="fab fa-php"></i> software-para-gestao-de-processos-de-negocio-bpm.php</span></li>
												</ul>
											</li>
											<li><span><i class="fab fa-css3"></i> font-awesome.css</span> 
												<li><span><i class="fab fa-php"></i> functions.php</span> 
													<li><span><i class="fab fa-php"></i> header.php</span> 
														<li><span><i class="fab fa-php"></i> index.php</span> 
															<li><span><i class="fab fa-php"></i> obrigado.php</span> 

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
