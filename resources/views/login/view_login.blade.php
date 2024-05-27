<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <title>LOGIN</title>
</head>
 
<body  style="  background-image=lspabi4.jpg;
">
  
  <div class="ukuranweb">
    <div class="container">
      <div class="form">
        <div class="btn">
          <button class="signUpBtn">SIGN UP</button>
          <button class="loginBtn">SIGN IN</button>
          
        </div>
        <form class="signUp" action="/user/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="formGroup">
            <input type="text"  placeholder="name" name="name" autocomplete="off">
          </div>
          <div class="formGroup">
            <input type="text" placeholder="username" name="username" required autocomplete="off">
          </div>
          <input type="hidden" name="level" value="2">
          <div class="formGroup">
            <input type="password"  placeholder="password" name="password" required autocomplete="off">
          </div>
          <div class="formGroup">
            <input type="text" placeholder="email"  name="email"required autocomplete="off">
          </div>
          <label for="foto">Photo</label>
          <input type="file" for="foto" id="foto" class="form-control" name="foto">
          <div class="checkBox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <span class="text"> ingat kata sandi untuk masuk</span>
          </div>
        
          <div class="formGroup">
            <button type="submit" class="btn2" value="save">DAFTAR</button>
          </div>
   
        </form>
      
    
    
        <!------ Login Form -------- -->
       
        <form class="login" action="{{url('login/proses')}}" method="post"enctype="multipart/form-data">
          @csrf
          <div class="formGroup" style="display: block; margin-left:15%;">
            <input autofocus type="text" class="form-control
            @error('username')
             is-invalid
            @enderror
            
            " placeholder="username" name="username" value="{{old('username')}}">
          
            @error('username')
              <div class="invalid-feedback">
                <p style="display:inline;">{{ $message}}</p>
               </div>
            @enderror
          
          </div>
          <div class="formGroup" style="display:block; margin-left:15%; ">
            <input type="text"  class="form-control
            @error('password')
            is-invalid
            @enderror
            " placeholder="password" name="password">
          
            @error('password')
              <div class="invalid-feedback mb-10" >
                  
                  {{ $message}}
              </div>
            @enderror
          
          </div>
          <div class="formGroup">
            <button type="submit" class="btn2">MASUK</button>
          </div>
          <div class="checkBox">
          <a class="text" href="/forgot-password"> lupa password?</a>
          </div>
        </form>
       
       
   
      </div>
    </div>
  <nav>
    <div style="background-color: rgb(248, 249, 253);">
    <div class="wrapper1">
      <img src="">
<h1></h1>
    </div>
    </div>
    <script>
      setTimeout(function() {
        window.scrollTo(0,document.body.scrollHeight);
      }, 1000);</script>
  <script src="jQuery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
 
</html>