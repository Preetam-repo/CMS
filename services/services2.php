  <?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="service white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-8">
        <div class="section-title text-center">
              <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
              <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
              <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
            </div>
         </div>
      </div>

        <div class="row">
	<?php foreach($services as $value){ ?>
      <div class="col-lg-4 col-md-4 mb-30">
          <div class="feature-text box-shadow h-100 text-center">
            <div class="feature-icon">
              <span class="ti-layers-alt theme-color"></span>
            </div>
            <div class="feature-info">
               <h5><?php echo $value->title; ?></h5>
                   <p><?php echo $value->tag_line; ?></p>
            </div>
          </div>
        </div>  
			<?php } ?>
      
      
      </div>
      </div>
</section>