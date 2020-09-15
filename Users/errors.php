<?php
session_start();
include "servers.php";?>

    <?php

    $error = array();
    $success_message = "";

    if (isset($_POST['submit'])) {

      $first_name = mysqli_real_escape_string($con, $_POST['fname']);
      $last_name = mysqli_real_escape_string($con, trim($_POST['lname']));
      $username = mysqli_real_escape_string($con, trim($first_name.$last_name));

      $gender = mysqli_real_escape_string($con, $_POST['gender']);
      $inst_name = mysqli_real_escape_string($con, $_POST['instName']);
      $degree = mysqli_real_escape_string($con, $_POST['degree']);
      $pTown = mysqli_real_escape_string($con, $_POST['twn']);
      $pThana = mysqli_real_escape_string($con, $_POST['thana']);
      $pZip = mysqli_real_escape_string($con, $_POST['zip']);
      $cTown = mysqli_real_escape_string($con, $_POST['twn2']);
      $cThana = mysqli_real_escape_string($con, $_POST['thana2']);
      $cZip = mysqli_real_escape_string($con, $_POST['zip2']);
      $mobile_num = mysqli_real_escape_string($con, trim($_POST['mob']));

      $email = mysqli_real_escape_string($con, trim($_POST['email']));
      $pass1 = mysqli_real_escape_string($con, $_POST['pass1']);
      $pass2 = mysqli_real_escape_string($con, $_POST['pass2']);

      $isValid = true;

      // //check the all fields empty or not
      if ($gender == "") {
        $isValid = false;
        array_push($error, "Please select your gender.");

      }

      //check if confirmed password is matched or not
      if ($isValid && ($pass1 != $pass2)) {
        $isValid = false;
        array_push($error, "Confirmation Password is not matching. Please, re-enter the password.");


      }

      //check email id is valid or not
      if ($isValid && !(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $isValid = false;
        array_push($error, "Invalid email id.");
      }

      //check if email id already exists
      if ($isValid) {

        $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows > 0) {
          $isValid = false;
          array_push($error, "Email id already exists.");
        }
      }

      if ($isValid) {

        $stmt = $con->prepare("SELECT * FROM information WHERE mobile_num = ?");
        $stmt->bind_param("s", $mobile_num);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows > 0) {
          $isValid = false;
          array_push($error, "Mobile number already exists.");
        }
      }

      //insert record
      if ($isValid && (count($error) == 0)) {

        $password = md5($pass1);
          $userSQL = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')";
          mysqli_query($con, $userSQL);

          $informationSQL = "INSERT INTO information(fname, lname, gender,	inst_name,	degree,	pTown,	pThana,	pZip,	cTown,	cThana,	cZip,	mobile_num,	email)
          VALUES ('$first_name','$last_name','$gender', '$inst_name', '$degree', '$pTown',	'$pThana',	'$pZip',	'$cTown',	'$cThana',	'$cZip',	'$mobile_num', '$email')";
          mysqli_query($con, $informationSQL);


       //  $sqlValidation =  mysqli_query($con, "SELECT CASE WHEN (select count(*) from user)=(select count(*) from information) THEN 1 ELSE 0 END AS RowCountResult = '$RowCountResult'");
       //
       //  $RowCountResult = mysql_fetch_object($sqlValidation);
       //
       // //$sqlValid = mysqli_query($con, $sqlValidation);
       //
       // if ($RowCountResult === 0) {
       //   $isValid = false;
       //   array_push($error, "Your information can't be inserted succesfully for database issue. Please enter again!");
       //
       // }
       //
       // else{}


          /*$insertSQL = "INSERT INTO user(username, email, password) VALUES (?,?,?)";
        $stmt = $con->prepare($insertSQL);
        $stmt->bind_param('sss',$username,$email,$pass1);
        $stmt->execute();
        $stmt->close();*/


    $success_message = "Account is created successfully!";

          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Logged in";
          $_SESSION['email'] = $email;
         header ('location: pro.php');
      }


    }?>



    <?php
      //displaying error message
      if (!empty($error)) {
           $error_msg = "Error!"." ".implode($error);
           echo "<script type='text/javascript'>alert('$error_msg');</script>";
          }
          ?>

            <?php
            // Display Success message
            if(!empty($success_message)){ ?>
            <div class="">
            <strong><?php echo "<script type='text/javascript'>alert('$success_message');</script>"; ?>
              </strong>
            </div>
          <?php  } ?>
