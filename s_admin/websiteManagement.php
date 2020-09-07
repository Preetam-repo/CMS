<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Website Management</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<!-- <div class="d-flex no-block align-items-center">
									<div>
												<h4 class="card-title"></h4>
									</div>
						</div> -->
						<ul class="nav nav-tabs customtab" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info1" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Website Info</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info2" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Contacts</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Social Links</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info4" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Style Settings</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info5" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Email Notifications</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info6" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Newsletter Subscribe</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info7" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Website Status</span></a> </li>
						</ul>
						<form class="form" id="style_master" method="post">
							
							<div class="tab-content">
								<div class="tab-pane active" id="info1" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Site Title</label>
										<div class="col-10">
											<input type="text" class="form-control" name="site_info[site_title]" id="site_infosite_title" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Website Logo</label>
										<div class="col-10">
											<input type="hidden" name="site_info[websiteLogo]" id="site_infowebsiteLogo" >
											<input type="file" class="form-control" name="site_info[websiteLogo]"  >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Website FavIcon</label>
										<div class="col-10">
											<input type="hidden" name="site_info[websiteFavIcon]" id="site_infowebsiteFavIcon" >
											<input type="file" class="form-control" name="site_info[websiteFavIcon]" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Mobile Icon</label>
										<div class="col-10">
											<input type="hidden" name="mobile_logo" >
											<input type="hidden" name="site_info[mobile_logo]" id="site_infomobile_logo" >
											<input type="file" class="form-control" name="site_info[mobile_logo]" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Preloader</label>
										<div class="col-5">
											<select name="site_info[preloader]" onchange="Swap(this,'preloader');" id="site_infopreloader" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
												<option value="loader-01.svg">Preloader 1</option>
												<option value="loader-02.svg">Preloader 2</option>
												<option value="loader-03.svg">Preloader 3</option>
												<option value="loader-04.svg">Preloader 4</option>
												<option value="loader-05.svg">Preloader 5</option>
												<option value="loader-06.svg">Preloader 6</option>
												<option value="loader-07.svg">Preloader 7</option>
												<option value="loader-08.svg">Preloader 8</option>
												<option value="loader-09.svg">Preloader 9</option>
												<option value="loader-10.svg">Preloader 10</option>
												<option value="loader-11.svg">Preloader 11</option>
												<option value="loader-12.svg">Preloader 12</option>
												<option value="loader-13.svg">Preloader 13</option>
												<option value="loader-14.svg">Preloader 14</option>
												<option value="loader-15.svg">Preloader 15</option>
												<option value="loader-16.gif">Preloader 16</option>
												<option value="loader-17.gif">Preloader 17</option>
												<option value="loader-18.gif">Preloader 18</option>
												<option value="loader-19.gif">Preloader 19</option>
												<option value="loader-20.gif">Preloader 20</option>
												<option value="loader-21.gif">Preloader 21</option>
												<option value="loader-22.gif">Preloader 22</option>
												<option value="loader-23.gif">Preloader 23</option>
												<option value="loader-24.gif">Preloader 24</option>
											</select>
											<img style="display:none;" id="preloader" src="" width=50 height=50 />
										</div>
										<div class="col-5">
											<button style="display: block;"  type="button" class="btn btn-primary" onclick="uploadPreloader()" >Upload</button>
											<button style="margin: 4px;" type="button"  class="btn btn-primary" onclick="$('#preloader').toggleClass('blackPreloaderBackground');">black background</button>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Webmaster Email</label>
										<div class="col-10">
											<input type="text" class="form-control" name="site_info[webmaster_email]" id="site_infowebmaster_email" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Copyright</label>
										<div class="col-10">
											<input type="text" class="form-control" name="site_info[copyright]" id="site_infocopyright" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Description</label>
										<div class="col-10">
											<input type="text" class="form-control" name="site_info[description]" id="site_infodescription" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Information</label>
										<div class="col-10">
											<input type="text" class="form-control" name="site_info[information]" id="site_infoinformation" >
										</div>
									</div>
									
								</div>
								<div class="tab-pane" id="info2" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Address</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[address]" id="contactsaddress" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Longitude</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[longitude]" id="contactslongitude" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Latitude</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[latitude]" id="contactslatitude" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Google MAP</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[google_map]" id="contactsgoogle_map" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Phone</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[phone]" id="contactsphone" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Working Time</label>
										<div class="col-10">
											<input type="text" class="form-control" name="contacts[working_time]" id="contactsworking_time" >
										</div>
									</div>
								</div>
								<div class="tab-pane" id="info3" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Facebook</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[facebook]" id="social_linksfacebook" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][facebook]" id="social_linksiconfacebook" class="select2icon form-control custom-select" style="width: 100%; height:36px;">
												<option value="fab fa-facebook" data-icon="fab fa-facebook">fab fa-facebook</option>
												<option value="fab fa-facebook-f" data-icon="fab fa-facebook-f">fab fa-facebook-f</option>
												<option value="fab fa-facebook-messenger" data-icon="fab fa-facebook-messenger">fab fa-facebook-messenger</option>
												<option value="fab fa-facebook-square" data-icon="fab fa-facebook-square">fab fa-facebook-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][facebook]" value="0">
												<input name="social_links[status][facebook]" id="social_linksstatusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Google+</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[googleplus]" id="social_linksgoogleplus" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][googleplus]" id="social_linksicongoogleplus" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-google-plus" data-icon="fab fa-google-plus">fab fa-google-plus</option>
												<option value="fab fa-google-plus-g" data-icon="fab fa-google-plus-g">fab fa-google-plus-g</option>
												<option value="fab fa-google-plus-square" data-icon="fab fa-google-plus-square">fab fa-google-plus-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][googleplus]" value="0">
												<input name="social_links[status][googleplus]" id="social_linksstatusgoogleplus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Instagram</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[instagram]" id="social_linksinstagram" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][instagram]" id="social_linksiconinstagram" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-instagram" data-icon="fab fa-instagram">fab fa-instagram</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][instagram]" value="0">
												<input name="social_links[status][instagram]" id="social_linksstatusinstagram" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Linkedin</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[linkedin]" id="social_linkslinkedin" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][linkedin]" id="social_linksiconlinkedin" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-linkedin" data-icon="fab fa-linkedin">fab fa-linkedin</option>
												<option value="fab fa-linkedin-in" data-icon="fab fa-linkedin-in">fab fa-linkedin-in</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][linkedin]" value="0">
												<input name="social_links[status][linkedin]" id="social_linksstatuslinkedin" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Pinterest</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[pinterest]" id="social_linkspinterest" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][pinterest]" id="social_linksiconpinterest" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-pinterest" data-icon="fab fa-pinterest">fab fa-pinterest</option>
												<option value="fab fa-pinterest-p" data-icon="fab fa-pinterest-p">fab fa-pinterest-p</option>
												<option value="fab fa-pinterest-square" data-icon="fab fa-pinterest-square">fab fa-pinterest-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][pinterest]" value="0">
												<input name="social_links[status][pinterest]" id="social_linksstatuspinterest" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Snapchat</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[snapchat]" id="social_linkssnapchat" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][snapchat]" id="social_linksiconsnapchat" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-snapchat" data-icon="fab fa-snapchat">fab fa-snapchat</option>
												<option value="fab fa-snapchat-ghost" data-icon="fab fa-snapchat-ghost">fab fa-snapchat-ghost</option>
												<option value="fab fa-snapchat-square" data-icon="fab fa-snapchat-square">fab fa-snapchat-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][snapchat]" value="0">
												<input name="social_links[status][snapchat]" id="social_linksstatussnapchat" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Tumbler</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[tumbler]" id="social_linkstumbler" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][tumbler]" id="social_linksicontumbler" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-tumblr" data-icon="fab fa-tumblr">fab fa-tumblr</option>
												<option value="fab fa-tumblr-square" data-icon="fab fa-tumblr-square">fab fa-tumblr-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][tumbler]" value="0">
												<input name="social_links[status][tumbler]" id="social_linksstatustumbler" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Twitter</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[twitter]" id="social_linkstwitter" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][twitter]" id="social_linksicontwitter" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-twitter" data-icon="fab fa-twitter">fab fa-twitter</option>
												<option value="fab fa-twitter-square" data-icon="fab fa-twitter-square">fab fa-twitter-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][twitter]" value="0">
												<input name="social_links[status][twitter]" id="social_linksstatustwitter" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Whatsapp</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[whatsapp]" id="social_linkswhatsapp" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][whatsapp]" id="social_linksiconwhatsapp" class="select2icon form-control custom-select" style="width: 100%; height:36px;">
												<option value="fab fa-whatsapp" data-icon="fab fa-whatsapp">fab fa-whatsapp</option>
												<option value="fab fa-whatsapp-square" data-icon="fab fa-whatsapp-square">fab fa-whatsapp-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][whatsapp]" value="0">
												<input name="social_links[status][whatsapp]" id="social_linksstatuswhatsapp" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Youtube</label>
										<div class="col-6">
											<input type="text" class="form-control" name="social_links[youtube]" id="social_linksyoutube" >
										</div>
										<div class="col-2 dropdown bootstrap-select">
											<select name="social_links[icon][youtube]" id="social_linksiconyoutube" class="select2icon form-control custom-select" 	style="width: 100%; height:36px;">
												<option value="fab fa-youtube" data-icon="fab fa-youtube">fab fa-youtube</option>
												<option value="fab fa-youtube-square" data-icon="fab fa-youtube-square">fab fa-youtube-square</option>
											</select>
										</div>
										<div class="col-2 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input type="hidden" name="social_links[status][youtube]" value="0">
												<input name="social_links[status][youtube]" id="social_linksstatusyoutube" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="info4" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Website Notification</label>
										<div class="col-10">
											<input type="text" class="form-control" name="style_master[website_notification]" id="style_masterwebsite_notification" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Style Color</label>
										<div class="col-10">
											<select name="style_master[style_color]" id="style_masterstyle_color" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
												<option value="skin-blue-gem.css">Skin Blue Gem</option>
												<option value="skin-blue.css">Skin Blue</option>
												<option value="skin-brown.css">Skin Brown</option>
												<option value="skin-chestnut-rose.css">Skin Chestnut Rose</option>
												<option value="skin-cyan.css">Skin Cyan</option>
												<option value="skin-dark-pink.css">Skin Dark Pink</option>
												<option value="skin-default.css">Skin Default</option>
												<option value="skin-gold.css">Skin Gold</option>
												<option value="skin-gray.css">Skin Gray</option>
												<option value="skin-green-dark.css">Skin Green Dark</option>
												<option value="skin-green.css">Skin Green</option>
												<option value="skin-lime.css">Skin Lime</option>
												<option value="skin-malachite.css">Skin Malachite</option>
												<option value="skin-olive.css">Skin Olive</option>
												<option value="skin-orange.css">Skin Orange</option>
												<option value="skin-perfume.css">Skin Perfume</option>
												<option value="skin-persian-green.css">Skin Persian Green</option>
												<option value="skin-pink.css">Skin Pink</option>
												<option value="skin-purple.css">Skin Purple</option>
												<option value="skin-red.css">Skin Red</option>
												<option value="skin-salmon.css">Skin Salmon</option>
												<option value="skin-steelblue.css">Skin Steelblue</option>
												<option value="skin-water-blue.css">Skin Water Blue</option>
												<option value="skin-yellow.css">Skin Yellow</option>
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Layout Mode</label>
										<div class="col-10">
											<select name="style_master[layout_mode]" id="style_masterlayout_mode" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Menu Style</label>
										<div class="col-10">
											<select name="style_master[menu_style]" id="style_mastermenu_style" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
												<option value='menu1.php'>Menu 1</option>
												<option value='menu2.php'>Menu 2</option>
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Header Style</label>
										<div class="col-10">
											<select name="style_master[header_style]" id="style_masterheader_style" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
												<option value='header7.php'>Header 7</option>
												<!-- <option value='header10.php'>Header 10</option> -->	
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Footer Style</label>
										<div class="col-10">
											<select name="style_master[footer_style]" id="style_masterfooter_style" class="select2 form-control custom-select " style="width: 100%; height:36px;">
												<option value="">Please select</option>
												<option value='footer1.php'>Footer 1</option>
												<option value='footer2.php'>Footer 2</option>
												<option value='footer7.php'>Footer 7</option>
												<option value='footer10.php'>Footer 10</option>
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Footer Background</label>
										<div class="col-10">
											<input  name="style_master[footer_background]" id="style_masterfooter_background" type="color" value="#ff0000">
										</div>
									</div>
								</div>
								
								<div class="tab-pane" id="info5" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Email Notifications</label>
										<div class="col-10">
											<input type="text" class="form-control" name="email_notifications[email_notifications]" id="email_notificationsemail_notifications" >
										</div>
									</div>
								</div>
								
								<div class="tab-pane" id="info6" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Heading</label>
										<div class="col-10">
											<input type="text" class="form-control" name="newsletter[heading]" id="newsletterheading" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Sub Heading</label>
										<div class="col-10">
											<input type="text" class="form-control" name="newsletter[sub_heading]" id="newslettersub_heading" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Button Name</label>
										<div class="col-10">
											<input type="text" class="form-control" name="newsletter[button_name]" id="newsletterbutton_name" >
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Status</label>
										<div class="col-4 bt-switch">
											<div class="m-b-30 col-lg-12">
												<input name="newsletter[status]"  value="0" type="hidden">
												<input name="newsletter[status]" id="newsletterstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-pane" id="info7" role="tabpanel">
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Website Status</label>
										<div class="col-4 bt-switch">
											<div class="m-b-30 col-lg-3">
												<input name="website_status[status]" value="0" type="hidden">
												<input name="website_status[status]" value="1" id="website_statusstatus"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									<!-- <div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Section Order</label>
										<div class="col-4">
											<div class="m-b-30 col-lg-12">
												<ul id="sortable" >
												  <li class="ui-state-default">
												  	<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="hidden" name="order[]" value="">
												  </li>
												</ul>
											</div>
										</div>
									</div> -->
								</div>
							</div>
							<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
						</form>
						<form id="formPreloader">
							
							<input type="file" style="display: none;" class="form-control" name="preloader" id="preloaderUploadButton">
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php include 'include/footer.php'; ?>
<?php include 'include/js-controller.php'; ?>
 <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; }
  html>body #sortable li { height: 1.5em; line-height: 1.2em; }
  .ui-state-highlight { height: 1.5em; line-height: 1.2em; }
  </style>
<script language="JavaScript" type="text/javascript">
<!--
var Path='../uploads/preloader/';
function Swap(obj,id){
var value = $("#site_infopreloader").val();
var i=obj.selectedIndex;
if (i<1){ $("#preloader").css("display","none");return; }
$("#preloader").css("display","inline");
$("#preloader").removeProp("display");
document.getElementById(id).src=Path+value;
}
function uploadPreloader() {
	$("#preloaderUploadButton").click();
	$("#preloaderUploadButton").on('change',function (e) {
		if (!_.isEmpty($(this).val())) {
			$("#formPreloader").submit();
			return;
		}
	})
}
//-->
</script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#sortable" ).disableSelection();
  } );
  </script>
<style type="text/css">
	.blackPreloaderBackground{
		background: #000;
	}
</style>