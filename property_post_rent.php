<?php
	 require_once "header.php";
?>
<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">RENT PROPERTY FORM</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current"> RENT PROPERTY</span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- property posting -->
<section id="secmain" class="main" role="main">	
	<div id="content-wrap">
		<div class="aside">
			
		</div>  
		<div class="content-inner">
			<div id="divSecondStep">
				<div class="page-title">
					<h1>Few more clicks and your property is <span>LIVE</span></h1>
				</div>
				<form id="form2" name="form2" method="post" enctype="multipart/form-data" action="" class="post-form">
					<div class="segment">
						<div class="error-msg society">
							<h4 data-for="address" class="">Property location  
								<span class="required">*</span>
							</h4>
							<div class="google-maps maperror">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4339467371315!2d72.95780421499025!3d19.17623978703051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8e51d5d44a5%3A0xb4170991e5c2edfb!2sGREEN+CODE+TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1530529446348" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="row">
				            <div class="col-md-3 col-xs-12 three columns">
				                    <div id="divCity" class="form-group" data-for="city">
				                        <input class="inputMaterial score" type="text"  maxlength="100" required="" placeholder="city">
				                        <span class="highlight"></span>
				                        <span class="bar"></span>
				                        
				                    </div>
				            </div>
				            <div class="col-md-3 col-xs-12 three columns">
				                <div class="form-group" data-for="location">
				                    
					                    <input class="inputMaterial score" type="text" id="txtBuildingName" maxlength="100" required="" placeholder="location">
					                    <span class="highlight"></span>
					                    <span class="bar"></span>
				              
				                </div>
				            </div>
				            <div class="col-md-3 col-xs-12 three columns">
				                <div class="form-group">
				                    <input class="inputMaterial score" type="text" id="txtBuildingName" maxlength="100" required="" placeholder="building Name">
				                    <span class="highlight"></span>
				                    <span class="bar"></span>
				                   
				                </div>
				            </div>  
				            <div class="col-md-3 col-xs-12 three columns" data-for="landmark">
				                <div class="form-group">
				                    <input class="inputMaterial score" type="text" id="txtlandmark" maxlength="100" required="" placeholder="landmark">
				                    <span class="highlight"></span>
				                    <span class="bar"></span>
				                    
				                </div>
				            </div>
        				</div>
					</div>
					<div class="segment">
						<div class="row secondary-info">
							<div class="col-md-3">
								<input type="text" class="row1" placeholder="super built-up" style=" width: 100%;border: none;border-bottom: 1px solid #c2c2c2;margin: 10px 0px;">
							</div>
				            <div class="col-md-3">
				            	<select id="ddSuperBuiltupAreaUnit" class="browser-default">
		                            <option value="Sq Feet">Sq feet</option>
		                            <option value="Sq Yards">Sq yards</option>
		                            <option value="Sq Meter">Sq meter</option>
		                            <option value="Cents">Cents</option>
		                            <option value="Grounds">Grounds</option>
		                            <option value="Acres">Acres</option>
		                        </select>
							</div>
        				</div>
        				<div class="row secondary-info-area">
        					<div class="col-md-3">
        						<input type="text" class="row1" placeholder="built-up area" style=" width: 100%;border: none;border-bottom: 1px solid #c2c2c2;margin: 10px 0px;">
        					</div>
        					<div class="col-md-3">
        						<select id="ddBuiltupAreaUnit" class="browser-default">
	                                <option value="Sq Feet">Sq feet</option>
	                                <option value="Sq Yards">Sq yards</option>
	                                <option value="Sq Meter">Sq meter</option>
	                                <option value="Cents">Cents</option>
	                                <option value="Grounds">Grounds</option>
	                                <option value="Acres">Acres</option>
	                            </select>
        					</div>
        					<div class="col-md-3">
        						<input type="text" class="row1" placeholder="super built-up" style=" width: 100%;border: none;border-bottom: 1px solid #c2c2c2;margin: 10px 0px;">
        					</div>
        					<div class="col-md-3">
        						<select id="ddCarpetUnit" class="browser-default">
	                                <option value="Sq Feet">Sq feet</option>
	                                <option value="Sq Yards">Sq yards</option>
	                                <option value="Sq Meter">Sq meter</option>
	                                <option value="Cents">Cents</option>
	                                <option value="Grounds">Grounds</option>
	                                <option value="Acres">Acres</option>
	                            </select>
        					</div>
        				</div>
        				<div class="row rooms_size">
        					<div class="col-md-12">
        						<label style="color:#555">Bedrooms <span class="required">*</span></label>
        						<div class="inner-group">
        							<ul id="ulbedrooms" class="tabs beds score">
        								<li data-value="1 BHK">
		                                    <a> 1 BHK</a>              
                            			</li>
        								<li data-value="1 BHK">                              
                                    		<a> 2 BHK</a>
                                         </li>
        								<li data-value="1 BHK">                              
                                    		<a> 3 BHK</a>
                                         </li>
        								<li data-value="1 BHK">                              
                                    		<a> 4 BHK</a>
                                         </li>
                                         <li data-value="1 BHK">                              
                                    		<a>4 + BHK</a>
                                         </li>
                                         <li data-value="1 BHK">                              
                                    		<a>1 RK</a>
                                         </li>
                                         <li data-value="1 BHK">                              
                                    		<a>2 RK</a>
                                         </li>
                                         <li data-value="1 BHK">                              
                                    		<a>1 HALL</a>
                                         </li>
        							</ul>
        						</div>
        					</div>
        				</div>
        				<!--bathroom-->
        				<div class="row">
        					<div class="col-md-6 six columns">
                				<div data-click="single" class="form-group" data-for="bathroom">
                    				<label>Bathrooms <span class="required">*</span></label>
                    			<div class="inner-group flat">
			                        <ul id="ulBathroom" class="score">
			                            <li>1</li>
			                            <li>2</li>
			                            <li>3</li>
			                            <li>4</li>
			                            <li>4+</li>
			                        </ul>
                    			</div>
                				</div>
            				</div>
            				<div class="col-md-6 six columns">
                				<div data-click="single" class="form-group" data-for="balconies">
                    				<label>Balconies</label>
                    			<div class="inner-group flat">
			                        <ul id="ulBalconies" class="score">
			                            <li class="select">0</li>
			                            <li>1</li>
			                            <li>2</li>
			                            <li>3</li>
			                            <li>3+</li>
			                        </ul>
                    			</div>
                				</div>
            				</div>

        				</div>
        				<!-- bathroom -->
        				<!-- other rooms -->
        				<div class="row">
            				<div class="col-md-12 twelve columns">
                				<div class="form-group" data-for="additional-rooms">
                    				<label>Other rooms</label>
                    			<div data-click="multiple" class="inner-group multiple">
		                        <ul id="ulOtherRooms" class="score">
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-pooja-room"></i>
		                                <p>Pooja room</p>
		                            </li>
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-study-room"></i>
		                                <p>Study room</p>
		                            </li>
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-servant-room"></i>
		                                <p>Servant room</p>
		                            </li>
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-patio"></i>
		                                <p>Patio</p>
		                            </li>
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-garden"></i>
		                                <p>In house garden</p>
		                            </li>
		                            <li>
		                                <span class="sul-tick-l"></span>
		                                <i class="sul-kids-play"></i>
		                                <p>Kids room</p>
		                            </li>
		                        </ul>
                    			</div>
                				</div>
            				</div>
        				</div>
        				<!-- other rooms -->
        				<!-- furnishng type -->
        				<div class="row">
				            <div class="col-md-12 twelve columns">
				                <div data-click="single" class="form-group" data-for="furnishing-type">
				                    <label>Furnishing type <span class="required">*</span></label>
				                    <div class="inner-group small mini tabs">
				                        <ul id="ulFurnished" class="score">
				                            <li><a href="#">Fully furnished</a></li>
				                            <li><a href="#">Semi furnished</a></li>
				                            <li class="select"><a href="#">Unfurnished</a></li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- furishng type -->
				        <!-- flooring -->
				        <div class="row">
            				<div class="col-md-12 twelve columns" data-for="flooring-info">
                				<div data-click="single" class="form-group second">
                    				<label>Flooring info</label>
                    					<div class="inner-group small mini">
					                        <ul id="ulFloorType" class="score">
					                            <li>Ceramic tiles</li>
					                            <li>Vitrified tiles</li>
					                            <li>Granite</li>
					                            <li>Marble</li>
					                            <li>Mosaic</li>
					                            <li>Concrete</li>
					                            <li>Wooden</li>
					                        </ul>
					                    </div>
					            </div>
					      	 </div>
					    </div>
					    <!-- flooring -->
					    <!-- car parking -->
					    <div class="row">
            				<div class="col-md-12 twelve columns new-segment">
                				<div class="col-md-3 form-group" data-for="car-parking">
                    				<label class="focuslabel">Car parking  <span class="required">*</span></label>
                    				<select id="ddCarParking" class="browser-default score">
				                        <option value="0">No car parking</option>
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5</option>
				                    </select>
                				</div>

				                <div data-click="single" class="form-group last hide">
				                    <div class="inner-group mini group">
				                        <ul id="ulCarParkingType" class="split-two">
				                            <li><span class="sul-car-c"></span> Covered</li>
				                            <li class="select"><span class="sul-car"></span> Open</li>
				                        </ul>
				                    </div>
				                </div>

				                <div class="col-md-3 form-group" data-for="two-wheeler-parking">
				                    <label class="focuslabel">2 wheeler parking </label>
				                    <select id="ddBykeParking" class="browser-default score">
				                        <option value="0">No. of 2 wheeler parking</option>
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5</option>
				                    </select>
				                </div>

				                <div data-click="single" class="form-group last hide">
				                    <div class="inner-group mini group">
				                        <ul id="ulddBykeParkingType" class="split-two">
				                            <li><span class="sul-bike-c"></span> Covered</li>
				                            <li class="select"><span class="sul-bike"></span> Open</li>
				                        </ul>
				                    </div>
				                </div>
            				</div>
        				</div>
					    <!-- car parking -->
					    <!-- flat direction -->
					    <div class="row">
				            <div class="col-md-12 twelve columns">
				                <div data-click="single" class="form-group" data-for="facing-info">
				                    <label>Apartments / Flats direction facing</label>
				                    <div class="inner-group small mini">
				                        <ul id="ulDirectionFacing" class="score">
				                            <li>East</li>
				                            <li>West</li>
				                            <li>North</li>
				                            <li>South</li>
				                            <li>South west</li>
				                            <li>South east</li>
				                            <li>North east</li>
				                            <li>North west</li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- end flat direction -->
				        <!-- age of construction  -->
				        <div class="row">
					        <div class="col-md-12 twelve columns">
				                <div data-click="single" class="form-group" data-for="property-age" style="display: block;">
				                    <label>Age of construction</label>
				                    <div class="inner-group small mini">
				                        <ul id="ulAgeOfConstruction" class="score">
				                            <li data-value="New">New</li>
				                            <li data-value="< 1 year"><i class="sul-chev-l"></i> 1 year</li>
				                            <li data-value="1-3 years">1-3 years</li>
				                            <li data-value="3-5 years">3-5 years</li>
				                            <li data-value="5-10 years">5-10 years</li>
				                            <li data-value="10-20 years">10-20 years</li>
				                            <li data-value="> 20 years"><i class="sul-chev-r"></i> 20 years</li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- age of construction -->
				        <!--contstruction/underconstr -->
				        <div class="row">
				            <div class="col-md-12 twelve columns">
				                <div data-click="single" class="form-group" data-for="construction-status">
				                    <label>Construction status <span class="required">*</span></label>
				                    <div class="inner-group small mini">
				                        <ul id="ulConstructionStatus" class="score">
				                            <li>Under construction</li>
				                            <li>Ready to occupy</li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
        				</div>
				        <!-- construction/underconstr -->
				        <!-- amenities -->
				        <div class="row">
				            <div class="col-md-12 twelve columns">
				                <div class="form-group">
				                    <label>Amenities</label>
				                    <div data-click="multiple" class="inner-group  multiple">
				                        <ul id="ulAmenities">
				                        	<li><span class="sul-tick-l"></span><i class="sul-water"></i><p>Corporation water</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-drainagesystem"></i><p>Drainage facility</p></li>                    
				                        	<li><span class="sul-tick-l"></span><i class="sul-lift"></i><p>Lifts</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-gym"></i><p>Gym</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-swim-pool"></i><p>Swimming pool</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-security"></i><p>Security</p></li>
				                        </ul>
				                    </div>
				                </div>
				                <!-- ---- -->
				                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"></button>Add more amenities
  								<div id="demo" class="collapse">
									 <div class="toggle-group" id="demo" class="collapse">  
				                    	<div data-click="multiple" data-expand="amenity" class="toggle inner-group multiple">
				                        <ul id="ulMoreAmenities" class="score">
				                        	<li><span class="sul-tick-l"></span><i class="sul-club-house"></i><p>Club house</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-atm"></i><p>ATM</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-car-v"></i><p>Visitors parking</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-wifi"></i><p>Broadband connectivity</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-vastu"></i><p>Feng shui / vastu</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-super-market"></i><p>Shopping complex</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-pipped-gas"></i><p>Piped gas</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-intercom"></i><p>Intercom</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-tennis"></i><p>Tennis court</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-shuttlecock"></i><p>Badminton court</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-in-games"></i><p>Indoor games</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-play-ground"></i><p>Play ground</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-yoga"></i><p>Yoga room</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-medical-serv"></i><p>Medical center</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-surveilance"></i><p>CCTV</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-park"></i><p>Park</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-community-hall"></i><p>Community hall</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-lift"></i><p>Service lifts</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-servant-room"></i><p>Maintenance staff</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-walking-track"></i><p>Jogging track</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-rwater-har"></i><p>Rain water harvesting</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-s-treatment"></i><p>Sewage treatment</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-fire-safety"></i><p>Fire Safety</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-laundry"></i><p>Laundromat</p></li>

				                        	<li><span class="sul-tick-l"></span><i class="sul-coffee"></i><p>Cafe/food court</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-daycare"></i><p>Day care center</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-library"></i><p>Library</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-basketball"></i><p>Basketball court</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-vollyball-cort"></i><p>Volleyball court</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-solar-power"></i><p>Solar power</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-garbage-disposal"></i><p>Garbage chute</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-sauna"></i><p>Steam and sauna</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-jacuzzi"></i><p>Jacuzzi</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-swim-pool"></i><p>Kids pool</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-swim-pool"></i><p>Infinity pool</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-swim-pool"></i><p>Roof top pool</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-lobby-area"></i><p>Lobby area</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-planned-avenue"></i><p>Plantation Avenue</p></li>
				                        	<li><span class="sul-tick-l"></span><i class="sul-water-treat"></i><p>Water treatment</p></li></ul>
				                    	</div>
				                	</div>
							 	</div> 
				            </div>
        				</div>
				        <!-- amenities -->
					</div>
					<div id="divRentalPrice" class="segment">
						<div class="row">
							<div class="col-md-12 panel">
				                <h4 class="nomargin">Property rent</h4>
				            </div>
						</div>
						<div class="container">
							 <ul class="nav nav-pills">
							   <li class="active"><a data-toggle="pill" href="#home"> rent</a></li>
							   <li><a data-toggle="pill" href="#menu1">lease</a></li>
						     </ul>
						     <div class="row">
							<div class="tab-content">
   								<div id="home" class="tab-pane fade in active">
							      <div id="divRentDetails" class="">
									<div class="row">
									    <div class="col-md-6 six columns">
									       <div class="form-group" data-for="rent">
									          <input id="txtMonthlyRent" class="inputMaterial score" type="text" maxlength="9" required="">
									             <span class="highlight"></span>
									             <span class="bar"></span>
									             <label class="animate" id="rentDeposit">Monthly rent amount <span class="required">*</span></label>
									             <p class="input-msg hide" style="display: none;"></p>
									        </div>
									    </div>
									    <div class="col-md-5 six columns first">
									        <div class="form-group" data-for="deposit">
									            <input id="txtDeposit" class="inputMaterial score" type="text" maxlength="9" required="">
									            <span class="highlight"></span>
									            <span class="bar"></span>
									            <label class="animate">Deposit amount <span class="required">*</span></label>
									            <p class="input-msg hide" style="display: none;"></p>
									        </div>
									                <!-- <div class="other-info">
									                   <h4>Rental Trends Info</h4>
									                   <div class="rating"><i class="sul-arrow-u"></i> 40%</div>
									                   <span>of the properties in your locality quote a price higher than the price quoted by you</span>
									                   </div> -->
									    </div>
								 	</div>
						        </div>
							  </div>
							     <div id="menu1" class="tab-pane fade">
							        <div id="divBreakupPrice" class="row brkup">
							        	
							            <div class="col-md-5 six columns">
							                <div class="" id="divLeaseDetails">
									            <div class="row">
									                <div class="col-md-12 six columns">
									                    <div data-click="single" class="form-group marginb0" data-for="lease-duration">
									                        <label>Lease duration</label>
									                        <ul id="ulLeaseDuration" class="toolbar-inner score"><li>6-12 Months</li><li>12-36 Months</li><li>36-60 Months</li></ul>
									                    </div>
									                </div>
									            </div>
									            <div class="row">
									                <div class="col-md-6 six columns">
									                    <div class="form-group" data-for="lease-amount">
									                        <input id="txtLeaseAmount" class="inputMaterial score" type="text" maxlength="9"  required="">
									                        <span class="highlight"></span>
									                        <span class="bar"></span>
									                        <label class="animate">Lease amount <span class="required">*</span></label>
									                        <p class="input-msg hide" style="display: none;"></p>
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
					
							<div class="row">
					            <div class="col-md-6 six columns">
					                <div class="form-group" data-for="maintenance-price" style="display: block;">
					                    <input id="txtRentMaintenanceCharges" class="inputMaterial score" type="text" maxlength="9"  required="" placeholder="monthly maintenance">
					                    <span class="highlight"></span>
					                    <span class="bar"></span>
					                    <p class="input-msg hide" style="display: none;"></p>
					                </div>
					            </div>
					        </div>
					</div>
					<!-- photos of property -->
					<div class="segment">
						<h4>Add photos</h4>
						<div class="row">
							<div class="col-md-12">
								<p>Ads with photos will have 2 times better visibility than ads without photos</p>
								<!-- <input type="file" name="img[]" class="file"> -->
								<div class="input-group col-sm-9">
								   <span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
									   <input type="text" class="form-control input-lg pic" disabled placeholder="Upload Image" style="height:47px">
									    <span class="input-group-btn">
									   <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-search" aria-hidden="true"></i> Browse</button>
								    </span>
								</div>
							</div>
						</div>
					</div>
					
					
					<!-- last segment -->
					<div class="segment last">
						<h4>Additional information</h4>
				        <div class="row">
				            <div class="col-md-12 twelve columns">
				                <div data-click="single" class="form-group" data-for="prefer-tenant">
				                    <label>Tenant preference </label>
				                    <div class="inner-group small mini multi">
				                        <ul id="ulTenantPreference" class="score">
				                            <li class="">Family</li>
				                            <li class="">Bachelors</li>
				                            <li class="select">No pref.</li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <div class="row contact-time">

				        	<div class="col-md-5 five columns medium">
				        		<div class="col-md-12">
					        		<label for="" class="panel-title">Preferred contact time </label>
					        	</div>
				        		<button type="button" class="btn btn-info-contact_time" data-toggle="collapse" data-target="#demo1">
				        			<div class="checkmark anytime">
                                		<input id="chkContactAnyTime" class="checkbox-custom" name="chkContactAnyTime" type="checkbox" checked="">
                                		<label for="chkContactAnyTime" class="checkbox-custom-label">Any time</label>
                            		</div>
                       			</button>
								  <div id="demo1" class="collapse">
								    <div class="split-wrap">
						                <div class="form-group">
						                   <select class="browser-default score" id="ddContactFromTime">
						                      <option value="" disabled="" selected="">From time</option>
						                      <option value="1">1</option>
						                      <option value="2">2</option>
						                      <option value="3">3</option>
						                      <option value="4">4</option>
						                      <option value="5">5</option>
						                       <option value="6">6</option>
						                      <option value="7">7</option>
						                      <option value="8">8</option>
						                      <option value="9">9</option>
						                      <option value="10">10</option>
						                      <option value="11">11</option>
						                      <option value="12">12</option>
						                   </select>
						                 </div>
						                 <div data-click="single" class="form-group last">
						                     <div class="inner-group mini group">
						                        <ul class="split-two-time" id="ulContactFromSection">
						                            <li class="select">AM</li>
						                            <li>PM</li>
						                        </ul>
						                     </div>
						                  </div>
						            </div>
						            <div class="split-wrap">
						                <div class="form-group">
						                   <select class="browser-default score" id="ddContactFromTime">
						                      <option value="" disabled="" selected="">From time</option>
						                      <option value="1">1</option>
						                      <option value="2">2</option>
						                      <option value="3">3</option>
						                      <option value="4">4</option>
						                      <option value="5">5</option>
						                       <option value="6">6</option>
						                      <option value="7">7</option>
						                      <option value="8">8</option>
						                      <option value="9">9</option>
						                      <option value="10">10</option>
						                      <option value="11">11</option>
						                      <option value="12">12</option>
						                   </select>
						                 </div>
						                 <div data-click="single" class="form-group last">
						                     <div class="inner-group mini group">
						                        <ul class="split-two-time" id="ulContactFromSection">
						                            <li class="select">AM</li>
						                            <li>PM</li>
						                        </ul>
						                     </div>
						                  </div>
						            </div>         
  								</div>
							</div>



				             <!-- <div data-click="single" class="form-group" data-for="preferred-time">
				                <div class="row">
				                     <label for="" class="panel-title">Preferred contact time </label>
				                     <div class="panel">
				                        <div class="checkmark anytime">
				                            <input id="chkContactAnyTime" class="checkbox-custom" name="chkContactAnyTime" type="checkbox" checked="">
				                             <label for="chkContactAnyTime" class="checkbox-custom-label">Any time</label>
				                         </div>
				                      </div>
				                 </div>
							</div> -->
				        	
					        	<div class="col-md-4">
					        		<div class="form-group brokerresp">
					        			<label>Get response from broker</label>
					        			<div class="inner-group mini group">
					                        <ul class="split-two score" id="ulBrokerResponse">
					                            <li class="select">Yes</li>
					                            <li class="">No</li>
					                        </ul>
					                    </div>
					        		</div>
					        	</div>
					        	<div class="col-md-3">
					        		<div class="form-group brokerresp">
					        			<label>pet friendly</label>
					        			<div class="inner-group mini group">
					                        <ul class="split-two score" id="ulBrokerResponse">
					                            <li class="select">Yes</li>
					                            <li class="">No</li>
					                        </ul>
					                    </div>
					        		</div>
					        	</div>
				        </div>
				        <div class="col-md-12 twelve columns">
			                <div class="form-group" data-for="property-description">
			                    <label for="">Property description</label>
			                    <textarea id="txtlongdesc" class="score" rows="10" style="width: 100%"></textarea>
			                </div>
			            </div>
			            <div class="action">
							<a href="#" class="btn primary">submit</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- property posting -->


	<?php
		 require_once "footer.php";
	?>