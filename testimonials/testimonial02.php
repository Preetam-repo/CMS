
<section class="page-section-ptb bg-overlay-black-80 parallax" style="background-image:url(images/bg/03.jpg);">
  <div class="container">
  <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h6><?php echo $clienttestimonialStyle->top_tag_line; ?></h6>
            <h2 class="title-effect"><?php echo $clienttestimonialStyle->title; ?></h2>
            <p><?php echo $clienttestimonialStyle->bottom_tag_line; ?></p>
          </div>
       </div>
    </div>
    <div class="row justify-content-center">
    <?php foreach($clienttestimonial as $value){ ?>
      <div class="col-md-8">
        <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1">
          <div class="item">
            <div class="testimonial light">
              <div class="testimonial-avatar"> <img alt="" src="<?php echo $value->photo ; ?>"> </div>
              <div class="testimonial-info"><?php echo $value->true_comment; ?></div>
              <div class="author-info"> <strong><?php echo $value->name ; ?><span><?php echo $value->designation ; ?></span></strong> </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>