<!DOCTYPE HTML>
<html>
	<head>
		<title>Projeto HelpFACCAT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="indexfiles/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="indexfiles/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="{{ url('/home') }}" id="logo">HelpFACCAT</a></h1>
								<hr />
								<p><b></b>Sistema de Colaboração Universitária.</b><br></p>
								<p><br></p>
							</header>
							<footer>
								<a href="{{ route('login') }}" class="button circled scrolly">Login</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
							<!--	<li><a href="{{ route('login') }}">Entrar</a></li> -->

								<li><a href="{{ route('register') }}">Crie seu Cadastro</a></li>
							</ul>
						</nav>

				</div>

			
			

			
			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Trabalho de Tópicos Especiais em Sistemas de Informação 01/2018</h3>
										</header>
										<p>Siga a HelpFACCAT nas redes sociais!</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>HelpFACCAT - Todos os Direitos Reservados!</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="indexfiles/assets/js/jquery.min.js"></script>
			<script src="indexfiles/assets/js/jquery.dropotron.min.js"></script>
			<script src="indexfiles/assets/js/jquery.scrolly.min.js"></script>
			<script src="indexfiles/assets/js/jquery.onvisible.min.js"></script>
			<script src="indexfiles/assets/js/skel.min.js"></script>
			<script src="indexfiles/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="indexfiles/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="indexfiles/assets/js/main.js"></script>

	</body>
</html>