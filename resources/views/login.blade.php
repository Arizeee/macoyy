<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
  <!-- Navbar-->
<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container">
          <!-- Navbar Brand -->
          <a href="#" class="navbar-brand">
              
          </a>
      </div>
  </nav>
</header>


<div class="container">
  <div class="row py-5 mt-4 align-items-center">
      <!-- For Demo Purpose -->
      <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
          <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
          <h1>Buku Komunikasi Siswa</h1>
          <p class="font-italic text-muted mb-0"></p>
          <p class="font-italic text-muted">
          </p>
      </div>

      <!-- Registeration Form -->
      <div class="col-md-7 col-lg-6 ml-auto">
          <form action="" method="POST">
            @csrf
              <div class="row">

                  <!-- Email Address -->
                  <div class="input-group col-lg-12 mb-4">
                      <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <box-icon type='solid' name='user'></box-icon>
                          </span>
                      </div>
                      {{-- <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md"> --}}
                      <label for="user" class="label"></label>
                      <input id="user" type="text"  class="form-control bg-white border-left-0 border-md" placeholder="Please enter your email" name="email" value="{{old('email')}}">
                      <span style="color: red">
                        @error('email')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>

            

                  <!-- Password -->
                  <div class="input-group col-lg-6 mb-4">
                      <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <box-icon type='solid' name='lock'></box-icon>
                          </span>
                      </div>
                      {{-- <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md"> --}}
                      <label for="pass" class="label"></label>
                      <input id="pass" type="password"  class="form-control bg-white border-left-0 border-md" data-type="password" name="password" placeholder="Please enter your password" value="{{old('password')}}" >
                     
                      <span style="color: red">
                        @error('password')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>

                

                  <!-- Submit Button -->
                  <div class="form-group col-lg-12 mx-auto mb-0">
                      <button type="submit" class="btn btn-primary btn-block py-2">
                          <span class="font-weight-bold">Create your account</span>
                      </button>
                  </div>

                  <!-- Divider Text -->
                  <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                      <div class="border-bottom w-100 ml-5"></div>
                      <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                      <div class="border-bottom w-100 mr-5"></div>
                  </div>

                

                  <!-- Already Registered -->
                  <div class="text-center w-100">
                      <p class="text-muted font-weight-bold">don't have account?<a href="/register" class="text-primary ml-2">Register</a></p>
                  </div>

              </div>
          </form>
      </div>
  </div>
</div>
<script src="js/script.js"></script>
</body>
</html>