<?php include 'configuration_function.php'; ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Register : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="Kishan Sharma">
    <meta name="MobileOptimized" content="320">    
    <style type="text/css"> 
        .inputs {
            height: 25px;
            border: 0px;
            border-radius: 0px;
            border: solid 1px #eee;
            width: 100%;
            padding:10px;
            background-color: transparent;
            border:solid 1px #10318a;
            color:#fff;
            font-size: 14px;
            /* box-shadow: 0px 0px 10px #ccc; */
        }
    </style>
</head>
<body style="background-image: url('images/pokl.jpg');">
    <div style="min-height: 20vh"></div>
	<form method="POST" action="register_handle.php" novalidate="" onsubmit="return validate();">
     <div style="padding: 40px;background-color: #07163f;width: 350px;margin:0 auto">
        <div style="color: #fff;text-align: center;font-family: arial">Welcome to <a style="color: #2196f3;text-decoration: none;" href="index.php">SoundSync</a></div>
        <div style="padding: 5px;"></div>
        <?php
            see_status_3($_REQUEST);
         ?>
        <div style="padding: 10px;"></div>

        <div class="row">

          <div class="col-sm-6">
            <input type="text" class="form-control inputs" name="name" style="color:#fff"  placeholder="Enter Email Name Here">
            <input type="hidden" name="role" value="User-Agent-x">
            <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct Name Here</div>
            <div style="padding: 14px;" class="mobs"></div>
          </div>


          <div class="col-sm-6">
            <input type="text" class="form-control inputs" name="last_name" style="color:#fff"  placeholder="Enter Last Name Here">
            <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct Last Name Here</div>
            <div style="padding: 14px;" class="mobs"></div>
          </div>



          <div class="col-sm-6">
            <input type="text" class="form-control inputs" name="company_name" style="color:#fff"  placeholder="Enter organization Name Here">
            <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct organization Name Here</div>
            <div style="padding: 14px;" class="mobs"></div>
          </div>



          <div class="col-sm-6">
            <input type="text" class="form-control inputs" name="email" style="color:#fff"  placeholder="Enter Email Address">
            <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct Email Address</div>
            <div style="padding: 14px;" class="mobs"></div>
          </div>
        </div>
          <div style="padding: 5px;"></div>

        <div class="row">

           <div class="col-sm-6">
             <input type="password" class="form-control inputs" name="pass" style="color:#fff"  placeholder="Enter Password">
             <div id="password_error" style="color: red;font-size: 12px;display: none;">Enter Password</div>
             <div style="padding: 14px;" class="mobs"></div>
          </div>
        </div>

        <div class="row">

           <div class="col-sm-6">
             <select class="form-control inputs" name="role"  required style="padding: 10px;height: 25px;line-height: 1.8rem" >
              <option value="">Define Your Role</option>
                <option>Licensor</option>
                <option>Licensee</option>
             </select>
             <div id="password_error" style="color: red;font-size: 12px;display: none;">Define Your clear Roles</div>
             <div style="padding: 14px;" class="mobs"></div>
          </div>
        </div>
        <div style="padding: 5px;"></div>

       <input type="hidden" name="tx_address">
        <div class="row">
          <div class="col-sm-12">
           <button class="inputss " name="login" style="width: 100%;background-color: #2196f3;border:0px;padding:10px;color:#fff;font-size: 16px;">Register Now</button>
          </div>
        </div>
        <div style="padding:3px;"></div>
        
         <div style="padding: 10px;"></div>
        
          <div style="clear:both"></div>
        <!--  <center><a href="forgot_password.php" style="color: #800">Forgot Password? Click Here </a></center> -->
    </div>

    </form>
    
</body>

</html>