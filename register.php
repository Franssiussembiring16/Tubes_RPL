<?php
$msg = "";
if (isset($_POST['uploud'])) {
    $db = mysqli_connect("localhost", "root", "", "db_akun");
    $username = $_POST['user'];
    $password = $_POST['password'];
    $sql_u = "select * from akun where user= '$username' ";
    $res_u = mysqli_query($db, $sql_u) or die(mysqli_error($db));
    if (mysqli_num_rows($res_u) > 0) {
        echo '<script>alert("User Sudah Digunakan");
        location.href = "register.php";</script>';
    } else {
        $sql = "insert into akun (user,password) values ('$username','$password')";
        mysqli_query($db, $sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form class="box" action="" method="POST" enctype="multipart/form-data">
        <h1>Register</h1>
        <input type="text" name="user" placeholder="Username" minlength="2" maxlength="20" required>
        <input type="password" name="password" placeholder="Password" maxlength="20" minlength="2" required>
        <input type="submit" name="uploud" value="Submit">
        <div class="signup-link">
            Sudah Ada Akun? <a href="login.php">Login Sekarang</a>
        </div>

    </form>
</body>

</html>