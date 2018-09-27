<!-- footer --> 
	<footer class="footer">
		<div class="container footer-inner">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-item">
						<h4>conatct us</h4>
						<ul class="contact-info">
							<li>Address: 20/F Green Road,Dhanmondi,Dhaka</li>
							<li>Email id:realestate@gmail.com</li>							
							<li>Phone:+xxxx xxxx xx</li>
							<li>Fax:+xxxx xxxx xx</li>
						</ul>
						<ul class="footer-social">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer-item">
						<h4>useful links</h4>
						<ul class="links">
							<li><a href="#"><i class="fa fa-angle-right"></i>About us</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>Service</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>property listing</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>proprty Grid</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>Contact us</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>Blog</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i>Property Details</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="footer-item">
						<h4>recent properties</h4>
						<div class="footer_img">
							<div class="col-md-4 col-xs-5">
								<a href="#">
									<img src="../images/footerimg_1.jpg" class="img-responsive">
								</a>
							</div>

							<div class="col-md-8 col-xs-7 footerimg-content">
								<h5>
									<a href="#">
										Beautiful Homes
									</a>
								</h5>
								<p>February 27, 2018</p>
								<p><strong>$245,000</strong></p>
							</div>
						</div>
						<div class="footer_img">
							<div class="col-md-4 col-xs-5 ">
								<a href="#">
									<img src="../images/footerimg_2.jpg" class="img-responsive">
								</a>
							</div>
							<div class="col-md-8 col-xs-7 footerimg-content">
								<h5>
									<a href="#">
										Beautiful Homes
									</a>
								</h5>
								<p>February 27, 2018</p>
								<p><strong>$245,000</strong></p>
							</div>
						</div>
						<div class="footer_img">
							<div class="col-md-4 col-xs-5 ">
								<a href="#">
									<img src="../images/footerimg_3.jpg" class="img-responsive">
								</a>
							</div>
							<div class="col-md-8 col-xs-7 footerimg-content">
								<h5>
									<a href="#">
										Beautiful Homes
									</a>
								</h5>
								<p>February 27, 2018</p>
								<p><strong>$245,000</strong></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-item">
						<h4>subscribe</h4>
						<div class="subscribe-box">
							<p style="color:#7c7e83">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
							<form action="#" method="GET">
								<p><input type="text" class="form" name="email" placeholder="email address"></p>
								<p><button name="search_price" type="button" class="button search_price lemon mt-36 buy"><span><span>Subscribe</span></span>
															</button></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p style="text-align:center">2018 © designed & developed by green code technology<!-- <a href="#">real estate</a> --> </p>
				</div>
			</div>
		</div>
	</div>
	<button onclick="topFunction()" id="myBtn" class="sindhu-back-top" title="Go to top" style="display: block;"><i class="fa fa-angle-up fa-2x"></i></button>
	
	<!-- script -->

	<script src="../js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
	<script src="../js/slider.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	
	<!-- <script src="../js/jquery.easing-1.3.min.js"></script>
    <script src="../js/jquery.scrollTo-1.4.3.1-min.js"></script> -->
    <script> 
    	// JavaScript Document
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
    		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        		document.getElementById("myBtn").style.display = "block";
    				} else {
       			 document.getElementById("myBtn").style.display = "none";
    				}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
    		 		$('html,body').animate({ scrollTop: 0 }, 'slow');
				}
	</script>
	<script>
	$(document).ready(function(){
		    $(".nav-tabs a").click(function(){
		        $(this).tab('show');
		    });
		});
	</script>

</body>	
</html>