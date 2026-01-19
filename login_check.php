<?php
session_start();
include "db.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$q = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($q) == 1){
    $_SESSION['login'] = true;
    header("Location: index.php");  // home page after login
    exit;
} else {
    echo "Wrong username or password";
}
?>