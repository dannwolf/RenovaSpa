<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">

		<title>Renova Spa</title>	
	</head>
	<body>
	<div class="row">
		<div class="col-2" align="left">
		<img src="c:/xampp/htdocs/app/view/cliente/img/logo.png" width="200" height="200" align="center">
		</div>
		<div class="col-4" align="center">
			
		</div>
		<div class="col-4" align="center">
			<br>
			<br>
			<h1 align="center" style="color:black; font-family: times, serif; font-size:20pt; font-style:italic;">Deslinde de Responsabilidad</h1>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="center">
			<nav>
				<ul>
				  <li><a href="#">Bienvenido</a></li>
				  <li><a href="#">Welcome</a></li>
				  <li><a href="#">Willkommen</a></li>
				  <li><a href="#">Benvenuto</a></li>
				  <li><a href="#">Valkomen</a></li>
				 
				</ul>
			</nav>
		</div>
		<div class="col-2">

		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="left">
			<aside>
				Por favor, dedique unos minutos a leer cuidadosamente la información siguiente y suscribirla con su firma<br>
				<p>al finalizar la lectura, muchas gracias.</p>
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8">
			
		<dt><?php echo __('Nombre'); ?></dt>
		<dd style="display: inline-block;">
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Apellidos'); ?></dt>
		<dd style="display: inline-block;">
			<?php echo h($cliente['Cliente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd style="display: inline-block;">
			<?php echo h($cliente['Cliente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd style="display: inline-block;">
			<?php echo h($cliente['Cliente']['correo_electronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitacion'); ?></dt>
		<dd style="display: inline-block;">
			<?php echo h($cliente['Cliente']['habitacion']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8" align="left">
			<aside>
				1. El masaje o tratamiento que usted va a recibir tiene el propósito básico de la relajación y el alivio de<br>
				<p>la tensión muscular superficial.</p>

				2. Si usted está insatisfecho con el servicio, o experimenta cualquier tipo de molestia o dolor durante la<br>
				<p>sesión, informe por favor al terapeuta cuanto antes.</p>

				3. Si no se menciona nada durante la sesión, asumiremos que no ha habido ningún problema.<br><br>

				4. Háganos saber antes del inicio de la sesión si se encuentra bajo algunas de las siguientes circunstancias:<br>
				<input type="checkbox"><label>Embarazo</label><input type="checkbox"><label>Problemas de corazón</label><input type="checkbox"><label>Claustrofobia</label>
				<input type="checkbox"><label>Dolor General</label><input type="checkbox"><label>Alergia</label><input type="checkbox"><label>Epilepsia</label><br>
				<input type="checkbox"><label>Problemas de la piel</label> <input type="checkbox"><label>Cirugía reciente</label>
				<input type="checkbox"><label>Problemas o lesión de la espina dorsal</label><input type="checkbox"><label>Diabetes</label><br>
				<input type="checkbox"><label>Acne</label><input type="checkbox"><label>Algún otro desequilibrio de la salud:_________________________________________________</label><br>
				_______________________________________________________________________________________<br>
				_______________________________________________________________________________________
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-8" align="left">
			<aside>
				5. Cualquier insinuación, hecho o propuesta de caracter sexual ocasionara el final inmediato de la<br>
				sesión y él/la huésped sera obligado al pago completo del servicio.<br><br>
				6. Por la seguridad de sus valores, le sugerimos dejarlos en la caja fuerte de su habitación.<br><br>
				Renova spa no asumirá ninguna responsabilidad por robo o extravío de valores.<br><br>
				Le agradecemos su comprensión y esperamos que disfrute de nuestros servicios.
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-4" align="center">
		<aside>
		________________________________<br>
		Firma del Terapeuta
		</aside>
		</div>
		<div class="col-4" align="center">
		<aside>
		________________________________<br>
		Firma del cliente
		</aside>
		</div>
		<div class="col-2">

		</div>
	</div>
	<div class="row">
		<div class="col-2" align="left">
		</div>
		<div class="col-8" align="center">
			<aside>Por favor ayúdenos a mejorar nuestros servicios dándonos su opinión sobre le servicio recibido.<br><br>
			</aside>
		</div>
		<div class="col-2">

		</div>
	</div>

	<div class="row">
		<div class="col-2">

		</div>
		<div class="col-8">
		<footer>
			Dada la inexistencia previa de condición médica especial, Renova Spa y el Hotel no se hacen responsables de ningún efecto secundario resultante.
			<p align="left"></p>
			<p></p>
		</footer>
		</div>
		<br>
	</div>
	<br>
	<div align="center">
		<button type="" onclick='window.print();'>PDF</button>
		</div>
	</body>
</html>