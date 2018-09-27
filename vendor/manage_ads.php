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
						<h4>MANAGE ADS</h4>
					</div>
					 <div class="col-md-12 ads">
			            <div class="tab" role="tabpanel">
			                <!-- Nav tabs -->
			                <ul class="nav nav-tabs db-tabs" role="tablist">
			                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">RENT</a></li>
			                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">SELL</a></li>
			                    
			                </ul>
			                <!-- Tab panes -->
			                <div class="tab-content tabs">
			                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
			                    	<div class="main_ads_search">
			                    		<div class="col-md-2 col-xs-4">
			                    			<label> Filter by :</label>
			                    		</div>
				                       	<div class="col-md-2 col-xs-6">
				                        	<div class="select">
				                        		<select class="filter">
				                        			<option>Live</option>
				                        			<option>Expired</option>
				                        			<option>Disable</option>
				                        		</select>
				                        	</div>
										</div>	
										<div class="col-md-4 pull-right">
											<div class="db-input">
												<input class="form-control" type="text" placeholder="search Ads id" value="">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>	
										</div>		                       	
				                    </div>
				                    <!-- <div class="col-md-12"> -->
				                    	<div class="table-responsive db_ads_table">          
										  <table class="table">
										    <thead>
										      <tr>
										        <th>Property title</th>
										        <th>Total responses</th>
										        <th>Status</th>
										        <th>&nbsp;</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>
										        	<a href=#>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</a>
										        	<div class="db_date-info">
				                                        <p class="date"><b>Start Dt: </b>31, Jul 18</p>
				                                        <p class="date"><b>End Dt: </b>29, Sep 18 </p>
				                                        <p><b>Ad ID: </b>4296928</p>
				                                    </div>
										        </td>
										        <td>0</td>
										        <td>Live</td>
										        <td>
										        	<ul>
										        		<li><a href=#><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										        		<li><a><i class="fa fa-trash-o"></i></a></li>
										        		<li><a><i class="fa fa-edit"></i></a></li>
										        	</ul>
										        </td>
										        
										      </tr>
										      <tr>
										        <td>
										        	<a href=#>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</a>
										        	<div class="db_date-info">
				                                        <p class="date"><b>Start Dt: </b>31, Jul 18</p>
				                                        <p class="date"><b>End Dt: </b>29, Sep 18 </p>
				                                        <p><b>Ad ID: </b>4296928</p>
				                                    </div>
										        </td>
										        <td>0</td>
										        <td>Live</td>
										        <td>
										        	<ul>
										        		<li><a href=#><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										        		<li><a><i class="fa fa-trash-o"></i></a></li>
										        		<li><a><i class="fa fa-edit"></i></a></li>
										        	</ul>
										        </td>
										        
										      </tr>
										    </tbody>
										  </table>
									  </div>
			                    </div>
			                    <div role="tabpanel" class="tab-pane fade" id="Section2">
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
										<div class="col-md-4 pull-right">
											<div class="db-inputt">
												<input class="form-control" type="text" placeholder="search Ads id" value="">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>	
										</div>		                       	
				                    </div>
				                    <!-- <div class="col-md-12"> -->
				                    	<div class="table-responsive db_ads_table">          
										  <table class="table">
										    <thead>
										      <tr>
										        <th>Property title</th>
										        <th>Total responses</th>
										        <th>Status</th>
										        <th>&nbsp;</th>
										        
										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>
										        	<a href=#>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</a>
										        	<div class="db_date-info">
				                                        <p class="date"><b>Start Dt: </b>31, Jul 18</p>
				                                        <p class="date"><b>End Dt: </b>29, Sep 18 </p>
				                                        <p><b>Ad ID: </b>4296928</p>
				                                    </div>
										        </td>
										        <td>0</td>
										        <td>Live</td>
										        <td>
										        	<ul>
										        		<li><a href=#><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										        		<li><a><i class="fa fa-trash-o"></i></a></li>
										        		<li><a><i class="fa fa-edit"></i></a></li>
										        	</ul>
										        </td>
										        
										      </tr>
										      <tr>
										        <td>
										        	<a href=#>200 sqt- 1BHK Apartment flat for Resale near vrindhavan at thane.</a>
										        	<div class="db_date-info">
				                                        <p class="date"><b>Start Dt: </b>31, Jul 18</p>
				                                        <p class="date"><b>End Dt: </b>29, Sep 18 </p>
				                                        <p><b>Ad ID: </b>4296928</p>
				                                    </div>
										        </td>
										        <td>0</td>
										        <td>Live</td>
										        <td>
										        	<ul>
										        		<li><a href=#><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										        		<li><a><i class="fa fa-trash-o"></i></a></li>
										        		<li><a><i class="fa fa-edit"></i></a></li>
										        	</ul>
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
		</div>
	</div>
</section>

<?php
		require_once "footer.php";
?>