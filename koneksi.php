<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akun";

if (!$con = mysqli_connect($host, $user, $pass, $db)) {


    die("failed to connect!");
}
