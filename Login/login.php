<?php include "../include/header_login.html"; 
?> 
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="../vendors/images/logoheader2.png" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="register.php">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="../vendors/images/login.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">LOGIN TO THX COM</h2>
						</div>
						<form action="../sql/check_login.php" method="post"  name="loginform" onsubmit="return validateForm()">

						<div id="u_username" class="text-danger"></div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Username" name="u_username" id="u_username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							
							<div id="u_password" class="text-danger"></div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********" name="u_password" id="u_password"> 
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>

							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6" >
									<div class="forgot-password"><a href="">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
								
										<button class="btn btn-primary btn-lg btn-block"> Sign In</button>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.php">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
    function validateForm() {
        // alert ("form call js");
        var x = document.forms["loginform"]["u_username"].value;
        var y = document.forms["loginform"]["u_password"].value;
        if (x == "") {
        document.getElementById("u_username").innerHTML="<b> กรุณากรอก username ";
        document.forms["loginform"]["u_username"].value ="";
        document.forms["loginform"]["u_username"].focus();
    return false;      
    }else{
    document.getElementById("u_username").innerHTML="";
  }
  	if (y == "") {
        document.getElementById("u_password").innerHTML="<b> กรุณากรอก password ";
        document.forms["loginform"]["u_password"].value ="";
        document.forms["loginform"]["u_password"].focus();
    return false;      
    }else{
    document.getElementById("u_password").innerHTML="";
  }
      
    }
<?php include "../include/footer_login.html"; ?> 