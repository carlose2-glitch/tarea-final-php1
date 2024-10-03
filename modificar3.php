<?php
include("conexion.php");


$array = array("$_POST[mascota_name]", "$_POST[mascotaType]", "$_POST[raza]", "$_POST[sexo]", "$_POST[client_name]", "$_POST[date]");

$verify = true;

for($i = 0 ; $i < count($array); ++$i){
    if(empty($array[$i])){
      $verify = false;
      echo $array[$i];
    }
  }

  if($verify){
    $sql = "update mascota set nombre_mascota='$_POST[mascota_name]',tipo_mascota='$_POST[mascotaType]',raza='$_POST[raza]',sexo='$_POST[sexo]', nombre_cliente='$_POST[client_name]', fecha_nacimiento='$_POST[date]' where id_mascota='$_POST[cedula_mascota]' ";

    $result = mysqli_query($link, $sql);


    if (!mysqli_error($link)) {
    
        echo ("<script>
          alert('Se modifico correctamente');
        </script>");
       } else { 
        echo ("<script>
          alert('Estamos en mantenimiento preventivo');
        </script>");
   } 

  }else{
    echo("<script>
 alert('debe llenar todo los campos');

 </script>");
  }
?>    
<meta http-equiv="refresh" content="0;URL=modificar.php"> 