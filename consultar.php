<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Consultar</title>
</head>
<body class="w-full flex flex-col gap-4 h-full pt-8 justify-center items-center bg-lime-600">

<a href="./home.php" class="cursor-pointer transition w-32 hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold text-center">Regresar</a>

<?php 
include ("conexion.php");
?>
    <table class="border border-green-700 flex flex-col">
        <tbody class="full">
        <tr class="">
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Cedula Canina</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Nombre Mascota</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Tipo de Mascota</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Raza</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Sexo</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Nombre del Cliente</th>
            <th scope="col" class="border border-green-700 bg-green-300 p-4">Fecha de Nacimiento</th>
        </tr>
        <?php 
        $sql = "select * from mascota";
        $result = mysqli_query($link, $sql);

        while($ver = mysqli_fetch_array($result)){
        ?>
        <tr class="text-center font-bold">
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[0]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[1]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[2]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[3]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[4]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[5]; ?></td>
            <td class="border border-green-700 bg-green-300 p-4"><?php print $ver[6]; ?></td>
        </tr> <?php }?>
        </tbody>
    </table>
</body>
</html>