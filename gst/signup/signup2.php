<section class="login-box-main login-gradient-03 height-100vh page-section-ptb">
	<div class="login-box-main-middle">
		<div class="container">
			<div class="row justify-content-center no-gutter">
				<div class="col-lg-2 col-md-4">
					<div class="login-box-left  white-bg">
						<img class="logo-small" src="<?php echo $base_url; ?><?php echo ((!empty($site_info->websiteLogo))?$site_info->websiteLogo:''); ?>" alt="">
						<ul class="nav">
							<li><a href="signin.php"> <i class="ti-user"></i> Login</a></li>
							<li class="active"><a href="#"> <i class="ti-pencil-alt"></i>Signup</a></li>
						</ul>
						<div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
							<!-- <ul>
										<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 theme-bg">
					<div class="login-box pos-r text-white login-box-theme">
						<h2 class="text-white mb-20">Welcome to webster</h2>
						<p class="mb-10 text-white">Create tailor-cut websites </p>
						<p class="text-white">The exclusive multi-purpose responsive template.</p>
						<ul class="list-unstyled pos-bot pb-40">
							<li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
							<li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="login-box pb-50 clearfix white-bg">
						<h3 class="mb-30">Signup</h3>
						<form id="signup">
							<div class="row">
								<div class="section-field mb-20 col-sm-6">
									<label class="mb-10" for="fname">First name* </label>
									<input id="fname" class="web form-control" type="text" placeholder="First name" name="firstName" required="required">
								</div>
								<div class="section-field mb-20 col-sm-6">
									<label class="mb-10" for="lname">Last name* </label>
									<input id="lname" class="web form-control" type="text" placeholder="Last name" name="lastName" required="required">
								</div>
							</div>
							<div class="section-field mb-20">
								<label class="mb-10" for="email">Email* </label>
								<input id="email" type="email" placeholder="Email*" class="form-control" name="email" required="required">
							</div>
							<div class="section-field mb-20">
								<label class="mb-10" for="mobile">Mobile* </label>
								<input id="mobile" type="text" placeholder="Mobile*" class="form-control" name="mobile" required="required">
							</div>
							<div class="section-field mb-20">
								<label class="mb-10" for="Password">Password* </label>
								<input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
							</div>
							<button type="submit" class="button">Signup<i class="fa fa-check"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>