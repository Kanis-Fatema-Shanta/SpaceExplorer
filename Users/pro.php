<?php include "errors.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page of the profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  </head>
  <body>

    <!-- <div class="form-group">
      <label class="col-md-4 control-label">First Name:</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
          <input name="fname" placeholder="Enter First Name" class="form-control" id="fname"  type="text" autocomplete="off">
        </div>
        <h5 id="firstNamecheck"> </h5>
      </div>
    </div> -->

    <div class="container">
      <div class="form-group">
        <div class="text-center">
          <label class="col-md-6 control-label "><h2 style="padding: 50px;">Home page</h2></label>

      </div>
      <div class="row">
        <div class="col-md-7">
          <img src="PngItem_59407.png" class="img-fluid" alt="Responsive image"  width="450" height="300" style="padding: 35px;">
        </div>
      <div class="col-md-4">
          <?php if(isset($_SESSION['success'])) :   ?>
          <h3>
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
          </h3>
          <?php endif ?>

          <?php if(isset($_SESSION['email'])) :?>

              <p>Welcome

                <?php echo $_SESSION['username'].'<br>'.'<br>';
              include 'profile.php';  ?>

              <div class="">
                <a href="pro.php?logout='1'" style="color: red;">Signout</a>
              </div>
             </p>
               <?php endif ?>
            </div>
      </div>
    </div>
  </div>




    <?php


    /*if (isset($_POST['submit'])) {
      $first_name = $_SESSION[$_POST['fname']];
      $last_name = $_POST['lname'];

      echo "Your name is ". $first_name." ".$last_name.'<br>';

      $gender = $_POST['gender'];
      echo "Gender: ". $gender.'<br>';

      $instName = $_POST['instName'];
      echo "Name of the institution: ". $instName.'<br>';

      $degree = $_POST['degree'];
      echo "Your current degree: ". $degree.'<br>';

      $twn = $_POST['twn'];
      echo "Hometown: ". $twn.'<br>';

      $thana = $_POST['thana'];
      echo "Thana: ". $thana.'<br>';

      $zip = $_POST['zip'];
      echo "ZIP code: ". $zip.'<br>';

      $twn2 = $_POST['twn2'];
      echo "Current town: ". $twn2.'<br>';

      $thana2 = $_POST['thana2'];
      echo "Thana: ". $thana2.'<br>';

      $zip2 = $_POST['zip2'];
      echo "ZIP code: ". $zip2.'<br>';

      $mob = $_POST['mob'];
      $ph = $_POST['ph'];
      echo "Mobile No.: ".$ph.$mob.'<br>';

      $email = $_POST['email'];
      echo "Email: ".$email.'<br>';

    }*/
     ?>

  </body>
</html>
