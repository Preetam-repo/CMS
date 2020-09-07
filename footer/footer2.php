<footer class="footer footer-one-page page-section-pt black-bg" style="background: <?php echo $style_master->footer_background; ?>!important;">
 <div class="container">
  <div class="row text-center">
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
       <div class="text-center">
           <i class="ti-map-alt text-white"></i>
           <h5 class="mt-15">Address</h5>
           <p><?php echo $contacts->address; ?></p>
          </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
       <div class="text-center">
         <i class="ti-mobile text-white"></i>
         <h5 class="mt-15">Call Us</h5>
         <p> <?php echo $contacts->phone; ?></p>
        </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
        <div class="text-center">
         <i class="ti-email text-white"></i>
         <h5 class="mt-15">Email Us</h5>
         <p><?php echo $site_info->webmaster_email; ?></p>
       </div>
      </div>
   </div>
   </div>
    <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6">
       <div class="footer-Newsletter text-center mt-30 mb-40">
        <div id="">
          <form class="validate newsletterSubscription">
           <div id="msg"> </div>
            <div id="">
              <input class="form-control" type="email" placeholder="Email address" name="email" value="">
            </div>
              <div class="clear">
                <button type="submit" name="submitbtn"  class="button button-border mt-20 form-button">  <?php echo $newsletter->button_name; ?> </button>
              </div>
            </form>
        </div>
     </div>
    </div>
   <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6">
       <p class="mt-15"><?php echo $site_info->copyright; ?></p>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="social-icons color-hover float-right">
         <ul>
	        <?php 
	        $icons = $socialLinks->icon;
	        $status = $socialLinks->status;
	        foreach ($socialLinks as $key => $value) {
	          if ($key!="id"&&$key!="icon"&&$key!="status") {
	            if ($status->$key) {
	         ?>
	        <li class="social-<?php echo $key;  ?>"><a target="_blank" href="<?php echo $value; ?>"><i class="<?php echo $icons->$key; ?>"></i></a></li>
	        <?php }}} ?>
	      </ul>
       </div>
      </div>
    </div>    
  </div>
  </div>
</footer>