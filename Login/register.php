<?php include "../include/header_login.html"; 
?> 

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="../Login/login.php">
					<img src="../vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li> <i class="dw dw-login"> </i><a class="text-dark" href="../Login/login.php">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 col-lg-12">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-dark">Register To DeskApp</h2>
						</div>
						<form action="../sql/check_register.php" method="post"  name="loginform" onsubmit="return validateForm()">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Email" name="email" id="email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="username" name="username" id="username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Frist name" name="fname" id="fname">
								<div class="input-group-append custom">
								</div>
								<input type="text" class="form-control form-control-lg" placeholder="Last name" name="lname" id="lname">
								<div class="input-group-append custom">	
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" id="password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Re - Password" name="re_password" id="re_password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-password"></i></span>
								</div>
							</div>
							<div class="form-group row align-items-center">
                                            <div class="col-sm-10">
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input type="radio" id="male" name="gender" class="custom-control-input" value="male">
                                                    <label class="custom-control-label" for="male"><i class="icon-copy fa fa-mars" aria-hidden="true"></i>  Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                                                    <label class="custom-control-label" for="female"><i class="icon-copy fa fa-venus" aria-hidden="true"></i> Female</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Phone number" name="phone_number" id="phone_number">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-phone-call"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Address" name="address" id="address">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-map"></i></span>
								</div>
							</div>
							<div class="row pb-30">
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<button class="btn btn-dark btn-lg btn-block">REGISTER</button>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-dark btn-lg btn-block" href="register.php">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- form -->
			</div>
		</div>
	</div>
	<script>
		function validateForm() {
    // alert ("form call js");
    var x = document.forms["loginform"]["u_username"].value;
    var y = document.forms["loginform"]["u_password"].value;
    if (x == "") {
        document.getElementById("u_username").innerHTML = "<b> Please Your Enter username ";
        document.forms["loginform"]["u_username"].value = "";
        document.forms["loginform"]["u_username"].focus();
        return false;
    } else {
        document.getElementById("u_username").innerHTML = "";
    }
    if (y == "") {
        document.getElementById("u_password").innerHTML = "<b> Please Your Enter password ";
        document.forms["loginform"]["u_password"].value = "";
        document.forms["loginform"]["u_password"].focus();
        return false;
    } else {
        document.getElementById("u_password").innerHTML = "";
    }

}
	</script>
<?php include "../include/footer_login.html"; ?> 