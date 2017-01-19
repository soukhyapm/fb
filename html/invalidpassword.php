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
  <tr><td>login as:</td>&nbsp;&nbsp;<td><img src="<?php echo $pic;?>" class="img-responsive" style="width: 50px; height: 50px;"></td><td style="padding:0px;"><?php echo $fname;?>&nbsp;<?php echo $lname;?></td><input type="text" name="user" hidden="hidden" value="<?php echo $uname;?>"></tr><br>
<tr><td>password:</td><td><input type="text" name="password" placeholder="password"> </td></tr><br>
<tr><td></td><td><input type="checkbox" name="c" checked="checked">Keep me logged in</td></tr><br>
<tr><td></td><td><input type="submit" name="btn" class="btn-primary" value="LOGIN">&nbsp;or signup for facebook</td></tr>
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