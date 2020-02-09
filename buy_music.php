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
    <title>Buy Music : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
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
                $data = get_all_track_logs("13.233.7.230"); 
                $data = json_decode($data,TRUE);
                array_reverse($data);
            ?>
          
          
            <div class="ms_top_artist">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms_heading">
                                <h1>View Songs</h1>
                                <span class="hstry_clear ms_btn"><a href="free_music.php">Free Songs </a></span>
                            </div>
                        </div>
                        <?php
                            foreach ($data as $key => $value) {
                               // print_r($value);
                                $track_thumb = "default_thumb.jpg";

                                $track_thumb = (!empty($value['trackDataJSON']['thumb_nail']) ? $value['trackDataJSON']['thumb_nail'] : "default_thumb.jpg");

                               
                                if ($track_thumb=="") {
                                    $track_thumb = "default_thumb.jpg";
                                }
                                if ($value['name']=="Dilbar Dilbar ") {
                                    continue;
                                }

                                if ($value['actionPerformed']!=="TRACK ADDED") {
                                   continue;
                                }
                                echo '<div class="col-lg-2 col-md-6">
                                       <a href="track_buy_play.php?track_id='.$value['songId'].'"> <div class="ms_rcnt_box marger_bottom30">
                                            <div class="ms_rcnt_box_img">
                                                <img src="tracks/'.$track_thumb.'" alt="" class="img-fluid">
                                                <div class="ms_main_overlay">
                                                    <div class="ms_box_overlay"></div>
                                                    <div class="ms_play_icon">
                                                        <img src="images/svg/play.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms_rcnt_box_text">
                                               <h3><a href="#">'.$value['name'].'</a></h3>
                                                <p>'.$value['trackDataJSON']['artist'].'</p>
                                                <span>'.$value['cost'].' SS Token</span>
                                            </div>
                                        </div></a>
                                    </div>';
                            }
                        ?>
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