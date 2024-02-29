<?php

$string = file_get_contents('dischi.json');

$dischi = json_decode($string, true);

if ( isset($_POST['albumIndex']) ) {
    $indiceAlbum = $_POST['albumIndex'];

    $dischi = $dischi[$indiceAlbum];
}

header('Content-Type: application/json');

echo json_encode($dischi);
