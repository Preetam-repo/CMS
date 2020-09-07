</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
<!--=================================
jquery -->
<!-- jquery -->
<script src="<?php echo $base_url; ?>asset/js/jquery-3.3.1.min.js"></script>
<!-- plugins-jquery -->
<script src="<?php echo $base_url; ?>asset/js/plugins-jquery.js"></script>
<!-- plugin_path -->
<script>var plugin_path = '<?php echo $base_url; ?>asset/js/';</script>
<!-- REVOLUTION JS FILES -->
<script src="<?php echo $base_url; ?>asset/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo $base_url; ?>asset/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- revolution custom -->
<script src="<?php echo $base_url; ?>asset/revolution/js/revolution-custom.js"></script>
<!-- custom -->
<script src="<?php echo $base_url; ?>asset/js/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo $base_url; ?>asset/js/custom.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<style type="text/css">
.isotope1-filters { display: table; margin:0 auto 50px; text-align: center; }
.isotope1-filters.text-left { display: block; margin: 30px 0; text-align: left; }
.isotope1-filters  button.active,.isotope1-filters  button:focus,  { background: #353535; color: #fff; border-color: #353535; }
</style>
<script type="text/javascript">
  $(document).ready(function () {
      var $isotope = $(".faqCategory"),
          $itemElement = '.faqCategory-grid-item',
          $filters = $('.faqCategory-filters');      
        if ($isotope.exists()) {
            $isotope.isotope({
            resizable: false,
            itemPositionDataEnabled: true,
            itemSelector: $itemElement,
              masonry: {
                gutterWidth: 10
              }
            });     
       $filters.on( 'click', 'button', function() {
         var $val = $(this).attr('data-filter');
             $isotope.isotope({ filter: $val });       
             $filters.find('.active').removeClass('active');
             $(this).addClass('active');
      });     
    }
});
$(document).ready(function () {
      var $isotope = $(".articlesCategory"),
          $itemElement = '.articlesCategory-grid-item',
          $filters = $('.articlesCategory-filters');      
        if ($isotope.exists()) {
            $isotope.isotope({
            resizable: false,
            itemPositionDataEnabled: true,
            itemSelector: $itemElement,
              masonry: {
                gutterWidth: 10
              }
            });     
       $filters.on( 'click', 'button', function() {
         var $val = $(this).attr('data-filter');
             $isotope.isotope({ filter: $val });       
             $filters.find('.active').removeClass('active');
             $(this).addClass('active');
      });     
    }
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on("submit", ".newsletterSubscription", function(event) {
        var selector = this;
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
                url: '<?php echo $base_url; ?>api/websiteManagement/sendNewsletter',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false
            })
            .done(function(response) {
                var data = JSON.parse(response);
                if (data == true) {
                    selector.reset();
                    Swal.fire(
                        'Thank You',
                        'You Are Subscribed Successfully',
                        'success'
                    )
                } else {
                    selector.reset();
                    Swal.fire(
                        'Thank You',
                        'Email Already Subscribed',
                        'success'
                    )
                }
            });
    });
});
$(document).ready(function() {
    $(document).on("submit", ".contactUs", function(event) {
        var selector = this;
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
                url: '<?php echo $base_url; ?>api/websiteManagement/sendQuery',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false
            })
            .done(function(response) {
                var data = JSON.parse(response);
                if (data == true) {
                    selector.reset();
                    Swal.fire(
                        '',
                        'Query Send Successfully',
                        'success'
                    )
                }
            });
    });
});
</script>
</body>
</html>