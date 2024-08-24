<?php

require 'includes/db.php';
session_start();


if (isset($_SESSION['token']) ){
    include 'includes/dashboard.php';
}else{
    include 'includes/login.php';
}

?>