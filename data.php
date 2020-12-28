<?php 
session_start();
if(isset($_SESSION['user'])){
	echo "Data: " . $_SESSION['user'];
}else{
	echo "Data: No User Found";
}
