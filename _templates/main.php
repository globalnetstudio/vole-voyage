<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Agencia de Viajes Vole Voyage<?php echo $page_title; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">
		<link rel="stylesheet" href="/css/styles.css">
		<!-- Google Fonts -->
	  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

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
			<?php include_once($page_view); ?>
		</header>

		<footer>
			
		</footer>		
	</body>
</html>