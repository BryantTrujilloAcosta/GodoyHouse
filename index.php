<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
 #inicializar una nueva sesion de cURL ; ch = cURL handle
 $ch = curl_init(API_URL);
 // indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 /* ejecutar la peticion 
    y guardamos el resultado
 */

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
//una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer get de una API
var_dump($data);

?>
<head>
    <meta charset="UTF-8" />
    <title>La próxima película de marvel</title>
    <meta name="description" content="La proxima pelicula de marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<main>
    <pre>
        <?php var_dump($data); ?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?> " width="300" alt="Poster de <?= $data["title"];?>"
        style = "border-radius: 16px;"/> 
    </section>
    
</main>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>