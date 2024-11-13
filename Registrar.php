<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar que el celular tenga exactamente 10 dígitos
    if (strlen($celular) !== 10 || !ctype_digit($celular)) {
        // Si el número de celular no es válido, redirigir con un mensaje de error
        header("Location: Registro.php?error=Celular debe contener 10 digitos.");
        exit();
    }

    // Verificar si el email ya existe en la base de datos
    $verificar_email = "SELECT * FROM CLIENTE WHERE email = '$email'";
    $resultado_email = mysqli_query($conexion, $verificar_email);

    if (mysqli_num_rows($resultado_email) > 0) {
        // Si el email ya existe, redirigir con un mensaje de error
        header("Location: Registro.php?error=Email ya registrado, intenta con otro.");
        exit();
    } 

    // Insertar los datos si las verificaciones son exitosas
    $insertar = "INSERT INTO CLIENTE (nombre, apellido, celular, email, password) VALUES ('$nombre', '$apellido', '$celular', '$email', '$password')";
    $query = mysqli_query($conexion, $insertar);

    // Comprobación de éxito o error en la inserción
    if ($query) {
        header("Location: Registro.php?exito=Registro exitoso.");
        exit();
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
?>
