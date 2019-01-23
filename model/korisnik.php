<?php
function daj_korisnika ($id, $dbc) {
    $upit = "SELECT * FROM korisnik";
    $upit .= " WHERE id=$id";
    $result = mysqli_query($dbc, $upit);
    return mysqli_fetch_assoc($result);
}
