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
			<div class="col-md-9">
				<div class="row db-2" >
					<div class="db-2-com db-2-main">
						<h4>DASHBOARD</h4>
					</div>
					<div class="col-md-12 padd">
						<div class="col-md-4">
							<div class="db-2-main-1 db_name">
								<p>Name : <span>kajal yerunkar</span></p>
								<p>Mobile : <span>1234567890</span></p>
								<p>Email : <span>emailid@gmail.com</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="db-2-main-1">
								<div class="response_title">
									<span class="res">Responses</span>
								</div>
								<div class="res_count">
									<ul>
										<li>
											06<br> <span>Total</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="db-2-main-1">
								<div class="response_title">
									<span class="res">Lifetime Ads Summary</span>
								</div>
								<div class="ads_count">
									<ul>
										<li>
											01<br> <span>Total</span>
										</li>
									</ul>
									<a class="ads_post_btn" href="../rent.php">post Ads</a>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-12 padd">
						<div class="db-list-com tz-db-table">
							<div class="ds-boar-title">
								<h2>Property List</h2>
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
					<div class="col-md-12 padd">
						<div class="db-list-com">
							<div class="ds-boar-title">
								<h2>Reviews</h2>
								<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
							</div>
							<div class="tz-messs row">
							<ul class="review_ul">
								<li class="view-rev">
									<div class="col-md-1">
										<p>
											<img src="../images/1.png" class="img-responsive">
										</p>
									</div>
									<div class="col-md-11">
										<h5>jessica
											<span>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
											</span><br>
											
										</h5>
										<p>Cras viverra ligula ut sem tincidunt, et volutpat dui facilisis. Nulla congue arcu vitae lectus cursus finibus. Pellentesque consequat ante eu elit tincidunt pharetra.</p>
									</div>
								</li>
								<li class="view-rev">
									<div class="col-md-1">
										<p>
											<img src="../images/1.png" class="img-responsive">
										</p>
									</div>
									<div class="col-md-11">
										<h5>jessica
											<span>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
											</span><br>
											
										</h5>
										<p>Cras viverra ligula ut sem tincidunt, et volutpat dui facilisis. Nulla congue arcu vitae lectus cursus finibus. Pellentesque consequat ante eu elit tincidunt pharetra.</p>
									</div>
								</li>
								<li class="view-rev">
									<div class="col-md-1">
										<p>
											<img src="../images/1.png" class="img-responsive">
										</p>
									</div>
									<div class="col-md-11">
										<h5>jessica
											<span>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
											</span><br>
											
										</h5>
										<p>Cras viverra ligula ut sem tincidunt, et volutpat dui facilisis. Nulla congue arcu vitae lectus cursus finibus. Pellentesque consequat ante eu elit tincidunt pharetra.</p>
									</div>
								</li>
							</ul>
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