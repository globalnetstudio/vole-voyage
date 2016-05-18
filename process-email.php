<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();

	require('./_partials/validationFunctions.php');
	
	$_SESSION['form-errors'] = [];
	$_SESSION['mail-sended'] = false;
	
	// Inicializar contador de errores	

	$ne = false; $ph = false; $em = false; $qc = false;

	// Asignar variables del formulario y limpiar espacios del inicio
	$name 		= (isset($_POST['name']))  		? clean($_POST['name']) 		: '';
	$email    = (isset($_POST['email']))    ? clean($_POST['email'])   : '';
	$phone    = (isset($_POST['phone']))    ? clean($_POST['phone'])   : '';
	$byEmail  = (isset($_POST['byEmail']))  ? clean($_POST['byEmail']) : '';
	$byPhone  = (isset($_POST['byPhone']))	? clean($_POST['byPhone'])	: '';
	$questionsComments = (isset($_POST['questionComment'])) ? clean($_POST['questionComment']) : '';

	// Validación campos vacios
	if($name !== '') :
		$ne = true;
		$_SESSION['old-name'] = $name;
	else:
		$_SESSION['form-errors']['name'] = "nombre";
	endif;

	if($email !== '') :
		$em = true;
		$_SESSION['old-email'] = $email;
		
		if(emailValidation($email)) :
			$em = true;
		else:
			$em = false;
			$_SESSION['form-errors']['email-format'] = "Correo Electrónico";
		endif;
	else:
		$_SESSION['form-errors']['email'] = "correo electrónico";
	endif;
	
	if($phone !== '') :
		$ph = true;
		$_SESSION['old-phone'] = $phone;
	else:
		$_SESSION['form-errors']['phone'] = "teléfono";
	endif;
	
	if($questionsComments !== '') :
		$qc = true;
		$_SESSION['old-message'] = $questionsComments;
	else:
		$_SESSION['form-errors']['questionComment'] = "Preguntas y comentarios";
	endif;
	
	if($byEmail == 1) :
		$_SESSION['old-email-check'] = 'checked';
	endif;
	
	if($byPhone == 1) :
		$_SESSION['old-phone-check'] = 'checked';
	endif;

	if(!$ne || !$ph || !$em || !$qc) :
		$_SESSION['error'] = '¡ No se pudo enviar el correo !';
		header("Location: /contacto");
		exit();	
	endif;

	$campos   = [];
	$campos[] = ['nombre'   => 'Nombre del Prospecto', 'valor' => $name];
	$campos[] = ['email'    => 'Correo Electrónico', 'valor' => $email];
	$campos[] = ['telefono' => 'Número Telefónico', 'valor' => $phone];

	if ($byEmail && $byPhone) :
		$campos[] = ['metodo_contacto' => 'Método de contacto', 'value' => 'Teléfono/Correo Electrónico'];
	else:
		if($byEmail == 1) :
			$campos[] = ['metodo_contacto' => 'Método de contacto', 'valor' => $byEmail];
		endif;

		if($byPhone == 1) :
			$campos[] = ['metodo_contacto' => 'Método de contacto', 'valor' => $byPhone];
		endif;
	endif;

	// Se crea el variable de sesión con los campos y el mensaje
	$_SESSION['campos-emails'] = ['campos' => $campos, 'msg' => $questionsComments];

	// Se crea el variable de sesión de mail-sended
	// como verdadero para poder mostrar la página
	$_SESSION['mail-sended'] = true;

	// Se redirecciona a la página de gracias
	header("Location: /gracias");
	exit();

} else {	
	header("Location: /contacto");
	exit();
}
?>