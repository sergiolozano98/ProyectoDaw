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
    <link rel="stylesheet" href="busca.css">
    <title>Coincidencias</title>
  </head>
  <body>
    <?php
    include 'usuario.php';
    $usuario = new Usuario();
    ?>
    <table class="container">
      <thead>
    <tr>
      <th><h1>Usuario</h1></th>
      <th><h1>Nombre</h1></th>
      <th><h1>Edad</h1></th>
      <th><h1>Email</h1></th>
    </tr>
  </thead>
       <?php
    $tabla=$usuario->mostrarRespuestas($_SESSION["id"]);



      $Respuesta1= $tabla[0]["Respuesta"];
      $Respuesta2= $tabla[1]["Respuesta"];
      $Respuesta3= $tabla[2]["Respuesta"];
      $Respuesta4= $tabla[3]["Respuesta"];
      $Respuesta5= $tabla[4]["Respuesta"];
      $Respuesta6= $tabla[5]["Respuesta"];

      $tabla2=$usuario->Comprobarbusca("$Respuesta1","$Respuesta2","$Respuesta3","$Respuesta4","$Respuesta5","$Respuesta6");
      foreach ($tabla2 as $fila) {
        ?>
        <tr>
        <td><?=$fila["usuario"]?></td>
        <td><?=$fila["nombre"]?></td>
        <td><?=$fila["edad"]?></td>
        <td><?=$fila["email"]?></td>
      </tr>
        <?php
      }
    ?>

  </table>

  </body>
</html>
