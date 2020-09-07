<?php
$teams = $resp->teams;
$serviceStyle = json_decode($sectionStyle->teams);
?>
<section class="gray-bg page-section-ptb">
  <div class="container">
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
	<?php foreach($teams as $value){ ?>
     
        <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-round full-border white-bg">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="<?php echo $value->photo; ?>" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="#"><?php echo $value->name; ?></a></h5>
                     <span><?php echo $value->designation; ?></span>
                </div>
                <div class="team-contact">
                  <span class="call"><?php echo $value->mobile_no; ?></span>
                  <span class="email"> <a href="<?php echo $value->profile_link; ?>"> <i class="fa fa-envelope"></i> </a> </span>
                </div>
               </div>
           </div>
          </div>
		  <?php } ?>
       </div>
   </div>
 </section>