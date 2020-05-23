<?php
session_start();
require 'functions.php';

if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256',$row['username'])) {
        $_SESSION['login'] = true;
    }
}


if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

    if ( isset($_POST["login"]) ) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                //set sesion
                $_SESSION["login"] = true;
                
                //cek remember me

                if ( isset($_POST["remember"])) {
                    //buat cookie
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);
                }
                
                header("Location: index.php");
                exit;
                
            }

        }

        $error = true;
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>

    <?php
        if (isset($error)) :
    ?>
    <p style="color:red; font-style:italic;">username/password salah</p>
    <?php
        endif;
    ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username  : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password  : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">rememberme</label>
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>
</html>