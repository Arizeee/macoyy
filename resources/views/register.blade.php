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

<!-- css -->
<link rel="stylesheet" href="css/LogReg.css">
<body>
    <div class="topbarr" style="position: absolute;" >
       <a href="index.html"><h1 class="barr"><span class="spannn">MABAR</span> COYYY</h1> </a> 
    </div>
   <div class="gambar">
    <img src="assets/images/logoWeb.png" alt="">
   </div>
 <div class="gambarr">
        <img src="assets/images/weblogo-removebg-preview.png" alt="">
    </div>
   
    <div class="login-wrap">

       
        <div class="login-html">
            
            <div class="topbar">
                <h1><span class="spann">Welcome to <br><br><span class="spannn" style="margin-left: 8%;">Mabar</span>  Coyyy</span></h1> 
            </div>
            <input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab"><a href="/login">Sign In</a> </label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-up-htm" id="sign up">
                  <form action="{{ route("saveregister") }}" method="POST">
                    @csrf
                    <div class="group">
                      <label for="pass" class="label">Username</label>
                      <input id="name" type="text" class="input" name="name" placeholder="Please enter your Username" value="{{old('name')}}" >
                      <span style="color: red">
                        @error('name')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
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
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> After checking, you are indicating that you have read andacknowledge the MABAR COYYY Platform Terms of Service
                        </label>
                    </div>
                    <div class="group">
                      <button type="submit" id="register" class="button" style="color: wihte;">Login</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>