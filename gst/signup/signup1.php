<div class="bg-overlay-black-60 parallax" style="background-image: url(<?php echo $base_url; ?>asset/images/bg/17.jpg);">
  <!--=================================
  Signup-->
  <section class="section-transparent page-section-pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="logo text-center mb-30 mt-30">
            <a href="<?php echo $site_url; ?>"><img class="logo-small" id="logo_img" src="<?php echo $base_url; ?><?php echo ((!empty($site_info->websiteLogo))?$site_info->websiteLogo:''); ?>" alt="logo"> </a>
          </div>
          <div class="login-bg clearfix">
            <div class="login-title">
              <h2 class="text-white mb-0">Signup to your Account</h2>
            </div>
            <form id="signup">
              <div class="login-form">
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
                  <label class="mb-10" for="name">Mobile* </label>
                  <input type="text" placeholder="Mobile*" class="form-control" name="mobile" required="required">
                </div>
                <div class="section-field mb-20">
                  <label class="mb-10" for="name">Email* </label>
                  <input type="email" placeholder="Email*" class="form-control" name="email" required="required">
                </div>
                <div class="section-field mb-20">
                  <label class="mb-10" for="Password">Password* </label>
                  <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
                </div>
                <button type="submit" class="button">Signup<i class="fa fa-check"></i></button>
                <p class="mt-20 mb-0">Don't have an account? <a href="signin.php"> Create one here</a></p>
              </div>
            </form>
            <!-- <div class="login-social text-center clearfix">
              <h4 class="theme-color mb-30">Signup with Social media</h4>
              <ul>
                <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i> google+</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Signup-->
</div>