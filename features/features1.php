<?php
$features = $resp->features;
$serviceStyle = json_decode($sectionStyle->features);
?>
<section class="awesome-features gray-bg page-section-ptb pos-r">
   <div class="side-background">
        <div class="col-lg-5 img-side img-left d-xs-block d-lg-block d-none">
            <div class="row page-section-pt mt-30">
              <img src="<?php echo $serviceStyle->img; ?>" alt="">
            </div>
        </div>
    </div>
   <div class="container">
     <div class="row justify-content-end">     
       <div class="col-lg-7">
       <div class="section-title">
          <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
          <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
        </div>
		<?php foreach($features as $value){ ?>
         <div class="row">
          <div class="col-md-6 col-sm-6">
             <div class="feature-text text-left mb-30">
             <div class="feature-icon">
              <span class="<?php echo $value->icon; ?>"></span>
              </div>
              <div class="feature-info">
                <h5><?php echo $value->title; ?></h5>
                 <p><?php echo $value->tag_line; ?></p>
                <a class="button icon-color" href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?><i class="fa fa-angle-right"></i></a>
               </div>
           </div>
          </div>
         </div>
		 <?php } ?>
       </div>
     </div>
   </div>
 </section>