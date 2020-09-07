<?php 
include 'config.php';
$webpage = $base_url."api/aoWebsiteManagement/getWebsite";
$checkUrl = $base_url."api/aoMaster/checkUrl";
$aoId = ((isset($_GET["ao"]))?$_GET["ao"]:null);
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $checkUrl,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => ["loginLink" => $aoId]
  ]);
// $resp = curl_exec($curl);
$resp = json_decode(curl_exec($curl));
curl_close($curl);
// print_r($resp);die;
if ($resp->status!=true) {
  header("Location:../index.php");
}
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $webpage,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => ["aoId" => $resp->aoId]
  ]);
$resp = json_decode(curl_exec($curl));
curl_close($curl);
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
  $website_status = (empty($resp->style_master->website_status))?null:json_decode($resp->style_master->website_status);
$style_master = (empty($resp->style_master->style_master))?null:json_decode($resp->style_master->style_master);
$site_info = (empty($resp->style_master->site_info))?null:json_decode($resp->style_master->site_info);
$contacts = (empty($resp->style_master->contacts))?null:json_decode($resp->style_master->contacts);
$newsletter = (empty($resp->style_master->newsletter))?null:json_decode($resp->style_master->newsletter);
$socialLinks = (empty($resp->style_master->social_links))?null:json_decode($resp->style_master->social_links);
$clienttestimonialStyle = (empty($sectionStyle->client_testimonials))?null:json_decode($sectionStyle->client_testimonials);
$counterStyle = (empty($sectionStyle->counter))?null:json_decode($sectionStyle->counter);
$clientStyle = (empty($sectionStyle->client))?null:json_decode($sectionStyle->client);
$faqStyle = (empty($sectionStyle->faq))?null:json_decode($sectionStyle->faq);
$articleStyle = (empty($sectionStyle->articles))?null:json_decode($sectionStyle->articles);
$banner = (empty($resp->banner))?null:$resp->banner;
$sectionStyle = (empty($resp->sectionstyle))?null:$resp->sectionstyle;
$articles = (empty($resp->articles))?null:$resp->articles;
$client = (empty($resp->client))?null:$resp->client;
$faq = (empty($resp->faq))?null:$resp->faq;
$clienttestimonial = (empty($resp->clienttestimonial))?null:$resp->clienttestimonial;
$counter = (empty($resp->counter))?null:$resp->counter;
}
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo (isset($site_info->site_title))?$site_info->site_title:"404 Not Found"; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $base_url.((!empty($site_info->websiteFavIcon))?$site_info->websiteFavIcon:''); ?>" />
    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/plugins-css.css" />
    <!-- revoluation -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/revolution/css/settings.css" media="screen" />
    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/typography.css" />
    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/shortcodes/shortcodes.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>asset/css/skins/<?php echo $style_master->style_color; ?>" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="asset/css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/brands.min.js" integrity="sha512-n+LJkKtr963iJwCP7oilRjd0m+j/TkcG50S5DVdDEWkduZow4yc267LccOutUUoNbf23+c+Gy6Oj2d2l9rUT0Q==" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="wrapper">
      <!--=================================
      preloader -->
      <div id="pre-loader">
        <img src="<?php echo $base_url; ?>uploads/preloader/<?php echo (isset($site_info->preloader)?$site_info->preloader:'loader-01.svg'); ?>" alt="">
      </div>
      <!--=================================
      preloader -->
      <!--=================================
      header -->
      <?php 
      if ((!empty($resp))&&($website_status->status==0)) { ?>
        
  <div class="height-100vh parallax" style="background-image: url(<?php echo $base_url; ?>asset/demo-specialty-pages/error-06/images/01.jpg);">
 <div class="error-06 error-middle page-section-ptb">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-lg-6">
       <h1 class="text-white">404</h1>
       <h2 class="text-white">Page not found!</h2>
       <p class="text-white"> Don't worry, sometimes it happens even for the best of us :)</p>
        <div class="widget-search mt-30">
          <i class="fa fa-search"></i>
          <input type="search" class="form-control" placeholder="Search....">
        </div>
        <a class="button white button-border mt-30" href="">Back to home</a>
     </div>
   </div>
   </div>
  </div>
 </div>
    <?php  }elseif(!empty($resp)){ ?>
      <?php include "menu/".$style_master->menu_style; ?>
      <?php include "header/".$style_master->header_style; ?>
      <?php foreach ($sectionStyle as $key => $value) {
            if (($key!="id")&&($key!="aoId")&&($key!="created_date")) {
                if ((json_decode($value)->section_style!="")&&(json_decode($value)->status==true)) {
                include "".json_decode($value)->section_style;
                }
            }
        
      } ?> 
        <?php include "footer/".$style_master->footer_style;} ?>
        <?php include "js_url.php"; ?>
        