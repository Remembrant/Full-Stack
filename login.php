

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		



		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="logIn.css">

		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Login</title>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag -------- -->

		<script defer src="script.js"></script>
	</head>
	<body>


		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               	</div>
				</div> 
				<?php echo isset($msg)?$msg:''; ?>
				<div class="main-login main-center">
					<form action="includes\signin.inc.php" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Student Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class='far'>&#xf2c2;</i></span>
									<input type="text" class="form-control" name="stud_num" id="stud_num"  placeholder="Enter your student numder" required/>
								</div>
							</div>
						</div>
	
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="uPass" id="uPass"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name = "signin-btn" class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Register</a>
				         </div>
					</form>
				</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>