<?php 

include "conexion.php";

if($link){
  
$array = array("$_POST[id_mascota]", "$_POST[mascota_name]","$_POST[seleccionar_mascota]", "$_POST[raza]", "$_POST[sexo]", "$_POST[name_client]", "$_POST[date]");

$verify = true;

for($i = 0 ; $i < count($array); ++$i){
  if(empty($array[$i])){
    $verify = false;
  }
}

if($verify){

  $cedula = $array[0];
  $query = "select * from mascota where id_mascota = '$cedula'";

  $resultCedula = mysqli_query($link, $query);

  $saveArray = mysqli_fetch_array($resultCedula);


  
  if(is_null($saveArray)){
    $sql = "insert into mascota(id_mascota, nombre_mascota, tipo_mascota, raza, sexo, nombre_cliente, fecha_nacimiento) values('$array[0]','$array[1]', '$array[2]', '$array[3]', '$array[4]', '$array[5]', '$array[6]')";

    $result = mysqli_query($link, $sql);

    echo("<script>
    alert('Guardado con exito');
   
    </script>");

  }else{
    
     echo("<script>
     alert('la mascota ya esta');
   
     </script>");

  }
  
}else{
    echo("<script>
 alert('debe llenar todo los campos');

 </script>");

}


// echo("<script>
//  alert('Se ingreso con total normalidad');

// </script>");

  
}else{
    echo("<script>alert('no conectado');</script>");
}

?>

 <meta http-equiv="refresh" content="0;URL=insertar.php"> 