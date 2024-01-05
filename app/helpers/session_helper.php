<?php

if(!isset($_SESSION)){
    session_start();
}

function redirect($location){
    header("location: ".$location);
    exit();
}
?>