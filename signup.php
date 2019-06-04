<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
	<!-- set meta -->
	<meta charset="utf-8">
	<meta name="Thear Sophal & Meng Taingon" content="Lab 3">
	<meta name="NIPTICT" content="Computer Science">
	<meta name="Subject" content="Web Application">

	<style type="text/css">
		a:visited {
  			color: #FFC312;
		}
	</style>

</head>
<body >
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span>
							<img src="niptict.png" style="width: 120px; height: 120px;">
						</span>
					</div>
				</div>
				<div class="card-body">
					<!-- start form -->
					<form action="" method="POST">

						<!-- name -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>

							<input type="text" class="form-control" placeholder="Name" name="name">
							
						</div>

						<!-- sex -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
							</div>

							<input type="text" class="form-control" placeholder="Sex" name="sex">
						</div>


						<!-- email -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
							</div>

							<input type="email" class="form-control" placeholder="Emai" name="email">
						</div>

						<!-- password -->
						<div class="input-group form-group">

							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>

							<input type="password" class="form-control" placeholder="password" name="password">
						</div>
					

						<!-- Sign up button -->
						<div class="form-group">
							<input type="submit" value="Sign Up" class="btn float-right login_btn">
						</div>

					</form>
					<!-- end form -->


				</div>
			</div>
		</div>
	</div>


	<?php  
		
		$myfile = fopen("info.txt", "a") or die("Unable to open file!");
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		
		// ------------------------

		fwrite($myfile, $name)." ";
		fwrite($myfile, $sex)." ";
		fwrite($myfile, $email)." ";
		fwrite($myfile, $pwd)." ";		

		fclose($myfile);

	?>


</body>
</html>