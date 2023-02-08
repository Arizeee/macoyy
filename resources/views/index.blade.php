<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/weblogo-removebg-preview.png" type="kel 5" sizes="16x16">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Mabar Coy</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

   <!-- font gogle -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Josefin+Sans:ital@0;1&family=Poppins:wght@400;500;700&family=Rubik+Distressed&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+JP:wght@100&family=Oswald:wght@200;300;400&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@400;500;700&family=Rubik:wght@300;500;600;800&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/styleee.css">
   
   <!-- custom js file link  -->
   <script src="assets/js/script.js" defer></script>

</head>
<body>

    <!-- landing page guest atau lpguest -->

    <div class="navbarr">
      <header>
      <a href="#" class="logo">Macoyyy</a>
      <nav>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="/become">Became</a></li> 
            
            </ul>
      </nav>
           <div class="navbar">
             
          <div class="nav_right" data-name="p-1">
             <ul>
                <li class="nr_li dd_main" style="list-style:none;">
                  <img src="profile/{{ auth()->user()->foto }}" alt="tes">
                  
                   <!-- <div class="dropdown">
                        <div class="dd_menu">
                      <div class="dd_left">
                         <ul>
                            <li style="list-style:none;"><i class="fa-solid fa-user"></i></li>
                             <li style="list-style:none;"><i class="fas fa-sign-out-alt"></i></li>
                            <li style="list-style:none;"><i class="fas fa-cog"></i></li>    
                           
                         </ul>
                      </div>
                      <div class="dd_right">
                         <ul>
                            <li style="list-style:none;">Profil</li>
                           <li style="list-style:none;">Logout</li>
                            <li style="list-style:none;">Settings</li>
                         </ul>
                      </div>
                   </div>
                   </div> -->
                 
                </li>
                
             </ul>
          </div>
       </div>
        
     
  </header> 
   </div>


    <div id="lpguest">
     
      <div class="rightbar">
      </div>
      <div class="hero-img">
          <div class="owl-carousel owl-theme">
              <div class="slideee slide-1">
                  <div class="slide-content">
                      <h2>DAPATKAN TEMAN MABAR MU DISINI <br>SEGERA JOIN DAN MAINKAN BERSAMA <br>TEMAN BARUMU</h2>
                      <button><a href="#">START NOW</a></button>
                  </div>
                  <div class="shadow"></div>
              </div>
              <div class="slideee slide-2">
                  <div class="slide-content">
                      <h2>DAPATKAN TEMAN MABAR MU DISINI <br>SEGERA JOIN DAN MAINKAN BERSAMA <br>TEMAN BARUMU</h2>
                      <button><a href="#">START NOW</a></button>
                  </div>
                  <div class="shadow"></div>
              </div>
              <div class="slideee slide-3">
                  <div class="slide-content">    
                      <h2>DAPATKAN TEMAN MABAR MU DISINI <br>SEGERA JOIN DAN MAINKAN BERSAMA <br>TEMAN BARUMU</h2>
                      <button><a href="#">START NOW</a></button>
                  </div>
                  <div class="shadow"></div>
              </div>
          </div>    
      </div>
  </div> 
</div>
  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Custom Javascript -->
  <script>
      $(document).ready(function () {
          $(".owl-carousel").owlCarousel({
              items:1,
              loop:true,
              nav:true,
              dots:true,
              autoplay:true,
              autoplaySpeed:1000,
              smartSpeed:1500,
              autoplayHoverPause:true
          });
      });
  </script>
   
   
<div class="container" id="container">

   <h3 class="title">10.000 Player Siap Untuk Menemanimu Bermain </h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
        <h3 class="judul">League Of Legends</h3>
         <div class="price">5,000 Player</div> 
         <img src="assets/images/lol2.png" alt="">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="product" data-name="p-2">
         <h3 class="judul">Fortnite</h3>
         <div class="price">6,000 Player</div> 
         <img src="assets/images/fortnite2.png" alt="">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
        
      </div>

      <div class="product" data-name="p-3">
          <h3 class="judul">Valorant</h3>
         <div class="price">4,000 Player</div> 
         <img src="assets/images/valorant2.png" alt="">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
       
      </div>

      <div class="productt" data-name="p-4">
          <img src="assets/images/a.jpeg" alt="" class="gmbr"> 
         <!-- <h3>brinjal</h3>
         <div class="price">$2.00</div> -->
      </div>

      <div class="productt" data-name="p-5">
         <img src="assets/images/b.jpeg" alt="">
         <!-- <h3>broccoli</h3>
         <div class="price">$2.00</div> -->
      </div>

      <div class="productt" data-name="p-6">
         <img src="assets/images/c.jpeg" alt="" >
         <!-- <h3>potatoes</h3>
         <div class="price">$2.00</div> -->
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="profile/{{ auth()->user()->foto }}" alt="tes">

      <h3>{{ auth()->user()->name }}</h3><br>
     
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
      
      <div class="buttons">
         <a href="/setting" class="buy">Edit Profile</a>
       
      </div>
     <div class="garis"></div>
   </div>
     

</div>  

<h3 class="title" id="title"> 10+ game bisa kamu mainkan bersama</h3>

<div class="container2" id="container2">
         <div class="slider">
   <div class="slide-track">

      <!-- 9slide -->
      <div class="slide">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/4.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/5.png" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/6.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>

       <!-- 9slide -->
       <div class="slide">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/4.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/5.png" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/6.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slide">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>
      
      
   
   </div>
</div>
<!-- 
<div class="sliderr" id="sliderr">
   <div class="slide-trackk"> -->

      <!-- 9slide -->
      
      <!-- <div class="slidee">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/4.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/5.png" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/6.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div> -->

       <!-- 9slide -->
       <!-- <div class="slidee">
         <img src="assets/images/4.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/5.png" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/6.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/1.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/2.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/3.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/4.jpeg" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/5.png" alt="" srcset="">
      </div>
      <div class="slidee">
         <img src="assets/images/6.jpeg" alt="" srcset="">
      </div>
   </div>
</div>

      </div> -->

<h3 class="titlee" id="titlee"> Popular Player </h3>

<!-- Fade in & out -->
<div class="kartu" id="kartu">
   <div class="sliderrrr"></div>
<div class="sliderrrrr"></div>
   <div class="sliderrrrrr"></div>
</div>


<!-- footer -->


<footer id="footer">
    <div class="content">
      <div class="top">
        <div class="logo-details">  
          <!-- <i class="fab fa-slack"></i> -->
          <a href="#" class="logo">Mabar Coyyy</a>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/mabarc0y_/"><i class="fab fa-instagram"></i></a>
          <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Community</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Mabar Coyyy</li>
          <li><a href="#">MABAR COYY is a social platform for gamers to make friends worldwide through playing video games.</a></li>
         
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2022 <a href="#">MABAR COYYY</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>  
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>

</body>
</html>


</body>
</html> 