<?php include '../Include/admin_page/header_admin.php';
include '../Include/admin_page/menu_admin.php';
include '../sql/conn.php';
include '../sql/count_sql.php';

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

		<div class="title pb-20">
			<h2 class="h3 mb-0  text-danger"><i class="icon-copy dw dw-analytics-21" data-color="#0500FF"> </i> Dashboard Overview</h2>
		</div>
		<!-- ----------------------------------------------dashboard ---------------------------------------------------------------->
		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo $row['COUNT(id)'] ?></div>
							<div class="font-14 text-secondary weight-500">Customer</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf"><i class="icon-copy fa fa-user-circle"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">124,551</div>
							<div class="font-14 text-secondary weight-500">Personnel</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#F97807"><span class="icon-copy ion-android-contacts"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">50,000</div>
							<div class="font-14 text-secondary weight-500">Chef cooking</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#FFFFFF"><i class="icon-copy dw dw-chef" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">400+</div>
							<div class="font-14 text-secondary weight-500">Food ingredients</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#261BFE"><i class="icon-copy dw dw-fish" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">75</div>
							<div class="font-14 text-secondary weight-500">Food menu</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#F31212"><i class="icon-copy dw dw-pizza"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">124,551</div>
							<div class="font-14 text-secondary weight-500">Table</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#FFFE00"><span class="icon-copy dw dw-table"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">$50,000</div>
							<div class="font-14 text-secondary weight-500">Total sales</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06"><i class="icon-copy dw dw-money-2" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ----------------------------------------------dashboard ---------------------------------------------------------------->
		<div class="row pb-10">
			<div class="col-md-8 mb-20">
				<div class="card-box height-100-p pd-20">
					<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
						<div class="h5 mb-md-0">Hospital Activities</div>
						<div class="form-group mb-md-0">
							<select class="form-control form-control-sm selectpicker">
								<option value="">Last Week</option>
								<option value="">Last Month</option>
								<option value="">Last 6 Month</option>
								<option value="">Last 1 year</option>
							</select>
						</div>
					</div>
					<div id="activities-chart"></div>
				</div>
			</div>
			<div class="col-md-4 mb-20">
				<div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
					<div class="d-flex justify-content-between pb-20 text-white">
						<div class="icon h1 text-white">
							<div class="font-14 text-warning">Daily sales</div>
							<div class="font-50 weight-500">1865</div>
						</div>
						<div class="font-14 text-right">
							<div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
							<div class="font-12">BTH/Day</div>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end">
						<div class="text-white">
							<i class="dw dw-money-1" aria-hidden="true"></i>
						</div>
						<div class="max-width-150">
							<div id="appointment-chart"></div>
						</div>
					</div>
				</div>
				<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
					<div class="d-flex justify-content-between pb-20 text-white">
						<div class="icon h1 text-white">
							<i class="fa fa-stethoscope" aria-hidden="true"></i>
						</div>
						<div class="font-14 text-right">
							<div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
							<div class="font-12">Since last month</div>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end">
						<div class="text-white">
							<div class="font-14">Surgery</div>
							<div class="font-24 weight-500">250</div>
						</div>
						<div class="max-width-150">
							<div id="surgery-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-box pb-10">
			<div class="h5 pd-20 mb-0">Customer List</div>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus">Name</th>
						<th>Gender</th>
						<th>Weight</th>
						<th>Assigned Doctor</th>
						<th>Admit Date</th>
						<th>Disease</th>
						<th class="datatable-nosort">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
					?>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="../src/images/user.png" class="border-radius-100 shadow" width="40" height="40" alt="">
										</div>
										<div class="txt">
											<div class="weight-600"><?php echo $row['level'] ?></div>
										</div>
									</div>
								</td>
								<td><?php echo $row['username'] ?></td>
								<td><?php echo $row['fname'] ?></td>
								<td><?php echo $row['lname'] ?></td>
								<td><?php echo $row['gender'] ?></td>
								<td><?php echo $row['tel'] ?></td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
										<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
									</div>
								</td>
							</tr>
					<?php
						}
					} else {
						echo "0 results";
					}
					?>
				</tbody>
			</table>
		</div>

		<div class="title pb-20 pt-20">

		</div>


		<?php include '../Include/admin_page/footer_admin.php'; ?>