<?php include "../include/header_register.html"; ?> 

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="../vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="../Login/login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					
					<!--<img src="../vendors/images/register-page-img.png" alt=""> -->
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard" action="check_register.php" method="post" name="registerform" onsubmit="return validateForm()">
							<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address*</label>
											<div class="col-sm-8">
												<input type="email" class="form-control" id="email" name="email">
												<div id="email" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="username"name="username">
												<div id="username" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" id="password"name="password">
												<div id="password" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" id="conpassword"name="conpassword">
												<div id="conpassword" class="text-danger"></div>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">First Name*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="fname"name="fname">
												<div id="fname" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Last Name*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="lname"name="lname">
												<div id="lname" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="female">Female</label>
												</div>
												<div id="gender" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Phone Number*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="phonenumber"name="phonenumber">
												<div id="phonenumber" class="text-danger"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Address</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="address"name="address">
												<div id="address" class="text-danger"></div>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
									<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Email Address</div>
													<div class="col-sm-8">example@abc.com</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Username</div>
													<div class="col-sm-8">Example</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Password</div>
													<div class="col-sm-8">.....000</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Full Name</div>
													<div class="col-sm-8">john smith</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Location</div>
													<div class="col-sm-8">123 Example</div>
												</div>
											</li>
										</ul>
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
										</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="../vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>

	<script>
    function validateForm() {
        var email   	= document.forms["registerform"]["email"].value;
        var username    = document.forms["registerform"]["username"].value;
        var password    = document.forms["registerform"]["password"].value;
        var conpassword = document.forms["registerform"]["conpassword"].value;
		var fname  	 	= document.forms["registerform"]["fname"].value;
		var lname  	 	= document.forms["registerform"]["lname"].value;
		var gender  	= document.forms["registerform"]["gender"].value;
		var phonenumber = document.forms["registerform"]["phonenumber"].value;
		var address 	= document.forms["registerform"]["address"].value;

		if (email == "") {
        document.getElementById("email").innerHTML="<b> Please Your Enter Email ";
        document.forms["registerform"]["email"].value ="";
        document.forms["registerform"]["email"].focus();
    return false;      
    }else{
    document.getElementById("email").innerHTML="";
  }

        if (username.length<5) {
        document.getElementById("username").innerHTML="<b> username more 5 letters";
        document.forms["registerform"]["username"].value ="";
        document.forms["registerform"]["username"].focus();
    return false;
  }else{
    document.getElementById("username").innerHTML="";
  }

        if (password.length<8) {
        document.getElementById("password").innerHTML="<b> password more 8 letters";
        document.forms["registerform"]["password"].value ="";
        document.forms["registerform"]["password"].focus();
    return false;
  }else{
    document.getElementById("password").innerHTML="";
  }

  		if (conpassword.length<8) {
        document.getElementById("conpassword").innerHTML="<b> password more 8 letters";
        document.forms["registerform"]["conpassword"].value ="";
        document.forms["registerform"]["conpassword"].focus();
    return false;
  }else{
    document.getElementById("conpassword").innerHTML="";
  }

  		if (password != conpassword) {
        document.getElementById("conpassword").innerHTML="<b> Passwords do not match";
        document.forms["registerform"]["password"].value ="";
        document.forms["registerform"]["conpassword"].value ="";
        document.forms["registerform"]["password"].focus();
    return false;
  }else{
    document.getElementById("conpassword").innerHTML="";
  }

  		if (fname == "") {
        document.getElementById("fname").innerHTML="<b> Please Your Enter full name ";
        document.forms["registerform"]["fname"].value ="";
        document.forms["registerform"]["fname"].focus();
    return false;      
    }else{
    document.getElementById("fname").innerHTML="";
  }
  if (lname == "") {
        document.getElementById("lname").innerHTML="<b> Please Your Enter Last name ";
        document.forms["registerform"]["lname"].value ="";
        document.forms["registerform"]["lname"].focus();
    return false;      
    }else{
    document.getElementById("lname").innerHTML="";
  }
  if (gender == "") {
        document.getElementById("gender").innerHTML="<b> Please Your select gender ";
        document.forms["registerform"]["gender"].value ="";
        document.forms["registerform"]["gender"].focus();
    return false;      
    }else{
    document.getElementById("gender").innerHTML="";
  }
  		if (phonenumber == "") {
        document.getElementById("phonenumber").innerHTML="<b> Please Your Enter Phone Number ";
        document.forms["registerform"]["phonenumber"].value ="";
        document.forms["registerform"]["phonenumber"].focus();
    return false;      
    }else{
    document.getElementById("phonenumber").innerHTML="";
  }

  		if (address == "") {
        document.getElementById("address").innerHTML="<b> Please Your Enter Address ";
        document.forms["registerform"]["address"].value ="";
        document.forms["registerform"]["address"].focus();
    return false;      
    }else{
    document.getElementById("address").innerHTML="";
  }
    }
  </script>

<?php include "../include/footer_register.html"; ?> 
