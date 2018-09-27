

	<?php

	 require_once "header.php";


	?>

	<!-- slider -->
	<div class="search">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="images/Luxury-Home.jpg">
			    </div>

			    <div class="item">
			      <img src="images/Luxury-Home.jpg" alt="Chicago">
			    </div>

			    <div class="item">
			      <img src="images/Luxury-Home.jpg" alt="New York">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>							
	</div>
	<!--slider -->
	<!-- blue part -->
	<section class="search_details">
		<div class="container">
			<h3>Find Your Dream House</h3>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="frstrow">
						<select>
							<option value="0" selected>location</option>
							<option value="1">mumbai</option>
							<option value="2">amhdebad</option>
							<option value="3">nashik</option>
							<option value="4">pune</option>
							<option value="5">panvel</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="frstrow">
						<select>
							<option value="0" selected>property status</option>
							<option value="1">rent</option>
							<option value="2">sale</option>
							<option value="3">buy</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="frstrow">
						<select>
							<option value="0" selected>Residential</option>
							<option value="1">Family house</option>
							<option value="2">Apartmemt</option>
							<option value="3">condo</option>
							<option value="4">Row-houses</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="frstrow">
						<select>
							<option value="0" selected>commercial</option>
							<option value="1">shops</option>
							<option value="2">showrooms</option>
							<option value="3">office/space</option>
							<option value="4">hotels/Resort</option>
							<option value="5">guest-houses</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="secondrow">
						<select>
							<option value="0" selected>Agricultural</option>
							<option value="1">Farm land</option>
							<option value="2">land/plot</option>
							
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="secondrow">
						<input class="Square-fit" type="text" name="min-area" placeholder="Square Fit">
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					  <div class="row">
					    <div class="col-sm-12">
					      <div id="slider-range"></div>
					    </div>
					  </div>
					  <div class="row slider-labels" style="color: #fff;">
					    <div class="col-xs-6 caption">
					      <strong>Min:</strong> <span id="slider-range-value1"></span>
					    </div>
					    <div class="col-xs-6 text-right caption">
					      <strong>Max:</strong> <span id="slider-range-value2"></span>
					    </div>
					  </div>
					  <div class="row">
					    <div class="col-sm-12">
					      <form>
					        <input type="hidden" name="min-value" value="">
					        <input type="hidden" name="max-value" value="">
					      </form>
					    </div>
					  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="secondrow">
						<button class="search-btn" type="submit">Search</button>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- end blue part -->

<!-- properties --> 
	<section class="properties" >
		<div class="container-fluid">
			<div class="title">
				<!-- <h3>recently</h3> -->
				<h2 class="text-center"><strong>featured</strong>projects</h2>
			</div>
			<div class="pro_images">
				<div class="container">
					<div class="row">
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
						<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div> -->
										<!-- <div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index1.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h3 class="home_price"><a> $230,000</a></h3>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt" style="margin-right:8px;"></i></a>
										<!-- <a href="#" title="share"><i class="fas fa-share-alt"></i></a>
										<a href="#" title="Favorites"><i class="fa fa-heart-o"></i></a> -->
									</div>
								</div>
							</div>

						</div>
						</div>
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
							<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									<!-- <img src="images/download.jpg" class="img-responsive"> -->
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div> -->
										<!-- <div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index2.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>3bathrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h3 class="home_price"><a> $230,000</a></h3>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt"></i></a>
										<!-- <a href="#" title="share"><i class="fas fa-share-alt"></i></a>
										<a href="#" title="Favorites"><i class="fa fa-heart-o"></i></a> -->
									</div>
								</div>
							</div>

						</div>
						</div>
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
							<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									<!-- <img src="images/download.jpg" class="img-responsive"> -->
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div>
										<div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index3.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>3bathrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h3 class="home_price"><a> $230,000</a></h3>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt"></i></a>
										<!-- <a href="#" title="share"><i class="fas fa-share-alt"></i></a>
										<a href="#" title="Favorites"><i class="fa fa-heart-o"></i></a> -->
									</div>
								</div>
							</div>

						</div>
						</div>
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
							<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									<!-- <img src="images/download.jpg" class="img-responsive"> -->
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div>
										<div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index4.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>3bathrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h3 class="home_price"><a> $230,000</a></h3>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt"></i></a>
										<!-- <a href="#" title="share"><i class="fas fa-share-alt"></i></a>
										<a href="#" title="Favorites"><i class="fa fa-heart-o"></i></a> -->
									</div>
								</div>
							</div>

						</div>
						</div>
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
							<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									<!-- <img src="images/download.jpg" class="img-responsive"> -->
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div>
										<div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index5.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>3bathrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h4 class="home_price"><a class="house_price"> $230,000</a></h4>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt"></i></a>
										<!-- <a href="#" title="share"><i class="fas fa-share-alt"></i></a>
										<a href="#" title="Favorites"><i class="fa fa-heart-o"></i></a> -->
									</div>
								</div>
							</div>

						</div>
						</div>
						<div class="item col-lg-4 col-md-4 col-sm-6" height:546.313px">
							<div class="outer_div">
							<div class="upper_div">
								<div class="homes">
									<!-- <img src="images/download.jpg" class="img-responsive"> -->
									<a href="#" class="detail_link">
										<!-- <div class="btn1">Featured</div>
										<div class="btn2">For Sale</div> -->
										<div class="btn3">Family Home</div>
										<img src="images/index6.jpg" class="properties_img">
									</a>
								</div>
								<div class="overlay">
							  		<h4 class="text"><a href="detail.php">property</a></h4>
							 	</div>
							</div>
							<div class="lower_div">
								<h3>Real House Luxury Villa</h3>
								<!-- address -->
								<p class="address">
									<a href="#">
										<i class="fa fa-map-marker"></i>
										<span>Est St, 77 - Central Park South, NYC</span>
										
									</a>
								</p>
								<!-- homelist -->
								<ul class="homelist">
									<li><i class="fa fa-bed" aria-hidden="true" style="margin-right:8px;"></i><span>6 bedrooms</span></li>
									<li><i class="fa fa-bath" aria-hidden="true" style="margin-right:8px;"></i><span>3bathrooms</span></li>
									<li><i class="fa fa-object-group" aria-hidden="true" style="margin-right:8px;"></i><span>720 sq ft</span></li>
									<li><i class="fa fa-car" aria-hidden="true" style="margin-right: 8px;"></i></i><span>2 Garages</span></li>
								</ul>
								<!-- price -->
								<div class="price">
									<h3 class="home_price"><a> $230,000</a></h3>
									<div class="price_icons">
										<a href="#" title="compare"><i class="fas fa-exchange-alt"></i></a>
									
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
<!-- properties -->

