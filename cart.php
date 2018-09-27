<?php
	 require_once "header.php";
?>
<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">CART</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current">CART</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- main cart -->
	<div class="cart-view">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive"> 
				<div class="cart-table">
					<table>
						<tbody>
							<tr>
								<th>product</th>
								<th>price</th>
								<th>quantity</th>
								<th>subtotal</th>
								<th>&nbsp;</th>
							</tr>
							<tr>
								<td>platinum listing</td>
								<td><span class="small-text">price</span><i class="fa fa-inr" aria-hidden="true"></i>3199
								</td>
								<td><span class="small-text">Quantity</span> <input type="text" class="quanitity-input"></td>
								<td><span class="small-text">Subtotal</span><i class="fa fa-inr" aria-hidden="true"></i>3199.00</td>
								<td><a href="#" class="detete"><i class="fa fa-trash"></i></a> <a href="#" class="edit"><i class="fa fa-pencil"></i></a></td>
							</tr>
							<tr>
								<td>platinum listing</td>
								<td><span class="small-text">price</span><i class="fa fa-inr" aria-hidden="true"></i>3199
								</td>
								<td><span class="small-text">Quantity</span> <input type="text" class="quanitity-input"></td>
								<td><span class="small-text">Subtotal</span><i class="fa fa-inr" aria-hidden="true"></i>3199.00</td>
								<td><a href="#" class="detete"><i class="fa fa-trash"></i></a> <a href="#" class="edit"><i class="fa fa-pencil"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
				<div class="col-xs-12 col-md-6 discount-box">
					<h3>DISCOUNT CODES</h3>
					<label>Enter your coupon code if you have one.</label>
					<div class="discount-input">
						
						<input type="text">
						<input type="submit" class="submit-btn" value="apply coupon">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 cart-total">
					<div class="total-row">
                         <p>Cart Subtotal: <span><i class="fa fa-inr" aria-hidden="true"></i> 4122</span></p>
                    </div>
                    <div class="total-row">
                         <p>Service Tax: <span><i class="fa fa-inr" aria-hidden="true"></i> 500</span></p>
                    </div>
                    <div class="total-row">   
                         <p><strong>Order Total:</strong> <span><i class="fa fa-inr" aria-hidden="true"></i>4622</span></p>
                     </div>
				</div>
			
				<div class="cart-btnBlock">
                        <a href="buy.php" class="submit-btn"><i class="fa fa-chevron-left"></i>Continue Shopping </a>
                        <a href="checkout.php" class="submit-btn proceed_btn">Proceed to Checkout <i class="fa fa-chevron-right"></i></a>
       		     </div>
       		 </div>
            </div>
		</div>
	</div>

	<?php
		 require_once "footer.php";
	?>