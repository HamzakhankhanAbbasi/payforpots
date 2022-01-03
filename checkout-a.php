<?php include 'includes/header.php';?>
<section class="homeScreen-wrap">
	<button type="button" class="toggle-btn"><i class="fas fa-bars"></i></button>
	<div class="loggedIn">
		<div class="image">
			<img src="assets/images/profile-image.jpg" alt="img" class="img-fluid">
		</div>
		<div class="detail">
			<p>Mick Damm</p>
			<span>ID: 12345</span>
		</div>
	</div>
	<aside>
		<button type="button" class="toggleClose-btn"><i class="fas fa-times"></i></button>
		<div class="home-logo text-center">
			<a href="home-screen.php">
				<img src="assets/images/white-logo.png" alt="logo" class="img-fluid">
			</a>
		</div>
		<div class="screenLinks">
			<ul>
				<li>
					<a href="home-screen.php" class="activeLink">
						<span><i class="fas fa-home"></i></span> Home
					</a>
				</li>
				<li>
					<a href="history.php">
						<span><i class="fas fa-history"></i></span> History
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span><i class="fas fa-power-off"></i></span> Logout
					</a>
				</li>
			</ul>
		</div>
	</aside>
	<div class="rightCol">
	  <div class="check-a-mainwrap">	
		<div class="measureScreen-wrap">
			<div class="screen-heading">
				<p class="purple-heading">Checkout</p>
				<p class="check-text1">Select Your Payment Gateway</p>
			</div>
			<div class="measureScreen-innerWrap">
				<form>
					<div class="payment-checkoutwrap mb-4">
                       <div class="payment-checkout-image">
                            <img src="assets/images/paypaal.png" class="img-fluid payment-list-img">
					   </div>
					   <div class="payment-checkout-image">
						  <a href="checkout-b.php">
					        <img src="assets/images/plus-image.png" class="img-fluid payment-list-img">
						  </a> 	
							<span class="add-text1">Add New Card</span>
					   </div>

					</div>
					<p class="black-title mb-3">Billing Details</p>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Email Address">
					</div>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Phone Number">
					</div>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Street Address">
					</div>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6">
							<div class="fieldBox mb-4">
							<input type="text" placeholder="City">
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6">
						   <div class="fieldBox mb-4">
							  <input type="text" placeholder="Postal Code">
							</div>
						</div>
					</div>
					<textarea class="detailBox mb-4" placeholder="Additional Information"></textarea>
					<div class="measue-button">
						<button type="submit" class="cta-btn w-100">Add To Cart</button>
					</div>
				</form>
				<div class="measure-rightCol">
					<div class="cart-detailBox">
						<div class="cartDetail-left">
							<p class="black-title mb-4">Cart Details</p>
							<div class="detailCart-productInfo">
								<div class="left">
									<span></span>
								</div>
								<div class="right">
									<p class="productCart-title">Lorem Ipsum Dummy Product</p>
									<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p>
								</div>
							</div>
							<div class="detailCart-button mt-4">
								<a href="cart-a.php" class="cta-btn w-100">Go To Cart</a>
							</div>
						</div>
						<div class="cartDetail-right">
							<p class="black-title mb-4">Charges</p>
							<span class="black-title">$x</span>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div>
	</div>
</section>
<?php include 'includes/footer.php';?>