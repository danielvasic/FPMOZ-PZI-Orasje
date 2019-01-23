<?php
session_start();
function index ($data=array()) {
    load_view('login', $data);
}

function login($data) {
    $dbc = $data['dbc'];
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];
    
    $upit = "SELECT * FROM korisnik";
    $upit .= " WHERE korisnicko_ime='$korisnicko_ime'";
    $upit .= " AND lozinka='$lozinka'";

    $rezultat = mysqli_query($dbc, $upit);
    if (mysqli_num_rows($rezultat) == 0) {
        $data['greska'] = "Greška: korisnik ne postoji u bazi.";
        load_view('login', $data);
    } else {
        $korisnik = mysqli_fetch_assoc($rezultat);
        $_SESSION['id'] = $korisnik['id'];
        header("Location: index.php");
    }
}

function logout () {
    if (isset($_SESSION['id'])) { 
        unset($_SESSION['id']);
        header("Location: index.php");
    }
}

?>