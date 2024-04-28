<?php
    include "database.php";
    session_start();    


    if(isset($_SESSION["is_login"])) {
        header("location: halaman.php");
    }
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash_password = hash('sha256', $password);

    $sql = "SELECT * FROM userr WHERE username = '$username' AND email= '$email' AND password ='$hash_password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
        if($data['level']=="admin"){

            $_SESSION["username"] = $data ["username"];
            $_SESSION["level"] = "admin";
            $_SESSION["is_login"] = true;
            
            header("location:   tabel.php");

        }else if($data['level']=="user"){

            $_SESSION["username"] = $data ["username"];
            $_SESSION["level"] = "user";
            $_SESSION["is_login"] = true;
            
            header("location: halaman.php");

        }else{
            header("location:login.php");
            echo "<script> alert(' Akun tidak ditemukan, silahkan coba lagi ')</script>";
        }

    }else {
        echo "<script> alert(' Akun tidak ditemukan, silahkan coba lagi ')</script>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="hal.css/login.css">

  <style>
    body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.main-login {
  background-color: #fff;
  padding: 20px;
  border-radius: 5vh;
  box-shadow: 0px 0px 10px rgba(247, 83, 83, 0.1);
  max-width: 60vh;
}

.main-login h2 {
  margin-bottom: 20px;
  text-align: center;
}

.main-login input[type="text"],
.main-login input[type="password"],
.main-login input[type="email"] {
  width: 100%;
  padding: 1.8vh;
  margin-bottom: 3vh;
  border: 1px solid #ccc;
  border-radius: 2vh;
}

.main-login button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 2vh;
  background-color: #ff4848;
  color: #f0f0f0;
  cursor: pointer;
}

.main-login button:hover {
  background-color: #5dff78;
}

.message {
  margin-top: 15px;
  text-align: center;
}

.message a {
  color: #ff2c2c;
  text-decoration: none;
}

.message a:hover {
  color:  #5dff78;
}

  </style>

  <title>Document</title>
</head>
<body>
    
<center>
    

    <div class="main-login">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <input type="text" placeholder="Masukkan username" name="username" required>
      <input type="password" placeholder="Masukkan password" name="password" required>
      <input type="email" placeholder="Masukkan Alamat email" name="email" required>
      <button type="submit" name="login">Masuk Sekarang</button>
      <p class="message">Belum punya akun? <a href="register.php">Daftar ahh</a></p>
      
    </form>
    <a href="index.php">Home</a>
    </div>
</center>

</body>
</html>