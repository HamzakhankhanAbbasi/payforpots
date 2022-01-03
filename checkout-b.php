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
        <div class="checkb-main-pagewrap"> 
            <div class="checkb-pagewrap">
                <p class="purple-heading">Card Detail</p>
                <p class="check-text1">Select Your Payment Gateway</p>
			    <form>	
					<!-- check-start -->
					<div class="paymentButtons-sect">
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="paypal-1">
								<input type="radio" name="customRadio" id="paypal-1" checked="">
								<div class="customRadio-contentpay">
									<img src="assets/images/paypaal.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="visa-1">
								<input type="radio" name="customRadio" id="visa-1">
								<div class="customRadio-contentpay">
									<img src="assets/images/visaa.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="stripe-1">
								<input type="radio" name="customRadio" id="stripe-1">
								<div class="customRadio-contentpay ">
									<img src="assets/images/stripe.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="square-1">
								<input type="radio" name="customRadio" id="square-1">
								<div class="customRadio-contentpay">
									<img src="assets/images/square.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
					</div>	 
					<!--check-end  -->
					<!-- form-field-start -->
					    <div class="payment-form-wrap">
							<div class="fieldBox mb-4">
									<input type="text" placeholder="Card Holder Name">
								</div>
								<div class="fieldBox mb-4">
									<input type="text" placeholder="Card Number">
								</div>	
								<div class="row">
									<div class="col-12 col-md-6 col-lg-6">
										<div class="fieldBox mb-4">
											<input type="text" placeholder="Expiry Date">	
											<span><i class="fas fa-calendar-alt"></i></span>
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-6">
											<div class="fieldBox mb-4">
											<input type="text" placeholder="CVV">
										</div>
									</div>
								</div>
								<div class="check-out-btn">									
									<div class="login-button w-100 mt-2 mb-4">
										<button type="submit" class="cta-btn">Save</button>
									</div>							
								</div>
					    </div>					
					<!-- form-field-end -->
				</form>
            </div>
       </div>   
    </div>
</section>
<?php include 'includes/footer.php';?>