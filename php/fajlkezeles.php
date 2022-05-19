<?php

function saveUsers($utvonal, $felhasznalok) {
    $fajl = fopen($utvonal, "w");
    if ($fajl === FALSE)
        die("Fájlmegnyitás nem sikerült!");
    foreach($felhasznalok as $felhasz) {
        $ujFelhaszn = serialize($felhasz);
        fwrite($fajl, $ujFelhaszn . "\n");
    }
    fclose($fajl);
}

function loadUsers($utvonal) {
    $felhasznalok = [];
    $fajl = fopen($utvonal, "r");
    if ($fajl === FALSE)
        die("Fájlmegnyitás nem sikerült!");
    while (($sor = fgets($fajl)) !== FALSE) {
        $felhasz = unserialize($sor);
        $felhasznalok[] = $felhasz;
    }
    fclose($fajl);
    return $felhasznalok;
}
?>