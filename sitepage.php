<?php
include 'config.php';
$webpage = $base_url."api/aoWebsiteManagement/getPage";
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
  header("Location:../../../".$aoId);
}
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $webpage,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => ['page' => $_GET["page"],'aoId' => $resp->aoId]
  ]);
// Send the request & save response to $resp
$resp = json_decode(curl_exec($curl));
// Close request to clear up some resources
curl_close($curl);
$page = $resp->page;
$style_master = json_decode($resp->style_master->style_master);
$site_info = json_decode($resp->style_master->site_info);
$contacts = json_decode($resp->style_master->contacts);
$newsletter = json_decode($resp->style_master->newsletter);
$socialLinks = json_decode($resp->style_master->social_links);
// if ($apiResponse->status!=true) {
//  	header("Location: ../index.php");
// }
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
    <title><?php echo $page->title; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo ((!empty($site_info->websiteFavIcon))?$site_info->websiteFavIcon:''); ?>" />
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
        <img src="<?php echo $base_url; ?>uploads/preloader/<?php echo $site_info->preloader; ?>" alt="">
      </div>
      <!--=================================
      preloader -->
      <!--=================================
      header -->
      <?php include "menu/".$style_master->menu_style; ?>
      <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo $base_url; ?>asset/images/bg/02.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><?php echo $page->header; ?></h1>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="<?php echo $base_url; ?>"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="<?php echo $base_url; ?>page/<?php echo $page->link; ?>"><?php echo $page->header; ?></a></li>
       </ul>
     </div>
     </div>
  </div>
</section>
        <section class="page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                        	<?php echo $page->content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "footer/".$style_master->footer_style; ?>
        <?php include "js_url.php"; ?>

