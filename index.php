<?php

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
    'title'=>'Prijavite se na sustav');

if(isset($_GET['controller']) && isset($_GET['action'])) {
    load_controller(
        $_GET['controller'], 
        $_GET['action'], $data);
} else {
    load_controller('login', 'index', $data);
}


?>