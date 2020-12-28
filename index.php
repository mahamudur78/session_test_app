<?php 
session_start();
if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}else{
    echo "User Not Found";
}
?>
<form action="login.php" method="POST">
    <input type="text" name="user">
    <input type="submit">
</form>