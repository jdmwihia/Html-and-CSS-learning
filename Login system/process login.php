<?php
include("database.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username,password_hash FROM users WHERE username = '$username' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "User dose not exist, please create an account";
} else {
    $row = mysqli_fetch_assoc($result);
    $username_db = $row["username"];
    $passoword_hash_db = $row["password_hash"];
    if (password_verify($password, $passoword_hash_db)) {
        echo "login success,welcome";
    } else {
        echo "login failed, incorrect password";
    }
}


mysqli_close($conn);
