<?php
	 require_once "header.php";
?>
<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">DASHBOARD</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current">DASHBOARD</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- DASHBOARD -->
<section class="dashboard">
	<div class="container">
		<div class="row">
			<!-- LEFT SECTION -->
			<?php 

				require_once "section.php";
			?>
			<!-- RIGHT SECTION -->
			<div class="col-md-9 manage_ads">
				<div class="db-2 row">
					<div class="db-2-com db-2-main">
						<h4>PROFILE</h4>
					</div>
					<div class="col-md-12 padd">
						<div class="db-list-com">
							<div class="ds-boar-title">
								<h2>Profile</h2>
								<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
							</div>
							<table class="responsive-table Profile_table">
								<tbody>
								<tr>
									<td>User Name</td>
									<td>:</td>
									<td>Roydon vargese</td>
								</tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td>mypassword</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>emailid@gmail.com</td>
								</tr>
								<tr>
									<td>Mobile</td>
									<td>:</td>
									<td>+91 1234567890</td>
								</tr>
								<tr>
									<td>Date of birth</td>
									<td>:</td>
									<td>03 Jun 1990</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>male</td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td><span class="db-done">Active</span> </td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
								</tr>
								<tr>
									<td>primary Account</td>
									<td>:</td>
									<td>emailid@gmail.com</td>
								</tr>
								</tbody>
							</table>
							<div class="edit_pro">
								<a href="edit_pro.php">Edit My Profile</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	
		require_once "footer.php";

?>