<!-- owl caourel -->
	<div class="agent_slider">
		<div class="container">
			<div class="title">
				<h2 class="text-center">meet our agents</h2>
			</div>
				<div class="agent-s owl-carousel owl-theme">
				  <div class="agent_owl_slider"> <img src="images/agent1.jpg">
					  <div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
					  	</div>
					  	<div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div> 

					  
				  </div>
				  <div class="agent_owl_slider"> <img src="images/agent2.jpg">
				  	<div class="agent-content">
				  		<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div>
				   </div>
				  <div class="agent_owl_slider"> <img src="images/agent3.jpg">
				  	<div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					 </div>
				  </div>
				  <div class="agent_owl_slider"> <img src="images/agent4.jpg">
				  	<div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div>
				  </div>
				  <div class="agent_owl_slider"> <img src="images/agent5.jpg"> 
				  	<div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div>
				  </div>
				  <div class="agent_owl_slider"> <img src="images/agent6.jpg">
				  	<div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div>
				  </div>
				  <div class="agent_owl_slider"> <img src="images/agent7.jpg">
				  	<div class="agent-content">
					  	<div class="agent-info">
						  	<h4 class="text-center">magdya</h4>
						  	<p class="text-center">0 properties</p>
						 </div>
						 <div class="yellow_box">
					  		<a href="#" class="text-center"><i class="fa fa-facebook" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-twitter" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-envelope" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-skype" style="color:#000000;"></i></a>
					  		<a href="#" class="text-center"><i class="fa fa-instagram" style="color:#000000;"></i></a>
					  	</div>
					  </div>
				   </div>				
			</div>
		</div>
	</div>

<!-- owl caursel -->

<!-- service content area -->
	<div class="service-content-area">
		<div class="container">
			<div class="title">
				<h2 class="text-center">what are you looking for?</h2>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
		            <div class="service-media-box">
		                <div class="service-icon"><img src="images/apartment.png"></div>
		                <h3 class="title">APARTMENT</h3>
		                <p class="description">
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
		                </p>
		            </div>
		        </div>
		        <div class="col-md-4 col-sm-6">
            		<div class="service-media-box">
                	<div class="service-icon"><img src="images/mansion.png"></div>
                	<h3 class="title">HOUSES</h3>
                	<p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
               		 </p>
            		</div>
       		 	</div>
		        <div class="col-md-4 col-sm-6">
		            <div class="service-media-box">
		                <div class="service-icon"><img src="images/shield.png"></div>
		                <h3 class="title">SECURITY</h3>
		                <p class="description">
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
		                </p>
		            </div>
		        </div>
		        <div class="col-md-4 col-sm-6">
		            <div class="service-media-box">
		                <div class="service-icon"><img src="images/commercial.png"></div>
		                <h3 class="title">COMMERCIAL</h3>
		                <p class="description">
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
		                </p>
		            </div>
		        </div>
		        <div class="col-md-4 col-sm-6">
		            <div class="service-media-box">
		                <div class="service-icon"><img src="images/trust.png"></div>
		                <h3 class="title">TRUSTED AGENT</h3>
		                <p class="description">
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
		                </p>
		            </div>
		        </div>
		        <div class="col-md-4 col-sm-6">
		            <div class="service-media-box">
		                <div class="service-icon"><img src="images/support.png"></div>
		                <h3 class="title">24/7 SUPPORT</h3>
		                <p class="description">
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
		                </p>
		            </div>
		        </div>
			</div>
		</div>
	</div>
<!-- service content area -->

	<?php 
	require_once "footer.php";

	?>
<script>
$('.agent-s').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    		}
		})
		</script>


