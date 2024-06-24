<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $data["titulo"]; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full min-h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96 mx-auto">
        <h2 class="text-2xl font-bold mb-4"><?php echo $data["titulo"]; ?></h2>

        <?php if (!empty($data["message"])) : ?>
            <p class="text-red-500 mb-4"><?php echo $data["message"]; ?></p>
        <?php endif; ?>

        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=users&a=login_controller" autocomplete="off" class="space-y-4">
            <div class="flex flex-col">
                <label for="email" class="mb-1 text-gray-700">Correo electrónico</label>
                <input type="email" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" />
            </div>

            <div class="flex flex-col">
                <label for="password" class="mb-1 text-gray-700">Contraseña</label>
                <input type="password" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" name="password" />
            </div>

            <div class="flex justify-between items-center mt-4">
                <button id="guardar" name="guardar" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Iniciar sesión</button>
                <a href="http://localhost:3000/mvc/index.php?c=users&a=nuevo" class="text-blue-500 hover:underline">Registrarse</a>
            </div>
        </form>
    </div>
</body>

</html>
