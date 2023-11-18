<?php
include("database.php");


if (strlen($_POST["password"]) < 4) {
    die("Password must be at least 4 characters");
}
if ($_POST["password"] != $_POST["password-confirmation"]) {
    die("Password does not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$username = $_POST["username"];
$email = $_POST["email"];


$sql = "INSERT INTO users (username, email, password_hash)
        VALUES ('$username','$email','$password_hash')  ";

try {
    mysqli_query($conn, $sql);
    echo "Registration success, congratulations on your new account";
} catch (mysqli_sql_exception) {
    echo "Either username or email account is already in use";
};

mysqli_close($conn);
