<?php $contact = json_decode($sectionStyle->contact) ?>
<section class="contact white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h6><?php echo $contact->top_tag_line; ?></h6>
          <h2><?php echo $contact->title; ?></h2>
          <p><?php echo $contact->bottom_tag_line; ?></p>
        </div>
      </div>
    </div>
    <div class="touch-in white-bg">
      <div class="row">
        <div class="col-lg-4 col-md-4 sm-mb-30">
          <div class="contact-box text-center h-100">
            <i class="ti-map-alt theme-color"></i>
            <h5 class="uppercase mt-20">Address</h5>
            <p class="mt-20"><?php echo $contacts->address; ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 sm-mb-30">
          <div class="contact-box text-center h-100">
            <i class="ti-mobile theme-color"></i>
            <h5 class="uppercase mt-20">Phone</h5>
            <p class="mt-20"> <?php echo $contacts->phone; ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 sm-mb-30">
          <div class="contact-box text-center h-100">
            <i class="ti-email theme-color"></i>
            <h5 class="uppercase mt-20">Email</h5>
            <p class="mt-20"><?php echo $site_info->webmaster_email; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <p class="mt-50 mb-30"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
        <form  role="form" class="contactUs">
          <div class="contact-form clearfix">
            <div class="section-field">
              <input id="name" type="text" placeholder="Name*" class="form-control"  name="name" required="required">
            </div>
            <div class="section-field">
              <input type="email" placeholder="Email*" class="form-control" name="email" required="required">
            </div>
            <div class="section-field">
              <input type="text" placeholder="Phone*" class="form-control" name="phone" required="required">
            </div>
            <div class="section-field textarea">
              <input class="form-control input-message" placeholder="Subject*" type="text" name="subject" required="required"></input>
            </div>
            <div class="section-field textarea">
              <textarea class="form-control input-message" placeholder="Query*" rows="7" name="query" required="required"></textarea>
            </div>
            <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
            <div class="section-field submit-button">
              <button id="submit" name="submit" type="submit" value="Send" class="button"> Send your message </button>
            </div>
          </div>
        </form>
        <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
      </div>
    </div>
  </div>
</section>
<!--=================================
contact-->

<!--=================================
contact map -->
<!-- <section class="contact-map clearfix o-hidden">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12">
        <div style="width: 100%; height: 350px;" id="map" class="g-map" data-type='black'></div>
      </div>
    </div>
  </div>
</section> -->