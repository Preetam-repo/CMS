<?php
$counter = $resp->counter;
$counterStyle = json_decode($counterStyle->counter);
?>
<section class="page-section-ptb">
 <div class="container">
  <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h6><?php echo $counterStyle->top_tag_line; ?></h6>
            <h2 class="title-effect"><?php echo $counterStyle->title; ?></h2>
            <p><?php echo $counterStyle->bottom_tag_line; ?></p>
          </div>
       </div>
    </div>
  <div class="row">
  <?php foreach($counter as $value){ ?>
     <div class="col-lg-3 col-sm-6 sm-mb-30">       
       <div class="counter counter-small text-center">
       <span class="timer" data-to="<?php echo $value->number ; ?>" data-speed="1000"><?php echo $value->number ; ?></span>
        <label><?php echo $value->name ; ?></label>
      </div>
      </div>
  <?php } ?>
  </div>
</div>
</section>

<hr class="m-0" />