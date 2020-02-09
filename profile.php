<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);
    include 'configuration_function.php';
    include 'connection.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }
    //print_r($_SESSION);
  ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Profile : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="Kishan Sharma">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/player/volume.css">
	<link rel="stylesheet" type="text/css" href="js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <style type="text/css">
        .modal-backdrop.show{z-index: -1}
    </style>
</head>
     <?php 
                $data = get_user_details("13.233.7.230",$_SESSION['user']); 
                $data = json_decode($data,TRUE);
                print_r($data); 
                //array_reverse($data);
            ?>
<body>
	<?php //include 'loader.php'; ?>
    <div class="ms_main_wrapper">        
        <?php include 'sidebar.php'; ?>
        <div class="ms_content_wrapper padder_top80">
            <?php include 'header.php'; ?>
            <div style="padding: 18px;"></div>
            <!---Recently Played Music--->
            <div class="ms_rcnt_slider">
                <div class="ms_heading">
                    <h1>Track Description </h1>                   
                </div>
               <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-5">
                        <div class="album_single_data">
                            <div class="album_single_img">
                                <img src="trav.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="album_single_text">
                                <h2><?php echo $data['userDataJSON']['name']; ?></h2>
                                <p class="singer_name">Email : <?php echo $_SESSION['user']; ?></p>
                                <div class="album_feature">
                                    <a href="#" class="album_date">Organization: <?php echo $data['userDataJSON']['company_name']; ?></a>
                                    <a href="#" class="album_date">Designtaion : <?php echo $data['userDataJSON']['role']; ?></a>
                                </div>
                               
                            </div>                            
                        </div>
                     </div>
                     <div class="col-sm-7">
                        <div style="padding: 50px 20px;background-color: #1b2039;width:100%;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div style="padding: 20px;">
                                        <h3 style="font-size: 20px;font-weight: normal;">Income</h3>
                                        <h1 style="font-size: 40px;font-weight: normal;color: #fff"><?php 
                                            $user_balance = get_balance("13.233.7.230", $_SESSION['user']); 
                                            $user_balance = json_decode($user_balance,true);
                                            echo $user_balance['balance'];
                                         ?> SST</h1>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div style="padding: 20px;">
                                        <h3 style="font-size: 20px;font-weight: normal;">Income</h3>
                                        <h1 style="font-size: 40px;font-weight: normal;color: #fff"><?php 
                                            $user_balance = get_income("13.233.7.230", $_SESSION['user']); 
                                            $user_balance = json_decode($user_balance,true);
                                            echo $user_balance['userIncome'];
                                         ?> SST</h1>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div style="padding: 20px;">
                                        <h3 style="font-size: 20px;font-weight: normal;">Sales#</h3>
                                        <h1 style="font-size: 40px;font-weight: normal;color: #fff"><?php 
                                            $user_balance = get_sales("13.233.7.230", $_SESSION['user']); 
                                            $user_balance = json_decode($user_balance,true);
                                            echo $user_balance['userSales'];
                                         ?> No.</h1>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                     </div>
                     <div class="col-sm-12">
                       
                       
                     </div>
                 </div>
               </div>
            </div>                  
        </div>
        <!----Footer Start---->
       <?php include 'footer.php'; ?>

       
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/audio-player.js"></script>
    <script type="text/javascript" src="js/plugins/player/volume.js"></script>
    <script type="text/javascript" src="js/plugins/nice_select/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>