<!DOCTYPE html>
<html>
<head>
       <title>fb</title>
 <?php $this->load->helper('url');?>
       <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbbt.css";?>>
       
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container-fluid">

  <div class="row r1">
   <div class="col-md-6 col-lg-6 col-md-offset-0 col-lg-offset-0 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 " style="background-color: #3b5998; padding-top: 20px; height: 100px;">

    <img src=<?php echo base_url()."images/fb1.jpg"; ?> class="img-responsive">
  </div>
  <form method="post" action=<?php echo base_url()."index.php/Logincontroller/login";?>>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 " style="background-color: #3b5998; height: 100px; padding-top: 35px;">
<input type="text" name="user" placeholder="username" style="padding-right:10px; "> 
  </div>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6  w" style="background-color: #3b5998; height: 100px; padding-top: 35px;">
<input type="password" name="password" placeholder="password" style="padding-right:10px;"> 
  </div>
  
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 e" style="background-color: #3b5998; height: 100px; padding-top: 35px;">
<input type="submit" name="btn" class="btn-primary" value="LOGIN">
  </div>
  </form>
  </div>
    <div class="row hidden-lg hidden-md ">
   <div  class="col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6" style=" padding-top: 5px;">
<input type="text" name="user" placeholder="username" style="padding-right:10px; "> 
  </div>
  <div class="col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6"  style=" padding-top: 5px;">
<input type="text" name="password" placeholder="password" style="padding-right:10px;"> 
  </div>
  <div class="col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6"  style=" padding-top: 5px;">
<input type="button" name="btn" class="btn-primary" value="LOGIN">
  </div>
  </div>
   <div class="row m" style="height:536px;">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r2">
    
   </div>
    <div class="col-md-6 col-lg-6 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm">
     <h1>Connect with friends and the world<br>around you on facebook</h1>
    <img src=<?php echo base_url()."images/fb.jpg";?> class="img-responsive">
  </div>
  <div class="col-md-6 col-lg-6 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r4">
    
   <table>
        <tr>
          <td>
          <h1 style="padding-left:120px;">Signup</h1>
            <form name="f1" method="post" action="validateForm1.php">
            <table>
 
  <tr>
    <td><input type="text" name="firstname" style="width:150px; height:25px;" placeholder="First name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="surname" placeholder="Last name" style="width:150px; height:25px;"></td>
    <td><label id="error1"></label></td>
  </tr>
  <tr>
    <td><input type="text" name="mobile" style="width:300px; height:25px;" placeholder="Mobile Number" minlength="10" maxlength="10"></td>
    <td><label id="error2"></label></td>
  </tr>
   <tr>
    <td><input type="text" name="email" style="width:300px; height:25px;" placeholder="Email"></td>
    <td><label id="error3"></label></td>
  </tr>
   <tr>
    <td><input type="password" name="newpassword" style="width:300px; height:25px;" placeholder="password"></td>
    <td><label id="error4"></label></td>
  </tr>
  <tr>
     <td><select  class="first" name="day" tabindex="7">
     <?php for ($i=0; $i <=31 ; $i++) { 
              ?>
              <option><?php 
              if($i==0)
                {
                  echo "day";
                  }
                  else
                    {
                      echo $i;
                      }
                       ?></option>
              <?php
            }
              ?>
                    </select>
                    <select name="mon" tabindex="8">
                        <option value="0">
                        month                        </option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="yea" tabindex="9">
                        <?php for ($i=1920; $i <=2017 ; $i++) { 
              ?>
              <option><?php 
              if($i==1920)
                {
                  echo "year";
                  }
                  else
                    {
                      echo $i;
                      }
                       ?></option>
              <?php
            }
              ?>
                    </select>
                </label></td><td><label id="error5"></label></td><td><label id="error7"></label></td>
  </tr>
  <tr>
            <td>GENDER:
            <input type="radio" name="r" value="male" id="r1" >male<input type="radio" name="r" value="female" id="r2">female</td></label></td><td><label id="error6"></label></td>
            </tr>
  <tr><td><font size="2px;">By clicking  Sign Up you agree to our Terms and that you have read our Data Use Policy,<br>including our Cookie Use</font></td></tr>
   <tr>
    <td><input type="submit" name="btn" value="Sign up Now!" class="btn btn-success"></td>
  </tr>

</table>
    
            </form>
          </td>
        </tr>
      </table>    

  </div>
   </div>
</div>  
</body>
</html>