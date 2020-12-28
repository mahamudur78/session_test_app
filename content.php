<?php 
session_start();
if(isset($_SESSION['user'])){
	echo "Content: " . $_SESSION['user'];
}else{
	echo "Content: No User Found";
}
