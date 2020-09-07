<?php
$features = $resp->features;
$serviceStyle = json_decode($sectionStyle->features);
?>
<section class="page-section-ptb" data-jarallax='{"speed": 0.6}' style="background-image: url('<?php echo $serviceStyle->img; ?>');">
   <div class="container">
    <div class="row">
           <div class="col-lg-8">
             <div class="section-title">
              <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
              <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
              <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
            </div>
          </div>            
          </div>
		  <div class="row">
	<?php foreach($features as $value){ ?>
           <div class="col-lg-4 col-md-6">
            <div class="feature-text left-icon mb-40">
                <div class="feature-icon">
                <span class="<?php echo $value->icon; ?> theme-color" aria-hidden="true"></span>
              </div>
              <div class="feature-info">
                <h5 class="text-back"><?php echo $value->title; ?></h5>
                <p><?php echo $value->tag_line; ?></p>
              </div>
           </div>
           </div>
		   <?php } ?>
        </div>
   </div>
 </section>