<!DOCTYPE html>
<html lang="en">
<?php
    include("conexion.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GodoyHouse</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="body_indx">
    <header>
        <h1 class="title_indx">Registro</h1>
    </header>
    <main>
        <div class="cont-form">
            <h2>Date de alta llenando los siguientes datos.</h2>
            <form action="Registrar.php" method="post" class="form">
            <?php
                    //mostrar mensaje de exito
                    if(isset($_GET['exito'])&& $_GET['exito']==true){
                        echo "<p style= 'color:green; text-align=center;'>Registro éxitoso.</p>";
                    }
                    if(isset($_GET['error'])){
                    ?>
                    <p class="error">
                     <?php
                        echo $_GET['error']
                    ?>
                    </p>
                    <?php
                    }
                ?>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingresa nombre" required>
                
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Ingresa apellido" required>

                <label for="celular">Celular</label>
                <input type="tel" name="celular" id="celular" placeholder="Ingresa celular" required maxlength="10">

                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Ingresa correo" required>
                
                <label for ="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingresa contraseña" required>
                
                <input type="submit" value="Crear Cuenta" class="enviar">
            </form>
            <h2 class="login-prompt">¿Ya tienes cuenta?<a href="index.php"><b>Inicia sesión</b></a></h2>
        </div>
    </main>
</body>
</html>