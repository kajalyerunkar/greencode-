<?php
	 require_once "header.php";
?>

<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">APARTMENT</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current">RENT/SELL</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- rent form -->
<div id="secmain" class="main" role="main">
	
	<div id="content-wrap">
		<div class="aside">
			
		</div>  
		<div class="content-inner">
			<div id="div-first-step" style="display:block">
				<div class="page-title">
					<h1>List your property in <span>2 simple steps</span></h1>
				</div>
				<form method="post" class="post-form">
					<div class="segment">
						<h4 class="AdvertiserTypeLabel">I am an
						<span id="usertype" class="required">*</span></h4>
						<div data-click="single" class="form-group">
							<div class="inner-group small">
								<ul id="ulAdvertiserType">
									<li data-value="owner" class="select">owner</li>
									<li data-value="builder">builder</li>
									<li data-value="broker">broker</li>
									<li data-value="promoters">promoters</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="five-colomns">
								<h4 style="margin-left: 12px;">Your contact information</h4>
								<div class="col-md-12 form-group">
									<input id="txtAdvertiserName" class="inputMaterial" type="text" value="" maxlength="50" placeholder="Name *">
									<span class="highlight"></span>
									<span class="bar"></span>
								</div>
								<div class="col-md-12 form-group">
									<input id="txtAdvertiserName" class="inputMaterial" type="text" value="" maxlength="50" placeholder="Emailid *">
									<span class="highlight"></span>
									<span class="bar"></span>
									
								</div>
								<div class="form-group">
				                    <div class="col-md-3 country-code">
					                    <label id='choose' for='options'>+91</label>
											<br clear='all' />
											<select id='options' size="10" style='display:none;'>
											    <option>IND(+91)</option>
											    <option>USA (+001)</option>
											    <option>Australia (+61)</option>
											    <option>Bahrain (+973)</option>
											    <option>China (+86)</option>
											    <option>Sri Lanka (+94)</option>
											    <option>South Africa (+27)</option>
											    <option>France (+33</option>
											    <option>Philippines (+63)</option>
											    <option>Germany (+49)</option>
											    <option>Indonesia (+62)</option>
											    <option>Malaysia (+60)</option>
											    <option>UAE (+971)</option>
											    <option>UK (+44)</option>
											    <option>Canada (+1)</option>
											    <option>Singapore (+65)</option>
											    <option>Hong Kong (+852)</option>
											    <option>kenya (+254)</option>
											    <option>Mexico (+52)</option>
											    <option>Philippines (+63)</option>
											    <option>Nepal (+977)</option>
											</select>
									</div>
									<div class="col-md-9 mobile-number">
										<input id="txtAdvertiserName" class="inputMaterial" type="text" value="" maxlength="50" required="" placeholder="mobile number *">
										<span class="highlight"></span>
										<span class="bar"></span>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="segment" id="ptype">
						<h4>
							property type 
							<span id="proptype" class="required"> *</span>
						</h4>
						<div data-click="single" class="inner-group">
            				<ul id="ulPropertyType" style="list-style:none;">
                				<li data-value="Residential" class="select">
                    						<a>Residential</a>
               					</li>
                				<li data-value="Commercial">
				                    <a>Commercial</a>
				                </li>
				            </ul>
				        </div>
					</div>
					<div class="segment last">
						<h4 id="category_header">I want to <span class="required">*</span></h4>
						<div class="form-group">
							
							<div>
							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation"><a href="#sell" aria-controls="home" role="tab" data-toggle="tab">sell</a></li>
							    <li role="presentation"><a href="#rent" aria-controls="profile" role="tab" data-toggle="tab">Rent</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="sell">
							    	<div data-click="single" class="inner-group">                  
					                    <ul id="ulSubCategory" style="display: block;padding-left:0px;">
					                    	<li data-value="Apartments / Flats" class="select"><a>Apartments / Flats</a></li>
					                    	<li data-value="High Rise Apartment"><a>High Rise Apartment</a></li>
					                    	<li data-value="Builder Floor"><a>Builder Floor</a></li>
					                    	<li data-value="Villas"><a>Villas/</a></li>
					                    	<li data-value="Row House"><a>Row House</a></li>
					                    	<li data-value="Independent House"><a>Independent House</a></li>
					                    	<li data-value="Studio Apartment"><a>Studio Apartment</a></li>
					                    	<li data-value="Duplex Apartment"><a>Duplex Apartment</a></li>
					                    	<li data-value="Condos"><a>Condos</a></li>
					                    	<li data-value="Service Apartment"><a>Penthouse Apartment</a></li>
					                    	<li data-value="Penthouse Apartment"><a>Beach House</a></li>
					                    	<li data-value="Guest House"><a>Farm House</a></li>
					                    	<li data-value="Farm House"><a>residential plot</a></li>
					                    	<li data-value="Beach House"><a>Agricultural plot</a></li>
					                    </ul>
	               					 </div>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="rent">
							    	<div data-click="single" class="inner-group">
					                    <ul id="ulSubCategory" style="display: block;padding-left:0px;">
					                    	<li data-value="Apartments / Flats" class="select">Apartments / Flats</li>
					                    	<li data-value="High Rise Apartment"><a>High Rise Apartment</a></li>
					                    	<li data-value="Builder Floor"><a>Builder Floor</a></li>
					                    	<li data-value="Villas"><a>Villas</a></li>
					                    	<li data-value="Row House"><a>Row House</a></li>
					                    	<li data-value="Independent House"><a>Independent House</a></li>
					                    	<li data-value="Studio Apartment"><a>Studio Apartment</a></li>
					                    	<li data-value="Duplex Apartment"><a>Duplex Apartment</a></li>
					                    	<li data-value="Condos"><a>Condos</a></li>
					                    	<li data-value="Service Apartment"><a>Service Apartment</a></li>
					                    	<li data-value="Penthouse Apartment"><a>Penthouse Apartment</a></li>
					                    	<li data-value="Guest House"><a>Guest House</a></li>
					                    	<li data-value="Farm House"><a>Farm House</a></li>
					                    	<li data-value="Beach House"><a>Beach House</a></li>
					                    </ul>
               						</div>
							    </div> 
							  </div>
							</div>
						</div>
					</div>
					<div class="action">
						<a href="property_post_sell.php" class="btn primary">proceed</a>
					</div>
				</form>
			</div>	
		</div>
	</div>
</div>
<!-- rent form -->

	<?php
		 require_once "footer.php";
	?>