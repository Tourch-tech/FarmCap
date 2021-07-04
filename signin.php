<?php

    if(isset($_SESSION['usersignin'])){
        header('Location: profile.php');

    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>FarmCap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body {
      background: rgba(217, 240, 174, 1);
    }
    .row {
      background: rgba(232, 255, 188, 1);
      border-bottom-right-radius: 30px;
      border-top-left-radius: 30px;
      box-shadow: 12px 12px 22px rgb(182, 213, 128);
    }
    .img-fluid {
    border-top-left-radius: 30px;
     }
    .btn1 {
      border: none;
      outline: none;
      height: 50px;
      width: 50%;
      background-color: rgba(122, 183, 5, 1);
      color: white;
      border-radius: 4px;
      font-weight: bold;
    }
    .btn1:hover {
      background: white;
      border: 1px solid;
      color: rgba(153, 202, 58, 1);
    }
    .linklook {
      color: rgba(122, 183, 5, 1);
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
      background-color: rgba(122, 183, 5, 1) !important;
    }

  </style>
</head>

<body>

<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="signin.php">Sign in</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>

<!--sign in form-->
<section class="form my-4 mx-5">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-5">
        <img src="img/first.jpg" class="img-fluid">
      </div>
      <div class="col-lg-7 px-5 pt-5">
        <h1 class="font-weight-bold py-2">FarmCap</h1>
        <h4> Sign into your account</h4>
        <form>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control input_email my-2 p-2 required">
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control input_pass my-2 p-2 required">
              </div>
            </div>
            <div class="form-row">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="rememberme" id="customControlInline" class="custom-control-input mt-2 mb-2"></input>
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="button" name="button" id="signin" class="btn1 mt-2 mb-2"> Sign in</button> <a class="linklook" href="#"> Forgot password?</a>
              </div>
            </div>
            <p> Don't have an account?<a class="linklook" href="signup.php"> Sign up</a></p> 
        </form>

      </div>
    </div>
  </div>
</section> 

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(function(){
      $('#signin').click(function(e){
          
          var valid = this.form.checkValidity();

          if(valid){
              var email = $('#email').val();
              var password = $('#password').val();
          }

          e.preventDefault();

          $.ajax({
              type: 'POST',
              url:   'jslogin.php',
              data:   {email: email,password: password},
              success: function(data){
                  alert(data);
                  if ($.trim(data) == "successfully signed in"){
                      setTimeout(' window.location.href =  "index.php"', 1000);
                  }
              },
              error: function(data){
                alert('There were errors while running operation');
              }
            });
      });
  });
</script>

<!--footer-->

<div class="col-12 text-center">
  <br>
  <hr class="light-100">
  <h5>&copy; kamitech2021</h5>
</div>





</body>
</html>



