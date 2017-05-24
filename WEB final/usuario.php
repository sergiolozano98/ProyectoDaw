<?php
include "db.php";
/**
 *
 */
class Usuario extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }
  //Insertamos un nuevo usuario
  function insertarUsuario($usuario,$nombre,$apellidos,$edad,$email,$pass){
    //Construimos la consulta
    //como id es autoincremental no hace falta poner null
    $sql="INSERT INTO usuarios (id,usuario,nombre,apellidos,edad,email,pass)
          VALUES (null,'".$usuario."', '".$nombre."', '".$apellidos."','".$edad."','".$email."', '".sha1($pass)."')";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos el ultimo usuario insertado
      $sql="SELECT * from usuarios ORDER BY id DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }

  function insertarPregunta($usuario,$pregunta,$respuesta){
    //Construimos la consulta
    //como id es autoincremental no hace falta poner null
    $sql="INSERT INTO total (idUsuario,idPregunta,Respuesta)
          VALUES ('".$usuario."','".$pregunta."','".$respuesta."')";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos el ultimo usuario insertado
      $sql="SELECT * from total ORDER BY idUsuario DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  //Devolvemos un nuevo usuario
  function buscarUsuario($usuario){
    //Construimos la consulta
    $sql="SELECT * from usuarios WHERE usuario='".$usuario."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  function Comprobarusuariot($session){
   $sql="SELECT idUsuario from total WHERE idUsuario='".$session."'";
   //Realizamos la consulta
   $resultado=$this->realizarConsulta($sql);
   if($resultado!=null){
     if ($resultado->num_rows>0) {
       return null;
     }else {
       return 1;
     }
   }else{
     return null;
   }
 }
  function mostrarInfo($usuario){
    //Construimos la consulta
    $sql="SELECT * from usuarios WHERE usuario='".$usuario."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  function mostrarRespuestas($id){
     //construimos la consulta
     $sql="SELECT Respuesta from total where idUsuario=$id";
     $resultado=$this->realizarConsulta($sql);
     if($resultado!=null){
       //montamos la tabla de resultado
       $tabla=[];
       while ($fila=$resultado->fetch_assoc()) {
         $tabla[]=$fila;
       }
       return $tabla;
     }else{
       echo "Error";
     }
   }
  function mostrarRol(){
    //Construimos la consulta
    $sql="SELECT rol from roles";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado;
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  function actualizarUsuario($nombre,$apellidos,$edad,$mail){
    $sql="UPDATE usuarios set nombre='".$nombre."', apellidos='".$apellidos."', edad='".$edad."' where email='".$mail."'";
    $resultado=$this->realizarConsulta($sql);
    if ($resultado!=null) {
     return False;
    }
  }
  //comprobamos el mail y si devuelve mas de una fila es que tiene mas de un mail y si da mas de uno salta el erro de mail utilizado
  function Comprobaremail($email){
   $sql="SELECT email from usuarios WHERE email='".$email."'";
   //Realizamos la consulta
   $resultado=$this->realizarConsulta($sql);
   if($resultado!=null){
     if ($resultado->num_rows>0) {
       return null;
     }else {
       return 1;
     }
   }else{
     return null;
   }
 }
 //comprobamos el mail y si devuelve mas de una fila es que tiene mas de un mail y si da mas de uno salta el erro de mail utilizado
 function Comprobarusuario($usuario){
  $sql="SELECT usuario from usuarios WHERE usuario='".$usuario."'";
  //Realizamos la consulta
  $resultado=$this->realizarConsulta($sql);
  if($resultado!=null){
    if ($resultado->num_rows>0) {
      return null;
    }else {
      return 1;
    }
  }else{
    return null;
  }
}


function Comprobarbusca($respuesta1,$respuesta2,$respuesta3,$respuesta4,$respuesta5,$respuesta6){
 $sql="SELECT u.usuario,u.email,u.edad,u.nombre
  from total t1, total t2,total t3,total t4,total t5,total t6, usuarios u
   WHERE t1.idUsuario=u.id AND t2.idUsuario=u.id
   AND t3.idUsuario=u.id AND t4.idUsuario=u.id
   AND t5.idUsuario=u.id AND t6.idUsuario=u.id
   AND (t1.idPregunta=1 AND t1.Respuesta='".$respuesta1."')
   AND (t2.idPregunta=2 AND t2.Respuesta='".$respuesta2."')
   AND (t3.idPregunta=3 AND t3.Respuesta='".$respuesta3."')
   AND (t4.idPregunta=4 AND t4.Respuesta='".$respuesta4."')
   AND (t5.idPregunta=5 AND t5.Respuesta='".$respuesta5."')
   AND (t6.idPregunta=6 AND t6.Respuesta='".$respuesta6."')";
 //Realizamos la consulta
 $resultado=$this->realizarConsulta($sql);
 if($resultado!=null){
   //montamos la tabla de resultado
   $tabla=[];
   while ($fila=$resultado->fetch_assoc()) {
     $tabla[]=$fila;
   }
   return $tabla;
 }else{
   echo "Error";
 }
}
}
 ?>
