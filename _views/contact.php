<div class="contact">

	<?php if(isset($_SESSION['error']) && $_SESSION['error'] !== '') : ?>
	<div class="form-errors">
		<p><b><?php echo $_SESSION['error']; ?></b></p>
	
		<ul>
			<?php foreach($_SESSION['form-errors'] as $key => $error) : ?>
				<?php if($key == 'questionComment') : ?>
					<li>Esciba sus <b><?php echo $error ?></b></li>
				<?php elseif($key == 'email-format'): ?>
					<li>Formato incorrecto de <b><?php echo $error ?></b></li>	
				<?php else: ?>
					<li>Esciba su <b><?php echo $error ?></b></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div> <!-- /.form-errors -->
	<?php endif; ?>

	<p class="notice">Nos interesa escucharte. Responderemos a tu comentario lo más pronto posible.</p>

	<form id="contactForm" action="process-email.php" method="POST">
		<div class="name-email-phone-group clearfix">
			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['name'])) ? "class='inputError'" : null; ?>
					type="text"
					name="name"
					placeholder="Nombre Completo:"
					value="<?php echo (isset($_SESSION['old-name'])) ? $_SESSION['old-name'] : null; ?>"
				>
			</div> <!-- /.column -->

			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['email'])) ? "class='inputError'" : null; ?>
					type="email"
					name="email"
					placeholder="Correo Electrónico:"
					value="<?php echo (isset($_SESSION['old-email'])) ? $_SESSION['old-email'] : null; ?>"
				>	
			</div> <!-- /.column -->

			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['phone'])) ? "class='inputError'" : null; ?>
					type="text"
					name="phone"
					placeholder="Teléfono (con lada):"
					value="<?php echo (isset($_SESSION['old-phone'])) ? $_SESSION['old-phone'] : null; ?>"
				>
			</div> <!-- /.column -->
		</div> <!-- /.form-group -->

		<div class="form-group">
			<textarea <?php echo (isset($_SESSION['form-errors']['questionComment'])) ? "class='inputError'" : null; ?>
				name="questionComment"
				placeholder="Preguntas y Comentarios:"
				rows="5"				
			><?php echo (isset($_SESSION['old-message'])) ? $_SESSION['old-message'] : null; ?></textarea>
		</div> <!-- /.form-group -->

		<div class="bottom-form clearfix">

			<div class="left-column">
				<div>
					<p>¿ Como prefieres que te contactemos ?</p>
					<label for="by_email">
						<input
							type="checkbox"
							id="by_email"
							name="byEmail"
							value="1"
							<?php echo (isset($_SESSION['old-email-check'])) ? 'checked' : null; ?>
						>&nbsp;E-mail
					</label>
					<label for="by_phone">
						<input
							type="checkbox"
							id="by_phone"
							name="byPhone"
							value="1"
							<?php echo (isset($_SESSION['old-phone-check'])) ? 'checked' : null; ?>
						>&nbsp;Teléfono
					</label>
				</div>
			</div> <!-- /.left-column -->

			<div class="right-column">
				<button type="reset">BORRAR</button>
				<button type="submit">ENVIAR</button>
			</div> <!-- /.right-column -->

		</div> <!-- /.form-group -->

	</form>

	<div class="maps clearfix">
		<div class="left-map">
			<div class="address">				
				<p>&nbsp;Fray Bartolomé de las Casas # 219-C, Colonia el Roble,<br>
					C.P 66440, San Nicolas de los Garza, Nuevo León.</p>
			</div> <!-- .address -->

			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.0022780738218!2d-100.30811543577256!3d25.744479847124563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662945fc2c54491%3A0x620e82049f90e253!2sVole+Voyage+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1463452627013" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div> <!-- /.map -->
		</div> <!-- /.left-map -->

		<div class="right-map">
			<div class="address">				
				<p>Arturo de la Garza # 1102, Colonia Roble San Nicolas<br>
					C.P. 66427, Nuevo León</p>
			</div> <!-- /.address -->

			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1068.2607138755398!2d-100.28949438057008!3d25.764405390046065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662949bf9f646b9%3A0x9c75d8545767e343!2sAv+Arturo+B.+de+la+Garza+1102%2C+Villarreal%2C+San+Nicol%C3%A1s+de+los+Garza%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1463453022522" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>  <!-- /.map -->

		</div> <!-- /.right-map -->
	</div>
</div> <!-- .contact -->

<script>
	$(document).ready(function() {
		$("#contactForm").validate({
			rules: {
				name: {
					required: true,
					minlength: 3
					
				},
		    email: {
		      required: true,
		      email: true
		    },
				phone: {
					required: true,
					minlength: 4
				},
				questionComment: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				name: {
					required: "* Escriba su nombre",
					minlength: "* Escriba por lo menos 4 caracteres"
				},
				
				phone: {
					required: "* Escriba su teléfono (con lada)",
					minlength: "* Escriba por lo menos 4 caracteres"
				},

				email: {
					required: "* Escriba su email",
					email: "* Formato Inválido"
				},

				questionComment: {
					required: "* Escriba sus preguntas y comentarios",
					minlength: "* Escriba por lo menos 3 caracteres"
				},
			}
		});
	});
</script>