<?php include 'includes/header.php';?>

<section class="splashScreen-sec">
	<div class="formScreen-wrap regisSec-wrap">
		<div class="logo text-center">
			<a href="index.php">
				<img src="assets/images/logo.png" alt="logo" class="img-fluid">
			</a>
		</div>
		<form>
            <div class="radio-section-wrap">
                <div class="screen-heading">
                    <p class="purple-heading text-center">Choose Your Account Type</p>
                </div>
                <div class="RadioButtons-sect">
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="user">
                            <input type="radio" name="customRadio" id="user" checked>
                            <div class="customRadio-content">
                                <img src="assets/images/memberimg.png" class="img-fluid" alt="member image">
                            </div>
                        </label>
                        <p>Member</p>
                    </div>
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="student">
                            <input type="radio" name="customRadio" id="student">
                            <div class="customRadio-content">
                                <img src="assets/images/studentimg.png" class="img-fluid" alt="student image">
                            </div>
                        </label>
                        <p>Student</p>
                    </div>
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="party">
                            <input type="radio" name="customRadio" id="party">
                            <div class="customRadio-content">
                                <img src="assets/images/partyimg.png" class="img-fluid" alt="private party">
                            </div>
                        </label>
                        <p>Private Party</p>
                    </div>
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="youth">
                            <input type="radio" name="customRadio" id="youth">
                            <div class="customRadio-content">
                                <img src="assets/images/youthimg.png" class="img-fluid" alt="youtyh image">
                            </div>
                        </label>
                        <p>Youth</p>
                    </div>
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="guest">
                            <input type="radio" name="customRadio" id="guest">
                            <div class="customRadio-content">
                                <img src="assets/images/guestimg.png" class="img-fluid" alt="guest image">
                            </div>
                        </label>
                        <p>studio Guest</p>
                    </div>
                    <div class="RadioButtons-inner-sect">
                        <label class="customRadio" for="staff">
                            <input type="radio" name="customRadio" id="staff">
                            <div class="customRadio-content">
                                <img src="assets/images/staffimg.png" class="img-fluid" alt="staff image">
                            </div>
                        </label>
                        <p>Staff</p>
                    </div>
                </div>
            </div>
			<div class="screen-heading">
				<p class="purple-heading text-center">Additional Information</p>
			</div>
			<div class="fieldBox mb-4">
				<input type="text" placeholder="Full Name">
			</div>
			<div class="fieldBox mb-4">
				<input type="text" placeholder="Phone Number">
			</div>
            <div class="fieldBox mb-4">
				<input type="text" placeholder="Street Address">
			</div>
            <div class="fieldBox mb-4">
				<input type="text" placeholder="State">
			</div>
            <div class="Parent-fieldBox">
                <div class="fieldBox mb-4">
                    <input type="text" placeholder="City">
                </div>
                <div class="fieldBox fieldBox-two mb-4">
                    <input type="text" placeholder="Zip Code">
                </div>
            </div>
			<div class="login-button mt-2 mb-4">
				<button type="button" class="cta-btn w-100" data-bs-toggle="modal" data-bs-target="#verificatonModal">Continue</button>
			</div>
		</form>
	</div>
	<img src="assets/images/vector1.png" alt="img" class="img-fluid vector1">
	<img src="assets/images/vector2.png" alt="img" class="img-fluid vector2">
</section>

<?php include 'includes/footer.php';?>
