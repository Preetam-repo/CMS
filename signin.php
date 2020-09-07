<?php
include 'config.php';
$webpage = $base_url."api/websiteManagement/getWebsite";
$controller = "websiteManagement";
if (isset($_GET["ao"])) {
$controller = "aoWebsiteManagement";
$aoId = $_GET["ao"];
$webpage = $base_url."api/aoWebsiteManagement/getWebsite";
$checkUrl = $base_url."api/aoMaster/checkUrl";
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $checkUrl,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => ["loginLink" => $aoId]
  ]);
$resp = json_decode(curl_exec($curl));
curl_close($curl);
if ($resp->status!=true) {
  header("Location:../index.php");
}
$aoId = $resp->aoId;
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $webpage,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => ["aoId" => $aoId]
  ]);
$resp = json_decode(curl_exec($curl));
curl_close($curl);
}else{
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => $webpage,
]);
$resp = json_decode(curl_exec($curl));
curl_close($curl);
}
if (empty($resp)) {
echo '<div class="height-100vh parallax" style="background-image: url('.$base_url.'asset/demo-specialty-pages/error-06/images/01.jpg);">';
  echo '<div class="error-06 error-middle page-section-ptb">';
    echo '<div class="container">';
      echo '<div class="row justify-content-center">';
        echo '<div class="col-lg-6">';
          echo '<h1 class="text-white">404</h1>';
          echo '<h2 class="text-white">Page not found!</h2>';
          echo "<p class='text-white'> Dont worry, sometimes it happens even for the best of us :)</p>";
          echo '<div class="widget-search mt-30">';
            echo '<i class="fa fa-search"></i>';
            echo '<input type="search" class="form-control" placeholder="Search....">';
          echo '</div>';
          echo '<a class="button white button-border mt-30" href="">Back to home</a>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';
}else{
$website_status = json_decode($resp->style_master->website_status);
$style_master = json_decode($resp->style_master->style_master);
$site_info = json_decode($resp->style_master->site_info);
$contacts = json_decode($resp->style_master->contacts);
$sectionStyle = $resp->sectionstyle;
$socialLinks = json_decode($resp->style_master->social_links);
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo (isset($site_info->site_title))?$site_info->site_title:"404 Not Found"; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/plugins-css.css" />
    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/typography.css" />
    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/shortcodes/shortcodes.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/skins/<?php echo $style_master->style_color; ?>" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/responsive.css" />
    <style type="text/css">
      html, body ,.wrapper,.bg-overlay-black-60 {
    height:100%;
}
    </style>
  </head>
  <body>
    
        <!--=================================
        preloader -->
        
      <div id="pre-loader">
        <img src="<?php echo $base_url; ?>uploads/preloader/<?php echo (isset($site_info->preloader)?$site_info->preloader:'loader-01.svg'); ?>" alt="">
      </div>
        <!--=================================
        preloader -->
    <div class="wrapper">
      <?php include 'signin/signin2.php'; ?>
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
    <!-- custom -->
    <script src="<?php echo $base_url; ?>asset/js/custom.js"></script>
    <script src="<?php echo $base_url; ?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#signin").submit(function(event) {
          event.preventDefault();
          var selector = this;
          var formdata = new FormData(this);
          <?php if (isset($aoId)) { ?>
            formdata.set("aoId",<?php echo $aoId ; ?>)
          <?php } ?>
          $.ajax({
          url: '<?php echo $base_url; ?>api/<?php echo $controller; ?>/signin',
          type: 'POST',
          data: formdata,
          contentType:false,
          processData:false,
          })
          .done(function(response) {
                var data = JSON.parse(response);
                if (data.status == true) {
                    selector.reset();
                    Swal.fire(
                        'Login Successfully',
                        '',
                        'success'
                    )
                    setTimeout(function () {
                    	location.href = data.url;
                    },1500)
                } else {
                    selector.reset();
                    Swal.fire(
                        'Incorrect Username or Password',
                        '',
                        'error'
                    )
                }
            });
        });
      });
      
    </script>
  </body>
</html>