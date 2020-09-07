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
        <div class="col-lg-6 col-md-6 sm-mb-30">
           <div class="team team-list">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="<?php echo $value->photo; ?>" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html"><?php echo $value->name; ?></a></h5>
                     <span><?php echo $value->designation; ?></span>
                </div>
                <div class="team-contact">
                  <span class="call"><?php echo $value->mobile_no; ?></span>
                  <span class="email"> <i class="fa fa-envelope"></i><?php echo $value->email_id; ?></span>
                </div>
                <div class="social-icons social-border rounded color-hover clearfix">
                    <ul>
                      <li class="social-facebook"><a href="#"><i class="fab fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                 </div>
               </div>
           </div>
          </div>
          <?php } ?>  
       </div>
    </div>
</section>