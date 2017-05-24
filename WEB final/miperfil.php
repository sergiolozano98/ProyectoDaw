<?php
include "seguridad.php" ;
$seguridad=new Seguridad();
//utilizamos este if para que el usuario no pueda entrar en mi perfil sin estar logado
if($seguridad->getUsuario()==null){
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MiPerfil</title>
    <link rel="stylesheet" href="miperfil.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  </head>
  <body>
  <header>
      <img src="Heart.png">
      <img src="DataMELetras.png">
</header>
    <?php
      include 'usuario.php';
       $usuario = new usuario();
       $fila=$usuario->mostrarInfo($_SESSION["usuario"]);
       $table=$usuario->mostrarRespuestas($_SESSION["id"]);
       echo "Tu nombre de usuario es:<br>".$fila['usuario'];
     ?>
     <br>
    <br>

    

    <div class="textos">
    <div class="textoA">
    <fieldset>
      <legend>Sobre mi:</legend>
    <form class="" action="actualizar.php" method="post">
    <input type="text" name="usuario" readonly value="<?=$fila['usuario']?>">
          <br>
      <input type="text" name="nombre" placeholder="nombre" value="<?=$fila['nombre']?>">
      <br>
      <input type="text" name="apellidos" placeholder="apellidos" value="<?=$fila['apellidos']?>">
      <br>
      <input type="text" name="edad" placeholder="edad" value="<?=$fila['edad']?>">
      <br>
      <input type="text" name="email" placeholder="email" readonly value="<?=$fila['email']?>">
      <br>
      <br>
      </fieldset>
      <br>
      <input type='submit' value='actualizar' id="Regist">
      <br>
    </form>
    </div>


    <div class="textoB">
    <fieldset>
      <legend>Mis gustos:</legend>
      <form class="" action="index.html" method="post">
      
    <?php
    foreach ($table as $fila) {
      echo "<input type='text' readonly name='fname' value='".$fila["Respuesta"]."'>";
      echo "<br>";
    }

  ?>
  </fieldset>
      </form>
      <form class="" action="miperfil.php" method="post">
        <input type="hidden" name="logOut" value="logOut" id="Regist">
        <br>
        <input type="submit" name="logOut" value="logOut" id="Regist">
        <br>
      </form>
      <?php
      if (isset($_POST['logOut'])) {
        $seguridad->logOut();
        header('Location:index.php');
      }

       ?>
    </div>
    </div>
    <div class="buscarpersonas">

     <a href="busca.php"><input type="button" value="Buscar Persona" id="Regist" /></a>
    </div>
    
    

  </body>


 <div class="footer">
  <a href="https://twitter.com/datame75"><img id="twitter" src="socialtwitter.png"></a>
  <a href="https://www.facebook.com/Datame-143058519571871/?ref=aymt_homepage_panel"><img id="facebook" src="socialfacebook.png"></a>
  <a href="https://www.instagram.com/datame2017/"><img id="instagram" src="socialinstagram.png">
  <img id="footerizq" src="DataMELetras.png">
  <p id="powered">Made by 1º Daw Team Datame</p>
  </div>


</html>
