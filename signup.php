<?php
include('server.php');

$msg='';
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $result=mysqli_query($con, "SELECT * from user where email='$email'");
  $check=mysqli_num_rows($result);
  if ($check>0) {
    $msg="Email is already existed.";
  }else{
    $varification_id = rand(111111111,999999999);

    mysqli_query($con, "INSERT into user(name,email,password,varification_id, varification_status) values('$name','$email','$password','$varification_id',0)");

    $msg="We just sent you a varification link to <strong>$email</strong>. Please check your inbox and click on the link to get started. If you don't find the link please, request a new one.";

    $mailHtml = "Please, confirm your acount registration by clicking the button or link below: <a href='http://localhost/PHP/Above%20Earth/signup.php?id=$varification_id'>http://localhost/PHP/Above%20Earth/check.php?id=$varification_id</a>";

    smtpMailer($email,'Verification Code',$mailHtml);
  }
}
function smtpMailer($toMail, $subject, $body){
  include "smtp\class.phpmailer.php";

  $mail= new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.mailgun.org';
  $mail->Port = 587; //587
  $mail->IsHTML(true);
  $mail->CharSet= 'UTF-8';
  $mail->Username = 'mimjkkniu.381@gmail.com';
  $mail->Password = 'VE7K!!3sqaZmzds';
  $mail->SetFrom("mimjkkniu.381@gmail.com");
  // $mail->SMTPOptions=array('ssl'=>array(
  //   'verify_peer'=>false,
  //   'verify_peer_name'=>false,
  //   'allow_self_signed'=>false,
  // ));

  //$mail->addAttachment("example.pdf");
  $mail->Subject = $subject;
  $mail->Body= $body;
  $mail->AddAddress($toMail);

  if (!$mail->Send()) {
    return 0;
  }else {
    return 1;
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create your account</title>
    <!--Font awesome CDN-->

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="oen">

    <?php
    require "header.inc.php";?>
      <!--Header ends-->

      <!-- nasahero starts -->
      <section class="hero" id="hero">


        <div class="container">
          <h1 class="headline">The Earth Explorer</h1>
          <div class="headline-description">
            <div class="separator">
              <div class="line line-left"></div>
              <div class="asterisk"><i class="fas fa-asterisk"></i></div>
              <div class="line line-right"></div>
            </div>
            <div class="single-animation">
              <h5>Ready to Explore</h5>
              <a href="#" class="btn cta-btn">Learn</a>
            </div>
          </div>
        </div>
      </section>
      <!-- hero ends -->

      <!-- Create your account starts-->
      <section class="discover-our-story" id="signup">
        <div class="container">
          <div class="restaurant-info">

            <!-- account description -->
            <div class="restaurant-description padding-right animate-left" >
              <div class="global-headline">
                <h2 class="sub-headline">
                  <span class="first-letter">E</span>xplore
                </h2>
                <h1 class="headline headline-dark">Create your account</h1>
              </div>

              <p>
                Create your account. It's free and only takes a minute.<br>
                Already have an account?
              </p>
              <a href="login.php#login" class="btn body-btn">Login Here</a> <!-- About us -->
            </div>
            </div>

          <!-- Signup form option -->

            <div class="login-box animate-right">
              <form action="" method="post">
              <div class="left">
                <h1>Sign up</h1>
                <input type="text" name="name" id="name" placeholder="Username" />
                <input type="text" name="email" placeholder="E-mail" />
                <input type="password" name="password" id="password" placeholder="Password" />
                <input type="password" name="password2" id="password2" placeholder="Retype password" />
                <input type="submit" name="submit" value="Sign me up" />

              </div>


              <div class="right">
                <h1>Create account with</h1>
                <button class="social-signin facebook">facebook</button>
                <button class="social-signin twitter">Twitter</button>
                <button class="social-signin google">Google+</button>
              </div>
              <div class="message">
                <?php
                echo $msg;
                ?>
              </div>
              <div class="or">OR</div>

              </form>
            </div>
        </div>
      </section>
    <!-- Create your account ends-->





    <?php
    require "footer.inc.php";?>

<script src="main.js"></script>
  </body>
</html>
