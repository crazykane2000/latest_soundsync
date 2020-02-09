<?php  session_start();
	include 'configuration_function.php';
	include 'connection.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }

    $pdo = new PDO($dsn, $user, $pass, $opt);

    $data = buy_track("13.233.7.230", $_REQUEST['buyer'], $_REQUEST['track_id']);
   // echo $data;
   
    $table = "purchse_track";
    $key_list = "`track_id`, `cost`, `buyer`";        
    
    $value_list  = "'".$_REQUEST['track_id']."',";
    $value_list  .= "'".$_REQUEST['cost']."',";
    $value_list  .= "'".$_REQUEST['buyer']."'";
    
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:bought_songs.php?choice=success&value=Song has been Bought Successfully Added Successfully');              
    exit();

 ?>