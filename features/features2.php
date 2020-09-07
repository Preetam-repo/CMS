<?php
$features = $resp->features;
$serviceStyle = json_decode($sectionStyle->features);
?>
<section class="key-features white-bg page-section-ptb">
  <div class="container">
  <div class="row">
       <div class="col-lg-12 col-md-12">
        <div class="section-title text-center">
            <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
            <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
			<p><?php echo $serviceStyle->bottom_tag_line; ?></p>
          </div>
       </div> 
    </div>
      <div class="row">
  <?php foreach($features as $value){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="feature-text round feature-border text-center mb-30">
            <div class="feature-icon">
            <span aria-hidden="true" class="<?php echo $value->icon; ?> theme-color"></span>
            </div>
            <div class="feature-info"> 
            <h4 class="pb-10"><?php echo $value->title; ?></h4>
            <p><?php echo $value->tag_line; ?></p>
          </div>
          </div> 
        </div>
   <?php } ?>
     </div>
 </div>
</section>