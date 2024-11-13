<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GodoyHouse</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Krub:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="menu">
            <a class="titulo" href="inicio.html"> <h1>Godoy's <span>House</span></h1></a>
            <input  class="menu_hamburguesa" type="checkbox" id="menu_hamburguesa">
            <label class="menu_button" for="menu_hamburguesa">
                    <div></div>
                    <div></div>
                    <div></div>
            </label>
            <ul class="ul_links">
                <li class="li_links">
                    <a href="#">Mi cuenta</a>
                </li>
                <li class="li_links">
                    <a href="#">Mis propiedades</a>
                </li>
                <li class="li_links">
                    <a href="#">Solicitar asesoria</a>
                </li>
                <li class="li_links">
                    <a href="#">Publicar gratis</a>
                </li>
                <li class="li_links">
                    <a href="CerrarSesion.php">Cerrar sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <main >
        <div class="cont_inicio">
            <img src="img/fondo_rsp.jpg"  class="img_inicio">
            <div class="cont_buscar">
                <form action="inmbuebles.html" method="#">
                    <h2 class="title_inicio">Encuentra tu hogar ideal,fácil y rápido.</h2>
                    <select name="buscador" id="buscador" required>
                        <option disabled selected="" value="">selecciona una ciudad</option>
                        <option value="aguascalientes">Aguascalientes</option>
                        <option value="baja_california_sur">Baja California Sur</option>
                        <option value="baja_california">Baja California</option>
                        <option value="campeche">Campeche</option>
                        <option value="coahuila">Coahuila</option>
                        <option value="colima">Colima</option>
                        <option value="chiapas">Chiapas</option>
                        <option value="chihuahua">Chihuahua</option>
                        <option value="durango">Durango</option>
                        <option value="guanajuato">Guanajuato</option>
                        <option value="guerrero">Guerrero</option>
                        <option value="hidalgo">Hidalgo</option>
                        <option value="jalisco">Jalisco</option>
                        <option value="mexico">México</option>
                        <option value="michoacan">Michoacán</option>
                        <option value="morelos">Morelos</option>
                        <option value="nayarit">Nayarit</option>
                        <option value="nuevo_leon">Nuevo León</option>
                        <option value="oaxaca">Oaxaca</option>
                        <option value="puebla">Puebla</option>
                        <option value="queretaro">Querétaro</option>
                        <option value="quintana_roo">Quintana Roo</option>
                        <option value="san_luis_potosi">San Luis Potosí</option>
                        <option value="sinaloa">Sinaloa</option>
                        <option value="sonora">Sonora</option>
                        <option value="tabasco">Tabasco</option>
                        <option value="tamaulipas">Tamaulipas</option>
                        <option value="tlaxcala">Tlaxcala</option>
                        <option value="veracruz">Veracruz</option>
                        <option value="yucatan">Yucatán</option>
                        <option value="zacatecas">Zacatecas</option>
                    </select>
                    <input type="submit" id="buscar" value="Buscar">
                </form>
            </div>
        </div>
    </main>
</body>
</html>