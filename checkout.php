<?php
	 require_once "header.php";
?>
<div id="apart_banner_area" class="apart-banner">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="apart-banner-title">
				<div class="text-center">
					<h1 style="color: #fff;">CHECKOUT</h1>
					<a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<span class="current">CHECKOUT</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!----checkout---->
<div class="checkout_page">
	<div class="container">
		<div class="row">
			<div class="checkout">
				<div class="col-md-8 checkout-col-left">
					<div class="customer_details">
						<h3 class="page_title">billing details</h3>
						<div class="billing-fields">
						   <p class="col-md-6 form-row">
								<label>First name&nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
								</span>
							</p>
							<p class="col-md-6 form-row-last">
								<label>Last name &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
								</span>
							</p>
							<p class="col-md-12 form-row-country">
								<label>Country &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text">
									<select class="country_name">
										<option>india</option>
										<option>iran</option>
										<option>indonesia</option>
										<option>andrapradesh</option>
									</select>
								</span>
							</p>
							<p class="col-md-12 form-row-add">
								<label>Street address &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="House number and street name" value="">
								</span>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Apartment,suite,unit etc" value="">
								</span>
							</p>
							<p class="col-md-12 form-row-add">
								<label>Town/City &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
								</span>
							</p>
							<p class="col-md-12 form-row-country">
								<label>State &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text">
									<select class="country_name">
										<option>Maharashtra</option>
										<option>Bihar</option>
										<option>Assam</option>
										<option>andrapradesh</option>
									</select>
								</span>
							</p>
							<p class="col-md-12 form-row-add">
								<label>postal code<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
								</span>
							</p>
							<p class="col-md-12 form-row-add">
								<label>Phone<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
								</span>
							</p>
							<p class="col-md-12 form-row-add">
								<label>Email Address &nbsp;<span class="required" title="required">*</span>
								</label>
								<span class="input_text"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" value="">
								</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 checkout-col-right">
					<div class="checkout_right_side">
						<h3>Payment Details</h3>
						<div class="final_total">
							<table class="shop_table">
								<thead>
									<tr>
										<th style="padding-left: 10px;">PRODUCT</th>
										<th style="padding-left: 10px;">TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart-item">
										<td class="product-name">
										 	platinum listing &nbsp;<strong class="product-quantity">× 1</strong></td>
										 	<td class="product-total">
												<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>1700.00</span>		
											</td>
									</tr>
									<tr class="cart-item">
										<td class="product-name">
										 	platinum listing &nbsp;<strong class="product-quantity">× 1</strong></td>
										 	<td class="product-total">
												<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>1700.00</span>		
											</td>
									</tr>
								</tbody>
								<tfoot>
								    <tr>
								      <td>subtotal</td>
								      <td>3400</td>
								    </tr>
								    <tr>
								    	<td>goods & service tax</td>
								    	<td>500</td>
								    </tr>
								    <tr>
								    	<td>total payable amount</td>
								    	<td>3900</td>
								    </tr>
								  </tfoot>
							</table>
							<div class="buy_button">
								<button name="search_price" type="button" class="button search_price lemon mt-36 buy" style="text-align: center!important;margin-left: 25%"><span>Place Order</span>
								</button>
							</div>
							<h3>Payment Methods</h3>
							<div class="row">
								<div class="payment">
									<div class="radio" style="padding-left:20px;">
										<label>
											<input type="radio" name="payment_method" value="1" checked="">
											Credit Card
										</label>
									</div>
									<div class="radio" style="padding-left:20px;">
										<label>
											<input type="radio" name="payment_method" value="1" checked="">
											Debit Card
										</label>
									</div>
									<div class="radio" style="padding-left:20px;">
										<label>
											<input type="radio" name="payment_method" value="1" checked="">
											Netbanking
										</label>
									</div>
									<div class="radio" style="padding-left:20px;">
										<label>
											<input type="radio" name="payment_method" value="1" checked="">
											wallet
										</label>
									</div>
									<div class="radio" style="padding-left:20px;">
										<label>
											<input type="radio" name="payment_method" value="1" checked="">
											cash and cheque
										</label>
									</div>
									<div class="buy_button">
										<button name="search_price" type="button" class="button search_price lemon mt-36 buy" style="margin-left:25%"><span><span>make payment</span></span>
										</button>
										<button name="search_price" type="button" class="button search_price lemon mt-36 buy" style="margin-left:21%"><span><span>back to shopping</span></span>
										</button>
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


<!----checkout ---->
<?php
	 require_once "footer.php";
?>












<!-- footer -->
