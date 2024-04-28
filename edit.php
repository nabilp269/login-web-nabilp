<?php
include "database.php";

// mendapatkan data user berdasarkan ID
function getUserById($conn, $id) {
    $query = "SELECT id, username, password, email FROM userr WHERE id = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

// Cek parameter ID terdefinisi dan angka
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $user = getUserById($conn, $id);
}

// Proses jika data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Query untuk mengupdate data
    $update_query = "UPDATE userr SET username='$username', password='$password', email='$email' WHERE id='$id'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="edit.css">
    <title>Data</title>
    <style>
        
body {
background-image: url('WhatsApp Image 2024-02-20 at 18.03.13.jpg');
background-size: cover;
font-family: Arial, sans-serif;/

}

form {
    background-color: rgba(255, 255, 255, 0.8); /* Memberikan transparansi pada form */
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    margin: 50px auto;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    color: #333;
    text-decoration: none;
}

a:hover {
    color: #000;
}

label {
    font-weight: bold;
}

    </style>
</head>
<body>

<?php if(isset($user)): ?>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <input type="submit" value="Edit Data">
    
        <li><a href="tabel.php">Sebelumnya</a></li>
    </form>
<?php endif; ?>



</body>
</html>
