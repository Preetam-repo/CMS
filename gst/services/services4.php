<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h6 ><?php echo $serviceStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
          <p ><?php echo $serviceStyle->bottom_tag_line; ?></p>
        </div>
      </div>
    </div>
    <div class="row">
       <?php foreach($services as $value){ ?>
      <div class="col-lg-6 col-sm-6 mb-30 ">
        <div class="media border p-4">
          <div class="feature-icon media-icon mr-4">
           <span class="ti-layers-alt theme-color"></span>
          </div>
          <div class="media-body">

            <h5 class="text-back"><?php echo $value->title; ?></h5>
              <p><?php echo $value->tag_line; ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>