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
      <a href="home.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="Foto/Air terjun.jpeg" alt="">
   </div>

   <div class="content">
      <h3>Mengapa Memilih Kami?</h3>
      <p>Tur Luar Biasa Operator tur dan agen Perjalanan Terbaik di Bangladesh. Kami adalah Paket Tour, booking Hotel. Agen Tur & Perjalanan Indonesia. Temukan paket wisata nasional dari indonesia dengan harga murah termasuk ... Paket Perjalanan | Paket Bulan Madu | Paket Wisata</p>
      <p>Liburan yang fantastis. Komunikasi yang sangat baik. Ramah dan Mudah ditangani. (Malu transfer kembali ke bandara pada hari terakhir tidak termasuk)</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Team Kelompok 1</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176003</p>
            <h3>priyandika</h3>
            <span>MAHASISWA</span>
            <img src="Foto/priyandika.jpeg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176012</p>
            <h3>Restu Adji Winaza</h3>
            <span>MAHASISWA</span>
            <img src="Foto/restu.jpeg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176022</p>
            <h3>Fawwas Muabil Athallah</h3>
            <span>MAHASISWA</span>
            <img src="Foto/fawas.jpeg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176026</p>
            <h3>Luthfi A'mal Fadhilah</h3>
            <span>MAHASISWA</span>
            <img src="Foto/Lutfi.jpeg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176029</p>
            <h3>Muhammad Ardi WInata</h3>
            <span>MAHASISWA</span>
            <img src="Foto/ardi.jpeg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Mahasiswa pendidikan Komputer angkatan 2022 kelas A dengan NIM 2205176038</p>
            <h3>Muhammad Arief Akbar</h3>
            <span>MAHASISWA</span>
            <img src="Foto/arif.jpeg" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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