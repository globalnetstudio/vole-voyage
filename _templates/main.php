<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Agencia de Viajes Vole Voyage<?php echo $page_title; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">
		<link rel="stylesheet" href="/css/styles.css">
		<!-- Google Fonts -->
	  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<!-- Jquery -->
	  <script src="/js/jquery.min.js"></script>
	  <!-- Slider -->
	  <script src="/js/slider.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	</head>
	<body class="<?php echo $page_name; ?>">

		<hgroup>
			<h1 class="hide">Vole Voyage</h1>
			<h2 class="hide">Agencia de Viajes s.a de c.v</h2>
		</hgroup>

		<header>

			<div id="header">
				<div class="logo-menu">
					<div class="logo-menu__container clearfix">
						<div class="logo">
							<a href="/"><img src="/images/header/vole-voyage-logo.png" alt="Vole Voyage Logo"></a>
						</div> <!-- /.logo -->
						
						<nav>
							<!-- .Menu -->
							<?php include_once('_partials/menu.php'); ?>
							<!-- /.Menu -->
						</nav>
					</div> <!-- /.container -->
				</div> <!-- /.logo-menu -->

				<?php
					switch ($page_name) :
						case 'home':
							include_once('_partials/carousel_home.php');
							break;
						case 'about':
							// code
							break;
						case 'services':
							// code
							break;
						case 'promotions':
							// code
							break;
						case 'contact':
							// code
							break;
					endswitch;
				?>

			</div> <!-- /#header -->
		</header>

		<section>
			<div class="content">
				<?php include_once($page_view); ?>
			</div> <!-- /.content -->
		</section>

		<aside>

			<div class="contact-information clearfix">

				<div class="column email">
					<p><img class="icon icon-email" src="/images/icons/email-icon.jpg" alt="Icono de Email">contactanos@volevoyage.com</p>
				</div> <!-- /.email -->

				<div class="column phones">
					<p><img class="icon icon-phone" src="/images/icons/phone-icon.jpg" alt="Icono de Teléfono"> (81) 8332-3082&nbsp;&nbsp;(81) 1968-2800</p>
				</div>

				<div class="column social-icons">
					<img class="icon icon-facebook" src="/images/icons/facebook-icon.jpg" alt="Icono de Facebook">
					<img class="icon icon-twitter" src="/images/icons/twitter-icon.jpg" alt="Icono de Twitter">
					<img class="icon icon-google-plus" src="/images/icons/google-plus-icon.jpg" alt="Icono de Google Plus">
					<img class="icon icon-instagram" src="/images/icons/instagram-icon.jpg" alt="Icono de Instagram">
				</div> <!-- /.social-icons -->

			</div> <!-- /.contact-information -->

		</aside> <!-- /.bottom-content -->

		<footer>
			<div class="footer clearfix">
				<div class="container">
					<p class="copyright">Copyright 2016 &copy; Vole Voyage &#8226; Todos los Derechos Reservados</p>
					<p class="developed_by">Desarrollo por <img src="/images/icons/global-net-studio-logo.png" alt="Global Net Studio Logo"> <a href="http://globalnetstudio.com/" target="_blank">Global Net Studio</a></p>
				</div> <!-- /.footer__container -->
			</div> <!-- /.footer -->
		</footer>		
	</body>
</html>