<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/alternative1.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
		<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
		<script type="text/javascript" src="js/default.js"></script>
		<title>Contrata rápido</title>
	</head>
	<body>

		<div class="header">
			<div class="menu">
				<div class="main-content">
					<a href="index.php" class="nav-button">
						<i class="icon inicio"></i>
						<span>INÍCIO</span>
					</a><!-- .nav-button -->
					<a class="nav-button on">
						<i class="icon candidatos"></i>
						<span>CANDIDATOS</span>
					</a><!-- .nav-button -->
					<a class="nav-button">
						<i class="icon empresas"></i>
						<span>EMPRESAS</span>
					</a><!-- .nav-button -->
					<a class="nav-button" style="float:right">
						<i class="icon central"></i>
						<span>CENTRAL DE ATENDIMENTO</span>
					</a><!-- .nav-button -->
				</div><!-- .main-content -->
			</div><!-- menu -->
			<div class="box-alternative">
				<div class="main-content">
					<img src="img/logo-alternative.png" width="147" height="73" />
					<div class="acesso">
						<p>ACESSO DO CANDIDATO</p>
					</div><!-- .acesso -->
					<h2>Candidato, boa noite!</h2>
				</div><!-- .main-content -->
			</div><!-- .box-alternative -->
			<div class="sub-menu">
				<div class="main-content">
					<ul>
						<li class="on"><a href="#">INÍCIO</a></li>
						<li><a href="#">CANDIDATOS</a></li>
					</ul>
				</div><!-- .main-content -->
			</div><!-- .sub-menu -->
		</div><!-- .header -->

		<div class="content-alternative">
			<div class="main-content">
				<div class="ja-tenho-cadastro">
					<div class="title">
						<h1>Já tenho cadastro</h1>
						<h3>Digite seus dados</h3>
					</div><!-- .title -->
					<div class="login-alternative">
						<img src="img/icons/lock.png" width="17" height="17" />
						<h4>Área restrita</h4>
						<form method="post">
							<input type="text" name="email" id="email" class="cr-input mail" placeholder="E-mail"
							 />
							 <input type="password" style="display:none" />
							<input type="password" name="senha" id="senha" class="cr-input pass" placeholder="Senha" />
							<button type="submit" class="btn-login">ENTRAR</button>
							<input id="ckb-manter" type="checkbox" />
							<label for="ckb-manter">Mantenha-me conectado</label>
							<div class="clear"></div>
						</form>
						<a href="#">Não consegue acessar sua conta?</a>
						<div class="clear"></div>
					</div><!-- .login-alternative -->
				</div><!-- .ja-tenho-cadastro -->
				<div class="ainda-nao-tenho">
					<div class="title">
						<h1>Ainda não tenho cadastro</h1>
						<h3>Cadastre-se em menos de 1 minuto:</h3>
					</div><!-- .title -->
					<div class="clear"></div>
				</div><!-- .ainda-nao-tenho -->
				<div class="clear"></div>
			</div><!-- .main-content -->
		</div><!-- .content-alternative -->

		<div class="footer">
			<div class="section2">
				<div class="main-content">
					<div class="infos">
						<a href="#"><img class="footer-logo" src="img/footer-logo.png" /></a>
						<p>ContrataRapido.com.br &copy; <?=date('Y');?> - Todos os direitos reservados. <a>Termos de uso</a> & <a>política de privacidade</a></p>
						<img class="powered" src="img/powered.png" />
					</div><!-- .infos -->
					<div class="clear"></div>
				</div><!-- .main-content -->
			</div><!-- .section -->
		</div><!-- .footer -->

	</body>
</html>