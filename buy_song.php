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
    <title>Buy Songs Here : Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
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
        table tr td{
            padding: 10px !important;
            border-color: #2a3256 !important;
            color:#fff !important;
        }
    </style>
</head>

<body style="min-height: 800px !important;">
	<?php //include 'loader.php'; ?>
    <div class="ms_main_wrapper" >        
        <?php include 'sidebar.php'; ?>
        <div class="ms_content_wrapper padder_top80">
            <?php include 'header.php'; ?>
            <div style="padding: 18px;"></div>
            <?php 
                $data = get_track_details("13.233.7.230", $_REQUEST['track_id']); 
                $data = json_decode($data,TRUE);
                //print_r($data); 
                //array_reverse($data);
            ?>
          
          
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>Proceed For Payments Here</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_feature_slider swiper-container">
                    <div class="row">
                      <div class="col-lg-4">
                      <div style="padding: 20px;background-color: #1b2039;border-radius: 4px;height: 270px">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="tracks/<?php echo $data['trackDataJSON']['thumb_nail']; ?>" style="width: 90%" >
                          </div>
                          <div class="col-sm-6">
                            <br/>
                            <b style="color: #fff;"><?php echo $data['name']; ?></b>
                            <br/><b>Artist : </b> <?php echo $data['trackDataJSON']['artist']; ?>
                            <br/><b>Lyrics : </b> <?php echo $data['trackDataJSON']['write']; ?>
                            <br/><b>Mood : </b> <?php echo $data['trackDataJSON']['comments']['Mood']; ?>
                            <div style="margin:10px 0px;border-bottom: solid 1px #2b3256;"></div>
                            <b style="color: #fff;"> <span style="color: #3bc8e7">Price :</span> <?php echo $data['cost']; ?> SS Tokens</b>

                          </div>
                        </div>
                      </div>
                     </div>

                     <div class="col-lg-4">
                      <div style="padding: 20px;background-color: #1b2039;border-radius: 4px;height: 270px">
                        <div class="row">
                          <div class="col-sm-12">
                            <h2 style="font-size: 20px;">Wallet Balance : </h2>
                            <div style="margin:10px 0px;border-bottom: solid 1px #2b3256;"></div>
                            <?php 
                              $user_balance = get_balance("13.233.7.230", $_SESSION['user']); 
                              $user_balance = json_decode($user_balance,true);
                              //print_r($user_balance);
                            ?>
                            <br/>
                            
                            <h2 style="color: #fff;font-size: 40px;"><?php echo $user_balance['balance']; ?> SS Tokens</h2>
                            <p>These Tokens are not actual Money, These are just your wallet Credits, These must not be resembled with any Currency or Legal Money.</p>
                          </div>
                        </div>
                      </div>
                     </div>

                     <div class="col-lg-4">
                      <div style="padding: 20px;background-color: #1b2039;border-radius: 4px;height: 270px">
                        <div class="row">
                          <div class="col-sm-12">
                            <h2 style="font-size: 20px;">Proceed to Buy : </h2>
                            <div style="margin:10px 0px;border-bottom: solid 1px #2b3256;"></div>
                            <?php if ($user_balance['balance']>$data['cost']) {
                              echo '<div style="background-color:#709c3c;color:#fff;margin-bottom:10px;padding:0px 10px;">Sufficient Balance to Buy this Track</div>';
                            }else{
                              echo '<div style="background-color:#c13535;color:#fff;margin-bottom:10px;padding:0px 10px;">Insufficient Balance to Buy this Track</div>';
                            } ?>

                            <a href="wallet.php" style=""><button class="btn btn-lg" style="height: 40px;width:100%;font-size: 18px;background-color: #303a69;border-radius: 4px;color:#fff;margin-bottom:15px;">Add Balance to Wallet</button></a>
                            <form action="buy_track.php" method="POST">
                              <input type="hidden" name="track_id" value="<?php echo $_REQUEST['track_id']; ?>">
                              <input type="hidden" name="cost" value="<?php echo $data['cost']; ?>">
                              <input type="hidden" name="buyer" value="<?php echo $_SESSION['user']; ?>">
                              <?php $pdo = new PDO($dsn, $user, $pass, $opt);        
                                    try {
                                        $stmt = $pdo->prepare('SELECT * FROM `purchse_track` WHERE `track_id`="'.$_REQUEST['track_id'].'" AND `buyer`="'.$_SESSION['user'].'"  ORDER BY date DESC');
                                        //echo 'SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$value.'"  ORDER BY date DESC';
                                    } catch(PDOException $ex) {
                                        echo "An Error occured!"; 
                                        print_r($ex->getMessage());
                                    }
                                    $stmt->execute();
                                    $user = $stmt->rowCount();

                                    if ($user>0) {
                                      echo '<button class="btn btn-lg" type="button" style="height: 40px;width:100%;font-size: 18px;background-color: #2a382a;border-radius: 4px;color:#5c6f5c;">Already Bought</button>';
                                    }else{echo '<button class="btn btn-lg" type="submit" style="height: 40px;width:100%;font-size: 18px;background-color: #8bc34a;border-radius: 4px;color:#fff;">Buy the Track</button>';}
                               ?>
                              
                            </form>

                          </div>
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