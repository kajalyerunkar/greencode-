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
						<h4>PROPERTY LIST</h4>
					</div>
					<div class="col-md-12 padd">
						<div class="db-list-com">
							<div class="ds-boar-title">
								<h2>All property Listing</h2>
								<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
							</div>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Property Name</th>
											<th>Date</th>
											
											<th>Status</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Friuli-Venezia Giulia</td>
											<td>12 May 2017</td>
											
											<td><span class="db-list-ststus">Active</span>
											</td>
											<td><a href="../property_post_sell.php" class="db-list-edit">Edit</a>
											</td>
										</tr>
										<tr>
											<td>Friuli-Venezia Giulia</td>
											<td>12 May 2017</td>
											
											<td><span class="db-list-ststus-na">Non-Active</span>
											</td>
											<td><a href="../property_post_rent.php" class="db-list-edit">Edit</a>
											</td>
										</tr>
										<tr>
											<td>Friuli-Venezia Giulia</td>
											<td>12 May 2017</td>
											
											<td><span class="db-list-ststus-na">Non-Active</span>
											</td>
											<td><a href="../property_post_sell.php" class="db-list-edit">Edit</a>
											</td>
										</tr>
									</tbody>
								</table>
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
