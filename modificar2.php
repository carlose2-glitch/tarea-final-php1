<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>modificar</title>
</head>
<body class="flex justify-center w-full h-screen flex-col items-center bg-lime-600 gap-4">

<a href="./home.php" class="cursor-pointer transition hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold">Regresar</a>
    <?php 
    include ("conexion.php");

    $sql = "select * from mascota where id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $ver = mysqli_fetch_array($result);
    ?>

    <form action="modificar3.php" method="post" name="form" class="bg-green-300 rounded-md gap-[0.5rem] flex flex-col">
    
    <div class="p-[0.5rem]">
        <label for="">cedula canina:</label>
        <input type="text" readonly value="<?php print $ver[0] ?>" class="bg-transparent outline-none rounded-md" name="cedula_mascota">
    </div>
    
    <div class="p-[0.5rem]">
        <label for="">Nombre de la mascota</label>
        <input type="text" value="<?php print $ver[1] ?>" class="rounded-md outline-none" name="mascota_name">
    </div>

    <div class="p-[0.5rem]">
        <label for="">Tipo de mascota:</label>
        <select name="mascotaType" id="" class="rounded-md outline-none">
            <option value="perro" <?php  if($ver[2] === 'perro') {?> selected <?php }?>>Perro</option>
            <option value="gato" <?php  if($ver[2] === 'gato') {?> selected <?php }?> >Gato</option>
            <option value="ave" <?php  if($ver[2] === 'ave') {?> selected <?php }?>>Ave</option>
        </select>
    </div>

    <div class="p-[0.5rem]">
        <label for="">Raza:</label>
        <input type="text" value="<?php print $ver[3] ?>" class="rounded-md outline-none" name="raza">
    </div>

    <div class="flex">
        <label for="">Sexo:</label>
        <div class="flex">
        <label><?php if ($ver[4] === 'F') { ?>
          <input type="radio" name="sexo" value="F" id="Sexo_0" checked="checked" />
        <?php } else { ?> <input type="radio" name="sexo" value="F" id="Sexo_0" /><?php } ?>
        Femenino</label>
      <br>
      <label><?php if ($ver[4] === 'M') { ?>
          <input type="radio" name="sexo" value="M" id="Sexo_1" checked="checked" />
        <?php } else { ?> <input type="radio" name="sexo" value="M" id="Sexo_1" /><?php } ?>
        Masculino</label>
        </div>
    </div>
    <div class="flex">
        <label for="">Nombre del cliente:</label>
        <input type="text" value="<?php print $ver[5] ?>" class="rounded-md outline-none" name="client_name">
    </div>

    <div>
        <label for="">Fecha de nacimiento:</label>
        <input type="date" value="<?php print $ver[6] ?>" class="rounded-md outline-none" name="date">
    </div>
<div class="w-full flex justify-center">
<input type="submit" value="guardar" class="cursor-pointer bg-green-700 rounded-md p-4 text-white font-bold w-32">
</div>
    

    </form>
</body>
</html>