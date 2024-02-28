<?php 

    /* ------------------------------------------------------------------

    Descrizione
    Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

    Stack
    Html, CSS, VueJS (importato tramite CDN), axios, PHP

    Consigli
    Nello svolgere l’esercizio seguite un approccio graduale.

    Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

    Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

    Bonus
    Al click su un disco, recuperare e mostrare i dati del disco selezionato.

    ------------------------------------------------------------------ */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- CSS Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    
    <div id="app">

        <!-- <div id="web-app" class="container-fluid vh-100">
            <div id="web-app-top">

            </div>
        </div> -->

        <ul>
            <li v-for="(disc, index) in dischi" :key="index">{{ disc.title }}</li>
        </ul>

    </div>


    <!-- Js Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- My script -->
    <script src="./js/main.js"></script>
</body>
</html>