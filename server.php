<?php

$string = file_get_contents('dischi.json');

$dischi = json_decode($string, true);

// var_dump($dischi);

header('Content-Type: application/json');

echo json_encode($dischi);
