<?php
    include "database.php";
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
    <link rel="stylesheet" href="hal.css/register.css">

    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.main-register {
    background-color: #fff;
    padding: 20px;
    border-radius: 2vh;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.main-register h3 {
    text-align: center;
    margin-bottom: 7vh;
    color: #000000;
}

.main-register input[type="text"],
.main-register input[type="password"],
.main-register input[type="email"],
.main-register button {
    width: 100%;
    padding: 10px;
    margin-bottom: 3vh;
    border: 1px solid #ccc;
    border-radius: 2vh;
}

.main-register button {
    background-color: rgb(247, 88, 88);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}

.main-register button:hover {
    background-color: #45a049;
}

.main-register .message {
    margin-top: 15px;
    text-align: center;
    font-size: 14px;
    color: #000000;
}

.main-register .message a {
    color:rgb(255, 44, 44);
    text-decoration: none;
}

.main-register .message a:hover {
    color: rgb(53, 255, 53);
}

    </style>

    
    <title>Document</title>
</head>
<body>
    
<center>
    <br><br><br><br><br>
<div class="main-register">
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name="username" required>
        
        <input type="password" placeholder="Password" name="password" required>
        
        <input type="email" placeholder="Email" name="email" required>
               
        <button type="submit" name="register">Daftar Sekarang</button required>
        <p class="message">Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
</div>
</center>

</body>
</html>