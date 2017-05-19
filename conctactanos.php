<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacta con nosotros</title>
    <link rel="stylesheet" href="contactanos.css">
  </head>
  <body>
    <h4>¿Tienes algun problema? Contactanos:</h4>
    <form id="contact_form" action="#" method="POST">
	<div class="row">
		<label for="name">Tu nombre:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>

	<div class="row">
		<label for="email">Tu email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>

	<div class="row">
		<label for="message">Tu mensaje:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>

	<input id="submit_button" type="submit" value="Enviar Mensaje" />
</form>
  </body>
</html>
