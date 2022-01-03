<footer></footer>

<!-- VERIFICATION MODAL START
-------------------------------->
<div class="modal verification-poup fade" id="verificatonModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<form>
				<div class="modal-body">
					<p class="purple-heading text-center">Verification Email Sent!</p>
					<div class="checkmark-circle">
						<div class="checkmark draw"></div>
					</div>
					<div class="verification-button">
						<button type="submit" class="cta-btn w-100">Continue</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- VERIFICATION MODAL END
-------------------------------->

<!-- FORGET PASSWORD MODAL START
-------------------------------->
<div class="modal verification-poup forgetpasswordModal-popup  fade" id="forgetpasswordModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<form>
				<div class="modal-body">
					<p class="purple-heading text-center">Create New Password!</p>
					<div class="fieldBox mt-4 mb-4" bis_skin_checked="1">
						<span><i class="fas fa-lock"></i></span>
						<input type="password" placeholder="Old Password" id="password">
					</div>
					<div class="fieldBox mb-4" bis_skin_checked="1">
						<span><i class="fas fa-lock"></i></span>
						<input type="password" placeholder="Create New Password">
					</div>
					<div class="verification-button">
						<button type="submit" class="cta-btn w-100">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- FORGET PASSWORD MODAL END
-------------------------------->

<!--  ADD MORE CART MODAL START
-------------------------------->
<div class="modal addcart-modal forgetpasswordModal-popup  fade" id="addCartModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<form>
				<div class="modal-body">
					<!-- modal-body-start -->
					<div class="mid-content-wrap">
						<form>
							<!-- image-uploader-start -->
							<div class="avatar-upload">
								<div class="avatar-edit">
									<input type='file' id="imageUploads" accept=".png, .jpg, .jpeg" />
									<label for="imageUploads">Choose File</label>
								</div>
								<div class="avatar-preview">
									<div id="imagePreviewcart" style="background-image: url(assets/images/upload-img.png);">
									</div>
								</div>
							</div>
							<!-- image-uploader-end -->
							<div class="fieldBox mb-2">
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
							<p class="black-title mb-2">Quantity</p>
							<div class="quaitity-box mb-3">
								<div class="plus-minus">
									<span class="minus"><i class="fas fa-minus"></i></span>
									<input type="number" class="count measue-field m-0" name="qty" value="1" id="quantity-select">
									<span class="plus"><i class="fas fa-plus"></i></span>
								</div>
							</div>
							<p class="black-title mb-3">Details</p>
							<textarea class="detailBox mb-3" placeholder="Item Description"></textarea>
							<div class="fieldBox mb-3">
								<input type="text" placeholder="Artist Notes (Optional)">
							</div>
							<div class="fieldBox mb-4">
								<input type="text" placeholder="Notes for Firing (Optional)">
							</div>
							<div class="measue-button">
								<button type="submit" class="cta-btn w-100">Update</button>
					      	</div> 
						</form>
					</div>
					<!-- modal-body-end -->
				</div>
			</form>
		</div>
	</div>
</div>
<!-- ADD MORE CART MODAL END
-------------------------------->

<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/stellarnav.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script> 
<script src="assets/js/custom.js"></script> 


</body>
</html>
