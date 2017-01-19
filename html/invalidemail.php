<!DOCTYPE html>
<html>
<head>
  <title>fb</title>
<?php $this->load->helper('url');?>
       <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbbt1.css";?>>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container-fluid">

  <div class="row r1">
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm " style="background-color: #3b5998; padding-top: 20px; height: 100px;">

   
    
  </div>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-8 col-xs-offset-0 col-xs-8  " style="background-color: #3b5998; padding-top: 20px; height: 100px;">

    <img src=<?php echo base_url()."images/fb1.jpg"; ?> class="img-responsive">
    
  </div>
  <div class="col-md-2 col-lg-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-sm-4 col-xs-offset-0 col-xs-4" style="background-color: #3b5998; padding-top: 30px; height: 100px;">

    <input type="button" name="btn" value="Sign up!" id="Btn" class="btn btn-success">
  </div>
<div class="col-md-6 col-lg-6 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm " style="background-color: #3b5998; height: 100px; padding-top: 35px;">

  </div>
  </div>
  
   <div class="row m" style="height:400px;">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r2">
    
   </div>
    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3  col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
     <h2>Facebook Login</h2><hr>

    <form method="post" action=<?php echo base_url()."index.php/Logincontroller/login";?>>
   <table>
<tr><td style="padding-left:80px;">Email or Phone:</td><td style="padding-left:0px;"><!-- <span class="glyphicon glyphicon-warning-sign"></span> --><input type="text" name="user"></td><!-- <td>The email address that you have entered dosen't match any account.Sign up for an account.</td> --></tr>
<tr><td  style="padding-left:80px;">Password:</td><td><input type="password" name="password" ></td></tr>
<!-- <tr></tr> --><tr><td></td></td><td ><input type="checkbox" name="log" checked>Keep me logged in</td></tr>
<tr><td></td><td><input type="submit" name="btn" class="btn-primary" value="LOGIN">or <span style="color:#0066ff;"><b>  Sign up for Facebook</b></span></td><!-- <td> --><!-- </td> --></tr>
<tr><td></td><td><span style="color:#0066ff;">Forgotten password?</span></td></tr>
 </table>
    </form>
    </div>
 
   </div>
   <div class="row n">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r2">
      <img src=<?php echo base_url()."images/footer.png";?> style="width: 1330px;">
   </div>
    
    </div>
 
   </div>
</div>  
</body>
</html>