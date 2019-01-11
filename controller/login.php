<?php

function index ($data=array()) {
    load_view('login', $data);
}

function login() {
    echo ("Pozdrav");
}

?>