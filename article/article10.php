<section class="our-blog gray-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="section-title text-center">
          <h6><?php echo $articleStyle->top_tag_line; ?></h6>
          <h2 class="title-effect"><?php echo $articleStyle->title; ?></h2>
          <p><?php echo $articleStyle->bottom_tag_line; ?></p>
        </div>
        <div class="articlesCategory-filters isotope1-filters">
          <button data-filter="" class="active theme-bg button">All</button>
          <?php
          $filtered = [];
          foreach($articles as $value){
          if (empty(array_search($value->articlesCategory,$filtered))) {
          $filtered[] = str_replace(' ', '_', $value->articlesCategory);
          ?>
          <button data-filter=".<?php echo str_replace(' ', '_', $value->articlesCategory); ?>"  class="theme-bg button" ><?php echo $value->articlesCategory; ?></button>
          <?php }} ?>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach($articles as $value){ ?>
      <div class="articlesCategory-grid-item category-grid-item <?php echo str_replace(' ', '_', $value->articlesCategory); ?>" style="width: 100%;">
        <div class="col-lg-4 col-md-4 xs-mb-30">
          <div class="blog-box blog-2 h-100 white-bg">
            <img class="img-fluid" src="uploads/<?php echo $value->img_link ; ?>" alt="">
            <div class="blog-info">
              <span class="post-category"><a href="#"><?php echo $value->articlesCategory ; ?></a></span>
              <h4> <a href="<?php echo $value->link_name ; ?>"> <?php echo $value->type ; ?></a></h4>
              <p><?php echo $value->summarised_info ; ?></p>
              <span><i class="fa fa-calendar-check-o"></i><?php echo $value->post_date_display ; ?></span>
              <a class="button icon-color" href="<?php echo $value->link_name1 ; ?>"><?php echo $value->btn_name1 ; ?><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>