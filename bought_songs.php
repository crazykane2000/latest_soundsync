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
<?php $trackId = $_REQUEST['track_id']; $data = get_track_details("13.233.7.230", $trackId); //print_r($data);
    $data = json_decode($data,true);
    //print_r($data);
 ?>
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Description of Track : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
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
                    <h1>My Purchased Tracks  </h1>                   
                </div>
               <div class="container-fluid">
                <?php see_status_3($_REQUEST); ?>
                 <div class="row">
                     
                     <div class="col-sm-12">
                       
                        <div class="album_inner_list">
                            <div class="album_list_wrapper">
                                <ul class="album_list_name">
                                    <li>#</li>
                                    <li>Genre Track</li>
                                    <li>Artist</li>
                                    <li>Writer</li>
                                    <li class="text-center">Costd</li>
                                    <li class="text-center">Date</li>
                                </ul>
                                <?php 
                                   
                                    $data = get_data_col("purchse_track", "buyer", $_SESSION['user']);
                                    //print_r($data);
                                    $i=1;
                                    foreach ($data as $key => $value) {
                                        $datar = get_track_details("13.233.7.230", $value['track_id'] );
                                        $track_id = $value['track_id'];
                                        //print_r($datar);
                                        $datar = json_decode($datar,true);
                                        $value = $datar;
                                        //print_r($value);

                                        $epoch = $value['timestamp']/1000000;
                                        echo ' <ul>
                                                <li ><a href="listen.php?track_id='.$track_id.'"><span class="play_no">'.$i.'</span></a></li>
                                                <li><a href="listen.php?track_id='.$track_id.'">'.$value['name'].'</a></li>
                                                <li ><a href="#" title="'.$value['address'].'"> '.substr($value['trackDataJSON']['artist'], 0,22).'</a></li>
                                                <li ><a href="listen.php?track_id='.$track_id.'"><span class="play_no">'.$value['trackDataJSON']['write'].'</span></a></li>
                                                <li class="text-center"><label class="label label-success">'.$value['cost'].'</label></li>
                                                <li class="text-center">
                                                    '.date("d-m-Y H:i:s", substr($epoch, 0, 10)).'
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
        </div>
        <!----Footer Start---->
       <?php include 'footer.php'; ?>

      

       
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
         $('.modal-backdrop').removeClass("modal-backdrop");
    </script>
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