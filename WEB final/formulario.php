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
    <title>Formulario de Preguntas</title>
    <link rel="stylesheet" href="formulario.css">
  </head>
  <strong><center><h2>Formulario de preguntas:</h2></center></strong>
  <body>
    <?php
    include 'usuario.php';
    $usuario = new Usuario();
    $tabla=$usuario->Comprobarusuariot($_SESSION['id']);
    if ($tabla==null) {

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Ya tienes realizado un Formulario,Vamos a ver tu perfil')
    window.location.href='miperfil.php';
    </SCRIPT>");
    }else {
     ?>
  <form action="formulario.php" method="post">

    <div class="pregresp">
    <div class="pregunta">1. ¿Que edad buscas?<br />
    </div>
  <div class="respuestas1" name=1>
    <input type="radio" name="p1" value="Entre 18 y 25" /> Entre 18 y 25.<br />
    <input type="radio" name="p1" value="Entre 25 y 35" /> Entre 25 y 35.<br />
    <input type="radio" name="p1" value="Entre 35 y 45" /> Entre 35 y 45.<br />
    <input type="radio" name="p1" value="Mayores de 45" /> Mayores de 45.<br />
  </div>
</div>

<div class="pregresp">
  <div class="pregunta">2. ¿Que buscas?
  </div>
  <div class="respuestas2" name=2>
    <input type="radio" name="p2" value="Busco Relacion seria" /> Relacion seria.<br />
    <input type="radio" name="p2" value="Busco Relacion esporádica" /> Relacion esporádica.<br />
    <input type="radio" name="p2" value="Busco Amistad" /> Amistad.<br />
    <input type="radio" name="p2" value="Busco Otros" /> Otros.<br />
  </div>
</div>

<div class="pregresp">
  <div class="pregunta">3. ¿Orientacion sexual?
  </div>
  <div class="respuestas3" name=3>
    <input type="radio" name="p3" value="Homosexual" /> Homosexual.<br />
    <input type="radio" name="p3" value="Heterosexual" /> Heterosexual.<br />
    <input type="radio" name="p3" value="Bisexual" /> Bisexual.<br />
    <input type="radio" name="p3" value="Otros" /> Otros.<br />
  </div>
</div>

<div class="pregresp">
  <div class="pregunta">4. ¿Que color de pelo prefieres?
  </div>
  <div class="respuestas4" name=4>
    <input type="radio" name="p4" value="Moreno" /> Moreno.<br />
    <input type="radio" name="p4" value="Rubio" /> Rubio.<br />
    <input type="radio" name="p4" value="Pelirrojo" /> Pelirrojo.<br />
    <input type="radio" name="p4" value="Otros" /> Otros.<br />
  </div>
</div>

<div class="pregresp">
  <div class="pregunta">5. ¿Que alimentacion sigues?
  </div>
  <div class="respuestas5" name=5>
    <input type="radio" name="p5" value="Vegano" /> Vegano.<br />
    <input type="radio" name="p5" value="Vegetariano" /> Vegetariano.<br />
    <input type="radio" name="p5" value="Omnivoroso" /> Omnivoroso.<br />
    <input type="radio" name="p5" value="Otros Alimentos" /> Otros.<br />
  </div>
</div>

<div class="pregresp">
  <div class="pregunta">6. ¿Fumas?
  </div>
  <div class="respuestas6" name=6>
    <input type="radio" name="p6" value="si fumo" /> Si.<br />
    <input type="radio" name="p6" value="no fumo" /> No.<br />
    <input type="radio" name="p6" value="Otras cosas" /> Otros.<br />
  </div>
</div>
<br>
<div class="button">
   <input type="submit" value="Enviar" id="Regist">
   <br>
   <br>
   <br>
</div>
</form>
<?php } ?>

</body>
    </form>

    <?php

    if (isset($_POST['p6']) && isset($_POST['p1']) && isset($_POST['p2']) && isset($_POST['p3']) && isset($_POST['p4']) && isset($_POST['p5'])) {
      $form = new Usuario();
      $busca = new Usuario();
      $resultado=$form->insertarPregunta($_SESSION["id"],1,$_POST["p1"]);
      $resultado=$form->insertarPregunta($_SESSION["id"],2,$_POST["p2"]);
      $resultado=$form->insertarPregunta($_SESSION["id"],3,$_POST["p3"]);
      $resultado=$form->insertarPregunta($_SESSION["id"],4,$_POST["p4"]);
      $resultado=$form->insertarPregunta($_SESSION["id"],5,$_POST["p5"]);
      $resultado=$form->insertarPregunta($_SESSION["id"],6,$_POST["p6"]);
      $busca->Comprobarbusca($_POST["p1"],$_POST["p2"],$_POST["p3"],$_POST["p4"],$_POST["p5"],$_POST["p6"]);
      header('Location: miperfil.php');
      exit;

      if ($resultado==null) {
        echo "Error";
      }
    }
    ?>
  </body>

  <br>
   <div class="footer">
  <a href="https://twitter.com/datame75"><img id="twitter" src="socialtwitter.png"></a>
  <a href="https://www.facebook.com/Datame-143058519571871/?ref=aymt_homepage_panel"><img id="facebook" src="socialfacebook.png"></a>
  <a href="https://www.instagram.com/datame2017/"><img id="instagram" src="socialinstagram.png"></a>
  <img id="footerizq" src="DataMELetras.png">
  <p id="powered">Made by 1º Daw Team Datame</p>
  </div>

</html>
