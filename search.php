<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buscar</title>
</head>
<body class="flex justify-center w-full h-screen flex-col items-center bg-lime-600 gap-4">
    <?php 
    include ("conexion.php");
    ?>

<a href="./home.php" class="cursor-pointer transition hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold">Regresar</a>

<form action="" method="POST">
<table class="bg-green-300 rounded-md p-4">
    <tr class="flex gap-4 p-4 flex items-center">
        <th><label for="">Cedula:</label></th>
        <th><input type="number" name="buscar" class="outline-none rounded-md"></th>
        <th><input type="submit" value="buscar" class="cursor-pointer transition  bg-green-700 hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold"></th>
    </tr>
</table>
</form>

<?php if(isset($_POST['buscar'])) {?>

    <table class="bg-green-300">
      <tr class="border border-black">
        <th class="border border-black" scope="col">Cedula Canina</th>
        <th class="border border-black" scope="col">Nombre Mascota</th>
        <th class="border border-black" scope="col">Tipo de Mascota</th>
        <th class="border border-black" scope="col">Raza</th>
        <th class="border border-black" scope="col">Sexo</th>
        <th class="border border-black" scope="col">Nombre del Cliente</th>
        <th class="border border-black" scope="col">Fecha de nacimiento</th>
      </tr>
      <?php
      $sql = "select * from mascota where id_mascota ='$_POST[buscar]'";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($ver = mysqli_fetch_array($result)) { ?>
        <tr class="text-center">
          <td class="border border-black"><?php print $ver[0]; ?></td>
          <td class="border border-black"><?php print $ver[1]; ?></td>
          <td class="border border-black"><?php print $ver[2]; ?></td>
          <td class="border border-black"><?php print $ver[3]; ?></td>
          <td class="border border-black"><?php print $ver[4]; ?></td>
          <td class="border border-black"><?php print $ver[5]; ?></td>
          <td class="border border-black"><?php print $ver[6]; ?></td>
        </tr> <?php } ?>
    </table> <?php } ?>





</body>
</html>