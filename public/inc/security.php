<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:/phpcrudsample/public/login.php");
}
?>