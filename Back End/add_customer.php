<?php include "../include/header_admin.php"; 
	  include "../include/menu_admin.php"; 
?> 
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h2 class="text-dark h2">Forms Add User</h2>
							<p class="mb-30"></p>
						</div>
					</div>
					<!--  Forms Start -->
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Name</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control" type="text" name="fname"  id="fname" placeholder="Your Name example 'Johnny'">
							</div>
						</div>
						<div class="form-group row"> 
							<label class="col-sm-12 col-md-3 col-form-label">Surname</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control"  type="text" name="lname"  id="lname" placeholder="Your Name example 'Brown'">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Email</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control"  type="email" name="email"  id="email" placeholder="user@example.com">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Gender</label>
							<div class="col-md-2 col-sm-6">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">Not specified</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Telephone</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control" placeholder="1-(111)-111-1111" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Password</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control" placeholder="password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Re-Password</label>
							<div class="col-md-6 col-sm-12">
								<input class="form-control" placeholder="re-password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Address</label>
							<div class="col-md-6 col-sm-12">
								<textarea class="form-control" placeholder="Your address" type="text" name="" id="" cols="20" rows="10"></textarea> 
							</div>
						</div>
						<div>
							<label class="col-sm-12 col-md-5 col-form-label">
						</label>
							<button type="submit" class="btn btn-success btn-lg">Add User</button>
							<button type="reset" class="btn btn-danger btn-lg">Reset</button>
						</div>

					</form>
						<!--  Forms End -->
	</div>								
<?php include "../include/footer_admin.php"; ?> 	
							