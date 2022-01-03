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
        <div class="checkp-pagewrap"> 
            <div class="checkp-main-pagewrap">
			    <form>						
					<!-- form-field-start -->
					    <div class="payment-form-wrap">
                                <!-- profile-start -->
                                <p class="purple-heading mb-3">Profile</p>
                                <div class="profile-wrap-image">
                                    <!-- profile-wrap-start -->
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">
                                            <span class="avatar-icon"><i class="fas fa-plus"></i></span>
                                            </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreviews" style="background-image: url(assets/images/profile-image.jpg);">
                                            </div>
                                        </div>
                                        <div class="detail text-center mt-2">
                                            <p>Mick Damm</p>
                                            <span>ID: 12345</span>
                                        </div>
                                    </div>                                  
                                    <!-- profile-wrap-end -->
                                </div>
                                <!-- profile-end -->
							   <div class="fieldBox mb-4">
									<input type="text" placeholder="Full Name">
								</div>
								<div class="fieldBox mb-4">
									<input type="text" placeholder="Email Address">
								</div>	
                                <div class="fieldBox mb-4">
									<input type="text" placeholder="Phone Number">
								</div>
                                <div class="fieldBox mb-4">
									<input type="text" placeholder="Address">
								</div>
                                <div class="fieldBox mb-4">
									<input type="text" placeholder="State">
								</div>
								<div class="row">
									<div class="col-12 col-md-6 col-lg-6">
										<div class="fieldBox mb-4">
											<input type="text" placeholder="City">	
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-6">
											<div class="fieldBox mb-4">
											<input type="text" placeholder="Zip Code">
										</div>
									</div>
								</div>
                                  <!-- check-start -->
                    <p class="check-text1">Card Details</p>
					<div class="paymentButtons-sect">
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="paypal-2">
								<input type="radio" name="customRadio" id="paypal-2" checked="">
								<div class="customRadio-contentpay">
									<img src="assets/images/paypaal.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="visa-2">
								<input type="radio" name="customRadio" id="visa-2">
								<div class="customRadio-contentpay">
									<img src="assets/images/visaa.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="stripe-3">
								<input type="radio" name="customRadio" id="stripe-3">
								<div class="customRadio-contentpay ">
									<img src="assets/images/stripe.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
						<div class="RadioButtons-pay">
							<label class="customRadiopayment" for="square-4">
								<input type="radio" name="customRadio" id="square-4">
								<div class="customRadio-contentpay">
									<img src="assets/images/square.png" class="img-fluid payment-list-img">
								</div>
							</label>
						</div>
					</div>	 
					<!--check-end  -->
                    <div class="check-out-btn">									
                        <div class="login-button mt-2 mb-4">
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