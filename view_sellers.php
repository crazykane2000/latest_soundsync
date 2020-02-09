<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);
    include 'configuration_function.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }
  ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
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
</head>

<body>
	<?php //include 'loader.php'; ?>
    <div class="ms_main_wrapper">        
        <?php include 'sidebar.php'; ?>
        <div class="ms_content_wrapper padder_top80">
            <?php include 'header.php'; ?>
            <div style="padding: 18px;"></div>
            <?php 
                $data = get_all_user_logs("13.233.7.230"); 
                $data = json_decode($data,TRUE);
                //print_r($data); 
                //array_reverse($data);
            ?>
          
          
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>Top Sellers Here</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_feature_slider swiper-container">
                    <div class="col-sm-12">
                       
                        <div class="album_inner_list">
                            <div class="album_list_wrapper">
                                <ul class="album_list_name">
                                    <li>#</li>
                                    
                                    <li>Company Name</li>
                                    <li>Seller  </li>
                                    <li class="text-center">Role</li>
                                    <li class="text-center">Income</li>
                                </ul>
                                <?php 
                                   
                                    $i=1;

                                    foreach ($data as $key => $value) {
                                        //print_r($value);
                                        if ($value['userDataJSON']['name']=="") {
                                            continue;
                                        }
                                        $epoch = $value['timestamp']/1000000;
                                        echo ' <ul>
                                                <li ><a href="#"><span class="play_no">'.$i.'</span></a></li>
                                                
                                                <li >'.$value['userDataJSON']['company_name'].'</li>
                                                <li><a href="view_user_details.php?user_tx='.$value['email'].'">'.$value['userDataJSON']['name'].'<br/><span style="font-size:11px;"><b>Tx : </b> '.$value['address'].'</span></a></li>
                                                <li class="text-center"><label class="label label-success">'.$value['userDataJSON']['role'].' </li>
                                                <li class="text-center">'.$value['income'].' <span style="color:#fff;font-size:11px;">SS Toke</span></label>
                                                </li>
                                               
                                            </ul>';
                                            $i++;
                                    }
                                ?>
                               
                              
                            </div>
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