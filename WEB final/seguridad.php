<?php
class Seguridad
{
private $usuario=null;
function __construct(){
  session_start();
  if(isset($_SESSION["usuario"])) $this->usuario=$_SESSION["usuario"];
}
  public function getUsuario(){
    return $this->usuario;
    echo   $_SESSION["usuario"];
  }
  public function getId(){
    return $this->id;
    echo   $_SESSION["id"];
  }
  //OJO con SESSION En mayuscula siempre
 public function addUsuario($usuario,$id)
  {
    $_SESSION["usuario"]=$usuario;
    $_SESSION["id"]=$id;
    $this->usuario=$usuario;
  }
  public function logOut()
  {
    $_SESSION=[];
    session_destroy();
  }
}
 ?>
