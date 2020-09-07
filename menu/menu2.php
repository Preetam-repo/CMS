      <header id="header" class="header default">
        
    <?php if (isset($_SESSION["UserData"])) { ?>
    <div class="topbar" style="padding: 5px 0px 3px;border: 0;background: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 xs-mb-10">
                    <h5 class="text-white"><?php echo $_SESSION["UserData"]->firstName." ".$_SESSION["UserData"]->lastName; ?></h5>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="topbar-social text-center text-md-right"><button class="button bg-warning border-warning" style="background-color: #ffc107; border-color: #ffc107;padding: 1px 6px;">logout</button></div>
                </div>
            </div>
        </div>
        <?php } ?>
              <!--=================================
              mega menu -->
              <div class="menu">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                  <!-- menu list items container -->
                  <section class="menu-list-items">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <!-- menu logo -->
                          <ul class="menu-logo">
                            <li>
                              <a href="<?php echo $base_url; ?>"><img id="logo_img" src="<?php echo $base_url; ?><?php echo ((!empty($site_info->websiteLogo))?$site_info->websiteLogo:''); ?>" alt="logo"> </a>
                            </li>
                          </ul>
                          <!-- menu links -->
                          <div class="menu-bar">
                            <ul class="menu-links">
                                <?php
                                    $main_menu = $resp->main_menu;
                                    $sub_menu = $resp->sub_menu;
                                    $child_menu = $resp->child_menu;
                                    $mainMenu = "";
                                    $base = $base_url;
                                    if (isset($_GET["ao"])) {
                                    $base .= "site/".$_GET["ao"];
                                    }
                                    $base .= '/page/';
                                    foreach ($main_menu as $key => $row) {
                                    $url = $row->linkm;
                                    $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? $base : '') . $url;
                                    $mainMenu .= '<li>';
                                    $mainMenu .= '<a href="'.$url.'">';
                                    $mainMenu .= $row->main_menu;
                                    $mainMenu .= '<i class="fa-indicator"></i>';
                                    $mainMenu .= '</a>';
                                    $mainMenu .= '<ul class="drop-down-multilevel">';
                                    $id=$row->id;
                                    foreach ($sub_menu as $row) {
                                    $sid=$row->id;
                                    if($row->main_menu_id==$id){
                                    $url = $row->links;
                                    $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? $base : '') . $url;
                                    $mainMenu .= '<li><a href="'.$url.'" style='.(($key<(count($main_menu)-2))?"right:0px":"").'>';
                                    $mainMenu .= $row->sub_menu;
                                    foreach ($child_menu as $row) {
                                    if($row->main_menu_id==$id){
                                    if($row->sub_menu_id==$sid){
                                    $mainMenu .= '<i class="ti-plus fa-indicator"></i>';
                                        break;
                                    } 
                                    }
                                    }
                                    $mainMenu .= '</a>';
                                    $mainMenu .= '<ul class="drop-down-multilevel '.(($key<(count($main_menu)-2))?"left-side":"").'">';
                                    foreach ($child_menu as $row) {
                                    if($row->main_menu_id==$id){
                                    if($row->sub_menu_id==$sid){
                                    $url = $row->linkc;
                                    $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? $base : '') . $url;
                                    $mainMenu .= '<li><a href="'.$url.'">';
                                    $mainMenu .= $row->child_menu;
                                    $mainMenu .= '</a>';
                                    $mainMenu .= '</li>';
                                    } }
                                    }
                                    $mainMenu .= '</ul>';
                                    $mainMenu .= '</li>';
                                    } }
                                    $mainMenu .= '</ul>';
                                    $mainMenu .= '</li>';
                                    }
                                    echo $mainMenu; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </nav>
                <!-- menu end -->
              </div>
            </header>
            <!--=================================
            header -->
            <!--================================= banner -->