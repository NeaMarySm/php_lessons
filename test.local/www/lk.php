<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'Hello '.$_SESSION['username'].'!';
} else {
    header('location: /login.php');
    die();
}
