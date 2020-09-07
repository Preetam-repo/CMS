<div class="bg-overlay-black-60 parallax" style="background-image: url(<?php echo $base_url; ?>asset/images/bg/17.jpg);">
 
<!--=================================
 login-->

<section class="section-transparent page-section-pb">
  <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-6 col-md-8">
       <div class="logo text-center mb-30 mt-30">
            <a href="<?php echo $base_url; ?>"><img class="logo-small" id="logo_img" src="<?php echo $base_url; ?><?php echo ((!empty($site_info->websiteLogo))?$site_info->websiteLogo:''); ?>" alt="logo"> </a>
         </div>
        <div class="login-bg clearfix">
           <div class="login-title"> 
             <h2 class="text-white mb-0">Login to your Account</h2>
            </div>
             <form id="signin">
             	<div class="login-form">
               <div class="section-field mb-20">
                 <label class="mb-10" for="name">Username* </label>
                   <input id="name" class="web form-control" type="text" placeholder="Email or Mobile" name="username">
                </div>
                <div class="section-field mb-20">
                 <label class="mb-10" for="Password">Password* </label>
                   <input id="Password" class="Password form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="section-field">
                  <div class="remember-checkbox mb-30">
                     <input type="checkbox" class="form-control" name="two" id="two" />
                     <label for="two"> Remember me</label>
                     <!-- <a href="password-recovery.html" class="float-right">Forgot Password?</a> -->
                    </div>
                  </div>
                <button type="submit" class="button">Login<i class="fa fa-check"></i></button>
                 <p class="mt-20 mb-0">Don't have an account? <a href="signup.php"> Create one here</a></p>
               </div>
             </form>
              <!-- <div class="login-social text-center clearfix">
                <h4 class="theme-color mb-30">Login with Social media</h4>
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
 login-->

 </div>