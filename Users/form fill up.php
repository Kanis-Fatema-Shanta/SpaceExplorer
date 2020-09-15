<?php

 include "servers.php"; ?>

<!DOCTYPE html>
<html>
   <head>

     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Registration form fill up</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

      <link rel="stylesheet" href="css/bootstrap-theme.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?fbclid=IwAR0gyACmmGgclJrRqZMvJB9T81HsGsmhKQa2UcprYhN961Lx9lIdKLzW5sQ"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?fbclid=IwAR0p2ZVY0eQ4fdn9qcA_7e9wmsUG_1imANa6uOG0HQ_XvyvkSoynDxs0NaQ"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?fbclid=IwAR2tFvVcULEEmz7rCj8UIx4m3iAaO8yhlxNUoqEXEoT6qmtTpbfVd4gnj9A"></script>


      <script type="text/javascript" src="validation.js"></script>

      <style media="screen">
        #success_message{ display: none;}
      </style>





  <!--    <link rel="stylesheet" href="css/bootstrapValidator.min.css">

  <link rel="stylesheet" href="css/bootstrapValidator.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sanitize.css/2.0.0/sanitize.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js">  </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->



   </head>

    <body>
    <div class="container">

        <form class="well form-horizontal" action="form fill up.php" method="post" id = "register" name="register" onsubmit="return validate()">
          <?php include "errors.php"; ?>



<fieldset>
          <div class="jumbotron" style="text-align: center">
            <h1>Sign up</h1>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <legend>  <p><b>Please fill in the form to create an account</b></p></legend>
          </div>

        <!--first name-->
        <div class="form-group">
          <label class="col-md-4 control-label">First Name:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
              <input name="fname" placeholder="Enter First Name" class="form-control" id="fname"  type="text" autocomplete="off">
            </div>
            <h5 id="firstNamecheck"> </h5>
          </div>
        </div>

        <!--Last name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="last-name">Last Name:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" type="text" placeholder="Enter Last Name" id="lname" name="lname" autocomplete="off">
            </div>
            <h5 id="lastNamecheck"> </h5>
          </div>
        </div>


        <!--Gender-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="gender">Select your gender:</label>
          <div class="col-md-4">
            <div class="radio">

              <label> <input type="hidden" name="gender" />
              <input type="radio" name="gender" id="gender1" value="Male"><span>Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input type="radio" name="gender" id="gender2" value="Female"><span>Female</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input type="radio" name="gender" id="gender3" value="Other"><span>Others</span></label>
            </div>
          </div>
        </div>

        <!--Institution info-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="inst-name">Institution Name:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
              <input type="text" placeholder="Enter the name of your institution" name="instName" id="instName" class="form-control" autocomplete="off">
            </div>
            <h5 id="institutionCheck"> </h5>
          </div>
        </div>


        <!--degree-->
        <div class="form-group">
          <label class="col-md-4 control-label">Current degree:</label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="degree" id="degree" class="form-control">
               <option value="">---Select your current degree</option>
               <option value="BSc">B.Sc</option>
               <option value="MSc">M.Sc</option>
               <option value="BA">BA</option>
               <option value="MA">MA</option>
               <option value="BBA">BBA</option>
               <option value="MBA">MBA</option>
               <option value="BCom">BCom</option>
               <option value="MCom">MCom</option>
               <option value="HSC">HSC</option>
               <option value="SSC">SSC</option>
               </select>
             </div>
           </div>
         </div>

         <!--Parmanent address-->
         <div class="form-group">
           <label class="col-md-4 control-label">Permanent Address:</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="Enter permanent address" name="twn" id="twn" class="form-control" autocomplete="off">
             </div>
             <h5 id="townCheck"> </h5>
           </div>
         </div>



         <div class="form-group">
           <label class="col-md-4 control-label">Thana/Upazila:</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="Enter Thana/Upazila" name="thana" id="thana" class="form-control" autocomplete="off">
             </div>
             <h5 id="thanaCheck"> </h5>
           </div>
         </div>

         <div class="form-group">
           <label class="col-md-4 control-label">ZIP Code::</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="e.g 2200,2500" maxlength="4"
                  name="zip" id="zip" class="form-control" pattern="\d*" autocomplete="off" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
             </div>
             <h5 id="zipCheck"> </h5>
           </div>
         </div>


         <div class="form-group">
           <label class="col-md-4 control-label">Current Address:</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="Enter current address" name="twn2" id="twn2" class="form-control" autocomplete="off">
             </div>
             <h5 id="town2Check"></h5>
           </div>
         </div>

         <div class="form-group">
           <label class="col-md-4 control-label">Thana/Upazila:</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="Enter Thana/Upazila" name="thana2" id="thana2" class="form-control" autocomplete="off">
             </div>
             <h5 id="thana2Check"></h5>
           </div>
         </div>

         <div class="form-group">
           <label class="col-md-4 control-label">ZIP Code::</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i></span>
               <input type="text" placeholder="e.g 2200,2500" maxlength="4" name="zip2" id="zip2" pattern="\d*" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" autocomplete="off">
             </div>
             <h5 id="zip2Check"></h5>
           </div>
         </div>


        <!--Phone Number -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="mob">Mobile #</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
               <input name="mob" placeholder="8801******" class="form-control" id="mob" type="text"  maxlength="13" pattern="\d*" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
            </div>
            <h5 id="mobCheck"></h5>
          </div>
        </div>


        <!--<select id="ph" name="ph">
            <option value="+8801">+8801</option>
        </select>
        <input type="tel" placeholder="e.g.8457622" id="mob" name="mob" minlength = "9" maxlength="9" required title= "Field must be 9 characters long"><br><br>-->


        <!--E-mail-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control">
            </div>
          </div>
        </div>

        <!--Password-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="pass">Password:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" placeholder="Enter Password" name="pass1" id="pass1" class="form-control">
            </div>
          </div>
        </div>


        <!--Password confirmation-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="con-pass">Password Confirmation:</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" placeholder="Re-enter the password" name="pass2" id="pass2" class="form-control">
            </div>
          </div>
        </div>

        <br><br>


        <div class="form-group form-check">
          <div style="text-align: center; margin: auto;}">

          <label class=""> <input class="form-check-input" type="checkbox" required> <span>
          <b>I agree to the terms of services</b></span></label>
          </div>
        </div>

        <!-- Success message-->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
              <button id="btnSubmit" type="submit" class="btn btn-warning" name="submit" >Submit <span class="glyphicon glyphicon-submit"></span></button>
          </div>
        </div>

        </fieldset>

    </form>
  </div>

</body>
</html>
