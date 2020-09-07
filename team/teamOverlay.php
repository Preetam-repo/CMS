<?php
$teams = $resp->teams;
$serviceStyle = json_decode($sectionStyle->teams);
?>
<section class="page-section-ptb">
    <div class="container">
    <div class="row mt-60">
        <div class="col-lg-12">
           <h4 class="mb-30"><?php echo $serviceStyle->title; ?></h4>
        </div>
        <?php foreach($teams as $value){ ?>
        <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover team-overlay text-center">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="<?php echo $value->photo; ?>" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5 class="text-white"> <a href="team-single.html"> <?php echo $value->name; ?></a></h5>
                     <span><?php echo $value->designation; ?></span>
                </div>
               </div>
           </div>
          </div>
          <?php } ?>
       </div>
    </div>
</section>