<?php
$countdowntimer = $resp->countdowntimer;
$countdowntimerStyle = json_decode($sectionStyle->countdown_timer);
?>
<section class="page-section-ptb">
 <div class="container">
 <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h6><?php echo $countdowntimerStyle->top_tag_line; ?></h6>
            <h2 class="title-effect"><?php echo $countdowntimerStyle->title; ?></h2>
            <p><?php echo $countdowntimerStyle->bottom_tag_line; ?></p>
          </div>
       </div>
    </div>
  <div class="row">
  <?php foreach($countdowntimer as $value){ ?>
        <div class="col-lg-12 col-md-12 text-center">
            <div class="countdown small">
             <span class="days">01</span>
               <p class="days_ref">days</p>
            </div>
           <div class="countdown small">
              <span class="hours">00</span>
              <p class="hours_ref">hours</p>
           </div>
           <div class="countdown small">  
              <span class="minutes">00</span>
              <p class="minutes_ref">minutes</p>
             </div>
             <div class="countdown small">
              <span class="seconds">00</span>
              <p class="seconds_ref">seconds</p>
             </div>
        </div>
     </div>
     <?php } ?>
     </div>
</section>	 