<footer class="footer page-section-pt black-bg" style="background: <?php echo $style_master->footer_background; ?>!important;">
 <div class="container">
  <div class="row">
      <div class="col-lg-3  col-sm-6 xs-mb-30">
      <div class="footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Follow us</h6>
         <div class="social-icons color-hover">
              <ul>
                <?php 
                $icons = $socialLinks->icon;
                $status = $socialLinks->status;
                foreach ($socialLinks as $key => $value) {
                  if ($key!="id"&&$key!="icon"&&$key!="status") {
                    if ($status->$key) {
                 ?>
                <li class="social-<?php echo $key;  ?>"><a target="_blank" href="<?php echo $value; ?>"><i class="<?php echo $icons->$key; ?>"></i></a></li>
                <?php }}} ?>
              </ul>
             <p class="mt-20"><?php echo $site_info->description; ?></p>
           </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 sm-mb-30 xs-mb-30">
      <?php if ($newsletter->status==true) { ?>
      <h6 class="text-white mb-30 mt-10 text-uppercase"><?php echo $newsletter->heading; ?></h6>
      <p><?php echo $newsletter->sub_heading; ?></p>
       <div class="footer-Newsletter">
        <div id="">
          <form class="validate newsletterSubscription">
           <div id="msg"> </div>
            <div id="">
              <input class="form-control" type="email" placeholder="Email address" name="email" value="">
            </div>
              <div class="clear">
                <button type="submit" name="submitbtn"  class="button button-border mt-20 form-button">  <?php echo $newsletter->button_name; ?> </button>
              </div>
            </form>
        </div>
          </div>
            <?php } ?>
       </div>
    <div class="col-lg-3 col-sm-6 xs-mb-30">
      <!-- <div class="footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">recent work</h6>
         <div class="footer-gallery clearfix">
            <ul>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/01.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/02.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/03.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/04.gif" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/05.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/06.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/07.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/08.gif" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/09.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/10.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/01.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/02.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/03.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/05.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/06.jpg" alt=""> </a> </li>
              <li> <a href="#"> <img class="img-fluid" src="images/portfolio/small/07.jpg" alt=""> </a> </li>
            </ul>
          </div>
      </div> -->
    </div>
    <div class="col-lg-3  col-sm-6 xs-mb-30">
      <!-- <h6 class="text-white mb-30 mt-10 text-uppercase">Popular tags</h6>
       <div class="footer-tags">
         <ul>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
          <li><a href="#">CSS3</a></li>
          <li><a href="#">Creative</a></li>
          <li><a href="#">Multipurpose</a></li>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
        </ul>
      </div> -->
      </div>
       </div>
      <div class="footer-widget mt-60 ">
        <div class="row">
          <div class="col-lg-6 col-md-6">
           <p class="mt-15"><?php echo $site_info->copyright; ?></p>
          </div>
          <div class="col-lg-6 col-md-6 ">
            <div class="footer-social mt-10">
              <ul class="text-left text-md-right">
                 <!-- <li class="list-inline-item"><a href="#">Terms &amp; Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
                 <li class="list-inline-item"><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
                 <li class="list-inline-item"><a href="#">Privacy Policy </a> </li> -->
              </ul>
              </div>
          </div>
        </div>    
      </div>
  </div>
</footer>