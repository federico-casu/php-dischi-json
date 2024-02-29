<?php

$string = file_get_contents('dischi.json');

$dischi = json_decode($string, true);

foreach ($dischi as $key => $value) {
    $dischi[$key]['id'] = $key;
}

header('Content-Type: application/json');

$string = json_encode($dischi, true);

file_put_contents('dischi.json', $string);

$string = file_get_contents('dischi.json');

$dischi = json_decode($string, true);


if ( isset($_POST['albumIndex']) ) {
    $indiceAlbum = $_POST['albumIndex'];

    $dischi = $dischi[$indiceAlbum];
}

header('Content-Type: application/json');

echo json_encode($dischi);
