<?php
require "config/constants.php";
$servername = _host;
$username = _user;
$password = _password;
$db = _data_base_name;
$con = mysqli_connect($servername, $username, $password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>