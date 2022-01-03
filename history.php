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
					<a href="home-screen.php">
						<span><i class="fas fa-home"></i></span> Home
					</a>
				</li>
				<li>
					<a href="history.php" class="activeLink">
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
        <div class="history-main-pagewrap"> 
                <div class="history-pagewrap">
                        <p class="purple-heading">History</p>
                        <div class="table-responsive"> 
                            <table class="table table-pots table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="first-head"><p class="head-text">Image</p></th>
                                        <th scope="col"  class="second-head"><p class="head-text">Item Name</p></th>
                                        <th scope="col"  class="second-head"><p class="head-text">Dimensions</p></th>
                                        <th scope="col" class="four-head"><p class="head-text">Item Description</p></th>
                                        <th scope="col" class="five-head"><p class="head-text">Date</p></th>
                                        <th scope="col" class="five-head"><p class="head-text">Paid</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-first-content">
                                            <div class="profileimage-wrap">
                                                <img src="assets/images/prof-imag.png" class="img-fluid">
                                            </div>                                 
                                        </td>
                                        <td class="table-second-content"><p class="head-text-1">Lorem Ipsum Dummy Item</p></td>
                                        <td class="table-second-content"><p class="head-text-1">3X3x3</p></td>
                                        <td class="table-third-content"><p class="head-text-1 head-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">12-10-2021</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">$5.99</p></td>
                                    </tr>
                                    <tr>
                                        <td class="table-first-content">
                                            <div class="profileimage-wrap">
                                                <img src="assets/images/prof-imag.png" class="img-fluid">
                                            </div>                                 
                                        </td>
                                        <td  class="table-second-content"><p class="head-text-1">Lorem Ipsum Dummy Item</p></td>
                                        <td class="table-second-content"><p class="head-text-1">36X36x36</p></td>
                                        <td class="table-third-content"><p class="head-text-1 head-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">25-11-2021</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">$5.99</p></td>
                                    </tr>
                                    <tr>
                                        <td class="table-first-content">
                                            <div class="profileimage-wrap">
                                                <img src="assets/images/prof-imag.png" class="img-fluid">
                                            </div>                                 
                                        </td>
                                        <td  class="table-second-content"><p class="head-text-1">Lorem Ipsum Dummy Item</p></td>
                                        <td class="table-second-content"><p class="head-text-1">36X36x36</p></td>
                                        <td class="table-third-content"><p class="head-text-1 head-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">25-11-2021</p></td>
                                        <td class="table-fourth-content"><p class="head-text-1">$5.99</p></td>
                                    </tr>
                                    <tr>
                                        <td ></td>
                                        <td  class="table-second-content"></td>
                                        <td class="table-second-content"></td>
                                        <td class="table-third-content"></td>
                                        <td class="table-fourth-content"></td>
                                        <td class="table-fourth-content"></td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                </div>
       </div>   
    </div>
</section>
<?php include 'includes/footer.php';?>