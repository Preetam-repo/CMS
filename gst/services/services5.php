<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section id="services" class="page-section-ptb gray-bg position-relative">
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
         <div class="section-title text-center">
            <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
          <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
         </div>
     </div>
   </div>
   <div class="row">
       <?php foreach($services as $value){ ?>
     <div class="col-lg-3 col-sm-6">       
          <div class="feature-text left-icon mb-30">
             <div class="feature-icon">
              <span class="ti-palette theme-color" aria-hidden="true"></span>
              </div>
            <div class="feature-info">
              <h5 class="mt-20"><?php echo $value->title; ?> </h5>
               <p><?php echo $value->tag_line; ?> </p>
                <a class="button icon-color" href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?><i class="fa fa-angle-right"></i></a>
             
           </div>
          </div> 
      </div>
      <?php } ?>
   </div>
 </div>
</section>