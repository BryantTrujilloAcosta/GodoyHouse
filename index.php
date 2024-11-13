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
<body class="body_indx" >
    <header>
        <img src="img/index.jpg" alt="imagen" class="img_index">
        <h1 class="title_indx">Inicio de sesión</h1>
    </header>
    <main>
        <div class="cont-form">
            <h2>Inicia sesión con tu cuenta de <b>GodoyHouse.</b></h2>
            <form action="autenticacion.php" method="POST" class="form">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" >
                
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" >
                
                <input type="submit" name = "login" value="Inicia sesión" class="enviar">
            </form>
            <?php
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
            <h2 class="login-prompt">¿No tienes cuenta?<a href="Registro.php"><b>Registrate.</b></a></h2>
        </div>
    </main>
</body>
</html>