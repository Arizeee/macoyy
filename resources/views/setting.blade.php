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
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/profil.css">

   
   
 

</head>
<body>

    <!-- landing page guest atau lpguest -->
   

    <div class="navbarr">
      <header>
      <a href="tampilan.html" class="logo">Macoyyy</a>
      <nav>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Blog</a></li> 
            
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
 
      
         
<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="profile/{{ auth()->user()->foto }}" alt="tes">
      <h3>ripall</h3><br>
     
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
      
      <div class="buttons">
         <a href="#" class="buy" >Settings</a>
       <input type="button" value="">
      </div>
     <div class="garis"></div>
   </div>
     

</div> 

<div class="wrapper">

   <div class="sidebar">
       <ul>
         <li>
                 <span class="itemm">Settings</span>
             
         </li>
         <li>
             <a href="#"class="active">
                
                 <span class="item">Edit Profile</span>
             </a>
         </li>
         <div class="gariss"></div>
         <li>
             <a href="index.html" class="item">  
                 <span>Log Out</span>
             </a>
         </li>
     </ul>
 
   </div>
</div>

<div class="content">
   <h2>Profile</h2>
   <h3>Avatar</h3>

   <div class="contentImg">
        <h3 style="font-size: 12px;" id="jdl">Avatar must be .JPG, .JPEG or .PNG and cannot exceed 5M.<br/>
         VIP can use GIF profile photo</h3>     
      <div >
         <ul>
            <li class="nr_li dd_main" style="list-style:none;">
                <div class="profile"><img src="profile/{{ auth()->user()->foto }}" alt="tes"></div>
            </li>   
         </ul> 
      </div>
      

      <div class="buttonss">
         <form action="/settings" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="container_">
             
            
           
            <p class="image_upload">
              <label for="userImage">
              <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
              </label>
              <input type="file" name="foto" id="userImage" placeholder="Sisipkan Gambar">
              <button type="submit" class="btn-kirim">KIRIM</button>
            </p>
            </div>
         </form>
      </div>

      <div class="garisss"></div>

      <h3>Profile Information</h3>

      <div class="login-html">
         <div class="login-form">
             <div class="sign-in-htm">
                 <div class="group">
                     <label for="user" class="label">Name</label>
                     <input id="user" type="text" class="input" placeholder="Please enter your email">
                 </div>
                 <div class="group">
                     <label for="#" class="label">Bio</label>
                     <textarea name="Biodata" id="#" cols="30" rows="10" class="biodata"placeholder="Please enter your Biodata"></textarea>
                 </div>
                 <div class="group">
                  <a href="tampilan.html"><input type="submit" id="login" class="button" value="Save Change"></a> 
               </div>
              
                  
             </div>
            
                 
               
                 
                 
             </div>
         </div>
     </div>
   </div>
</div>



  <!-- custom js file link  -->
  <script src="assets/js/script.js" defer></script>
</body>
</html>