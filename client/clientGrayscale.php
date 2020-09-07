 <section class="page-section-ptb bg-overlay-black-70 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo $clientStyle->img; ?>);">
   <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
            <h4 class="mb-50 text-white"><?php echo $clientStyle->title; ?></h4>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="clients-list grayscale">
             <div class="owl-carousel" data-nav-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
              <?php foreach($client as $value){ ?>
               <div class="item"> 
                  <img class="img-fluid mx-auto" src="<?php echo $base_url.$value->company_logo ; ?>" alt="">
               </div>
              <?php } ?>
             </div>
          </div>
        </div>
     </div>
   </div>
 </section>