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

    <!-- My style -->
    <link rel="stylesheet" href="./style.scss">
</head>

<body>

    <div id="app">
        <div id="web-app">
            <div id="web-app-top">
                <div class="container">
                    <figure class="logo">
                        <img src="./img/logo-small.svg" alt="">
                    </figure>
                </div>
            </div>
            <div id="web-app-bottom">
                <div class="container">
                    <div @click="chooseAlbum(index)" v-for="(disc, index) in dischi" :key="disc.id" class="card">
                        <figure class="disc-cover">
                            <img :src="disc.poster" :alt="disc.title">
                        </figure>
                        <h3 class="disc-title">{{ disc.title }}</h3>
                        <span class="author">{{ disc.author }}</span>
                        <span class="year">{{ disc.year }}</span>
                    </div>
                </div>
            </div>

            <div 
            v-if="selectedAlbum" 
            id="overlay" 
            :class="displaySelectedAlbum ? 'd-flex' : 'd-none'">
                <div class="card">
                    <figure class="disc-cover">
                        <img :src="selectedAlbum.poster" :alt="selectedAlbum.title">
                    </figure>
                    <h3 class="disc-title">{{ selectedAlbum.title }}</h3>
                    <span class="author">{{ selectedAlbum.author }}</span>
                    <span class="year">{{ selectedAlbum.year }}</span>
                </div>
                <span @click="toggleDisplay">X</span>
            </div>
        </div>

    </div>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- My script -->
    <script src="./js/main.js"></script>
</body>

</html>