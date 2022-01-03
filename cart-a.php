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
					<a href="javascript:void(0)" class="activeLink">
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
        <div class="cart-main-pagewrap"> 
                <div class="cart-pagewrap">
                        <p class="purple-heading">Cart</p>
                        <div class="table-responsive"> 
                            <table class="table table-pots table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="first-head-input"><input type="checkbox" class="input-check"></th>
                                        <th scope="col" class="first-head"><p class="head-text">Image</p></th>
                                        <th scope="col"  class="second-head"><p class="head-text">Item Name</p></th>
                                        <th scope="col"  class="second-head"><p class="head-text">Dimensions</p></th>
                                        <th scope="col" class="four-head"><p class="head-text">Item Description</p></th>
                                        <th scope="col" class="six-head"><p class="head-text">charges</p></th>
                                        <th scope="col" class="six-head"><p class="head-text">Paid</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-first-input"><input type="checkbox" class="input-check"></td>
                                        <td class="table-first-content">
                                            <div class="profileimage-wrap">
                                                <img src="assets/images/prof-imag.png" class="img-fluid">
                                            </div>                                 
                                        </td>
                                        <td class="table-second-content"><p class="head-text-1">Lorem Ipsum Dummy Item</p></td>
                                        <td class="table-second-content"><p class="head-text-1">3X3x3</p></td>
                                        <td class="table-third-content"><p class="head-text-1 head-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p></td>
                                        <td class="table-fourth-content"><p class="head-text-4">$0.00</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">$5.99</p></td>
                                    </tr>
                                    <tr>
                                        <td class="table-first-input"><input type="checkbox" class="input-check"></td>
                                        <td class="table-first-content">
                                            <div class="profileimage-wrap">
                                                <img src="assets/images/prof-imag.png" class="img-fluid">
                                            </div>                                 
                                        </td>
                                        <td  class="table-second-content"><p class="head-text-1">Lorem Ipsum Dummy Item</p></td>
                                        <td class="table-second-content"><p class="head-text-1">36X36x36</p></td>
                                        <td class="table-third-content"><p class="head-text-1 head-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p></td>
                                        <td class="table-fourth-content"><p class="head-text-4">$0.00</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">$5.99</p></td>
                                    </tr>
                                    <tr>
                                        <td class="table-first-input"></td>
                                        <td  class="table-second-content"></td>
                                        <td class="table-second-content"></td>
                                        <td class="table-third-content"></td>
                                        <td class="table-fourth-content"></td>
                                        <td class="table-fourth-content"></td>
                                        <td class="table-fourth-content"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-sev-content" colspan="5"><p class="head-text-7">Add Promo code</p></td>
                                        <td class="table-eigh-content"><p class="head-text-4">$3.99</p></td>
                                        <td class="table-eigh-content"><p class="head-text-4">$11.98</p></td>
                                    </tr>
                                    <tr>
                                        <td class="table-sev-content" colspan="6"><p class="head-text-7 text-alignn">Total</p></td>
                                        <td class="table-eigh-content"><p class="head-text-4 ">$15.97</p></td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                        <!-- button-wrap-start -->
                        <div class="cart-btn-wrap">
                            <div class="cart-btn-leftwrap">
                                <div class="login-button mt-2 mb-4">
                                    <button type="submit" class="cta-btn">Remove</button>
                                </div>                          
                                <div class="login-button mt-2 mb-4">
                                    <a href="cart-b.php" class="cta-btn">Update</a>
                                    <!--<button type="submit" class="cta-btn">Update</button>-->
                                </div>                          
                                <div class="login-button mt-2 mb-4">
                                    <button type="submit" class="cta-btn" data-bs-toggle="modal" data-bs-target="#addCartModal">Add More</button>
                                </div>
                            </div>
                            <div class="cart-btn-rightwrap">
                                <div class="login-button mt-2 mb-4">
                                    <a href="checkout-a.php" class="cta-btn">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- button-wrap-end -->
                </div>
       </div>   
    </div>
</section>
<?php include 'includes/footer.php';?>