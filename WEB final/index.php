<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
  <header>
      <img src="Heart.png">
      <img src="DataMELetras.png">
</header>
<br>
<nav>
  <a href="login.php">INICIO</a> |
  <a href="sobremi.php">SOBRE NOSOTROS</a> |
  <a href="contactanos.php">CONTACTANOS</a> |
  
</nav>
<br>
<br>

     <fieldset>
      <legend>Login</legend>
    
      <form method="post" action="index.php">
        <label for="fname">Usuario</label>
        <input type="text"  name="usuario" id="Usu">


        <br>
        <br>
        <label for="pass0">Contraseña</label>
        <input type="password"  name="pass0" id="pas">
        </fieldset>
      
        <br>
        <br>
        <input type="hidden" name="accion" value="login">
        <br>
        <input type="submit" value="login" id="Regist">
        <br>
        <br>
        <a href="registro.php"><input type="button" value="registrar" id="Regist" /></a>
      </form>
      <br>
      <br>
      <br>
      
  

</body>

<div class="footer">
  <a href="https://twitter.com/datame75"><img id="twitter" src="socialtwitter.png"></a>
  <a href="https://www.facebook.com/Datame-143058519571871/?ref=aymt_homepage_panel"><img id="facebook" src="socialfacebook.png"></a>
  <a href="https://www.instagram.com/datame2017/"><img id="instagram" src="socialinstagram.png">
  <img id="footerizq" src="DataMELetras.png">
  <p id="powered">Made by 1º Daw Team Datame</p>
  </div>
</html>
<?php
    if (isset($_POST['usuario']) && isset($_POST['pass0'])) {
      include 'usuario.php';
      include 'seguridad.php';
      $usuario = new usuario();
      $sesion = new Seguridad();
      $registrado=$usuario->buscarUsuario($_POST['usuario']);
      if ($registrado!=null) {
        //Si la contraseña que ponemos para conectarnos es la misma que tenemos en la
        //base de datos entonces el usuario se puede loguear
        if ($registrado['pass']==sha1($_POST['pass0'])) {
          echo "Usuario logueado";
          $sesion->addUsuario($registrado['usuario'],$registrado['id']);
          header('Location: formulario.php');
        }else {
          echo "Usuario o contraseña incorrectas";
        }
      }else {
        echo "Usuario no encontrado";
      }
    }
     ?>
 


