<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Agencia de Viajes Vole Voyage<?php echo $page_title; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">
		<link rel="stylesheet" href="/css/reset.css">
		<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body class="<?php echo $page_name; ?>">

		<hgroup>
			<h1 class="hide">Vole Voyage</h1>
			<h2 class="hide">Agencia de Viajes s.a de c.v</h2>
		</hgroup>

		<!-- .Menu -->
		<?php include_once('_partials/menu.php'); ?>
		<!-- /.Menu -->

		<?php include_once($page_view); ?>
	</body>
</html>