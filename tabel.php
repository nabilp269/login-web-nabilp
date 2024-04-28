<?php
 session_start();
 if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header ('location: login.php');
 }
?>

<?php
include "database.php";
?>  

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tabel.css">
    <title>Data Users</title>
    <style>
        body {
    background-image: url('WhatsApp Image 2024-02-20 at 18.03.13.jpg');
    font-family: Arial, sans-serif;
}

table {
    width: 100%;
    background-color: rgba(255, 0, 0, 0.192);
}

th, td {
    padding: 10px;
    text-align: left;
}

/* CSS untuk link hapus */
a.hapus {
    text-decoration: none;
    color: #fff;
    background-color: #ff0000;
    padding: 5px 10px;
    border-radius: 5px;
}

a.hapus:hover {
    background-color: #cc0000;
}

/*judul*/

h2 {
    color: #000000;
}

/*navigasi */
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline;
    margin-right: 10px;
}

li a {
    text-decoration: none;
    color: #ffffff;
}

li a:hover {
    color: #000000;
}

    </style>
</head>
<body>

<h2>Selamat Datang</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Operasi</th>

    </tr>

    <?php
  
    // Query untuk mengambil data dari tabel
    $query = "SELECT id, username, password, email FROM userr";
    $result = mysqli_query($conn, $query);

    // Tampilkan data dalam tabel HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>";
        echo "<a class='hapus' href='hapus.php?id=".$row['id']."'>Hapus</a>";
        echo "<a class='edit' href='edit.php?id=".$row['id']."'>Edit</a>"; // Tombol Edit
        echo "</td>";
        echo "</tr>";
    }

    // Tutup koneksi database
    mysqli_close($conn);

    ?>

    
        <b>  
            <ul>
                <li><a href="halaman.php">Halaman</a></li>
            </ul>
        </b>

            <form action="halaman.php" method="POST">
                 <li> <button type="submit" name="logout">logout</button> </li>
            </form>
    

</table>

</body>
</html>
