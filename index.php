<?php
session_start();
include ("model/db.php");
include ("model/korisnik.php");

function load_view ($name, $data=array()) {
    extract ($data);
    include('view/static/header.php');
    include('view/'.$name.'.php');
    include('view/static/footer.php');
}

function load_controller ($name, $action, $data) {
    include('controller/'.$name.'.php');
    $action($data);
}


$data = array(
    'title'=>'Prijavite se na sustav',
    'dbc' => $dbc
);

if(isset($_GET['controller']) && isset($_GET['action'])) {
    load_controller(
        $_GET['controller'], 
        $_GET['action'], $data);
} else {
    if (isset($_SESSION['id'])) {
        $data['title'] = "Dobrodošli na sustav";
        $id = intval($_SESSION['id']);
        $data['korisnik'] = daj_korisnika($id, $dbc);
        
        load_controller(
            'products', 
            'index', $data);
    } else {
        load_controller('login', 'index', $data);
    }
}


?>