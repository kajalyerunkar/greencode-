<?php
	require_once "header.php";
?>
	<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">BLOG DETAILS</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current">BLOG DETAILS</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end banner----- -->
<!-- blog details -->
<div class="blog_content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-xs-12">
				<div class="blog-post single-post">
					<a href="blog-details.html" class="post-img">
						<img class="img-fluid" src="images/house_on_hill.jpg" alt="">
					</a>

					<div class="content-desc" style="display:block">
						<h2>
							<a href="blog-details.html">Great House on The Hills</a>
						</h2>
						<ul class="post-meta">
							<li>Novemer 12, 2018</li>
							<li><a href="#">5 Comments</a></li>
						</ul>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
						<p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<ul class="share-buttons mt-5 mb-4">
							<li><a class="fb-share" href="#"><i class="fa fa-facebook-f"></i>Share</a></li>
							<li><a class="twitter-share" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Share</a></li>
							<li><a class="linkedin-share" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> linkedin</a></li>
						</ul>
					</div>
				</div>
				<div id="comments">
					<div class="comment-box">
						<h3>Comments (5)</h3>
						<ol class="comments-list">
							<li>
								<div class="media">
									<div class="col-md-3 col-xs-12 thumb-left">
										<a href="#">
											<img class="img-fluid" src="images/blog_detail1.jpg" alt="">
										</a>
									</div>
									<div class="col-md-9 col-xs-12 info-body">
										<div class="media-heading">
											<h4 class="name">Larsen Mortin</h4>
											<span class="comment-date"><i class="lni-alarm-clock"></i> 18 December 2018</span>
										</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi magni vero voluptatibus quam, iste explicabo, qui. Explicabo perferendis officia.</p>
									<!-- <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a> -->
									</div>
								</div>
							</li>
							<li>
								<ul>
									<li>
										<div class="media">
											<div class="col-md-3 col-xs-12 thumb-left">
												<a href="#">
													<img class="img-fluid" src="images/blog_detail1.jpg" alt="">
												</a>
											</div>
											<div class="col-md-9 col-xs-12 info-body">
												<div class="media-heading">
													<h4 class="name">Hansom Rob</h4>
													<span class="comment-date"><i class="lni-alarm-clock"></i> 18 December 2018</span>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi magni vero voluptatibus quam, iste explicabo, qui. Explicabo perferendis officia.</p>
												<!-- <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a> -->
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
							<div class="media">
								<div class="col-md-3 col-xs-12 thumb-left">
									<a href="#">
										<img class="img-fluid" src="images/blog_detail2.jpg" alt="">
									</a>
								</div>
								<div class="col-md-9 col-xs-12 info-body">
									<div class="media-heading">
										<h4 class="name">Sticky Fingerz</h4>
										<span class="comment-date"><i class="lni-alarm-clock"></i> 18 December 2018</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, excepturi modi sit. Exercitationem nesciunt necessitatibus excepturi magni vero voluptatibus quam, iste explicabo, qui. Explicabo perferendis officia.</p>
									<!-- <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a> -->
								</div>
							</div>
							</li>
						</ol>

					<div id="respond">
					<h3>Add Comment</h3>
					<form action="#">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="form-group">
									<input id="author" class="form-control-blog" name="author" type="text" value="" size="30" placeholder="Enter Name" style="padding: 5px 20px;">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="form-group">
									<input id="email" class="form-control-blog" name="author" type="text" value="" size="30" placeholder="Email" style="padding: 5px 20px;">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="form-group">
									<textarea id="comment" class="form-control-blog" name="comment" rows="8" placeholder="Massage" style="width: 100%; padding: 5px 20px; border: 1px solid #ccc;"></textarea>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-xs-12 text-center">
								<button name="search_price" type="button" class="button search_price lemon mt-36">
									<span><span>SUBMIT</span></span>
								</button>
							</div>
						</div>
					</form>
					</div>

					</div>
					</div>
			</div>
			<div class="col-lg-4 col-md-12 col-xs-12">
				<div class="sidebar right">
					<div class="widget">
						<h3 class="sidebar-title">
							search blog
						</h3>
						<div class="search-blog-input">
							<div class="input">
								<input class="form-control" type="text" placeholder="Type and hit enter" value="">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="widget">
						<h3 class="sidebar-title">Popular Posts</h3>
							<ul class="widget-tabs">
								<li>
									<div class="widget-content">
										<div class="widget-thumb">
											<a href="blog-details.html"><img src="images/blog-widget-01.jpg" alt=""></a>
										</div>
										<div class="widget-text">
											<h5><a href="blog-details.html">What to Do a Year Before Buying Apartment </a></h5>
											<span>October 26, 2018</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</li>
								<li>
									<div class="widget-content">
										<div class="widget-thumb">
											<a href="blog-details.html"><img src="images/blog-widget-02.jpg" alt=""></a>
										</div>
										<div class="widget-text">
											<h5><a href="blog-details.html">Bedroom Colors You'll Never Regret</a>
											</h5>
											<span>November 9, 2018</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</li>
								<li>
									<div class="widget-content">
										<div class="widget-thumb">
											<a href="blog-details.html"><img src="images/blog-widget-03.jpg" alt=""></a>
										</div>
										<div class="widget-text">
											<h5><a href="blog-details.html">8 Tips to Help You Finding New Home</a></h5>
											<span>November 12, 2018</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
					</div>
					<div class="widget">
							<h3 class="sidebar-title">
								categories
							</h3>
							<div class="search_by_cat">
								<ul>
									<li><a href="#">Apartment</a></li>
									<li><a href="#">flats</a></li>
									<li><a href="#">Row houses</a></li>
									<li><a href="#">Residential plot</a></li>
									<li><a href="#">Agricultural Plot</a></li>
									<li><a href="#">condos</a></li>
								</ul>
							</div>
					</div>
					<div class="widget">
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog details -->


<?php
	 require_once "footer.php";
?>