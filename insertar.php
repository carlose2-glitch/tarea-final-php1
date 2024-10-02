<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>insertar</title>
</head>
<body class="flex justify-center w-full h-screen flex-col items-center bg-lime-600 gap-4">
    <a href="./home.php" class="cursor-pointer transition hover:scale-110 duration-500 rounded-md p-4 bg-green-300 text-green-100 font-bold">Regresar</a>

    <form action="insertado.php" class="bg-green-300 rounded-md flex" method="post">
        <table class="flex justify-center">
<tbody class="flex flex-col">
    <tr class="flex justify-center">
        <th>Registrar Mascota</th>
    </tr>
        
        <tr class="flex justify-between p-[0.5rem]">
            <td>Nombre de la Mascota :</td>
            <td><input type="text" name="mascota_name" class="outline-none rounded-md"></td>
        </tr>

        <tr class="p-[0.5rem]">
            <td>Tipo de mascota:</td>
            <td><select name="seleccionar_mascota" class="rounded-md">
                    <option value="perro">Perro</option>
                    <option value="gato">Gato</option>
                    <option value="ave">Ave</option>
                </select>
            </td>
        </tr>
        <tr class="p-[0.5rem]">
            <td>Raza:</td>
            <td><input type="text" name="raza" class="rounded-md outline-none"></td>
        </tr>
        <tr class="flex p-[0.5rem]">
            <td>Sexo:</td>
            <td class="flex">
                <p>M</p><input type="radio" name="sexo" checked value="M">
                <p>F</p><input type="radio" name="sexo" value="F">
            </td>
        </tr>
        <tr class="p-[0.5rem]">
            <td>Nombre del cliente:</td>
            <td><input type="text" name="name_client" class="rounded-md outline-none"></td>
        </tr>
        
        <tr class="p-[0.5rem]">
            <td>Fecha de nacimiento:</td>
            <td><input type="date" name="date" class="rounded-md outline-none"></td>
        </tr>
        <tr class="flex justify-center gap-4 p-[0.5rem]">
            <td><input class="cursor-pointer bg-green-700 rounded-md p-4 text-white font-bold" type="submit"></td>
            <td><input class="cursor-pointer bg-green-700 rounded-md p-4 text-white font-bold" type="reset" value="limpiar"></td>
        </tr>
        </tbody>
        </table>

    
    </form>
</body>
</html>