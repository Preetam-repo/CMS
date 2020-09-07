<section class="rev-slider">
  <div id="rev_slider_270_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-4" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
    <div id="rev_slider_270_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
      <ul>  <!-- SLIDE  -->
      <?php $index = 1;
      $inde = 1;
      foreach ($banner as $row) {
      if (($index%2)!=0) { ?>
      <li data-index="rs-76<?php echo $index; ?>" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="<?php echo $base_url; ?>uploads/slider/<?php echo rawurlencode($row->imageUpload); ?>"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $base_url; ?>uploads/slider/<?php echo rawurlencode($row->imageUpload); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <!-- LAYER NR. 1 -->
        <div class="tp-caption   tp-resizeme"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="-70"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":660,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: 20px;font-family:Montserrat ;text-transform:uppercase;"><?php echo $row->tagLine; ?></div>
        <!-- LAYER NR. 2 -->
        <div class="tp-caption   tp-resizeme  rev-color"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset="-1"
          data-y="center" data-voffset="-10"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":1610,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 600; color: #84ba3f; font-family:Montserrat ;"><?php echo $row->title; ?></div>
        <!-- LAYER NR. 3 -->
        <div class="tp-caption   tp-resizeme"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="70"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":2380,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family: Montserrat ;"></div>
        <!-- LAYER NR. 4 -->
        <?php if (!empty(trim($row->buttonName))) { ?>
        <a class="tp-caption rev-btn  tp-resizeme  rev-btn"
          href="<?php echo $row->linkName; ?>" target="_self"       id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>2"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="150"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="button"
          data-actions=''
          data-responsive_offset="on"
          data-frames='[{"delay":3240,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']"
          data-paddingtop="[12,12,12,12]"
          data-paddingright="[30,30,30,30]"
          data-paddingbottom="[12,12,12,12]"
          data-paddingleft="[30,30,30,30]"
        style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><?php echo $row->buttonName; ?></a>
          <?php } ?>
      </li>
      <?php }else{ ?>
      <!-- SLIDE  -->
      <li data-index="rs-76<?php echo $index; ?>"  data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="<?php echo $base_url; ?>uploads/slider/<?php echo rawurlencode($row->imageUpload); ?>"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $base_url; ?>uploads/slider/<?php echo rawurlencode($row->imageUpload); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <!-- LAYER NR. 5 -->
        <div class="tp-caption   tp-resizeme"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="-70"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":300,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: 20px;font-family:Montserrat ;text-transform:uppercase;"><?php echo $row->title; ?></div>
        <!-- LAYER NR. 6 -->
        <div class="tp-caption   tp-resizeme"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="-10"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":1270,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;"><?php echo $row->tagLine; ?></div>
        <!-- LAYER NR. 7 -->
        <div class="tp-caption   tp-resizeme"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>"
          data-x="center" data-hoffset="190"
          data-y="center" data-voffset="60"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":1990,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
          style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family: Montserrat ;"></div>
        <!-- LAYER NR. 8 -->
        <div class="tp-caption   tp-resizeme  theme-color"
          id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>5"
          data-x="center" data-hoffset="-270"
          data-y="center" data-voffset="60"
          data-width="['390']"
          data-height="['71']"
          
          data-type="text"
          data-responsive_offset="on"
          data-frames='[{"delay":1990,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
        style="z-index: 8; min-width: 390px; max-width: 390px; max-width: 71px; max-width: 71px; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family: Montserrat ;font-style:italic;"></div>
        <!-- LAYER NR. 9 -->
        <?php if (!empty(trim($row->buttonName))) { ?>
        <a class="tp-caption rev-btn  tp-resizeme  rev-btn"
          href="<?php echo $row->linkName; ?>" target="_self"       id="slide-76<?php echo $index; ?>-layer-<?php echo $inde;$inde++; ?>2"
          data-x="center" data-hoffset=""
          data-y="center" data-voffset="150"
          data-width="['auto']"
          data-height="['auto']"
          
          data-type="button"
          data-actions=''
          data-responsive_offset="on"
          data-frames='[{"delay":2760,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']"
          data-paddingtop="[12,12,12,12]"
          data-paddingright="[30,30,30,30]"
          data-paddingbottom="[12,12,12,12]"
          data-paddingleft="[30,30,30,30]"
        style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><?php echo $row->buttonName; ?></a>
          <?php } ?>
      </li>
    </ul>
    <?php }
    $index++;} ?>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
  </div>
</section>