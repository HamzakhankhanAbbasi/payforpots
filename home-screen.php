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
		<div class="homeInner-wrap">
			<div class="homeInner-links">
				<a href="measure.php" class="homeInner-link">
					<img src="assets/images/home-icon1.png" alt="img" class="img-fluid mb-2">
					<p>Measure</p>
				</a>
				<a href="cart-a.php" class="homeInner-link">
					<img src="assets/images/home-icon2.png" alt="img" class="img-fluid mb-2">
					<p>Cart</p>
				</a>
				<a href="message-screen.php" class="homeInner-link">
					<img src="assets/images/home-icon3.png" alt="img" class="img-fluid mb-2">
					<p>Messages</p>
				</a>
				<a href="profile.php" class="homeInner-link">
					<img src="assets/images/home-icon4.png" alt="img" class="img-fluid mb-2">
					<p>Profile</p>
				</a>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>