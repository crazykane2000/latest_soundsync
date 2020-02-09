<?php session_start();
    include 'configuration_function.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }
  ?>
  <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Add Track : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
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
            <!---Recently Played Music--->
            <div class="ms_rcnt_slider">
                <div class="ms_heading">
                    <h1>Add Track</h1>
                </div>
                 <?php
                    see_status_3($_REQUEST);
                 ?>
               <div class="container-fluid">
                <form action="add_track_handle.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                     <div class="col-sm-6">
                        <div style="padding: 20px;">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="track_name" placeholder="Enter Track Name" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;color:#fff;">
                            </div>
                            <div style="padding: 10px;"></div>
                             <div class="ms_upload_box" style="width: 100%" >
                                <h2>Choose The Thumbnail to Upload</h2>
                                <img src="images/svg/upload.svg" alt="">
                                <div class="ms_upload_btn">
                                    <input type="file" required="" name="album_image" style="background-color: #3bc8e7;padding:10px;border-radius: 4px">
                                </div>
                                
                            </div>

                            <div style="padding: 20px;"></div>
                            <div style="padding:40px;border:solid 1px #2e375f;">
                                <div class="form-group">
                                    <select class="form-control" required="" name="primary_category" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;">
                                        <option>Select Primary Genre</option>
                                        <option>Absolute music</option>
                                        <option>Afrobeats</option>
                                        <option>Afroswing</option>
                                        <option>American fiddle</option>
                                        <option>Art music</option>
                                        <option>Afrobeat</option>
                                        <option>African hip hop</option>
                                        <option>African heavy metal</option>
                                        <option>AmaPiano</option>
                                        <option>Apala</option>
                                        <option>Benga</option>
                                        <option>Boomba</option>
                                        <option>Bongo Flava</option>
                                        <option>Bikutsi</option>
                                        <option>Bubblegum</option>
                                        <option>Cape Jazz</option>
                                        <option>Chimurenga</option>
                                        <option>Congolese rumba</option>
                                        <option>Coupé-Décalé</option>
                                        <option>Fuji</option>
                                        <option>Genge</option>
                                        <option>Highlife</option>
                                        <option>Hiplife</option>
                                        <option>Igbo highlife</option>
                                        <option>Igbo rap</option>
                                        <option>Isicathamiya</option>
                                        <option>Jit</option>
                                        <option>Jùjú</option>
                                        <option>Gospel</option>
                                        <option>Gqom</option>
                                        <option>Kadongo Kamu</option>
                                        <option>Kizomba</option>
                                        <option>Kuduro</option>
                                        <option>Kwaito</option>
                                        <option>Kwela</option>
                                        <option>Makossa</option>
                                        <option>Maloya</option>
                                        <option>Marabi</option>
                                        <option> Marrabenta</option>
                                        <option>Mbalax</option>
                                        <option>Mbaqanga</option>
                                        <option>Mbube</option>
                                        <option>Morna</option>
                                        <option>Ndombolo</option>
                                        <option>Ohangla</option>
                                        <option>Orutu</option>
                                        <option>Palm-wine</option>
                                        <option>Raï</option>
                                        <option>Sakara</option>
                                        <option>Sega</option>
                                        <option>Seggae</option>
                                        <option>Semba</option>
                                        <option>Shangaan electro</option>
                                        <option>Soukous</option>
                                        <option>Kwassa kwassa</option>
                                        <option>Taarab</option>
                                        <option>Zouglou</option>
                                    </select>
                                </div>
                                <div style="padding: 10px;"></div>
                                <div class="form-group">
                                    <select class="form-control" required="" name="secondary_category" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;">
                                        <option>Select Second Genre</option>
                                        <option>Absolute music</option>
                                        <option>Afrobeats</option>
                                        <option>Afroswing</option>
                                        <option>American fiddle</option>
                                        <option>Art music</option>
                                        <option>Afrobeat</option>
                                        <option>African hip hop</option>
                                        <option>African heavy metal</option>
                                        <option>AmaPiano</option>
                                        <option>Apala</option>
                                        <option>Benga</option>
                                        <option>Boomba</option>
                                        <option>Bongo Flava</option>
                                        <option>Bikutsi</option>
                                        <option>Bubblegum</option>
                                        <option>Cape Jazz</option>
                                        <option>Chimurenga</option>
                                        <option>Congolese rumba</option>
                                        <option>Coupé-Décalé</option>
                                        <option>Fuji</option>
                                        <option>Genge</option>
                                        <option>Highlife</option>
                                        <option>Hiplife</option>
                                        <option>Igbo highlife</option>
                                        <option>Igbo rap</option>
                                        <option>Isicathamiya</option>
                                        <option>Jit</option>
                                        <option>Jùjú</option>
                                        <option>Gospel</option>
                                        <option>Gqom</option>
                                        <option>Kadongo Kamu</option>
                                        <option>Kizomba</option>
                                        <option>Kuduro</option>
                                        <option>Kwaito</option>
                                        <option>Kwela</option>
                                        <option>Makossa</option>
                                        <option>Maloya</option>
                                        <option>Marabi</option>
                                        <option> Marrabenta</option>
                                        <option>Mbalax</option>
                                        <option>Mbaqanga</option>
                                        <option>Mbube</option>
                                        <option>Morna</option>
                                        <option>Ndombolo</option>
                                        <option>Ohangla</option>
                                        <option>Orutu</option>
                                        <option>Palm-wine</option>
                                        <option>Raï</option>
                                        <option>Sakara</option>
                                        <option>Sega</option>
                                        <option>Seggae</option>
                                        <option>Semba</option>
                                        <option>Shangaan electro</option>
                                        <option>Soukous</option>
                                        <option>Kwassa kwassa</option>
                                        <option>Taarab</option>
                                        <option>Zouglou</option>
                                    </select>
                                </div>

                                <div style="padding: 10px;"></div>
                                <div class="form-group">
                                    <select class="form-control" required="" name="tertiary_category" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;">
                                        <option>Select Tertiary Genre</option>
                                        <option>Absolute music</option>
                                        <option>Afrobeats</option>
                                        <option>Afroswing</option>
                                        <option>American fiddle</option>
                                        <option>Art music</option>
                                        <option>Afrobeat</option>
                                        <option>African hip hop</option>
                                        <option>African heavy metal</option>
                                        <option>AmaPiano</option>
                                        <option>Apala</option>
                                        <option>Benga</option>
                                        <option>Boomba</option>
                                        <option>Bongo Flava</option>
                                        <option>Bikutsi</option>
                                        <option>Bubblegum</option>
                                        <option>Cape Jazz</option>
                                        <option>Chimurenga</option>
                                        <option>Congolese rumba</option>
                                        <option>Coupé-Décalé</option>
                                        <option>Fuji</option>
                                        <option>Genge</option>
                                        <option>Highlife</option>
                                        <option>Hiplife</option>
                                        <option>Igbo highlife</option>
                                        <option>Igbo rap</option>
                                        <option>Isicathamiya</option>
                                        <option>Jit</option>
                                        <option>Jùjú</option>
                                        <option>Gospel</option>
                                        <option>Gqom</option>
                                        <option>Kadongo Kamu</option>
                                        <option>Kizomba</option>
                                        <option>Kuduro</option>
                                        <option>Kwaito</option>
                                        <option>Kwela</option>
                                        <option>Makossa</option>
                                        <option>Maloya</option>
                                        <option>Marabi</option>
                                        <option> Marrabenta</option>
                                        <option>Mbalax</option>
                                        <option>Mbaqanga</option>
                                        <option>Mbube</option>
                                        <option>Morna</option>
                                        <option>Ndombolo</option>
                                        <option>Ohangla</option>
                                        <option>Orutu</option>
                                        <option>Palm-wine</option>
                                        <option>Raï</option>
                                        <option>Sakara</option>
                                        <option>Sega</option>
                                        <option>Seggae</option>
                                        <option>Semba</option>
                                        <option>Shangaan electro</option>
                                        <option>Soukous</option>
                                        <option>Kwassa kwassa</option>
                                        <option>Taarab</option>
                                        <option>Zouglou</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                     </div>
                     <div class="col-sm-6">
                        <div style="padding: 20px;">
                            <div class="form-group">
                                <input type="text" class="form-control" required="" name="album_name" placeholder="Enter Album Name" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;color:#fff;">
                            </div>
                            <div style="padding: 10px;"></div>
                             <div class="ms_upload_box" style="width: 100%" >
                                <h2>Choose The Track to Upload</h2>
                                <img src="images/svg/upload.svg" alt="">
                                <div class="ms_upload_btn">
                                    <input type="file" name="track" required="" style="background-color: #3bc8e7;padding:10px;border-radius: 4px">
                                </div>
                               
                            </div>

                            <div style="padding: 20px;"></div>
                            <div style="padding:40px;border:solid 1px #2e375f;">
                               <div class="form-group">
                                     <input type="text" name="description" required="" class="form-control" placeholder="Description of Music" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;color:#fff;">
                                </div>
                                <div style="padding: 10px;"></div>
                                <div class="form-group">
                                     <input type="text" name="cost" required="" class="form-control" placeholder="Cost of This Song" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;color:#fff;">
                                </div>

                                <div style="padding: 10px;"></div>
                                <div class="form-group">
                                     <input type="text" name="sounds_like" required="" class="form-control" placeholder="Sounds Like" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;color:#fff;">
                                </div>

                                <div style="padding: 10px;"></div>
                                <div class="form-group">
                                    <select class="form-control" name="mood" required="" style="background-color: transparent;border:solid 1px #2e375f;border-radius: 0px;">
                                        <option>Select Mood</option>
                                        <option>Happy</option>
                                        <option>Sad</option>
                                        <option>Laugh</option>
                                        <option>Romance</option>
                                        <option>Fun</option>
                                        <option>Crawl</option>
                                        <option>Horror</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div style="padding: 20px;"></div>
                     <div class="col-sm-12">
                         <center><input type="submit" id="byu" class="ms_btn" style="width:60%;cursor: pointer;" value="Add Track Now"></center>
                     </div>
                 </div>
                </form>
                 
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#byu").click(function(){
                $(this).val("Please Wait while your File uploads");
            });
        });
    </script>
</body>

</html>