<?php
 session_start();
 if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header ('location: login.php');
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="halaman.css">
    <title>Kue kering</title>
    
</head>
<body>


    <section id="Home">
        <nav>

        <h3>Selamat datang <?= $_SESSION["username"] ?></h3>
        
    
   

            <ul>
                <li><a href="tentang.html">About</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="penjualan.html">Gallary</a></li>
                <li><a href="pembeli.html">Order</a></li>

                <form action="halaman.php" method="POST">
                 <li> <button type="submit" name="logout">logout</button> </li>
                 </form>

            </ul>


        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Home Made by <span> <br> ERiAND COOKIES</span></h1>
            </div>

            <div class="main_image">
                <img src="WhatsApp Image 2024-02-20 at 18.03.13.jpg">
            </div>

        </div>

     <p>
         Eriand cookies berdiri sejak tahun 2001, 🥳ERIAND COOKIES🥳
         Hai sobat.... ERIAND COOKIES hadir lagi nich...  yuk kepoin cookies yang ada di kami.  
         Kami selalu hadir dengan cookies yang selalu fresh from the oven, karena kami produksi sesuai orderan  atau dengan sistem PO , kami menyediakan berbagai macam cookies buat lebaran atau untuk menemani kalian minum teh looo..
          Apa lagi bentar lagi puasa dan lebaran...bisa buat takjil, hantaran ataupun suguhan lebaran. Kalian pasti akan ketagihan 
         kalau udah pernah order di ERIAND COOKIES .
          Yuk, kepoin ....coba dulu ya ....biar gak penasaran.. Ini kue keringnya meskipun murah, tapi kualitasnya nomor satu . apalagi nastar nya.. yang lembut dan lumer di mulut 
         Yuukk...buruan di order😊😊😊😊
     </p>

    </section>




    <!--Menu-->

    <div class="menu" id="Menu">
        <h1>Our<span>produk</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="WhatsApp Image 2024-02-23 at 12.59.10.jpeg">
                </div>

                <div class="menu_info">
                    <h2>Kue nastar</h2>

                    <h3>100.000</h3>
                    
                </div>

            </div> 
            
            
            <div class="menu_card">

                <div class="menu_image">
                    <img src="palm-cheese-cookies-2323350275.webp">
                </div>

                <div class="menu_info">
                    <h2>Kue palm chesee</h2>

                    <h3>85.000</h3>

                </div>

            </div> 


            <div class="menu_card">

                <div class="menu_image">
                    <img src="WhatsApp Image 2024-02-23 at 12.59.49.jpeg">
                </div>

                <div class="menu_info">
                    <h2>Kue kastengel</h2>
                    
                    <h3>100.000</h3>

                </div>

            </div> 

            <br>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Putri-Salju.jpg">
                </div>

                <div class="menu_info">
                    <h2>Kue putri salju</h2>

                    <h3>100.000</h3>
                    
                </div>

            </div> 


            <div class="menu_card">

                <div class="menu_image">
                    <img src="Resep_Kue_Sagu_Keju.jpg">
                </div>

                <div class="menu_info">
                    <h2>Kue sagu keju</h2>
               
                    <h3>85.000</h3>
                    
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="125158624-230176438679361-6060786447420209732-n-2b83bc8b0667f3d4545953e515730cc9.jpg">
                </div>

                <div class="menu_info">
                    <h2>Kue kembang goyang</h2>
                 
                    <h3>75.000</h3>
                    
                </div>

            </div> 


        </div>

    </div>


</body>
</html>