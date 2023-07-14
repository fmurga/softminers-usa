<?php 
include_once('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TESTE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-old.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/us-base.css">
	<link rel="stylesheet" type="text/css" href="css/theme-options.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/magnific-popup.css">
	<script type="text/javascript" src="dist/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/mfp.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<meta name="robots" content="noindex">
</head>
<body class="single single-login l-body Zephyr_99.5.1 header_hor softexpert wpb-js-composer js-comp-ver-4.12 vc_responsive">

	<div class="container-box-login">	
		<div class="box-login">
			<div class="box-login-side-container">
				<div class="box-login-side">	

					<div class="box-login-welcome">	
						<h6> Bem vindo a</h6>
					</div>
					<div class="box-login-logo">	
						<img src="<?= HOME_URL;  ?>/imgs/softexpert.svg" alt="SoftExpert Software">
					</div>
					<div class="box-login-message">
						<p>
							Insira seu login e senha, fornecidos para ter acesso.
						</p>
					</div>
					<div class="box-login-form">
						<form action="">
							<input type="text" id="login" name="login" placeholder="Insira seu Código de Acesso">
							<label for="login"></label>

							<input type="password" id="senha" name="senha" placeholder="Insira sua Senha">
							<label for="senha"></label>

							<input type="submit" class="submit-login" placeholder="Acessar">
						</form>				
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/utils.js"></script>
	<script type="text/javascript">
		jQuery('.form-mais-info .bt-soft-enviar').on("click",function(){
			return wpesValidateForm()
			;});
		jQuery('.contato-form-wrapper .enviar').on("click",function(){
			return wpesValidateForm();});
		</script>
		<a class="w-header-show" href="javascript:void(0);"></a>
	</body>
	</html>
