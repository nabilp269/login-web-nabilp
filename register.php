<?php
    include "koneksi/database.php";
    session_start();


    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $hash_password = hash("sha256", $password);
    
        try {
            $sql = "INSERT INTO userr (username, password, email) VALUES ('$username', '$hash_password', '$email')";

            if($conn->query($sql)) {
                echo "<script> alert('Daftar akun berhasil, silahkan login')</script>";
            }else{
                echo "<script> alert('Daftar akun gagal, silahkan coba lagi')</script>";
            }
        }catch (mysqli_sql_exception) {
                echo "<script> alert('Akun sudah digunakan, silahkan coba lagi ')</script>";
        }
        $conn->close();
        
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register-style.css">
    <title>Document</title>
</head>
<body>
    
<div class="main-register">
    <h3>Daftar Akun s</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <input type="password" placeholder="Password" name="password" required>
        <br>
        <input type="email" placeholder="Email" name="email" required>
        <button type="submit" name="register">Daftar Sekarang</button required>
        <p class="message">Sudah punya akun? <a href="login.php">Masuk</a></p>
    </form>
</div>

</body>
</html>