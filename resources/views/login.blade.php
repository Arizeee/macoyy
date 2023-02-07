

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/weblogo-removebg-preview.png" type="kel 5" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-MABAR COYYY</title>
  </head>
  <!-- font gogle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Josefin+Sans:ital@0;1&family=Poppins:wght@400;500;700&family=Rubik+Distressed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+JP:wght@100&family=Oswald:wght@200;300;400&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@400;500;700&family=Rubik:wght@300;500;600;800&display=swap" rel="stylesheet">
   
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- css -->
<link rel="stylesheet" href="css/LogReg.css">
<body>
    <div class="topbarr" style="position: absolute;" >
        <h1 class="barr"><span class="spannn">MABAR</span> COYYY</h1> 
    </div>
   <div class="gambar">
    <img src="images/logoWeb.png" alt="">
   </div>
 <div class="gambarr">
        <img src="img/weblogo-removebg-preview.png" alt="">
    </div>
   
    <div class="login-wrap">

       
        <div class="login-html">
            <form action="" method="POST">
              @csrf
              <div class="topbar">
                <h1><span class="spann">Welcome to <br><br><span class="spannn" style="margin-left: 8%;">Mabar</span>  Coyyy</span></h1> 
            </div>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="/register">Sign Up</a> </label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="user" type="text" class="input" placeholder="Please enter your email" name="email" value="{{old('email')}}">
                        
                        <span style="color: red">
                          @error('email')
                            {{ $message }}
                          @enderror
                        </span>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password" placeholder="Please enter your password" value="{{old('password')}}" >
                        <span style="color: red">
                          @error('password')
                            {{ $message }}
                          @enderror
                        </span>
                    </div>
                    <div class="group">
                        <label style="color: #1967FC; font-size: 14px;"> Forget  your password?</label>
                    </div>
                    <div>
                      <p>login with google</p>
                      <a href="{{ route('googlelogin') }}"><img src="assets/images/googlelog.png" alt="" style="border-radius: 50%; width: 20px;"></a>
                    </div>
                    <div class="group">
                       <button type="submit" id="login" class="button">Login</button>
                    </div>
            </form>
           
                     
            
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>