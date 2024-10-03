<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modificar</title>
</head>
<body class="w-full flex flex-col gap-4 h-full pt-8 justify-center items-center bg-lime-600">

<a href="./home.php" class="cursor-pointer transition w-32 hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold text-center">Regresar</a>
<?php 
include ("conexion.php");
?>
<table class="border border-green-700 flex flex-col">
        <tbody class="full">
        <tr class="">
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Cedula Canina</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Nombre Mascota</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Tipo de Mascota</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Raza</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Sexo</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Nombre del Cliente</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Fecha de Nacimiento</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Modificar</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-[0.5rem]">Eliminar</th>
        </tr>
        <?php 
        $sql = "select * from mascota";
        $result = mysqli_query($link, $sql);

        while($ver = mysqli_fetch_array($result)){
        ?>
        <tr class="text-center font-bold">
            <td class="border border-green-700 bg-green-300"><?php print $ver[0]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[1]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[2]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[3]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[4]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[5]; ?></td>
            <td class="border border-green-700 bg-green-300"><?php print $ver[6]; ?></td>
            <td class="border border-green-700 bg-green-300 text-red-600"><a href="modificar2.php?mod=<?php print $ver[0] ?>">Modificar</a></td>
            <td class="border border-green-700 bg-green-300 text-red-700"><a href="eliminar.php?mod=<?php print $ver[0] ?>">Eliminar</a></td>
            
        </tr> <?php }?>
        </tbody>
    </table>
    
</body>
</html>