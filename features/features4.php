<?php
$features = $resp->features;
$serviceStyle = json_decode($sectionStyle->features);
?>
<section class="custom-content-02 white-bg-bg page-section-ptb">
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
      <div class="col-lg-4 col-md-4 col-sm-4 mb-60">
        <div class="feature-text border-box">
          <div class="feature-icon">
            <span class="<?php echo $value->icon; ?>"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back"><?php echo $value->title; ?></h5>
            <p><?php echo $value->tag_line; ?></p>
          </div>
          <a class="button button-border-blue" href="<?php echo $value->link_name; ?>" ><?php echo $value->btn_name1; ?></a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>