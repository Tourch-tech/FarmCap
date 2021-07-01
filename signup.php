<?php
 require_once('config.php')

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
      width: 100%;
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
    #interest{
      color: gray; 
      height: 30px;
      width: 30%;
      border-radius: 4px;
    }
    
  </style>
</head>

<body>

<div>
    <?php

    ?>
</div>

<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-">
  <div class="container-fluid " >
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
<form action="signup.php" method="post">
<section class="form my-4 mx-5">
<div class="container">
    <div class="row no-gutters">
      <div class="col-lg-5">
        <img src="img/firstake.jpg" class="img-fluid">
      </div>
      <div class="col-lg-7 px-5 pt-5">
        <h1 class="font-weight-bold py-2">FarmCap</h1>
        <h4> Sign up </h4>

        
        <br>
          <select id="interest" name="interest" required>
            <option value=”Farmer”>Farmer</option>
          	<option value=”Investor>Investor</option>
          </select>

          <div class="form-row">
              <div class="col-lg-7">
                <label for="fullname"></label>
                <input type="text" placeholder="Fullname" id="fullname" name="fullname" class="form-control my-2 p-2" required> 
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <label for="email"></label>
                <input type="email" placeholder="Email" id="email" name="email" class="form-control my-2 p-2" required> 
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
              <label for="phonenumber"></label>
              <input type="text" placeholder="Phone number" id="phonenumber" name="phonenumber" class="form-control my-2 p-2" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
              <label for="email"></label>
              <input type="password" placeholder="Password" id="password" name="password" class="form-control my-2 p-2" required>
              </div>
            </div>


            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" id="register" name="create" class="btn1 mt-4 mb-2"> Sign up</button>
              </div>
            </div>



            <p> already have an account?<a href="signin.php"> Sign in</a></p> 
</form>

      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
      $('#register').click(function(e){

         var valid = this.form.checkValidity();

         if(valid){

         var interest      = $('#interest').val();
         var fullname      = $('#fullname').val();
         var email         = $('#email').val();
         var phonenumber   = $('#phonenumber').val();
         var password      = $('#password').val();


           e.preventDefault();

           $.ajax({
              type: 'POST',
              url: 'process.php',
              data: {interest: interest,fullname: fullname,email: email,phonenumber: phonenumber,password: password},
              success: function(data){
                Swal.fire({
                            'title': 'successful',
                            'text': 'click sign in to continue',
                            'type': 'success'
                            })

              },
              error: function(data){
                Swal.fire({
                        'title': 'Errors',
                        'text': 'failed to register',
                        'type': 'error'
                        })

              }
           });
          

         }else{
           
         }
        

      });
  
   

    });

</script>


<!--footer-->

<div class="col-12 text-center">
  <br>
  <hr class="light-100">
  <h5>&copy; tourchtech2021</h5>
</div>


</body>
</html>
