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
			<div class="col-md-9 response_page">
				<div class="db-2 row">
					<div class="db-2-com db-2-main">
						<h4>RESPONSES</h4>
					</div>
					<div class="col-md-12 ress">
						<div class="tab" role="tabpanel">
			                <!-- Nav tabs -->
			                <ul class="nav nav-tabs db-tabs" role="tablist">
			                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">RENT</a></li>
			                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">SELL</a></li>
			                    
			                </ul>
			                <!-- Tab panes -->
			                <div class="tab-content tabs">
			                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
			                    	<div class="tab" role="tabpanel">
						                <!-- Nav tabs -->
								         <ul class="nav nav-tabs" role="tablist">
								            <li role="presentation" class="active"><a href="#Section3" aria-controls="home" role="tab" data-toggle="tab">overview</a></li>
											<li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab">Individual</a></li>
											                   
								         </ul>
			                 			<!-- Tab panes -->
										<div class="tab-content tabs rep_tab">
											<div role="tabpanel" class="tab-pane fade in active" id="Section3">
												
													<div class="main_ads_search">
							                    		<div class="col-md-2 col-xs-4">
							                    			<label> Filter by :</label>
							                    		</div>
								                       	<div class="col-md-2 col-xs-6 ">
								                        	<div class="select">
								                        		<select name="filter">
								                        			<option>Live</option>
								                        			<option>Expired</option>
								                        			<option>Disable</option>
								                        		</select>
								                        	</div>
														</div>	
								                    </div>
												
							            		<div class="table-responsive">          
										 		 	<table class="table">
										   				<thead>
													  	    <tr>
													        <th>Property type</th>
													        <th>Total Responses</th>
													        <th>status</th>
													      </tr>
													    </thead>
													    <tbody>
													      <tr>
													        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
													        <td>2</td>
													        <td>live</td>
													        
													      </tr>
													    </tbody>
										  			</table>
										  		</div>
											</div>

										<div role="tabpanel" class="tab-pane fade" id="Section4">
											<div class="main_ads_search">
							                    <div class="col-md-4 pull-right">
													<div class="db-input">
														<input class="form-control" type="text" placeholder="search mobile no." value="">
														<i class="fa fa-search" aria-hidden="true">
														</i>
													</div>	
												</div>
								            </div>
												
										   <div class="table-responsive">          
											  <table class="table">
											    <thead>
											      <tr>
											        <th>Date</th>
											        <th>Mobile no</th>
											        <th>Name</th>
											        <th>Email id</th>
											        <th>type</th>
											        <th>Budget</th>
											        <th>Ad title</th>

											      </tr>
											    </thead>
											    <tbody>
											      <tr>
											        <td>2018-aug-01</td>
											        <td>+91 9129678238</td>
											        <td>chanayka</td>
											        <td>chanayka35@gmail.com</td>
											        <td>direct</td>
											        <td>9000</td>
											        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
											      </tr>
											      <tr>
											        <td>2018-aug-01</td>
											        <td>+91 9129678238</td>
											        <td>chanayka</td>
											        <td>chanayka35@gmail.com</td>
											        <td>direct</td>
											        <td>9000</td>
											        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
											      </tr>
											    </tbody>
											  </table>
											  </div>
										</div>     
									  </div>
									</div>   
			                   </div>
			                   <div role="tabpanel" class="tab-pane fade" id="Section2">
									
									<div class="tab" role="tabpanel">
						                <!-- Nav tabs -->
								         <ul class="nav nav-tabs" role="tablist">
								            <li role="presentation" class="active"><a href="#Section5" aria-controls="home" role="tab" data-toggle="tab">overview</a></li>
											<li role="presentation"><a href="#Section6" aria-controls="profile" role="tab" data-toggle="tab">Individual</a></li>
											                   
								         </ul>
			                 			<!-- Tab panes -->
										<div class="tab-content tabs rep_tab">
											<div role="tabpanel" class="tab-pane fade in active" id="Section5">
												<div class="main_ads_search">
							                    		<div class="col-md-2 col-xs-4">
							                    			<label> Filter by :</label>
							                    		</div>
								                       	<div class="col-md-2 col-xs-6">
								                        	<div class="select">
								                        		<select name="filter">
								                        			<option>Live</option>
								                        			<option>Expired</option>
								                        			<option>Disable</option>
								                        		</select>
								                        	</div>
														</div>	
								                    </div>
						            		<div class="table-responsive">          
									 		 	<table class="table">
									   				<thead>
												  	    <tr>
												        <th>Property type</th>
												        <th>Total Responses</th>
												        <th>status</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
												        <td>1</td>
												        <td>live</td>
												        
												      </tr>
												      <tr>
												        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
												        <td>1</td>
												        <td>live</td>
												        
												      </tr>
												    </tbody>
									  			</table>
									  		</div>
											</div>

										<div role="tabpanel" class="tab-pane fade" id="Section6">
											<div class="main_ads_search">
							                    <div class="col-md-4 pull-right">
													<div class="db-input">
														<input class="form-control" type="text" placeholder="search mobile no." value="">
														<i class="fa fa-search" aria-hidden="true">
														</i>
													</div>	
												</div>
								            </div>
										   <div class="table-responsive">          
											  <table class="table">
											    <thead>
											      <tr>
											        <th>Date</th>
											        <th>Mobile no</th>
											        <th>Name</th>
											        <th>Email id</th>
											        <th>type</th>
											        <th>Budget</th>
											        <th>Ad title</th>

											      </tr>
											    </thead>
											    <tbody>
											      <tr>
											        <td>2018-aug-01</td>
											        <td>+91 9129678238</td>
											        <td>chanayka</td>
											        <td>chanayka35@gmail.com</td>
											        <td>direct</td>
											        <td>9000</td>
											        <td>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</td>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	require_once "footer.php";


?>