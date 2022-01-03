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
		<div class="measureScreen-wrap">
			<div class="screen-heading">
				<p class="purple-heading">Measure</p>
			</div>
			<div class="measureScreen-innerWrap">
				<form>
					<div class="avatar-upload">
						<div class="avatar-edit">
							<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
							<label for="imageUpload">Choose File</label>
						</div>
						<div class="avatar-preview">
							<div id="imagePreview" style="background-image: url(assets/images/upload-img.png);">
							</div>
						</div>
					</div>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Item Name">
					</div>
					<p class="black-title mb-2">Measurements</p>
					<div class="measurementBox mb-3">
						<input type="text" class="measue-field" placeholder="X">
						<span>X</span>
						<input type="text" class="measue-field" placeholder="Y">
						<span>X</span>
						<input type="text" class="measue-field" placeholder="Z">
						<span>X &nbsp &nbsp 0.06 = </span>
						<input type="text" class="total-field" placeholder="Total" disabled="disabled">
					</div>
					<p class="black-title mb-2">Details</p>
					<textarea class="detailBox mb-4" placeholder="Item Description"></textarea>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Artist Notes (Optional)">
					</div>
					<div class="fieldBox mb-4">
						<input type="text" placeholder="Notes for Firing (Optional)">
					</div>
					<p class="black-title mb-4">Quantity</p>
					<div class="quaitity-box mb-4">
						<div class="plus-minus">
							<span class="minus"><i class="fas fa-minus"></i></span>
							<input type="number" class="count measue-field m-0" name="qty" value="1" id="quantity-select">
							<span class="plus"><i class="fas fa-plus"></i></span>
						</div>
					</div>
					<div class="measue-button">
						<button type="submit" class="cta-btn w-100">Add To Cart</button>
					</div>
				</form>
				<div class="measure-rightCol">
					<div class="infoBox-wrap mb-4">
						<button type="button" class="info-btn">
							<img src="assets/images/info-icon.png" alt="img" class="img-fluid">
						</button>
						<div class="infoBox">
							<h5>Note:</h5>
							<span>X = Width</span>
							<span>Y = Height</span>
							<span>Z = Depth</span>
							<span>X * Y * Z * 0.06(Cents) = Total (Discount Inclusive)</span>
						</div>
					</div>
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
</section>

<?php include 'includes/footer.php';?>