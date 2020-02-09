<?php session_start();
    include 'configuration_function.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }
    //print_r($_FILES);	

    $track = "";
    $thumb_nail = "default_thumb.jpg";
    $upload_success = 1;

    if(!file_exists($_FILES['track']['tmp_name']) || !is_uploaded_file($_FILES['track']['tmp_name'])) {
    	$upload_success = 0;
    	//header('Location:add_track.php?choice=error&value=Please Insert a Track, No Track Found');
    	exit();
	}
	else{
		$track = date("U").$_FILES['track']['name'];
		move_uploaded_file($_FILES['track']['tmp_name'], "tracks/".$track);
		$upload_success = 1;
	}

	if(!file_exists($_FILES['album_image']['tmp_name']) || !is_uploaded_file($_FILES['album_image']['tmp_name'])) {
    	$upload_success = 0;
    	//header('Location:add_track.php?choice=error&value=Please Insert a Album Image, No Image Found');
    	exit();
	}
	else{
		$thumb_nail = date("U").$_FILES['album_image']['name'];
		move_uploaded_file($_FILES['album_image']['tmp_name'], "tracks/".$thumb_nail);
		$upload_success = 1;
	}

	

	if ($upload_success==1) {
		//echo $track."<br/>".$thumb_nail."<hr/>";
		$curl = curl_init();
		$_songId = uniqid();
		$_name = $_REQUEST['track_name'];
		$_ownerEmail = $_SESSION['user'];
		$_cost = $_REQUEST['cost'];
		$_artist = "Kishan Sharma";
		$_write = "Sameer Santosha";
		$prim_genre = $_REQUEST['primary_category'];
		$sec_genre = $_REQUEST['secondary_category'];
		$ter_genre = $_REQUEST['tertiary_category'];
		$desc_music = $_REQUEST['description'];
		$sounds_like = $_REQUEST['sounds_like'];
		$mood = $_REQUEST['mood'];


		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://13.233.7.230:3001/api/dataManager/add/track",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{  \n   \"_songId\":\"$_songId\",\n   \"_name\":\"$_name\",\n   \"_ownerEmail\":\"$_ownerEmail\",\n   \"_cost\":\"$_cost\",\n   \"_trackDataJSON\":{  \n      \"artist\":\"$_artist\",\n      \"write\":\"$_write\", \n      \"thumb_nail\":\"$thumb_nail\", \n      \"track\":\"$track\", \n      \"genre\":{\n      \t\"Primary Genre\":\"$prim_genre\",\n      \t\"Secondary Genre\":\"$sec_genre\",\n      \t\"Tertiary Genre\":\"$ter_genre\"\n      },\n      \"comments\":{\n      \t\"Description of Music\":\"$desc_music\",\n      \t\"Sounds Like\":\"$sounds_like\",\n      \t\"Mood\":\"$mood\"\n      }\n   }\n}\n\n\n\n\n",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/json",
		    "Postman-Token: 68a44e43-a770-4edf-bea8-9699936e7ab7",
		    "cache-control: no-cache"
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
			//print_r($response);
		  header('Location:add_track.php?choice=success&value=Your Track Has been Added, tx are '.$response.' Please Check');
		  exit();
		}
	}

	else{
		header('Location:add_track.php?choice=error&value=Please Insert a Album Image, No Track Image  Found');
    	exit();
	}


    
  ?>
<?php
	// print_r($_REQUEST);
	// print_r($_FILES);
	// print_r($_SESSION);
?>