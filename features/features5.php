<?php
$features = $resp->features;
$serviceStyle = json_decode($sectionStyle->features);
?>
<section class="white-bg page-section-ptb">
  <div class="container-fluid">
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
     <div class="col-lg-3 col-sm-6 border-right pl-0 pl-sm-40">
       <div class="feature-text p-4">
       <div class="feature-icon">
        <span class="ti-desktop theme-color"></span>
        </div>
        <div class="feature-info">
            <h5><?php echo $value->title; ?></h5>
             <p><?php echo $value->tag_line; ?> </p>
         </div>
     </div>
    </div>
   
   </div>
  </div>
</section>