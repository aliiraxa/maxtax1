<?php include_once 'classes/adminLogin.php';
if(isset($_SESSION['adminlogin'])){
  echo '<script>window.location.replace("index.php")</script>';
}
// include_once 'classes/session.php';
// Session::checkLogin();
$msg="";
if(isset($_POST['login']))
{
    $Login=new adminlogin();
    $adminEmail=$_POST['email'];
    $adminPass=$_POST['password'];
    $msg = $Login->adminLogin($adminEmail, $adminPass);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom/login.css">
    <title>MAXTAX</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 one">
        <div class="container">
          <img src="img/logo.png" width="130" alt="">

          <div class="content">
            <h1>
              Login To <br>
              Your Account
            </h1>
            <br>
            <?php
            if(isset($_POST['login']))
                echo"<span style='color: red; font-weight: bold;'>$msg</span>";
            ?>
            <form method="POST" action="">
                <input type="text" class="input" name="email" placeholder="Your Email"><br>
                <input type="password" class="input" name="password" placeholder="Your Password"><br>
                <input type="submit" name="login" class="btn" value="Login">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7 two">
        <div class="content conatiner">
          <h1>
              In-person and<br>
              online tex school<br>
              classes available.
          </h1>
          <h5>Call now ​(877)-313-0900</h5>
          
        </div>
      </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
  
  </body>
</html>