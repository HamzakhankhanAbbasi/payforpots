<?php include 'includes/header.php';?>

<section class="splashScreen-sec">
	<div class="formScreen-wrap">
		<div class="logo text-center">
			<a href="index.php">
				<img src="assets/images/logo.png" alt="logo" class="img-fluid">
			</a>
		</div>
		<form>
			<div class="screen-heading">
				<p class="purple-heading text-center">Register</p>
			</div>
			<div class="fieldBox mb-4">
				<span><i class="far fa-user"></i></span>
				<input type="text" placeholder="User Name">
			</div>
			<div class="fieldBox mb-4">
				<span><i class="fas fa-lock"></i></span>
				<input type="password" placeholder="Create Password" id="password">
				<span class="m-0"><i class="fas fa-eye showPass" onclick="myFunction()"></i></span>
			</div>
			<div class="fieldBox">
				<span><i class="fas fa-lock"></i></span>
				<input type="password" placeholder="Confirm Password">
			</div>
			<div class="login-button my-4">
				<a href="registration-process.php" class="cta-btn w-100">Register</a>
			</div>
			<p class="text-center">Already have an account? <a href="login.php" class="orange-anchor">Log In</a></p>
		</form>
	</div>
	<img src="assets/images/vector1.png" alt="img" class="img-fluid vector1">
	<img src="assets/images/vector2.png" alt="img" class="img-fluid vector2">
</section>

<?php include 'includes/footer.php';?>