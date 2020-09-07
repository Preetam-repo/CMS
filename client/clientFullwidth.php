<section class="page-section-ptb">
   <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
            <h4 class="mb-50 text-center"><?php echo $clientStyle->title; ?> </h4>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="clients-list">
             <div class="owl-carousel" data-nav-dots="false" data-items="8" data-md-items="7" data-sm-items="3" data-xs-items="2" data-xx-items="2">
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