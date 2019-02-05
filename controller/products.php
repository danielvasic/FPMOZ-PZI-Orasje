<?php

include ("model/proizvodi.php");


function index($data) {
    $data['proizvodi'] = daj_sve_proizvode($data);
    load_view('products', $data);
}


function add ($data) {
    $data['naziv'] = $_POST['naziv'];
    $data['cijena'] = $_POST['cijena'];
    $slika_lokacija = $_FILES['slika']['tmp_name'];
    $data['slika'] = "uploads/".$_FILES['slika']['name'];
    move_uploaded_file($slika_lokacija, $data['slika']);
    dodaj_proizvod($data);
    header("Location:index.php");
}

function delete ($data) {
    $data['id'] = $_GET['id'];
    pobrisi_proizvod($data);
    header("Location:index.php");
}