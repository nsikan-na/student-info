<?php

print'
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div style=\'border:1px solid white;background-color:rgba(0, 0, 0,.7);width:75%; border-radius:25px ;margin:auto; padding-top:2%;\'>
			<a href="demo.php" >(Click here to skip login)<br>(username=demo, password=demo)</a>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<div style=\'background-color:red;color:white;position: absolute;top:0%;margin:0 auto;\' id=\'myAlert\' class=\'alert alert-danger collapse\'>
Please provide valid credentials! </div>
		      	<h1 class="mb-4 text-center" style="padding-top:15%;">Sign Up</h1>
		      	<form action="register.php" class="signin-form" method="POST">
                  <div class="form-group">
                  <label for="email">Email Address</label>
	              <input id="email" name="email" type="email" class="myFix form-control" value="'; 
				  if (isset($_POST['email'])){
					echo $_POST['email'];
				  } 
				  print'"  class="form-control myLoginInput"  required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
		      		<div class="form-group">
					  <label for="username">Username</label>
		      			<input type="text" id="username" name="username" class="myFix form-control" value="'; 
						  if (isset($_POST['username'])){
							echo $_POST['username'];
						  } 
						  print'"class="form-control myLoginInput" required>
		      		</div>
	            <div class="form-group">
                <label for="password">Password</label>
	              <input id="password" type="password" name="password" class="form-control myLoginInput myFix"  required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
                <label for="confirmPass">Confirm Password</label>
	              <input id="confirmPass" name="confirmPass" type="password" class="form-control myLoginInput myFix"  required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btnSubmit  px-3 myButton">Sign Up</button><a style="padding-left:3%;" href=\'index.php\'>Cancel</a>
	            </div>
                
                <a href="login.php">Already have an account? Sign In!</a><br><br>
	          </form>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section> ';
?>