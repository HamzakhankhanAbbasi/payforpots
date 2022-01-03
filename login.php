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
				<p class="purple-heading text-center">Log in</p>
			</div>
			<div class="fieldBox mb-4">
				<span><i class="far fa-envelope"></i></span>
				<input type="email" placeholder="Email Address">
			</div>
			<div class="fieldBox">
				<span><i class="fas fa-lock"></i></span>
				<input type="password" placeholder="Password" id="password">
				<span class="m-0"><i class="fas fa-eye showPass" onclick="myFunction()"></i></span>
			</div>
			<div class="forgetPassword">
				<a href="javascript:void(0)" class="black-anchor" data-bs-toggle="modal" data-bs-target="#forgetpasswordModal">Forgot Password?</a>
			</div>
			<div class="login-button mt-2 mb-4">
				<button type="submit" class="cta-btn w-100">Log In</button>
			</div>
			<p class="text-center">Don’t have an account? <a href="signup.php" class="orange-anchor">Register</a></p>
		</form>
	</div>
	<img src="assets/images/vector1.png" alt="img" class="img-fluid vector1">
	<img src="assets/images/vector2.png" alt="img" class="img-fluid vector2">
</section>

<?php include 'includes/footer.php';?>