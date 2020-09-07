<!--=================================
faq-->
<section class="faq white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="section-title text-center">
          <h6><?php echo $faqStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $faqStyle->title; ?></h2>
          <p><?php echo $faqStyle->bottom_tag_line; ?></p>
        </div>
        <div class="faqCategory-filters isotope1-filters">
          <button data-filter="" class="active theme-bg button">All</button>
          <?php 
          $filtered = [];
          foreach($faq as $value){ 
            if (empty(array_search($value->faqCategory,$filtered))) {
            $filtered[] =  str_replace(' ', '_', $value->faqCategory);
          ?>
          <button data-filter=".<?php echo str_replace(' ', '_', $value->faqCategory); ?>"  class="theme-bg button"><?php echo $value->faqCategory; ?></button>
          <?php }} ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="faqCategory">
          <div class="accordion shadow">
            <?php foreach($faq as $value){ ?>
            <div class="faqCategory-grid-item category-grid-item <?php echo str_replace(' ', '_', $value->faqCategory); ?>" style="width: 100%;">
            <div class="acd-group">
              <a href="#" class="acd-heading"><?php echo $value->question; ?></a>
              <div class="acd-des"><?php echo $value->answer; ?></div>
            </div>
          </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>