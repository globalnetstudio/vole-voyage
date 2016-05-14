<?php session_start();
require('_partials/api.php'); // Carga el API
require('_partials/helpers.php'); // Carga funciones globales

// Obtener el url de sección
$pageUrl  = isset($_GET['page']) ? strtolower($_GET['page'])  : '';

// Obtener el url de categoría
// $categoryUrl = isset($_GET['category']) ? $_GET['category'] : '';

// Carga la clase de Pages
require('_classes/Pages.php');

// Carga los variables de la sección
switch ($pageUrl) {
	case '':
		extract(Pages::home());
		break;

	case 'nosotros':
		extract(Pages::about());
		break;

	case 'servicios':
		extract(Pages::services());
		break;

	case 'promociones':
		extract(Pages::promotions());
		break;

	case 'contacto':
		extract(Pages::contact());
		break;
	
	default:
		header('Location: /');
		break;
		exit();
}

// Carga la plantilla principal
include_once('_templates/main.php');

// Vacia el array de sessión
$_SESSION = [];

// Elimina la sesión
session_destroy();