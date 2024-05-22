<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Smart : Wisata Indonesia</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="Foto/logo.jpeg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(Foto/PANTAI.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>Wisata Keliling Nusantara</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(Foto/4.jpeg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>Temukan destinasi baru mu</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(Foto/3.jpeg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>Buat Perjalanan Makin Menyenangkan</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="Foto/Air terjun.jpeg" alt="">
   </div>
   <div class="content">
      <h3>Tentang</h3>
      <p>Tur Luar Biasa Operator tur dan agen Perjalanan Terbaik di Bangladesh. Kami adalah Paket Tour, booking Hotel. Agen Tur & Perjalanan Indonesia. Temukan paket wisata nasional dari indonesia dengan harga murah termasuk ... Paket Perjalanan | Paket Bulan Madu | Paket Wisata</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> Paket Kami </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="Foto/Bromo.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Gunung Bromo</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris Gunung Bromo kami!</p>
            <h2>IDR 100,000 </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="Foto/Danau toba.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Danau Toba</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris Danau Toba kami!</p>
            <h2>IDR 900,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="Foto/Bali.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Bali</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris  di Bali kami!</p>
            <h2>IDR 1,500,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="images/sp1.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp5.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>Diskon 40%</h3>
      <p>Bali Dynasty Resort terletak di pusat kota dalam jarak berjalan kaki ke kehidupan malam dan kegembiraan daerah Kuta. Akomodasi Bali yang populer ini menawarkan berbagai jenis kamar yang sesuai dengan keluarga dan pasangan. Anak-anak dapat menikmati klub anak-anak sementara orang dewasa memanjakan diri di Ashoka Spa atau Beach Club. Untuk pengalaman menginap yang berkesan dan santai di Kuta mengapa tidak menginap di Bali Dynasty Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +628901211</a>
         <a href="#"> <i class="fas fa-phone"></i> +628796511</a>
         <a href="#"> <i class="fas fa-envelope"></i> kelompok1@gmal.com</a>
         <a href="#"> <i class="fas fa-map"></i> samarinda, samarinda ulu </a>
      </div>
      
   </div>
   <div class="credit"> designed by <span>kelompok 1</span></div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>