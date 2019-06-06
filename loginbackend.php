<?php
	$uName = $_POST["hi"];
	$pwd = $_POST["bye"];
	$userList = file("info.txt");

	$check= 0;
	$name = "";
	$gender = "";
	$email = "";
	$password = "";

	foreach ($userList as $user) {
		$user_detail = explode(";", $user);
		

		if ($user_detail[0] == $uName && $user_detail[3] == $pwd){

			$check = 1;
			$name = $user_detail[0];
			$gender = $user_detail[1];
			$email = $user_detail[2];
			$password = $user_detail[3];
			break;
		}
	}
	echo "$name";
	echo "$gender";
	echo "$email";
	echo "$password";
	
	// if ($check == 1){
	// 	header("Location: https://www.google.com");
	// }

?>