<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="registro.css">
  </head>
  <body>

      <h2>Formulario de registro</h2>
      <table>
      <form method="post" action="registro.php">
        <div class="form">
  

        
        <input type="text"  name="usuario" placeholder="Usuario">
        <br>
        
        <input type="text"  name="nombre" placeholder="Nombre">
        <br>
        
        <input type="text"  name="apellidos" placeholder="Apellidos">
        <br>
        
        <input type="text"  name="email" placeholder="Mail">
        <br>
        
        <input type="text"  name="edad" placeholder="Edad">
        <br>
        
        <input type="password"  name="pass0" placeholder="Contraseña">
        
        <input type="password"  name="pass1" placeholder="Repite la contraseña">
        <br>
        <input type="hidden" name="accion" value="registro">
        <input type="submit" value="Registrar" id="Regist">
        
        </div>
      </form>

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
      $comprobacion=0;
      if (isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['edad']) && isset($_POST['pass0']) && isset($_POST['pass1'])) {
        include 'usuario.php';
        $usuario = new Usuario();
        $tabla=$usuario->Comprobaremail($_POST['email']);
        $tabla2=$usuario->Comprobarusuario($_POST['usuario']);
        if ($_POST['edad']<18) {
          echo '<script language="javascript">alert("Eres menor de 18");</script>';
        }else {
        if ($tabla2==null) {
          echo '<script language="javascript">alert("Este usuario ya esta registrado");</script>';
        }else{
        if ($tabla==null) {
          echo '<script language="javascript">alert("Este Mail ya esta en uso");</script>';

        }else {
          if ($_POST['pass0']==$_POST['pass1']) {
            $resultado=$usuario->insertarUsuario($_POST["usuario"],$_POST["nombre"],$_POST["apellidos"],$_POST["edad"], $_POST["email"],$_POST["pass0"]);
            if ($resultado==null) {
              echo '<script language="javascript">alert("Error");</script>';
            }else {
              echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Registro Correcto, Bienvenido a Datame')
            window.location.href='miperfil.php';
            </SCRIPT>");
              }
            }else {
              echo "<a href='registro.php'>Algo falla, revisa tu contraseña.</a>";
          }
        }
      }
        }
        }
       ?>
