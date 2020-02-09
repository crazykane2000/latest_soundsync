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
    
    $curl = curl_init();
    $buyer = $_REQUEST['buyer'];
    $amount = $_REQUEST['amount'];
    curl_setopt_array($curl, array(
      CURLOPT_PORT => "3001",
      CURLOPT_URL => "http://13.233.7.230:3001/api/dataManager/add/balance",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{  \n   \"_email\":\"$buyer\",\n   \"_amount\":\"$amount\"\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Postman-Token: b5673001-fe7a-4379-861d-59bb77238a37",
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      header('Location:wallet.php?choice=error&value='."cURL Error #:" . $err);
      exit();
    } else {
      header('Location:wallet.php?choice=success&value=Wallet Balance Recharged, your Tx is : '.$response); 
      exit();
    }
  ?>