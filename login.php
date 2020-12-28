<?php 
session_start();

$_SESSION['user'] = $_POST['user'];

if(isset($_SESSION['user'])){
    echo "Session Created Successfully:- ". $_SESSION['user'];
}else{
    echo "No Data Found";
}