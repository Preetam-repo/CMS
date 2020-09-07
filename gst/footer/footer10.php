<footer class="footer transparent footer-topbar page-section-pt bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo $base_url; ?>asset/images/bg/02.jpg);">
  <div class="container">
    <div class="row top">
      <div class="col-lg-6 col-md-6 col-sm-4">
        <img class="img-fluid" id="logo-footer" src="<?php echo $base_url; ?><?php echo ((!empty($site_info->websiteLogo))?$site_info->websiteLogo:''); ?>" alt="">
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-8">
        <div class="social text-left sm-mt-0 text-sm-right xs-mt-20">
          <ul>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="divider mt-50 mb-50"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-5 sm-mt-30">
        <div class="about-content">
          <h6 class="mb-20 text-uppercase">about us</h6>
          <p><?php echo $site_info->description; ?></p>
        </div>
      </div>
      <div class="col-lg-7 col-md-7 sm-mt-30 sm-mb-30">
        <div class="about-content">
          <h6 class="mb-20 text-uppercase">Working Time</h6>
          <p><?php echo $site_info->working_time; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copyright mt-50">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <ul class="text-left">
          <!-- <li class="list-inline-item"><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
          <li class="list-inline-item"><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
          <li class="list-inline-item"><a href="#">Privacy Policy </a> </li> -->
        </ul>
      </div>
      <div class="col-md-6">
        <div class="text-left text-md-right xs-mt-15">
          <p><?php echo $site_info->copyright; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>