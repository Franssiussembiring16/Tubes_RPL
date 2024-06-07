<?php

session_start();

include("koneksi.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['user'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {

        //read from database
        $query = "select * from akun where user = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['id'] = $user_data['id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "<script>alert('Eror! Username atau Password Salah.')</script>";
    } else {
        echo "<script>alert('Eror! Username atau Password Salah.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form class="box" action="" method="POST">
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Username" minlength="2" maxlength="20" required>
        <input type="password" name="password" placeholder="Password" maxlength="20" minlength="2" required>
        <input type="submit" name="" value="Login">
        <div class="signup-link">
            Belum Ada Akun? <a href="register.php">Daftar Sekarang</a>
        </div>

    </form>
</body>

</html>