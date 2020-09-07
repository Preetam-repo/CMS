<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="our-services page-section-ptb gray-bg">
  <div class="container">
     <div class="row">
       <div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
           <h2><?php echo $serviceStyle->title; ?></h2>
        
         <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
           </div>
            </div>
         </div>
      
         <div class="row">
          <?php foreach($services as $value){ ?>
          <div class="col-lg-4 col-md-4">
          <div class="feature-text box-shadow text-center mb-30 white-bg">
            <div class="feature-icon">
            <span aria-hidden="true" class="ti-layers-alt"></span>
            </div>
           <div class="fature-info"> 
             <h4 class="text-back pt-20 pb-10"><?php echo $value->title; ?></h4>
                   <p><?php echo $value->tag_line; ?></p>
          <a class="button mt-30"href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?> </a>
           </div>
          </div>
        </div>
         <?php } ?> 
         
       </div>
      
  </div>
</section>