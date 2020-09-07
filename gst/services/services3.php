<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="page-section-ptb bg-overlay-black-70 parallax" data-jarallax='{"speed": 0.6}' style="background: url('<?php echo $serviceStyle->img; ?>');">
 <div class="container">
  <div class="row">
      <div class="col-lg-8">
        <div class="section-title">
          <h6 class="text-white"><?php echo $serviceStyle->top_tag_line; ?></h6>
          <h2 class="text-white title-effect"><?php echo $serviceStyle->title; ?></h2>
          <p class="text-white"><?php echo $serviceStyle->bottom_tag_line; ?></p>
        </div>
      </div>
    </div>
  <div class="row">
  <?php foreach($services as $value){ ?>
     <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">       
       <div class="text-white">
        <span class="<?php echo $value->icon; ?>" aria-hidden="true"></span>
        <span class="timer" style="display: none" data-to="4905" data-speed="10000">4905</span>
        <label><?php echo $value->title; ?></label>
        <p class="text-white"><?php echo $value->tag_line; ?></p>
      </div>
	  <a href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?><i class="fa fa-angle-right"></i></a>
      </div>
	  <?php } ?>
  </div>
 </div>
</section>