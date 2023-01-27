<?php

$jsonData = file_get_contents('./dischi.json');

$decodedJson = json_decode($jsonData, true);

var_dump($decodedJson);

if (!is_null($decodedJson)) {
    echo json_encode(($decodedJson));
}