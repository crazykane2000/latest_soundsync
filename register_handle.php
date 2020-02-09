<?php include 'configuration_function.php';
	$host = $api_host;
	$name = $_REQUEST['name'];
	$last_name = $_REQUEST['last_name'];
	$company_name = $_REQUEST['company_name'];
	$role = $_REQUEST['role'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];

	$check = check_user_exist($host,$email);
	if($check==1){
		header('Location:register.php?choice=error&value=same name user already exist, use different email id');
		exit();
	}
	else{
		echo 'blockchain me tera sikka chalega bhau';
		$blockchain_data = register_api($host, $name, $last_name, $company_name, $role, $email, $pass);
		header('Location:register.php?choice=success&value=You are Now Registered, Your Transaction Id is : '.$blockchain_data);
		exit();
	}
	
 ?>