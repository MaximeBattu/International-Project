<?php

$path=$_SERVER["PATH_INFO"];

switch ($path) {
    case '/login' :
        require 'php/login.php';
        break;
    default :
        echo "not found";
}