<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="page-section-ptb position-relative">
   <div class="container">
   <div class="row">
      <div class="col-md-8">
        <div class="section-title">
          <h6><?php echo $serviceStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $serviceStyle->title; ?></h2>
          <p><?php echo $serviceStyle->bottom_tag_line; ?></p>
        </div>
      </div>
    </div>
     <div class="row">
	 <?php foreach($services as $value){ ?>
	 <div class="col-md-4 xs-mb-40 ">
          <div class="feature-box h-100 <?php echo (empty($value->bg_img))?'':'active'; ?>">
            <div class="feature-box-content">
            <i class="<?php echo $value->icon; ?>"></i>
            <h4><?php echo $value->title; ?></h4>
            <p><?php echo $value->tag_line; ?></p>
            </div>
            <a href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?></a>
            <div class="feature-box-img" style="background-image: url('<?php echo $base_url.$value->bg_img; ?>');"></div>
            <span class="feature-border"></span>
          </div>
        </div>
	 <?php } ?>
      </div>
   </div> 
</section>