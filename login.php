<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class=" col-md-6  " style="background: #659DBD;">
				<div class="text-left mb-0 mt-3">
					<h1 style="font-size: 350%;" class="text-black">Virtual Classroom</h1>
				</div>	
				<div class="text-left mb-0 mt-2">
					<h2  class="text-white">A smart solution for Lockdown.</h2>
				</div>
				<hr style="border:1px solid black">



				<br><br>
				<p>The Virtual Classroom website is an online platform where teachers and students of any institution can connect to communicate and collaborate and it is ideal in distance learning situations. The website is developed by a Bangladeshi student Khadem Mohammad Asif-uz-zaman in 2020. The idea to make this website is from covid-19 pandemic situation when all institutions were closed and everyone needed to maintain social distancing. It’s his first website to solve a real-world problem.</p>
				<br>
				<h5>To know more about developer, visit :</h5>
				<a href="https://github.com/CSE-Asif"><img style="height:50px;width:50px;" src="https://image.flaticon.com/icons/png/512/37/37318.png" alt="Github"></a>
				<a href="https://www.facebook.com/asif.sami.359"><img style="height:70px;width:70px;" src="https://www.shareicon.net/data/2048x2048/2016/07/13/606432_facebook_2048x2048.png" alt="Github"></a>
				<a href="https://cse-asif.github.io/asif/"><img style="height:50px;width:50px;" src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="Github"></a>
					<p style="position:absolute;bottom:0;"><b> &copy;2020 Asif.  All rights reserved.</b><p>
			</div>

			<div class="col-lg-6 col-md-6 infinity-form-container">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">

					<div class="text-center mb-3 mt-5">
						<h1 style="font-family: 'Pacifico', cursive;" class="text-white">Virtual Classroom</h1>
					</div>
					<div class="text-center mb-4">
			      		<h4>Login into your account</h4>
			    	</div>
					
				
				
				
				<form action="validation.php" method="post" class="px-3">
						<div class="form-input">
							<span><i class="fa fa-mobile" aria-hidden="true"></i></span>
							<input type="text" class="phn" name="phone" placeholder="Phone Number" required id="m1">
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" class="pass" name="password" placeholder="Password" required>
						</div>
						
			      <div class="mb-3"> 
							<button type="submit" value="Login"  onclick="f1()" class="btn btn-block">Login</button>
	
					</div>
					<div class="text-center mb-5 text-white">Don't have an account? 
						<a class="register-link" href="register.php">Register here</a>
				 	</div>
						
						
				</form>



					<div class="text-center mb-2">
						<div class="text-center mb-2 text-white">Find us on</div>
								   
						
							<a href="https://www.facebook.com/asif.sami.359" class="btn btn-social ">facebook</a>
   
							<a href="https://github.com/CSE-Asif" class="btn btn-social ">github</a>
   
							<a href="https://cse-asif.github.io/asif/" class="btn btn-social ">Portfolio_Asif</a>
						</div>
					</div>					
			</div>
	
		</div>
	</div>	
</body>
</html>
