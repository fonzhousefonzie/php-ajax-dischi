<?php

require "songs.php";

header("Content-Type: application/json");

echo json_encode([
    "songs" => $songs
]);