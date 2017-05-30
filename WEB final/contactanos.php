<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Contacto.css">

    <title>Conctactanos</title>
  </head>
  <header>
    <img src="Heart.png">
    <img src="DataMELetras.png">
  </header>
  <br>
  <nav>
    <a href="index.php">INICIO</a> |
    <a href="sobrenosotros.php">SOBRE NOSOTROS</a> |
    <a href="contactanos.php">CONTACTANOS</a> |

  </nav>
  <body>
    <form action="contactanos.php" method="post">
     <h2>CONTACTO</h2>
     <input type="text" name="Nombre" placeholder="Nombre completo" id="center" required>
     <input type="text" name="Correo" placeholder="correo@dominio.com"id="center" required>
     <input type="text" name="Telefono" placeholder="Telefono" id="center" required>
     <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
     <input type="submit" value="Registrar" id="Regist">
    </form>

  </body>
  <div class="footer">
    <a href="https://twitter.com/datame75"><img id="twitter" src="socialtwitter.png"></a>
    <a href="https://www.facebook.com/Datame-143058519571871/?ref=aymt_homepage_panel"><img id="facebook" src="socialfacebook.png"></a>
    <a href="https://www.instagram.com/datame2017/"><img id="instagram" src="socialinstagram.png"></a>
    <img id="footerizq" src="DataMELetras.png">
    <p id="powered">Made by 1º Daw Team Datame</p>
    </div>
    <?php
  require_once 'vendor/autoload.php';

  // Create the Transport
  $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
    ->setUsername('datame75@gmail.com')
    ->setPassword('datame75')
  ;

  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);

  // Create a message
  $message = (new Swift_Message('Prueba'))
  ->setFrom(['datame75@gmail.com' => 'Datame Support'])
  ->setTo('sergiolozanobueno@gmail.com')
  ->setBody('hola');

  // Send the message
  $result = $mailer->send($message);

   ?>

</html>
