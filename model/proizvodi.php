<?php

function dodaj_proizvod ($data) {
    $dbc = $data['dbc'];

    $naziv = $data['naziv'];
    $cijena = $data['cijena'];
    $slika = $data['slika'];

    $sql = "INSERT INTO proizvod VALUES (null, '$naziv', $cijena, '$slika')";

    return mysqli_query ($dbc, $sql);
}

function daj_sve_proizvode ($data) {
    $results = array ();
    $result = mysqli_query ($data['dbc'], "SELECT * FROM proizvod");
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($results, $row);
    }
    return $results;
}

function daj_proizvod ($data) {
    $id = $data['id'];
    $sql = "SELECT * FROM proizvod WHERE id=$id";
    return mysqli_fetch_assoc(mysqli_query ($data['dbc'], $sql));
}

function pobrisi_proizvod ($data) {
    $id = $data['id'];
    $proizvod = daj_proizvod($data);
    if (file_exists($proizvod['slika'])) unlink($proizvod['slika']);
    $sql = "DELETE FROM proizvod WHERE id=$id";
    return mysqli_query ($data['dbc'], $sql);
} 