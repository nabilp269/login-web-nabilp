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
    <link rel="stylesheet" href="hal.css/hala.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');




*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

html{
    scroll-behavior: smooth;
}

section{
    width: 100%;
    height: 100vh;
}

section nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: fixed;
    right: 0;
    left: 0;
    background: rgb(255, 0, 0);
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    z-index: 1000;
}

section nav .logo{
    width: 13vh;
    height: 12vh;
    border-radius: 17vh;
}

section nav ul{
    list-style: none;
}

section nav ul li{
    display: inline-block;
    margin: 0 15px;
}

section nav ul li a{
    text-decoration: none;
    color: #000;
    font-weight: 500;
    font-size: 17px;
    transition: 0.1s;
}

section nav ul li a::after{
    content: '';
    width: 0;
    height: 2px;
    background: redz;
    display: block;
    transition: 0.2s linear;
}

section nav ul li a:hover::after{
    width: 100%;
}

section nav ul li a:hover{
    color: greenyellow;
}


section .main{
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
    top: 130px;
}

section .main .men_text h1{
    font-size: 60px;
    position: relative;
    top: -90px;
    left: 20px;
}

section .main .men_text h1 span{
    margin-left: 15px;
    color: #ff2c2c;
    font-family: mv boli;
    line-height: 22px;
    font-size: 70px;
}

section .main .main_image img{ 
    width: 700px;
    border-radius: 5vh;
    position: relative;
    left: 7 0px;
}

section p{
    width: 650px;
    text-align: justify;
    position: relative;
    left: 5vh;
    bottom: 120px;
    line-height: 22px;
    font-family: 'Poppins', sans-serif;
}

/*menu*/

.menu{
    width: 100%;
    padding: 20vh 0;
}

.menu h1{
    font-size: 15vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.menu h1 span{
    color: #f92727;
    margin-left: 15px;
    font-family: mv boli;
}

.menu h1 span::after{
    content: '';
    width: 100%;
    height: 3px;
    background: #fa4141;
    display: block;
    position: relative;
    bottom: 20px;
}

.menu .menu_box{
    width: 95%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 15px;
}

.menu .menu_box .menu_card{
    width: 325px;
    border-radius: 5vh;
    background-color: rgb(245, 34, 34);
    height: 480px;
    padding-top: 10px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.menu .menu_box .menu_card .menu_image{
    width: 300px;
    border-radius: 5vh;
    height: 245px;
    margin: 0 auto;
    overflow: hidden;
}

.menu .menu_box .menu_card .menu_image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: 0.3s;
}

.menu .menu_box .menu_card .menu_image:hover img{
    transform: scale(1.5);
}

.menu .menu_box .menu_card .menu_info h2{
    width: 60%;
    text-align: center;
    margin: 10px auto 10px auto;
    font-size: 25px;
    color: #000000;
}

.menu .menu_box .menu_card .menu_info h3{
    text-align: center;
    margin-top: 10px;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}
    </style>

    <title>Kue kering</title>
    
</head>
<body>


    <section id="Home">
        <nav>

        <a href=""><img src="images.jpeg" alt="" class="logo"></a>

        <h3>Selamat datang <?= $_SESSION["username"] ?> di... </h3>
        
    
   

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
                    <img src="WhatsApp Image 2024-03-15 at 6.06.46 PM.jpeg">
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

    <footer>
        <p>Hak Cipta &copy; 2001 ERIAND COOKIES. All Rights Reserved.</p>
    </footer>


</body>
</html>