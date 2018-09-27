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
			<div class="col-md-9 edit_profile">
				<div class="db-2 row">
					<div class="db-2-com db-2-main">
						<h4>EDIT MY PROFILE</h4>
					</div>
					<div class="col-md-12 padd">
						<div class="db-list-com">
							<div class="ds-boar-title">
								<h2>Edit profile</h2>
								<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
							</div>
							<div class="tz2-form-pay">
								<form class="form-horizontal">
								  
								  <div class="form-group">
								    <label  class="col-sm-3 control-label">Username</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Username">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Mobile</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Mobile">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Date of birth</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Date of birth">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Gender">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Status">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="Address">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">primary Account</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control"  placeholder="primary Account">
								    </div>
								  </div>
								  <div class="form-group">
									    <input type="file" name="img[]" class="file">
											<label for="inputEmail3" class="col-sm-3 control-label">upload profile picture</label>
											<div class="input-group col-sm-9">
											    <span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
											    <input type="text" class="form-control input-lg pic" disabled placeholder="Upload Image" style="height:47px">
											    <span class="input-group-btn">
											    <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-search" aria-hidden="true"></i> Browse</button>
											    </span>
											</div>
									</div>
								   <button type="button" class="btn btn-info btn-lg profile_pass" data-toggle="modal" data-target="#pro_modal">change password
								   </button>
								   <button type="button" class="btn pro_submit">submit
								   </button>
								  <!-- Modal -->
								  <div class="modal fade" id="pro_modal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">Change Password</h4>
								        </div>
								        <div class="modal-body">

								        	<form class="form-horizontal" action="/action_page.php">
											    <div class="form-group">
											      <label class="control-label col-sm-4" for="pwd">current password</label>
											      <div class="col-sm-8">
											        <input type="password" class="form-control change_pwd" id="pwd" placeholder="Enter password" name="pwd">
											      </div>
											    </div>
											    <div class="form-group">
											      <label class="control-label col-sm-4" for="pwd">New Password:</label>
											      <div class="col-sm-8">          
											        <input type="password" class="form-control change_pwd" id="pwd" placeholder="Enter password" name="pwd">
											      </div>
											    </div>
											        <div class="form-group">
											      <label class="control-label col-sm-4" for="pwd">Retype Password:</label>
											      <div class="col-sm-8">          
											        <input type="password" class="form-control change_pwd" id="pwd" placeholder="Enter password" name="pwd">
											      </div>
											    </div>  
											  </form>
								        </div>
								        <div class="modal-footer">
	        								<button type="button" class="btn btn-default save_btn" data-dismiss="modal">Save</button>
	      								</div>
								      </div>
								    </div>
								  </div>
								</form>
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