<?php
$services = $resp->services;
$serviceStyle = json_decode($sectionStyle->services);
?>
<section class="page-section-ptb gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid mx-auto" src="images/about/04.jpg" alt="">
      </div>
      <div class="col-lg-6 sm-mt-50 align-self-center">
        <div class="section-title">
           <h2><?php echo $serviceStyle->title; ?></h2>
        </div> 
         <p><?php echo $serviceStyle->bottom_tag_line; ?></p>

        <div class="row">
          <?php foreach($services as $value){ ?>
          <div class="col-md-12 mt-30">
            <div class="feature-text left-icon">
              <div class="feature-icon theme-color">
                <span class="ti-layers-alt"></span>
              </div>
              <div class="feature-info">
                <h5 class="text-back"><?php echo $value->title; ?></h5>
                   <p><?php echo $value->tag_line; ?></p>
              </div>
            </div>
          </div>
         
        </div>
          <a class="button mt-30"href="<?php echo $value->link_name1; ?>"><?php echo $value->btn_name1; ?> </a>
      </div>
    </div>
      <?php } ?>
  </div>
</section>