<?php
$db_server = "localhost";
$db_user = "root";
$db_name = "login_system_db";
$db_pass = "";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Connection failed";
}
