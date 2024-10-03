<?php 

include "conexion.php";
$sql = "delete from mascota where id_mascota='$_GET[eli]'";
$result = mysqli_query($link, $sql);

if(!mysqli_error($link)){?>

<script>
    alert("se elimino con exito");
</script>

<?php }else {?>

    <script>
        alert("hubo un problema");
    </script>
<?php }?>

 <meta http-equiv="refresh" content="0;URL=modificar.php">
