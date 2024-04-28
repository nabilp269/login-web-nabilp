<?php

include "database.php";

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM userr WHERE id= '$id' ";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>
    alert('user berhasil di hapus');
    window.location.href = 'tabel.php';
     </script>";
    } else {
        echo "<script>
    alert('user gagal di hapus');
     </script>";
    }

} else {
    die("akses dilarang...");
}

?>