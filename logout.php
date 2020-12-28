<?php 
session_start();
echo "Logout: " . $_SESSION['user'];
session_destroy();