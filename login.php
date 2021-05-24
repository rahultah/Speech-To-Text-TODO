<?php
include "header.php";

?>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Login</h1>
      <p class="lead">Please Signin to use the application</p>
    </div>
    <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Check out — it’s free!
            </h1>
            <h2 class="wv-heading--subtitle">
               Fill the required field to Sign In !!..
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="auth.php" method="post" name="login">
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password"  class="form-control my-input" id="password" placeholder="Enter Password">
                  </div>
                  
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-primary">Login</button>
                     <br><br><a href="register.php" class="btn btn-primary">Dont have a account ? Click Here to sign up.</a>
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or">
                        <hr class="hr-or">
                        <!-- <span class="span-or">or</span> -->
                     </div>
                  </div>
                  <!-- <div class="form-group">
                     <a class="btn btn-block g-button" href="#">
                     <i class="fa fa-google"></i> Sign up with Google
                     </a>
                  </div> -->
                  <!-- <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>. -->
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

