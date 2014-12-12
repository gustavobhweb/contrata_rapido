<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
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
					<a class="nav-button on">
						<i class="icon inicio"></i>
						<span>INÍCIO</span>
					</a><!-- .nav-button -->
					<a class="nav-button">
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
			<div class="box">
				<div class="main-content">
					<a href="#"><img src="img/logo.png" /></a>

					<div class="login">
						<div class="restrict">
							<img src="img/icons/lock.png" />
							<h4>Área restrita</h4>
							<div class="clear"></div>
						</div><!-- .restrict -->
						<form method="post">
							<input type="text" name="email" id="email" class="cr-input mail" placeholder="E-mail" />
							<input type="password" name="senha" id="senha" class="cr-input pass" placeholder="Senha" />
							<button type="submit" class="btn-login">ENTRAR ></button>
						</form>
					</div><!-- .login -->
							
				</div><!-- .main-content -->
			</div><!-- .box -->
		</div><!-- .header -->

		<div class="box-animado">
			<div id="ri-grid" class="ri-grid">
			    <ul>
			    	<?php 
			    		for($i=1;$i<=54;$i++){
			    	?>
			        <li><a href="#"><img src="img/original/<?=$i?>.png" alt="Whatever works"/></a></li>
			        <?php }?>
			    </ul>
			</div>
			<div class="left-anim-box">
				<div class="anuncie">
					<button class="btn-emprego">Quero emprego ></button>
				</div><!-- .anuncie -->
			</div><!-- .left-anim-box -->
			<div class="right-anim-box">
				<div class="anuncie-vaga">
					<button class="btn-contratar">Quero contratar ></button>
				</div><!-- .anuncie-vaga -->
			</div><!-- .right-anim-box -->
		</div><!-- .box-animado -->

		<div class="footer">
			<div class="section1">
				<div class="main-content">
					<h3>Nas redes sociais</h3>
					<h4>Social as novidades do Contrata Rápido na internet</h4>
					<div class="network">
						<a target="_blank" href="#" class="btn-fb"></a>
						<a target="_blank" href="#" class="btn-twitter"></a>
						<a target="_blank" href="#" class="btn-gplus"></a>
						<div class="clear"></div>
					</div><!-- .newtwork -->
				</div><!-- .main-content -->
			</div><!-- .section1 -->

			<div class="section2">
				<div class="contrata-universitarios">
					
				</div><!-- .contrata-universitarios -->
			</div><!-- .section -->
		</div><!-- .footer -->

	</body>
</html>