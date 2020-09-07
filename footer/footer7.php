<footer class="footer page-section-pt black-bg" style="background: <?php echo $style_master->footer_background; ?>!important;">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-6 sm-mb-30">
        <div class="about-content">
          <h6 class="text-white mb-30 mt-10 text-uppercase">about us</h6>
          <p><?php echo $site_info->description; ?></p>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 sm-mb-30">
        <div class="about-content">
          <h6 class="text-white mb-30 mt-10 text-uppercase">Working Time</h6>
          <p><?php echo $contacts->working_time; ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 xs-mb-30">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
        <ul class="addresss-info">
          <li>
            <i class="fa fa-map-marker"></i>
            <p><?php echo $contacts->address; ?></p>
          </li>
          <li><i class="fa fa-phone"></i> <a href="tel:<?php echo $contacts->phone; ?>"> <span><?php echo $contacts->phone; ?> </span> </a> </li>
          <li><i class="fa fa-envelope"></i>Email: <?php echo $site_info->webmaster_email; ?></li>
        </ul>
      </div>
      <?php if ($newsletter->status==true) { ?>
      <div class="col-lg-4 col-sm-6">
        <h6 class="text-white mb-30 mt-10 text-uppercase"><?php echo $newsletter->heading; ?></h6>
        <p><?php echo $newsletter->sub_heading; ?></p>
        <div class="footer-Newsletter">
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
      <?php } ?>
    </div>
    <div class="footer-widget mt-20">
      <div class="row">
        <div class="col-lg-6 col-md-6 xs-mb-20">
          <p class="mt-15"><?php echo $site_info->copyright; ?></p>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="social-icons color-hover float-left float-md-right pt-10">
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