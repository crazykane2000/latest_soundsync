<?php session_start();
 include 'configuration_function.php';
	$host = $api_host;
	$email = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	$check = login_user($host,$email);
	$response_data = json_decode($check,true);
	//print_r($response_data);
	if (is_array($response_data)) {
		//print_r($response_data);
		// if ($pass = $response_data['userDataJSON']['']) {
		// 	# code...
		// }

		//the username is valid
		$_SESSION['user'] = $email;
		$_SESSION['role'] = $role;
		header('Location:dashboard.php?choice=success&value=login Success, Welcome to dashboard');
		exit();


	}else{
		header('Location:index.php?choice=error&value=No user is registered with provided email id please login via different email id');
		exit();
	}
	// if($check==1){
	// 	header('Location:register.php?choice=error&value=same name user already exist, use different email id');
	// 	exit();
	// }
	// else{
	// 	echo 'blockchain me tera sikka chalega bhau';
	// 	$blockchain_data = register_api($host, $name, $last_name, $company_name, $role, $email, $pass);
	// 	header('Location:register.php?choice=success&value=You are Now Registered, Your Transaction Id is : '.$blockchain_data);
	// 	exit();
	// }
	
 ?>