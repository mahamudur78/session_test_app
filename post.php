<?php 
session_start();
if(isset($_SESSION['user'])){
	echo "Post: " . $_SESSION['user'];
}else{
	echo "Post: No User Found";
}
