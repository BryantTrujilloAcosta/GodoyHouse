<?php
session_start();
include('conexion.php');

// Función para validar y limpiar los datos de entrada
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verificar si el formulario fue enviado
if (isset($_POST['email']) && isset($_POST['password'])) {

    // Validar los datos del formulario
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    // Verificar si el email o la contraseña están vacíos
    if (empty($email)) {
        header("Location: index.php?error=El email es requerido");
        exit();
    } elseif (empty($password)) {
        header("Location: index.php?error=La contraseña es requerida");
        exit();
    } else {
        // Cifrar la contraseña usando md5 (aunque no es lo más seguro)
        //$password = md5($password);

        // Consulta para verificar el usuario y la contraseña
        $sql = "SELECT * FROM cliente WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conexion, $sql);

        // Verificar si el usuario existe
        if (mysqli_num_rows($result) == 1) {
            // Obtener los datos del usuario
            $row = mysqli_fetch_assoc($result);

            // Verificar que el email y la contraseña coinciden
            if ($row['email'] == $email && $row['password'] == $password) {
                // Almacenar los datos del usuario en la sesión
                $_SESSION['email'] = $row['email'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['celular'] = $row['celular'];
                $_SESSION['apellido'] = $row['apellido'];
                $_SESSION['id_cliente'] = $row['id_cliente'];
                // Redirigir al usuario a la página de inicio
                header("Location: inicio.php");
                exit();
            } else {
                header("Location: index.php?error=El usuario o la clave son incorrectas.");
                exit();
            }
        } else {
            header("Location: index.php?error=El usuario o la clave son incorrectas.");
            exit();
        }
    }
} 
?>
