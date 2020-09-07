      <header id="header" class="header default">
        <!--=================================
        mega menu -->
        <div class="menu">
          <!-- menu start -->
          <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
              <div class="container">
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
                            foreach ($main_menu as $row) {
                            $url = $row->linkm;
                            $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? 'page/' : '') . $url;
                            $mainMenu .= '<li>';
                            $mainMenu .= '<a href="'.$url.'">';
                            $mainMenu .= $row->main_menu;
                            $mainMenu .= '<i class="fa-indicator"></i>';
                            $mainMenu .= '</a>';
                            $mainMenu .= '<ul class="drop-down-multilevel">';
                            $id=$row->id;
                            foreach ($sub_menu as $row) {
                            if($row->main_menu_id==$id){
                              $url = $row->links;
                              $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? 'page/' : '') . $url;
                            $mainMenu .= '<li><a href="'.$url.'">';
                            $mainMenu .= $row->sub_menu;
                            $mainMenu .= '</a>';
                            $mainMenu .= '<ul class="drop-down-multilevel">';
                            $sid=$row->id;
                            foreach ($child_menu as $row) {
                            if($row->main_menu_id==$id){
                                if($row->sub_menu_id==$sid){
                              $url = $row->linkc;
                              $url = (strncasecmp('http://', $url, 7) && strncasecmp('https://', $url, 8) ? 'page/' : '') . $url;
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