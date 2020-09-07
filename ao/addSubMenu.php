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
                <h4 class="text-themecolor">Sub Menu > Add</h4>
            </div>
        </div>
        
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="d-flex no-block align-items-center">
                            <div>
                                <h4 class="card-title">Add</h4>
                            </div>
                        </div> -->
                        <form class="form" method="post" id="addSubMenu">
                                    
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Main Menu</label>
                                        <div class="col-md-4 col-sm-6">
                                           <select id="main_menu_id" name="main_menu_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option value="">Please select</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Sub Menu Category</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="sub_menu" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">SRN</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="srn" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Font Icon</label>
                                        <div class="col-md-4 col-sm-6">
                                            <select name="font_icon" class="select2icon form-control custom-select" style="width: 100%; height:36px;">
                                        <option value="fa fa-plus-circle" data-icon="fa fa-plus-circle">fa fa-plus-circle</option>
                                        <option value="fas fa-address-book" data-icon="fas fa-address-book">fas fa-address-book</option>
                                        <option value="fas fa-address-card" data-icon="fas fa-address-card">fas fa-address-card</option>
                                        <option value="fas fa-adjust" data-icon="fas fa-adjust">fas fa-adjust</option>
                                        <option value="fas fa-align-center" data-icon="fas fa-align-center">fas fa-align-center</option>
                                        <option value="fas fa-align-justify" data-icon="fas fa-align-justify">fas fa-align-justify</option>
                                        <option value="fas fa-align-left" data-icon="fas fa-align-left">fas fa-align-left</option>
                                        <option value="fas fa-align-right" data-icon="fas fa-align-right">fas fa-align-right</option>
                                        <option value="fas fa-allergies" data-icon="fas fa-allergies">fas fa-allergies</option>
                                        <option value="fas fa-ambulance" data-icon="fas fa-ambulance">fas fa-ambulance</option>
                                        <option value="fas fa-american-sign-language-interpreting" data-icon="fas fa-american-sign-language-interpreting">fas fa-american-sign-language-interpreting</option>
                                        <option value="fas fa-anchor" data-icon="fas fa-anchor">fas fa-anchor</option>
                                        <option value="fas fa-angle-double-down" data-icon="fas fa-angle-double-down">fas fa-angle-double-down</option>
                                        <option value="fas fa-angle-double-left" data-icon="fas fa-angle-double-left">fas fa-angle-double-left</option>
                                        <option value="fas fa-angle-double-right" data-icon="fas fa-angle-double-right">fas fa-angle-double-right</option>
                                        <option value="fas fa-angle-double-up" data-icon="fas fa-angle-double-up">fas fa-angle-double-up</option>
                                        <option value="fas fa-angle-down" data-icon="fas fa-angle-down">fas fa-angle-down</option>
                                        <option value="fas fa-angle-left" data-icon="fas fa-angle-left">fas fa-angle-left</option>
                                        <option value="fas fa-angle-right" data-icon="fas fa-angle-right">fas fa-angle-right</option>
                                        <option value="fas fa-angle-up" data-icon="fas fa-angle-up">fas fa-angle-up</option>
                                        <option value="fas fa-archive" data-icon="fas fa-archive">fas fa-archive</option>
                                        <option value="fas fa-arrow-alt-circle-down" data-icon="fas fa-arrow-alt-circle-down">fas fa-arrow-alt-circle-down</option>
                                        <option value="fas fa-arrow-alt-circle-left" data-icon="fas fa-arrow-alt-circle-left">fas fa-arrow-alt-circle-left</option>
                                        <option value="fas fa-arrow-alt-circle-right" data-icon="fas fa-arrow-alt-circle-right">fas fa-arrow-alt-circle-right</option>
                                        <option value="fas fa-arrow-alt-circle-up" data-icon="fas fa-arrow-alt-circle-up">fas fa-arrow-alt-circle-up</option>
                                        <option value="fas fa-arrow-circle-down" data-icon="fas fa-arrow-circle-down">fas fa-arrow-circle-down</option>
                                        <option value="fas fa-arrow-circle-left" data-icon="fas fa-arrow-circle-left">fas fa-arrow-circle-left</option>
                                        <option value="fas fa-arrow-circle-right" data-icon="fas fa-arrow-circle-right">fas fa-arrow-circle-right</option>
                                        <option value="fas fa-arrow-circle-up" data-icon="fas fa-arrow-circle-up">fas fa-arrow-circle-up</option>
                                        <option value="fas fa-arrow-down" data-icon="fas fa-arrow-down">fas fa-arrow-down</option>
                                        <option value="fas fa-arrow-left" data-icon="fas fa-arrow-left">fas fa-arrow-left</option>
                                        <option value="fas fa-arrow-right" data-icon="fas fa-arrow-right">fas fa-arrow-right</option>
                                        <option value="fas fa-arrow-up" data-icon="fas fa-arrow-up">fas fa-arrow-up</option>
                                        <option value="fas fa-arrows-alt" data-icon="fas fa-arrows-alt">fas fa-arrows-alt</option>
                                        <option value="fas fa-arrows-alt-h" data-icon="fas fa-arrows-alt-h">fas fa-arrows-alt-h</option>
                                        <option value="fas fa-arrows-alt-v" data-icon="fas fa-arrows-alt-v">fas fa-arrows-alt-v</option>
                                        <option value="fas fa-assistive-listening-systems" data-icon="fas fa-assistive-listening-systems">fas fa-assistive-listening-systems</option>
                                        <option value="fas fa-asterisk" data-icon="fas fa-asterisk">fas fa-asterisk</option>
                                        <option value="fas fa-at" data-icon="fas fa-at">fas fa-at</option>
                                        <option value="fas fa-audio-description" data-icon="fas fa-audio-description">fas fa-audio-description</option>
                                        <option value="fas fa-backward" data-icon="fas fa-backward">fas fa-backward</option>
                                        <option value="fas fa-balance-scale" data-icon="fas fa-balance-scale">fas fa-balance-scale</option>
                                        <option value="fas fa-ban" data-icon="fas fa-ban">fas fa-ban</option>
                                        <option value="fas fa-band-aid" data-icon="fas fa-band-aid">fas fa-band-aid</option>
                                        <option value="fas fa-barcode" data-icon="fas fa-barcode">fas fa-barcode</option>
                                        <option value="fas fa-bars" data-icon="fas fa-bars">fas fa-bars</option>
                                        <option value="fas fa-baseball-ball" data-icon="fas fa-baseball-ball">fas fa-baseball-ball</option>
                                        <option value="fas fa-basketball-ball" data-icon="fas fa-basketball-ball">fas fa-basketball-ball</option>
                                        <option value="fas fa-bath" data-icon="fas fa-bath">fas fa-bath</option>
                                        <option value="fas fa-battery-empty" data-icon="fas fa-battery-empty">fas fa-battery-empty</option>
                                        <option value="fas fa-battery-full" data-icon="fas fa-battery-full">fas fa-battery-full</option>
                                        <option value="fas fa-battery-half" data-icon="fas fa-battery-half">fas fa-battery-half</option>
                                        <option value="fas fa-battery-quarter" data-icon="fas fa-battery-quarter">fas fa-battery-quarter</option>
                                        <option value="fas fa-battery-three-quarters" data-icon="fas fa-battery-three-quarters">fas fa-battery-three-quarters</option>
                                        <option value="fas fa-bed" data-icon="fas fa-bed">fas fa-bed</option>
                                        <option value="fas fa-beer" data-icon="fas fa-beer">fas fa-beer</option>
                                        <option value="fas fa-bell" data-icon="fas fa-bell">fas fa-bell</option>
                                        <option value="fas fa-bell-slash" data-icon="fas fa-bell-slash">fas fa-bell-slash</option>
                                        <option value="fas fa-bicycle" data-icon="fas fa-bicycle">fas fa-bicycle</option>
                                        <option value="fas fa-binoculars" data-icon="fas fa-binoculars">fas fa-binoculars</option>
                                        <option value="fas fa-birthday-cake" data-icon="fas fa-birthday-cake">fas fa-birthday-cake</option>
                                        <option value="fas fa-blind" data-icon="fas fa-blind">fas fa-blind</option>
                                        <option value="fas fa-bold" data-icon="fas fa-bold">fas fa-bold</option>
                                        <option value="fas fa-bolt" data-icon="fas fa-bolt">fas fa-bolt</option>
                                        <option value="fas fa-bomb" data-icon="fas fa-bomb">fas fa-bomb</option>
                                        <option value="fas fa-book" data-icon="fas fa-book">fas fa-book</option>
                                        <option value="fas fa-bookmark" data-icon="fas fa-bookmark">fas fa-bookmark</option>
                                        <option value="fas fa-bowling-ball" data-icon="fas fa-bowling-ball">fas fa-bowling-ball</option>
                                        <option value="fas fa-box" data-icon="fas fa-box">fas fa-box</option>
                                        <option value="fas fa-box-open" data-icon="fas fa-box-open">fas fa-box-open</option>
                                        <option value="fas fa-boxes" data-icon="fas fa-boxes">fas fa-boxes</option>
                                        <option value="fas fa-braille" data-icon="fas fa-braille">fas fa-braille</option>
                                        <option value="fas fa-briefcase" data-icon="fas fa-briefcase">fas fa-briefcase</option>
                                        <option value="fas fa-briefcase-medical" data-icon="fas fa-briefcase-medical">fas fa-briefcase-medical</option>
                                        <option value="fas fa-bug" data-icon="fas fa-bug">fas fa-bug</option>
                                        <option value="fas fa-building" data-icon="fas fa-building">fas fa-building</option>
                                        <option value="fas fa-bullhorn" data-icon="fas fa-bullhorn">fas fa-bullhorn</option>
                                        <option value="fas fa-bullseye" data-icon="fas fa-bullseye">fas fa-bullseye</option>
                                        <option value="fas fa-burn" data-icon="fas fa-burn">fas fa-burn</option>
                                        <option value="fas fa-bus" data-icon="fas fa-bus">fas fa-bus</option>
                                        <option value="fas fa-calculator" data-icon="fas fa-calculator">fas fa-calculator</option>
                                        <option value="fas fa-calendar" data-icon="fas fa-calendar">fas fa-calendar</option>
                                        <option value="fas fa-calendar-alt" data-icon="fas fa-calendar-alt">fas fa-calendar-alt</option>
                                        <option value="fas fa-calendar-check" data-icon="fas fa-calendar-check">fas fa-calendar-check</option>
                                        <option value="fas fa-calendar-minus" data-icon="fas fa-calendar-minus">fas fa-calendar-minus</option>
                                        <option value="fas fa-calendar-plus" data-icon="fas fa-calendar-plus">fas fa-calendar-plus</option>
                                        <option value="fas fa-calendar-times" data-icon="fas fa-calendar-times">fas fa-calendar-times</option>
                                        <option value="fas fa-camera" data-icon="fas fa-camera">fas fa-camera</option>
                                        <option value="fas fa-camera-retro" data-icon="fas fa-camera-retro">fas fa-camera-retro</option>
                                        <option value="fas fa-capsules" data-icon="fas fa-capsules">fas fa-capsules</option>
                                        <option value="fas fa-car" data-icon="fas fa-car">fas fa-car</option>
                                        <option value="fas fa-caret-down" data-icon="fas fa-caret-down">fas fa-caret-down</option>
                                        <option value="fas fa-caret-left" data-icon="fas fa-caret-left">fas fa-caret-left</option>
                                        <option value="fas fa-caret-right" data-icon="fas fa-caret-right">fas fa-caret-right</option>
                                        <option value="fas fa-caret-square-down" data-icon="fas fa-caret-square-down">fas fa-caret-square-down</option>
                                        <option value="fas fa-caret-square-left" data-icon="fas fa-caret-square-left">fas fa-caret-square-left</option>
                                        <option value="fas fa-caret-square-right" data-icon="fas fa-caret-square-right">fas fa-caret-square-right</option>
                                        <option value="fas fa-caret-square-up" data-icon="fas fa-caret-square-up">fas fa-caret-square-up</option>
                                        <option value="fas fa-caret-up" data-icon="fas fa-caret-up">fas fa-caret-up</option>
                                        <option value="fas fa-cart-arrow-down" data-icon="fas fa-cart-arrow-down">fas fa-cart-arrow-down</option>
                                        <option value="fas fa-cart-plus" data-icon="fas fa-cart-plus">fas fa-cart-plus</option>
                                        <option value="fas fa-certificate" data-icon="fas fa-certificate">fas fa-certificate</option>
                                        <option value="fas fa-chart-area" data-icon="fas fa-chart-area">fas fa-chart-area</option>
                                        <option value="fas fa-chart-bar" data-icon="fas fa-chart-bar">fas fa-chart-bar</option>
                                        <option value="fas fa-chart-line" data-icon="fas fa-chart-line">fas fa-chart-line</option>
                                        <option value="fas fa-chart-pie" data-icon="fas fa-chart-pie">fas fa-chart-pie</option>
                                        <option value="fas fa-check" data-icon="fas fa-check">fas fa-check</option>
                                        <option value="fas fa-check-circle" data-icon="fas fa-check-circle">fas fa-check-circle</option>
                                        <option value="fas fa-check-square" data-icon="fas fa-check-square">fas fa-check-square</option>
                                        <option value="fas fa-chess" data-icon="fas fa-chess">fas fa-chess</option>
                                        <option value="fas fa-chess-bishop" data-icon="fas fa-chess-bishop">fas fa-chess-bishop</option>
                                        <option value="fas fa-chess-board" data-icon="fas fa-chess-board">fas fa-chess-board</option>
                                        <option value="fas fa-chess-king" data-icon="fas fa-chess-king">fas fa-chess-king</option>
                                        <option value="fas fa-chess-knight" data-icon="fas fa-chess-knight">fas fa-chess-knight</option>
                                        <option value="fas fa-chess-pawn" data-icon="fas fa-chess-pawn">fas fa-chess-pawn</option>
                                        <option value="fas fa-chess-queen" data-icon="fas fa-chess-queen">fas fa-chess-queen</option>
                                        <option value="fas fa-chess-rook" data-icon="fas fa-chess-rook">fas fa-chess-rook</option>
                                        <option value="fas fa-chevron-circle-down" data-icon="fas fa-chevron-circle-down">fas fa-chevron-circle-down</option>
                                        <option value="fas fa-chevron-circle-left" data-icon="fas fa-chevron-circle-left">fas fa-chevron-circle-left</option>
                                        <option value="fas fa-chevron-circle-right" data-icon="fas fa-chevron-circle-right">fas fa-chevron-circle-right</option>
                                        <option value="fas fa-chevron-circle-up" data-icon="fas fa-chevron-circle-up">fas fa-chevron-circle-up</option>
                                        <option value="fas fa-chevron-down" data-icon="fas fa-chevron-down">fas fa-chevron-down</option>
                                        <option value="fas fa-chevron-left" data-icon="fas fa-chevron-left">fas fa-chevron-left</option>
                                        <option value="fas fa-chevron-right" data-icon="fas fa-chevron-right">fas fa-chevron-right</option>
                                        <option value="fas fa-chevron-up" data-icon="fas fa-chevron-up">fas fa-chevron-up</option>
                                        <option value="fas fa-child" data-icon="fas fa-child">fas fa-child</option>
                                        <option value="fas fa-circle" data-icon="fas fa-circle">fas fa-circle</option>
                                        <option value="fas fa-circle-notch" data-icon="fas fa-circle-notch">fas fa-circle-notch</option>
                                        <option value="fas fa-clipboard" data-icon="fas fa-clipboard">fas fa-clipboard</option>
                                        <option value="fas fa-clipboard-check" data-icon="fas fa-clipboard-check">fas fa-clipboard-check</option>
                                        <option value="fas fa-clipboard-list" data-icon="fas fa-clipboard-list">fas fa-clipboard-list</option>
                                        <option value="fas fa-clock" data-icon="fas fa-clock">fas fa-clock</option>
                                        <option value="fas fa-clone" data-icon="fas fa-clone">fas fa-clone</option>
                                        <option value="fas fa-closed-captioning" data-icon="fas fa-closed-captioning">fas fa-closed-captioning</option>
                                        <option value="fas fa-cloud" data-icon="fas fa-cloud">fas fa-cloud</option>
                                        <option value="fas fa-cloud-download-alt" data-icon="fas fa-cloud-download-alt">fas fa-cloud-download-alt</option>
                                        <option value="fas fa-cloud-upload-alt" data-icon="fas fa-cloud-upload-alt">fas fa-cloud-upload-alt</option>
                                        <option value="fas fa-code" data-icon="fas fa-code">fas fa-code</option>
                                        <option value="fas fa-code-branch" data-icon="fas fa-code-branch">fas fa-code-branch</option>
                                        <option value="fas fa-coffee" data-icon="fas fa-coffee">fas fa-coffee</option>
                                        <option value="fas fa-cog" data-icon="fas fa-cog">fas fa-cog</option>
                                        <option value="fas fa-cogs" data-icon="fas fa-cogs">fas fa-cogs</option>
                                        <option value="fas fa-columns" data-icon="fas fa-columns">fas fa-columns</option>
                                        <option value="fas fa-comment" data-icon="fas fa-comment">fas fa-comment</option>
                                        <option value="fas fa-comment-alt" data-icon="fas fa-comment-alt">fas fa-comment-alt</option>
                                        <option value="fas fa-comment-dots" data-icon="fas fa-comment-dots">fas fa-comment-dots</option>
                                        <option value="fas fa-comment-slash" data-icon="fas fa-comment-slash">fas fa-comment-slash</option>
                                        <option value="fas fa-comments" data-icon="fas fa-comments">fas fa-comments</option>
                                        <option value="fas fa-compass" data-icon="fas fa-compass">fas fa-compass</option>
                                        <option value="fas fa-compress" data-icon="fas fa-compress">fas fa-compress</option>
                                        <option value="fas fa-copy" data-icon="fas fa-copy">fas fa-copy</option>
                                        <option value="fas fa-copyright" data-icon="fas fa-copyright">fas fa-copyright</option>
                                        <option value="fas fa-couch" data-icon="fas fa-couch">fas fa-couch</option>
                                        <option value="fas fa-credit-card" data-icon="fas fa-credit-card">fas fa-credit-card</option>
                                        <option value="fas fa-crop" data-icon="fas fa-crop">fas fa-crop</option>
                                        <option value="fas fa-crosshairs" data-icon="fas fa-crosshairs">fas fa-crosshairs</option>
                                        <option value="fas fa-cube" data-icon="fas fa-cube">fas fa-cube</option>
                                        <option value="fas fa-cubes" data-icon="fas fa-cubes">fas fa-cubes</option>
                                        <option value="fas fa-cut" data-icon="fas fa-cut">fas fa-cut</option>
                                        <option value="fas fa-database" data-icon="fas fa-database">fas fa-database</option>
                                        <option value="fas fa-deaf" data-icon="fas fa-deaf">fas fa-deaf</option>
                                        <option value="fas fa-desktop" data-icon="fas fa-desktop">fas fa-desktop</option>
                                        <option value="fas fa-diagnoses" data-icon="fas fa-diagnoses">fas fa-diagnoses</option>
                                        <option value="fas fa-dna" data-icon="fas fa-dna">fas fa-dna</option>
                                        <option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign">fas fa-dollar-sign</option>
                                        <option value="fas fa-dolly" data-icon="fas fa-dolly">fas fa-dolly</option>
                                        <option value="fas fa-dolly-flatbed" data-icon="fas fa-dolly-flatbed">fas fa-dolly-flatbed</option>
                                        <option value="fas fa-donate" data-icon="fas fa-donate">fas fa-donate</option>
                                        <option value="fas fa-dot-circle" data-icon="fas fa-dot-circle">fas fa-dot-circle</option>
                                        <option value="fas fa-dove" data-icon="fas fa-dove">fas fa-dove</option>
                                        <option value="fas fa-download" data-icon="fas fa-download">fas fa-download</option>
                                        <option value="fas fa-edit" data-icon="fas fa-edit">fas fa-edit</option>
                                        <option value="fas fa-eject" data-icon="fas fa-eject">fas fa-eject</option>
                                        <option value="fas fa-ellipsis-h" data-icon="fas fa-ellipsis-h">fas fa-ellipsis-h</option>
                                        <option value="fas fa-ellipsis-v" data-icon="fas fa-ellipsis-v">fas fa-ellipsis-v</option>
                                        <option value="fas fa-envelope" data-icon="fas fa-envelope">fas fa-envelope</option>
                                        <option value="fas fa-envelope-open" data-icon="fas fa-envelope-open">fas fa-envelope-open</option>
                                        <option value="fas fa-envelope-square" data-icon="fas fa-envelope-square">fas fa-envelope-square</option>
                                        <option value="fas fa-eraser" data-icon="fas fa-eraser">fas fa-eraser</option>
                                        <option value="fas fa-euro-sign" data-icon="fas fa-euro-sign">fas fa-euro-sign</option>
                                        <option value="fas fa-exchange-alt" data-icon="fas fa-exchange-alt">fas fa-exchange-alt</option>
                                        <option value="fas fa-exclamation" data-icon="fas fa-exclamation">fas fa-exclamation</option>
                                        <option value="fas fa-exclamation-circle" data-icon="fas fa-exclamation-circle">fas fa-exclamation-circle</option>
                                        <option value="fas fa-exclamation-triangle" data-icon="fas fa-exclamation-triangle">fas fa-exclamation-triangle</option>
                                        <option value="fas fa-expand" data-icon="fas fa-expand">fas fa-expand</option>
                                        <option value="fas fa-expand-arrows-alt" data-icon="fas fa-expand-arrows-alt">fas fa-expand-arrows-alt</option>
                                        <option value="fas fa-external-link-alt" data-icon="fas fa-external-link-alt">fas fa-external-link-alt</option>
                                        <option value="fas fa-external-link-square-alt" data-icon="fas fa-external-link-square-alt">fas fa-external-link-square-alt</option>
                                        <option value="fas fa-eye" data-icon="fas fa-eye">fas fa-eye</option>
                                        <option value="fas fa-eye-dropper" data-icon="fas fa-eye-dropper">fas fa-eye-dropper</option>
                                        <option value="fas fa-eye-slash" data-icon="fas fa-eye-slash">fas fa-eye-slash</option>
                                        <option value="fas fa-fast-backward" data-icon="fas fa-fast-backward">fas fa-fast-backward</option>
                                        <option value="fas fa-fast-forward" data-icon="fas fa-fast-forward">fas fa-fast-forward</option>
                                        <option value="fas fa-fax" data-icon="fas fa-fax">fas fa-fax</option>
                                        <option value="fas fa-female" data-icon="fas fa-female">fas fa-female</option>
                                        <option value="fas fa-fighter-jet" data-icon="fas fa-fighter-jet">fas fa-fighter-jet</option>
                                        <option value="fas fa-file" data-icon="fas fa-file">fas fa-file</option>
                                        <option value="fas fa-file-alt" data-icon="fas fa-file-alt">fas fa-file-alt</option>
                                        <option value="fas fa-file-archive" data-icon="fas fa-file-archive">fas fa-file-archive</option>
                                        <option value="fas fa-file-audio" data-icon="fas fa-file-audio">fas fa-file-audio</option>
                                        <option value="fas fa-file-code" data-icon="fas fa-file-code">fas fa-file-code</option>
                                        <option value="fas fa-file-excel" data-icon="fas fa-file-excel">fas fa-file-excel</option>
                                        <option value="fas fa-file-image" data-icon="fas fa-file-image">fas fa-file-image</option>
                                        <option value="fas fa-file-medical" data-icon="fas fa-file-medical">fas fa-file-medical</option>
                                        <option value="fas fa-file-medical-alt" data-icon="fas fa-file-medical-alt">fas fa-file-medical-alt</option>
                                        <option value="fas fa-file-pdf" data-icon="fas fa-file-pdf">fas fa-file-pdf</option>
                                        <option value="fas fa-file-powerpoint" data-icon="fas fa-file-powerpoint">fas fa-file-powerpoint</option>
                                        <option value="fas fa-file-video" data-icon="fas fa-file-video">fas fa-file-video</option>
                                        <option value="fas fa-file-word" data-icon="fas fa-file-word">fas fa-file-word</option>
                                        <option value="fas fa-film" data-icon="fas fa-film">fas fa-film</option>
                                        <option value="fas fa-filter" data-icon="fas fa-filter">fas fa-filter</option>
                                        <option value="fas fa-fire" data-icon="fas fa-fire">fas fa-fire</option>
                                        <option value="fas fa-fire-extinguisher" data-icon="fas fa-fire-extinguisher">fas fa-fire-extinguisher</option>
                                        <option value="fas fa-first-aid" data-icon="fas fa-first-aid">fas fa-first-aid</option>
                                        <option value="fas fa-flag" data-icon="fas fa-flag">fas fa-flag</option>
                                        <option value="fas fa-flag-checkered" data-icon="fas fa-flag-checkered">fas fa-flag-checkered</option>
                                        <option value="fas fa-flask" data-icon="fas fa-flask">fas fa-flask</option>
                                        <option value="fas fa-folder" data-icon="fas fa-folder">fas fa-folder</option>
                                        <option value="fas fa-folder-open" data-icon="fas fa-folder-open">fas fa-folder-open</option>
                                        <option value="fas fa-font" data-icon="fas fa-font">fas fa-font</option>
                                        <option value="fas fa-football-ball" data-icon="fas fa-football-ball">fas fa-football-ball</option>
                                        <option value="fas fa-forward" data-icon="fas fa-forward">fas fa-forward</option>
                                        <option value="fas fa-frown" data-icon="fas fa-frown">fas fa-frown</option>
                                        <option value="fas fa-futbol" data-icon="fas fa-futbol">fas fa-futbol</option>
                                        <option value="fas fa-gamepad" data-icon="fas fa-gamepad">fas fa-gamepad</option>
                                        <option value="fas fa-gavel" data-icon="fas fa-gavel">fas fa-gavel</option>
                                        <option value="fas fa-gem" data-icon="fas fa-gem">fas fa-gem</option>
                                        <option value="fas fa-genderless" data-icon="fas fa-genderless">fas fa-genderless</option>
                                        <option value="fas fa-gift" data-icon="fas fa-gift">fas fa-gift</option>
                                        <option value="fas fa-glass-martini" data-icon="fas fa-glass-martini">fas fa-glass-martini</option>
                                        <option value="fas fa-globe" data-icon="fas fa-globe">fas fa-globe</option>
                                        <option value="fas fa-golf-ball" data-icon="fas fa-golf-ball">fas fa-golf-ball</option>
                                        <option value="fas fa-graduation-cap" data-icon="fas fa-graduation-cap">fas fa-graduation-cap</option>
                                        <option value="fas fa-h-square" data-icon="fas fa-h-square">fas fa-h-square</option>
                                        <option value="fas fa-hand-holding" data-icon="fas fa-hand-holding">fas fa-hand-holding</option>
                                        <option value="fas fa-hand-holding-heart" data-icon="fas fa-hand-holding-heart">fas fa-hand-holding-heart</option>
                                        <option value="fas fa-hand-holding-usd" data-icon="fas fa-hand-holding-usd">fas fa-hand-holding-usd</option>
                                        <option value="fas fa-hand-lizard" data-icon="fas fa-hand-lizard">fas fa-hand-lizard</option>
                                        <option value="fas fa-hand-paper" data-icon="fas fa-hand-paper">fas fa-hand-paper</option>
                                        <option value="fas fa-hand-peace" data-icon="fas fa-hand-peace">fas fa-hand-peace</option>
                                        <option value="fas fa-hand-point-down" data-icon="fas fa-hand-point-down">fas fa-hand-point-down</option>
                                        <option value="fas fa-hand-point-left" data-icon="fas fa-hand-point-left">fas fa-hand-point-left</option>
                                        <option value="fas fa-hand-point-right" data-icon="fas fa-hand-point-right">fas fa-hand-point-right</option>
                                        <option value="fas fa-hand-point-up" data-icon="fas fa-hand-point-up">fas fa-hand-point-up</option>
                                        <option value="fas fa-hand-pointer" data-icon="fas fa-hand-pointer">fas fa-hand-pointer</option>
                                        <option value="fas fa-hand-rock" data-icon="fas fa-hand-rock">fas fa-hand-rock</option>
                                        <option value="fas fa-hand-scissors" data-icon="fas fa-hand-scissors">fas fa-hand-scissors</option>
                                        <option value="fas fa-hand-spock" data-icon="fas fa-hand-spock">fas fa-hand-spock</option>
                                        <option value="fas fa-hands" data-icon="fas fa-hands">fas fa-hands</option>
                                        <option value="fas fa-hands-helping" data-icon="fas fa-hands-helping">fas fa-hands-helping</option>
                                        <option value="fas fa-handshake" data-icon="fas fa-handshake">fas fa-handshake</option>
                                        <option value="fas fa-hashtag" data-icon="fas fa-hashtag">fas fa-hashtag</option>
                                        <option value="fas fa-hdd" data-icon="fas fa-hdd">fas fa-hdd</option>
                                        <option value="fas fa-heading" data-icon="fas fa-heading">fas fa-heading</option>
                                        <option value="fas fa-headphones" data-icon="fas fa-headphones">fas fa-headphones</option>
                                        <option value="fas fa-heart" data-icon="fas fa-heart">fas fa-heart</option>
                                        <option value="fas fa-heartbeat" data-icon="fas fa-heartbeat">fas fa-heartbeat</option>
                                        <option value="fas fa-history" data-icon="fas fa-history">fas fa-history</option>
                                        <option value="fas fa-hockey-puck" data-icon="fas fa-hockey-puck">fas fa-hockey-puck</option>
                                        <option value="fas fa-home" data-icon="fas fa-home">fas fa-home</option>
                                        <option value="fas fa-hospital" data-icon="fas fa-hospital">fas fa-hospital</option>
                                        <option value="fas fa-hospital-alt" data-icon="fas fa-hospital-alt">fas fa-hospital-alt</option>
                                        <option value="fas fa-hospital-symbol" data-icon="fas fa-hospital-symbol">fas fa-hospital-symbol</option>
                                        <option value="fas fa-hourglass" data-icon="fas fa-hourglass">fas fa-hourglass</option>
                                        <option value="fas fa-hourglass-end" data-icon="fas fa-hourglass-end">fas fa-hourglass-end</option>
                                        <option value="fas fa-hourglass-half" data-icon="fas fa-hourglass-half">fas fa-hourglass-half</option>
                                        <option value="fas fa-hourglass-start" data-icon="fas fa-hourglass-start">fas fa-hourglass-start</option>
                                        <option value="fas fa-i-cursor" data-icon="fas fa-i-cursor">fas fa-i-cursor</option>
                                        <option value="fas fa-id-badge" data-icon="fas fa-id-badge">fas fa-id-badge</option>
                                        <option value="fas fa-id-card" data-icon="fas fa-id-card">fas fa-id-card</option>
                                        <option value="fas fa-id-card-alt" data-icon="fas fa-id-card-alt">fas fa-id-card-alt</option>
                                        <option value="fas fa-image" data-icon="fas fa-image">fas fa-image</option>
                                        <option value="fas fa-images" data-icon="fas fa-images">fas fa-images</option>
                                        <option value="fas fa-inbox" data-icon="fas fa-inbox">fas fa-inbox</option>
                                        <option value="fas fa-indent" data-icon="fas fa-indent">fas fa-indent</option>
                                        <option value="fas fa-industry" data-icon="fas fa-industry">fas fa-industry</option>
                                        <option value="fas fa-info" data-icon="fas fa-info">fas fa-info</option>
                                        <option value="fas fa-info-circle" data-icon="fas fa-info-circle">fas fa-info-circle</option>
                                        <option value="fas fa-italic" data-icon="fas fa-italic">fas fa-italic</option>
                                        <option value="fas fa-key" data-icon="fas fa-key">fas fa-key</option>
                                        <option value="fas fa-keyboard" data-icon="fas fa-keyboard">fas fa-keyboard</option>
                                        <option value="fas fa-language" data-icon="fas fa-language">fas fa-language</option>
                                        <option value="fas fa-laptop" data-icon="fas fa-laptop">fas fa-laptop</option>
                                        <option value="fas fa-leaf" data-icon="fas fa-leaf">fas fa-leaf</option>
                                        <option value="fas fa-lemon" data-icon="fas fa-lemon">fas fa-lemon</option>
                                        <option value="fas fa-level-down-alt" data-icon="fas fa-level-down-alt">fas fa-level-down-alt</option>
                                        <option value="fas fa-level-up-alt" data-icon="fas fa-level-up-alt">fas fa-level-up-alt</option>
                                        <option value="fas fa-life-ring" data-icon="fas fa-life-ring">fas fa-life-ring</option>
                                        <option value="fas fa-lightbulb" data-icon="fas fa-lightbulb">fas fa-lightbulb</option>
                                        <option value="fas fa-link" data-icon="fas fa-link">fas fa-link</option>
                                        <option value="fas fa-lira-sign" data-icon="fas fa-lira-sign">fas fa-lira-sign</option>
                                        <option value="fas fa-list" data-icon="fas fa-list">fas fa-list</option>
                                        <option value="fas fa-list-alt" data-icon="fas fa-list-alt">fas fa-list-alt</option>
                                        <option value="fas fa-list-ol" data-icon="fas fa-list-ol">fas fa-list-ol</option>
                                        <option value="fas fa-list-ul" data-icon="fas fa-list-ul">fas fa-list-ul</option>
                                        <option value="fas fa-location-arrow" data-icon="fas fa-location-arrow">fas fa-location-arrow</option>
                                        <option value="fas fa-lock" data-icon="fas fa-lock">fas fa-lock</option>
                                        <option value="fas fa-lock-open" data-icon="fas fa-lock-open">fas fa-lock-open</option>
                                        <option value="fas fa-long-arrow-alt-down" data-icon="fas fa-long-arrow-alt-down">fas fa-long-arrow-alt-down</option>
                                        <option value="fas fa-long-arrow-alt-left" data-icon="fas fa-long-arrow-alt-left">fas fa-long-arrow-alt-left</option>
                                        <option value="fas fa-long-arrow-alt-right" data-icon="fas fa-long-arrow-alt-right">fas fa-long-arrow-alt-right</option>
                                        <option value="fas fa-long-arrow-alt-up" data-icon="fas fa-long-arrow-alt-up">fas fa-long-arrow-alt-up</option>
                                        <option value="fas fa-low-vision" data-icon="fas fa-low-vision">fas fa-low-vision</option>
                                        <option value="fas fa-magic" data-icon="fas fa-magic">fas fa-magic</option>
                                        <option value="fas fa-magnet" data-icon="fas fa-magnet">fas fa-magnet</option>
                                        <option value="fas fa-male" data-icon="fas fa-male">fas fa-male</option>
                                        <option value="fas fa-map" data-icon="fas fa-map">fas fa-map</option>
                                        <option value="fas fa-map-marker" data-icon="fas fa-map-marker">fas fa-map-marker</option>
                                        <option value="fas fa-map-marker-alt" data-icon="fas fa-map-marker-alt">fas fa-map-marker-alt</option>
                                        <option value="fas fa-map-pin" data-icon="fas fa-map-pin">fas fa-map-pin</option>
                                        <option value="fas fa-map-signs" data-icon="fas fa-map-signs">fas fa-map-signs</option>
                                        <option value="fas fa-mars" data-icon="fas fa-mars">fas fa-mars</option>
                                        <option value="fas fa-mars-double" data-icon="fas fa-mars-double">fas fa-mars-double</option>
                                        <option value="fas fa-mars-stroke" data-icon="fas fa-mars-stroke">fas fa-mars-stroke</option>
                                        <option value="fas fa-mars-stroke-h" data-icon="fas fa-mars-stroke-h">fas fa-mars-stroke-h</option>
                                        <option value="fas fa-mars-stroke-v" data-icon="fas fa-mars-stroke-v">fas fa-mars-stroke-v</option>
                                        <option value="fas fa-medkit" data-icon="fas fa-medkit">fas fa-medkit</option>
                                        <option value="fas fa-meh" data-icon="fas fa-meh">fas fa-meh</option>
                                        <option value="fas fa-mercury" data-icon="fas fa-mercury">fas fa-mercury</option>
                                        <option value="fas fa-microchip" data-icon="fas fa-microchip">fas fa-microchip</option>
                                        <option value="fas fa-microphone" data-icon="fas fa-microphone">fas fa-microphone</option>
                                        <option value="fas fa-microphone-slash" data-icon="fas fa-microphone-slash">fas fa-microphone-slash</option>
                                        <option value="fas fa-minus" data-icon="fas fa-minus">fas fa-minus</option>
                                        <option value="fas fa-minus-circle" data-icon="fas fa-minus-circle">fas fa-minus-circle</option>
                                        <option value="fas fa-minus-square" data-icon="fas fa-minus-square">fas fa-minus-square</option>
                                        <option value="fas fa-mobile" data-icon="fas fa-mobile">fas fa-mobile</option>
                                        <option value="fas fa-mobile-alt" data-icon="fas fa-mobile-alt">fas fa-mobile-alt</option>
                                        <option value="fas fa-money-bill-alt" data-icon="fas fa-money-bill-alt">fas fa-money-bill-alt</option>
                                        <option value="fas fa-moon" data-icon="fas fa-moon">fas fa-moon</option>
                                        <option value="fas fa-motorcycle" data-icon="fas fa-motorcycle">fas fa-motorcycle</option>
                                        <option value="fas fa-mouse-pointer" data-icon="fas fa-mouse-pointer">fas fa-mouse-pointer</option>
                                        <option value="fas fa-music" data-icon="fas fa-music">fas fa-music</option>
                                        <option value="fas fa-neuter" data-icon="fas fa-neuter">fas fa-neuter</option>
                                        <option value="fas fa-newspaper" data-icon="fas fa-newspaper">fas fa-newspaper</option>
                                        <option value="fas fa-notes-medical" data-icon="fas fa-notes-medical">fas fa-notes-medical</option>
                                        <option value="fas fa-object-group" data-icon="fas fa-object-group">fas fa-object-group</option>
                                        <option value="fas fa-object-ungroup" data-icon="fas fa-object-ungroup">fas fa-object-ungroup</option>
                                        <option value="fas fa-outdent" data-icon="fas fa-outdent">fas fa-outdent</option>
                                        <option value="fas fa-paint-brush" data-icon="fas fa-paint-brush">fas fa-paint-brush</option>
                                        <option value="fas fa-pallet" data-icon="fas fa-pallet">fas fa-pallet</option>
                                        <option value="fas fa-paper-plane" data-icon="fas fa-paper-plane">fas fa-paper-plane</option>
                                        <option value="fas fa-paperclip" data-icon="fas fa-paperclip">fas fa-paperclip</option>
                                        <option value="fas fa-parachute-box" data-icon="fas fa-parachute-box">fas fa-parachute-box</option>
                                        <option value="fas fa-paragraph" data-icon="fas fa-paragraph">fas fa-paragraph</option>
                                        <option value="fas fa-paste" data-icon="fas fa-paste">fas fa-paste</option>
                                        <option value="fas fa-pause" data-icon="fas fa-pause">fas fa-pause</option>
                                        <option value="fas fa-pause-circle" data-icon="fas fa-pause-circle">fas fa-pause-circle</option>
                                        <option value="fas fa-paw" data-icon="fas fa-paw">fas fa-paw</option>
                                        <option value="fas fa-pen-square" data-icon="fas fa-pen-square">fas fa-pen-square</option>
                                        <option value="fas fa-pencil-alt" data-icon="fas fa-pencil-alt">fas fa-pencil-alt</option>
                                        <option value="fas fa-people-carry" data-icon="fas fa-people-carry">fas fa-people-carry</option>
                                        <option value="fas fa-percent" data-icon="fas fa-percent">fas fa-percent</option>
                                        <option value="fas fa-phone" data-icon="fas fa-phone">fas fa-phone</option>
                                        <option value="fas fa-phone-slash" data-icon="fas fa-phone-slash">fas fa-phone-slash</option>
                                        <option value="fas fa-phone-square" data-icon="fas fa-phone-square">fas fa-phone-square</option>
                                        <option value="fas fa-phone-volume" data-icon="fas fa-phone-volume">fas fa-phone-volume</option>
                                        <option value="fas fa-piggy-bank" data-icon="fas fa-piggy-bank">fas fa-piggy-bank</option>
                                        <option value="fas fa-pills" data-icon="fas fa-pills">fas fa-pills</option>
                                        <option value="fas fa-plane" data-icon="fas fa-plane">fas fa-plane</option>
                                        <option value="fas fa-play" data-icon="fas fa-play">fas fa-play</option>
                                        <option value="fas fa-play-circle" data-icon="fas fa-play-circle">fas fa-play-circle</option>
                                        <option value="fas fa-plug" data-icon="fas fa-plug">fas fa-plug</option>
                                        <option value="fas fa-plus" data-icon="fas fa-plus">fas fa-plus</option>
                                        <option value="fas fa-plus-circle" data-icon="fas fa-plus-circle">fas fa-plus-circle</option>
                                        <option value="fas fa-plus-square" data-icon="fas fa-plus-square">fas fa-plus-square</option>
                                        <option value="fas fa-podcast" data-icon="fas fa-podcast">fas fa-podcast</option>
                                        <option value="fas fa-poo" data-icon="fas fa-poo">fas fa-poo</option>
                                        <option value="fas fa-pound-sign" data-icon="fas fa-pound-sign">fas fa-pound-sign</option>
                                        <option value="fas fa-power-off" data-icon="fas fa-power-off">fas fa-power-off</option>
                                        <option value="fas fa-prescription-bottle" data-icon="fas fa-prescription-bottle">fas fa-prescription-bottle</option>
                                        <option value="fas fa-prescription-bottle-alt" data-icon="fas fa-prescription-bottle-alt">fas fa-prescription-bottle-alt</option>
                                        <option value="fas fa-print" data-icon="fas fa-print">fas fa-print</option>
                                        <option value="fas fa-procedures" data-icon="fas fa-procedures">fas fa-procedures</option>
                                        <option value="fas fa-puzzle-piece" data-icon="fas fa-puzzle-piece">fas fa-puzzle-piece</option>
                                        <option value="fas fa-qrcode" data-icon="fas fa-qrcode">fas fa-qrcode</option>
                                        <option value="fas fa-question" data-icon="fas fa-question">fas fa-question</option>
                                        <option value="fas fa-question-circle" data-icon="fas fa-question-circle">fas fa-question-circle</option>
                                        <option value="fas fa-quidditch" data-icon="fas fa-quidditch">fas fa-quidditch</option>
                                        <option value="fas fa-quote-left" data-icon="fas fa-quote-left">fas fa-quote-left</option>
                                        <option value="fas fa-quote-right" data-icon="fas fa-quote-right">fas fa-quote-right</option>
                                        <option value="fas fa-random" data-icon="fas fa-random">fas fa-random</option>
                                        <option value="fas fa-recycle" data-icon="fas fa-recycle">fas fa-recycle</option>
                                        <option value="fas fa-redo" data-icon="fas fa-redo">fas fa-redo</option>
                                        <option value="fas fa-redo-alt" data-icon="fas fa-redo-alt">fas fa-redo-alt</option>
                                        <option value="fas fa-registered" data-icon="fas fa-registered">fas fa-registered</option>
                                        <option value="fas fa-reply" data-icon="fas fa-reply">fas fa-reply</option>
                                        <option value="fas fa-reply-all" data-icon="fas fa-reply-all">fas fa-reply-all</option>
                                        <option value="fas fa-retweet" data-icon="fas fa-retweet">fas fa-retweet</option>
                                        <option value="fas fa-ribbon" data-icon="fas fa-ribbon">fas fa-ribbon</option>
                                        <option value="fas fa-road" data-icon="fas fa-road">fas fa-road</option>
                                        <option value="fas fa-rocket" data-icon="fas fa-rocket">fas fa-rocket</option>
                                        <option value="fas fa-rss" data-icon="fas fa-rss">fas fa-rss</option>
                                        <option value="fas fa-rss-square" data-icon="fas fa-rss-square">fas fa-rss-square</option>
                                        <option value="fas fa-ruble-sign" data-icon="fas fa-ruble-sign">fas fa-ruble-sign</option>
                                        <option value="fas fa-rupee-sign" data-icon="fas fa-rupee-sign">fas fa-rupee-sign</option>
                                        <option value="fas fa-save" data-icon="fas fa-save">fas fa-save</option>
                                        <option value="fas fa-search" data-icon="fas fa-search">fas fa-search</option>
                                        <option value="fas fa-search-minus" data-icon="fas fa-search-minus">fas fa-search-minus</option>
                                        <option value="fas fa-search-plus" data-icon="fas fa-search-plus">fas fa-search-plus</option>
                                        <option value="fas fa-seedling" data-icon="fas fa-seedling">fas fa-seedling</option>
                                        <option value="fas fa-server" data-icon="fas fa-server">fas fa-server</option>
                                        <option value="fas fa-share" data-icon="fas fa-share">fas fa-share</option>
                                        <option value="fas fa-share-alt" data-icon="fas fa-share-alt">fas fa-share-alt</option>
                                        <option value="fas fa-share-alt-square" data-icon="fas fa-share-alt-square">fas fa-share-alt-square</option>
                                        <option value="fas fa-share-square" data-icon="fas fa-share-square">fas fa-share-square</option>
                                        <option value="fas fa-shekel-sign" data-icon="fas fa-shekel-sign">fas fa-shekel-sign</option>
                                        <option value="fas fa-shield-alt" data-icon="fas fa-shield-alt">fas fa-shield-alt</option>
                                        <option value="fas fa-ship" data-icon="fas fa-ship">fas fa-ship</option>
                                        <option value="fas fa-shipping-fast" data-icon="fas fa-shipping-fast">fas fa-shipping-fast</option>
                                        <option value="fas fa-shopping-bag" data-icon="fas fa-shopping-bag">fas fa-shopping-bag</option>
                                        <option value="fas fa-shopping-basket" data-icon="fas fa-shopping-basket">fas fa-shopping-basket</option>
                                        <option value="fas fa-shopping-cart" data-icon="fas fa-shopping-cart">fas fa-shopping-cart</option>
                                        <option value="fas fa-shower" data-icon="fas fa-shower">fas fa-shower</option>
                                        <option value="fas fa-sign" data-icon="fas fa-sign">fas fa-sign</option>
                                        <option value="fas fa-sign-in-alt" data-icon="fas fa-sign-in-alt">fas fa-sign-in-alt</option>
                                        <option value="fas fa-sign-language" data-icon="fas fa-sign-language">fas fa-sign-language</option>
                                        <option value="fas fa-sign-out-alt" data-icon="fas fa-sign-out-alt">fas fa-sign-out-alt</option>
                                        <option value="fas fa-signal" data-icon="fas fa-signal">fas fa-signal</option>
                                        <option value="fas fa-sitemap" data-icon="fas fa-sitemap">fas fa-sitemap</option>
                                        <option value="fas fa-sliders-h" data-icon="fas fa-sliders-h">fas fa-sliders-h</option>
                                        <option value="fas fa-smile" data-icon="fas fa-smile">fas fa-smile</option>
                                        <option value="fas fa-smoking" data-icon="fas fa-smoking">fas fa-smoking</option>
                                        <option value="fas fa-snowflake" data-icon="fas fa-snowflake">fas fa-snowflake</option>
                                        <option value="fas fa-sort" data-icon="fas fa-sort">fas fa-sort</option>
                                        <option value="fas fa-sort-alpha-down" data-icon="fas fa-sort-alpha-down">fas fa-sort-alpha-down</option>
                                        <option value="fas fa-sort-alpha-up" data-icon="fas fa-sort-alpha-up">fas fa-sort-alpha-up</option>
                                        <option value="fas fa-sort-amount-down" data-icon="fas fa-sort-amount-down">fas fa-sort-amount-down</option>
                                        <option value="fas fa-sort-amount-up" data-icon="fas fa-sort-amount-up">fas fa-sort-amount-up</option>
                                        <option value="fas fa-sort-down" data-icon="fas fa-sort-down">fas fa-sort-down</option>
                                        <option value="fas fa-sort-numeric-down" data-icon="fas fa-sort-numeric-down">fas fa-sort-numeric-down</option>
                                        <option value="fas fa-sort-numeric-up" data-icon="fas fa-sort-numeric-up">fas fa-sort-numeric-up</option>
                                        <option value="fas fa-sort-up" data-icon="fas fa-sort-up">fas fa-sort-up</option>
                                        <option value="fas fa-space-shuttle" data-icon="fas fa-space-shuttle">fas fa-space-shuttle</option>
                                        <option value="fas fa-spinner" data-icon="fas fa-spinner">fas fa-spinner</option>
                                        <option value="fas fa-square" data-icon="fas fa-square">fas fa-square</option>
                                        <option value="fas fa-square-full" data-icon="fas fa-square-full">fas fa-square-full</option>
                                        <option value="fas fa-star" data-icon="fas fa-star">fas fa-star</option>
                                        <option value="fas fa-star-half" data-icon="fas fa-star-half">fas fa-star-half</option>
                                        <option value="fas fa-step-backward" data-icon="fas fa-step-backward">fas fa-step-backward</option>
                                        <option value="fas fa-step-forward" data-icon="fas fa-step-forward">fas fa-step-forward</option>
                                        <option value="fas fa-stethoscope" data-icon="fas fa-stethoscope">fas fa-stethoscope</option>
                                        <option value="fas fa-sticky-note" data-icon="fas fa-sticky-note">fas fa-sticky-note</option>
                                        <option value="fas fa-stop" data-icon="fas fa-stop">fas fa-stop</option>
                                        <option value="fas fa-stop-circle" data-icon="fas fa-stop-circle">fas fa-stop-circle</option>
                                        <option value="fas fa-stopwatch" data-icon="fas fa-stopwatch">fas fa-stopwatch</option>
                                        <option value="fas fa-street-view" data-icon="fas fa-street-view">fas fa-street-view</option>
                                        <option value="fas fa-strikethrough" data-icon="fas fa-strikethrough">fas fa-strikethrough</option>
                                        <option value="fas fa-subscript" data-icon="fas fa-subscript">fas fa-subscript</option>
                                        <option value="fas fa-subway" data-icon="fas fa-subway">fas fa-subway</option>
                                        <option value="fas fa-suitcase" data-icon="fas fa-suitcase">fas fa-suitcase</option>
                                        <option value="fas fa-sun" data-icon="fas fa-sun">fas fa-sun</option>
                                        <option value="fas fa-superscript" data-icon="fas fa-superscript">fas fa-superscript</option>
                                        <option value="fas fa-sync" data-icon="fas fa-sync">fas fa-sync</option>
                                        <option value="fas fa-sync-alt" data-icon="fas fa-sync-alt">fas fa-sync-alt</option>
                                        <option value="fas fa-syringe" data-icon="fas fa-syringe">fas fa-syringe</option>
                                        <option value="fas fa-table" data-icon="fas fa-table">fas fa-table</option>
                                        <option value="fas fa-table-tennis" data-icon="fas fa-table-tennis">fas fa-table-tennis</option>
                                        <option value="fas fa-tablet" data-icon="fas fa-tablet">fas fa-tablet</option>
                                        <option value="fas fa-tablet-alt" data-icon="fas fa-tablet-alt">fas fa-tablet-alt</option>
                                        <option value="fas fa-tablets" data-icon="fas fa-tablets">fas fa-tablets</option>
                                        <option value="fas fa-tachometer-alt" data-icon="fas fa-tachometer-alt">fas fa-tachometer-alt</option>
                                        <option value="fas fa-tag" data-icon="fas fa-tag">fas fa-tag</option>
                                        <option value="fas fa-tags" data-icon="fas fa-tags">fas fa-tags</option>
                                        <option value="fas fa-tape" data-icon="fas fa-tape">fas fa-tape</option>
                                        <option value="fas fa-tasks" data-icon="fas fa-tasks">fas fa-tasks</option>
                                        <option value="fas fa-taxi" data-icon="fas fa-taxi">fas fa-taxi</option>
                                        <option value="fas fa-terminal" data-icon="fas fa-terminal">fas fa-terminal</option>
                                        <option value="fas fa-text-height" data-icon="fas fa-text-height">fas fa-text-height</option>
                                        <option value="fas fa-text-width" data-icon="fas fa-text-width">fas fa-text-width</option>
                                        <option value="fas fa-th" data-icon="fas fa-th">fas fa-th</option>
                                        <option value="fas fa-th-large" data-icon="fas fa-th-large">fas fa-th-large</option>
                                        <option value="fas fa-th-list" data-icon="fas fa-th-list">fas fa-th-list</option>
                                        <option value="fas fa-thermometer" data-icon="fas fa-thermometer">fas fa-thermometer</option>
                                        <option value="fas fa-thermometer-empty" data-icon="fas fa-thermometer-empty">fas fa-thermometer-empty</option>
                                        <option value="fas fa-thermometer-full" data-icon="fas fa-thermometer-full">fas fa-thermometer-full</option>
                                        <option value="fas fa-thermometer-half" data-icon="fas fa-thermometer-half">fas fa-thermometer-half</option>
                                        <option value="fas fa-thermometer-quarter" data-icon="fas fa-thermometer-quarter">fas fa-thermometer-quarter</option>
                                        <option value="fas fa-thermometer-three-quarters" data-icon="fas fa-thermometer-three-quarters">fas fa-thermometer-three-quarters</option>
                                        <option value="fas fa-thumbs-down" data-icon="fas fa-thumbs-down">fas fa-thumbs-down</option>
                                        <option value="fas fa-thumbs-up" data-icon="fas fa-thumbs-up">fas fa-thumbs-up</option>
                                        <option value="fas fa-thumbtack" data-icon="fas fa-thumbtack">fas fa-thumbtack</option>
                                        <option value="fas fa-ticket-alt" data-icon="fas fa-ticket-alt">fas fa-ticket-alt</option>
                                        <option value="fas fa-times" data-icon="fas fa-times">fas fa-times</option>
                                        <option value="fas fa-times-circle" data-icon="fas fa-times-circle">fas fa-times-circle</option>
                                        <option value="fas fa-tint" data-icon="fas fa-tint">fas fa-tint</option>
                                        <option value="fas fa-toggle-off" data-icon="fas fa-toggle-off">fas fa-toggle-off</option>
                                        <option value="fas fa-toggle-on" data-icon="fas fa-toggle-on">fas fa-toggle-on</option>
                                        <option value="fas fa-trademark" data-icon="fas fa-trademark">fas fa-trademark</option>
                                        <option value="fas fa-train" data-icon="fas fa-train">fas fa-train</option>
                                        <option value="fas fa-transgender" data-icon="fas fa-transgender">fas fa-transgender</option>
                                        <option value="fas fa-transgender-alt" data-icon="fas fa-transgender-alt">fas fa-transgender-alt</option>
                                        <option value="fas fa-trash" data-icon="fas fa-trash">fas fa-trash</option>
                                        <option value="fas fa-trash-alt" data-icon="fas fa-trash-alt">fas fa-trash-alt</option>
                                        <option value="fas fa-tree" data-icon="fas fa-tree">fas fa-tree</option>
                                        <option value="fas fa-trophy" data-icon="fas fa-trophy">fas fa-trophy</option>
                                        <option value="fas fa-truck" data-icon="fas fa-truck">fas fa-truck</option>
                                        <option value="fas fa-truck-loading" data-icon="fas fa-truck-loading">fas fa-truck-loading</option>
                                        <option value="fas fa-truck-moving" data-icon="fas fa-truck-moving">fas fa-truck-moving</option>
                                        <option value="fas fa-tty" data-icon="fas fa-tty">fas fa-tty</option>
                                        <option value="fas fa-tv" data-icon="fas fa-tv">fas fa-tv</option>
                                        <option value="fas fa-umbrella" data-icon="fas fa-umbrella">fas fa-umbrella</option>
                                        <option value="fas fa-underline" data-icon="fas fa-underline">fas fa-underline</option>
                                        <option value="fas fa-undo" data-icon="fas fa-undo">fas fa-undo</option>
                                        <option value="fas fa-undo-alt" data-icon="fas fa-undo-alt">fas fa-undo-alt</option>
                                        <option value="fas fa-universal-access" data-icon="fas fa-universal-access">fas fa-universal-access</option>
                                        <option value="fas fa-university" data-icon="fas fa-university">fas fa-university</option>
                                        <option value="fas fa-unlink" data-icon="fas fa-unlink">fas fa-unlink</option>
                                        <option value="fas fa-unlock" data-icon="fas fa-unlock">fas fa-unlock</option>
                                        <option value="fas fa-unlock-alt" data-icon="fas fa-unlock-alt">fas fa-unlock-alt</option>
                                        <option value="fas fa-upload" data-icon="fas fa-upload">fas fa-upload</option>
                                        <option value="fas fa-user" data-icon="fas fa-user">fas fa-user</option>
                                        <option value="fas fa-user-circle" data-icon="fas fa-user-circle">fas fa-user-circle</option>
                                        <option value="fas fa-user-md" data-icon="fas fa-user-md">fas fa-user-md</option>
                                        <option value="fas fa-user-plus" data-icon="fas fa-user-plus">fas fa-user-plus</option>
                                        <option value="fas fa-user-secret" data-icon="fas fa-user-secret">fas fa-user-secret</option>
                                        <option value="fas fa-user-times" data-icon="fas fa-user-times">fas fa-user-times</option>
                                        <option value="fas fa-users" data-icon="fas fa-users">fas fa-users</option>
                                        <option value="fas fa-utensil-spoon" data-icon="fas fa-utensil-spoon">fas fa-utensil-spoon</option>
                                        <option value="fas fa-utensils" data-icon="fas fa-utensils">fas fa-utensils</option>
                                        <option value="fas fa-venus" data-icon="fas fa-venus">fas fa-venus</option>
                                        <option value="fas fa-venus-double" data-icon="fas fa-venus-double">fas fa-venus-double</option>
                                        <option value="fas fa-venus-mars" data-icon="fas fa-venus-mars">fas fa-venus-mars</option>
                                        <option value="fas fa-vial" data-icon="fas fa-vial">fas fa-vial</option>
                                        <option value="fas fa-vials" data-icon="fas fa-vials">fas fa-vials</option>
                                        <option value="fas fa-video" data-icon="fas fa-video">fas fa-video</option>
                                        <option value="fas fa-video-slash" data-icon="fas fa-video-slash">fas fa-video-slash</option>
                                        <option value="fas fa-volleyball-ball" data-icon="fas fa-volleyball-ball">fas fa-volleyball-ball</option>
                                        <option value="fas fa-volume-down" data-icon="fas fa-volume-down">fas fa-volume-down</option>
                                        <option value="fas fa-volume-off" data-icon="fas fa-volume-off">fas fa-volume-off</option>
                                        <option value="fas fa-volume-up" data-icon="fas fa-volume-up">fas fa-volume-up</option>
                                        <option value="fas fa-warehouse" data-icon="fas fa-warehouse">fas fa-warehouse</option>
                                        <option value="fas fa-weight" data-icon="fas fa-weight">fas fa-weight</option>
                                        <option value="fas fa-wheelchair" data-icon="fas fa-wheelchair">fas fa-wheelchair</option>
                                        <option value="fas fa-wifi" data-icon="fas fa-wifi">fas fa-wifi</option>
                                        <option value="fas fa-window-close" data-icon="fas fa-window-close">fas fa-window-close</option>
                                        <option value="fas fa-window-maximize" data-icon="fas fa-window-maximize">fas fa-window-maximize</option>
                                        <option value="fas fa-window-minimize" data-icon="fas fa-window-minimize">fas fa-window-minimize</option>
                                        <option value="fas fa-window-restore" data-icon="fas fa-window-restore">fas fa-window-restore</option>
                                        <option value="fas fa-wine-glass" data-icon="fas fa-wine-glass">fas fa-wine-glass</option>
                                        <option value="fas fa-won-sign" data-icon="fas fa-won-sign">fas fa-won-sign</option>
                                        <option value="fas fa-wrench" data-icon="fas fa-wrench">fas fa-wrench</option>
                                        <option value="fas fa-x-ray" data-icon="fas fa-x-ray">fas fa-x-ray</option>
                                        <option value="fas fa-yen-sign" data-icon="fas fa-yen-sign">fas fa-yen-sign</option>
                                        <option value="far fa-address-book" data-icon="far fa-address-book">far fa-address-book</option>
                                        <option value="far fa-address-card" data-icon="far fa-address-card">far fa-address-card</option>
                                        <option value="far fa-arrow-alt-circle-down" data-icon="far fa-arrow-alt-circle-down">far fa-arrow-alt-circle-down</option>
                                        <option value="far fa-arrow-alt-circle-left" data-icon="far fa-arrow-alt-circle-left">far fa-arrow-alt-circle-left</option>
                                        <option value="far fa-arrow-alt-circle-right" data-icon="far fa-arrow-alt-circle-right">far fa-arrow-alt-circle-right</option>
                                        <option value="far fa-arrow-alt-circle-up" data-icon="far fa-arrow-alt-circle-up">far fa-arrow-alt-circle-up</option>
                                        <option value="far fa-bell" data-icon="far fa-bell">far fa-bell</option>
                                        <option value="far fa-bell-slash" data-icon="far fa-bell-slash">far fa-bell-slash</option>
                                        <option value="far fa-bookmark" data-icon="far fa-bookmark">far fa-bookmark</option>
                                        <option value="far fa-building" data-icon="far fa-building">far fa-building</option>
                                        <option value="far fa-calendar" data-icon="far fa-calendar">far fa-calendar</option>
                                        <option value="far fa-calendar-alt" data-icon="far fa-calendar-alt">far fa-calendar-alt</option>
                                        <option value="far fa-calendar-check" data-icon="far fa-calendar-check">far fa-calendar-check</option>
                                        <option value="far fa-calendar-minus" data-icon="far fa-calendar-minus">far fa-calendar-minus</option>
                                        <option value="far fa-calendar-plus" data-icon="far fa-calendar-plus">far fa-calendar-plus</option>
                                        <option value="far fa-calendar-times" data-icon="far fa-calendar-times">far fa-calendar-times</option>
                                        <option value="far fa-caret-square-down" data-icon="far fa-caret-square-down">far fa-caret-square-down</option>
                                        <option value="far fa-caret-square-left" data-icon="far fa-caret-square-left">far fa-caret-square-left</option>
                                        <option value="far fa-caret-square-right" data-icon="far fa-caret-square-right">far fa-caret-square-right</option>
                                        <option value="far fa-caret-square-up" data-icon="far fa-caret-square-up">far fa-caret-square-up</option>
                                        <option value="far fa-chart-bar" data-icon="far fa-chart-bar">far fa-chart-bar</option>
                                        <option value="far fa-check-circle" data-icon="far fa-check-circle">far fa-check-circle</option>
                                        <option value="far fa-check-square" data-icon="far fa-check-square">far fa-check-square</option>
                                        <option value="far fa-circle" data-icon="far fa-circle">far fa-circle</option>
                                        <option value="far fa-clipboard" data-icon="far fa-clipboard">far fa-clipboard</option>
                                        <option value="far fa-clock" data-icon="far fa-clock">far fa-clock</option>
                                        <option value="far fa-clone" data-icon="far fa-clone">far fa-clone</option>
                                        <option value="far fa-closed-captioning" data-icon="far fa-closed-captioning">far fa-closed-captioning</option>
                                        <option value="far fa-comment" data-icon="far fa-comment">far fa-comment</option>
                                        <option value="far fa-comment-alt" data-icon="far fa-comment-alt">far fa-comment-alt</option>
                                        <option value="far fa-comments" data-icon="far fa-comments">far fa-comments</option>
                                        <option value="far fa-compass" data-icon="far fa-compass">far fa-compass</option>
                                        <option value="far fa-copy" data-icon="far fa-copy">far fa-copy</option>
                                        <option value="far fa-copyright" data-icon="far fa-copyright">far fa-copyright</option>
                                        <option value="far fa-credit-card" data-icon="far fa-credit-card">far fa-credit-card</option>
                                        <option value="far fa-dot-circle" data-icon="far fa-dot-circle">far fa-dot-circle</option>
                                        <option value="far fa-edit" data-icon="far fa-edit">far fa-edit</option>
                                        <option value="far fa-envelope" data-icon="far fa-envelope">far fa-envelope</option>
                                        <option value="far fa-envelope-open" data-icon="far fa-envelope-open">far fa-envelope-open</option>
                                        <option value="far fa-eye-slash" data-icon="far fa-eye-slash">far fa-eye-slash</option>
                                        <option value="far fa-file" data-icon="far fa-file">far fa-file</option>
                                        <option value="far fa-file-alt" data-icon="far fa-file-alt">far fa-file-alt</option>
                                        <option value="far fa-file-archive" data-icon="far fa-file-archive">far fa-file-archive</option>
                                        <option value="far fa-file-audio" data-icon="far fa-file-audio">far fa-file-audio</option>
                                        <option value="far fa-file-code" data-icon="far fa-file-code">far fa-file-code</option>
                                        <option value="far fa-file-excel" data-icon="far fa-file-excel">far fa-file-excel</option>
                                        <option value="far fa-file-image" data-icon="far fa-file-image">far fa-file-image</option>
                                        <option value="far fa-file-pdf" data-icon="far fa-file-pdf">far fa-file-pdf</option>
                                        <option value="far fa-file-powerpoint" data-icon="far fa-file-powerpoint">far fa-file-powerpoint</option>
                                        <option value="far fa-file-video" data-icon="far fa-file-video">far fa-file-video</option>
                                        <option value="far fa-file-word" data-icon="far fa-file-word">far fa-file-word</option>
                                        <option value="far fa-flag" data-icon="far fa-flag">far fa-flag</option>
                                        <option value="far fa-folder" data-icon="far fa-folder">far fa-folder</option>
                                        <option value="far fa-folder-open" data-icon="far fa-folder-open">far fa-folder-open</option>
                                        <option value="far fa-frown" data-icon="far fa-frown">far fa-frown</option>
                                        <option value="far fa-futbol" data-icon="far fa-futbol">far fa-futbol</option>
                                        <option value="far fa-gem" data-icon="far fa-gem">far fa-gem</option>
                                        <option value="far fa-hand-lizard" data-icon="far fa-hand-lizard">far fa-hand-lizard</option>
                                        <option value="far fa-hand-paper" data-icon="far fa-hand-paper">far fa-hand-paper</option>
                                        <option value="far fa-hand-peace" data-icon="far fa-hand-peace">far fa-hand-peace</option>
                                        <option value="far fa-hand-point-down" data-icon="far fa-hand-point-down">far fa-hand-point-down</option>
                                        <option value="far fa-hand-point-left" data-icon="far fa-hand-point-left">far fa-hand-point-left</option>
                                        <option value="far fa-hand-point-right" data-icon="far fa-hand-point-right">far fa-hand-point-right</option>
                                        <option value="far fa-hand-point-up" data-icon="far fa-hand-point-up">far fa-hand-point-up</option>
                                        <option value="far fa-hand-pointer" data-icon="far fa-hand-pointer">far fa-hand-pointer</option>
                                        <option value="far fa-hand-rock" data-icon="far fa-hand-rock">far fa-hand-rock</option>
                                        <option value="far fa-hand-scissors" data-icon="far fa-hand-scissors">far fa-hand-scissors</option>
                                        <option value="far fa-hand-spock" data-icon="far fa-hand-spock">far fa-hand-spock</option>
                                        <option value="far fa-handshake" data-icon="far fa-handshake">far fa-handshake</option>
                                        <option value="far fa-hdd" data-icon="far fa-hdd">far fa-hdd</option>
                                        <option value="far fa-heart" data-icon="far fa-heart">far fa-heart</option>
                                        <option value="far fa-hospital" data-icon="far fa-hospital">far fa-hospital</option>
                                        <option value="far fa-hourglass" data-icon="far fa-hourglass">far fa-hourglass</option>
                                        <option value="far fa-id-badge" data-icon="far fa-id-badge">far fa-id-badge</option>
                                        <option value="far fa-id-card" data-icon="far fa-id-card">far fa-id-card</option>
                                        <option value="far fa-image" data-icon="far fa-image">far fa-image</option>
                                        <option value="far fa-images" data-icon="far fa-images">far fa-images</option>
                                        <option value="far fa-keyboard" data-icon="far fa-keyboard">far fa-keyboard</option>
                                        <option value="far fa-lemon" data-icon="far fa-lemon">far fa-lemon</option>
                                        <option value="far fa-life-ring" data-icon="far fa-life-ring">far fa-life-ring</option>
                                        <option value="far fa-lightbulb" data-icon="far fa-lightbulb">far fa-lightbulb</option>
                                        <option value="far fa-list-alt" data-icon="far fa-list-alt">far fa-list-alt</option>
                                        <option value="far fa-map" data-icon="far fa-map">far fa-map</option>
                                        <option value="far fa-meh" data-icon="far fa-meh">far fa-meh</option>
                                        <option value="far fa-minus-square" data-icon="far fa-minus-square">far fa-minus-square</option>
                                        <option value="far fa-money-bill-alt" data-icon="far fa-money-bill-alt">far fa-money-bill-alt</option>
                                        <option value="far fa-moon" data-icon="far fa-moon">far fa-moon</option>
                                        <option value="far fa-newspaper" data-icon="far fa-newspaper">far fa-newspaper</option>
                                        <option value="far fa-object-group" data-icon="far fa-object-group">far fa-object-group</option>
                                        <option value="far fa-object-ungroup" data-icon="far fa-object-ungroup">far fa-object-ungroup</option>
                                        <option value="far fa-paper-plane" data-icon="far fa-paper-plane">far fa-paper-plane</option>
                                        <option value="far fa-pause-circle" data-icon="far fa-pause-circle">far fa-pause-circle</option>
                                        <option value="far fa-play-circle" data-icon="far fa-play-circle">far fa-play-circle</option>
                                        <option value="far fa-plus-square" data-icon="far fa-plus-square">far fa-plus-square</option>
                                        <option value="far fa-question-circle" data-icon="far fa-question-circle">far fa-question-circle</option>
                                        <option value="far fa-registered" data-icon="far fa-registered">far fa-registered</option>
                                        <option value="far fa-save" data-icon="far fa-save">far fa-save</option>
                                        <option value="far fa-share-square" data-icon="far fa-share-square">far fa-share-square</option>
                                        <option value="far fa-smile" data-icon="far fa-smile">far fa-smile</option>
                                        <option value="far fa-snowflake" data-icon="far fa-snowflake">far fa-snowflake</option>
                                        <option value="far fa-square" data-icon="far fa-square">far fa-square</option>
                                        <option value="far fa-star" data-icon="far fa-star">far fa-star</option>
                                        <option value="far fa-star-half" data-icon="far fa-star-half">far fa-star-half</option>
                                        <option value="far fa-sticky-note" data-icon="far fa-sticky-note">far fa-sticky-note</option>
                                        <option value="far fa-stop-circle" data-icon="far fa-stop-circle">far fa-stop-circle</option>
                                        <option value="far fa-sun" data-icon="far fa-sun">far fa-sun</option>
                                        <option value="far fa-thumbs-down" data-icon="far fa-thumbs-down">far fa-thumbs-down</option>
                                        <option value="far fa-thumbs-up" data-icon="far fa-thumbs-up">far fa-thumbs-up</option>
                                        <option value="far fa-times-circle" data-icon="far fa-times-circle">far fa-times-circle</option>
                                        <option value="far fa-trash-alt" data-icon="far fa-trash-alt">far fa-trash-alt</option>
                                        <option value="far fa-user" data-icon="far fa-user">far fa-user</option>
                                        <option value="far fa-user-circle" data-icon="far fa-user-circle">far fa-user-circle</option>
                                        <option value="far fa-window-close" data-icon="far fa-window-close">far fa-window-close</option>
                                        <option value="far fa-window-maximize" data-icon="far fa-window-maximize">far fa-window-maximize</option>
                                        <option value="far fa-window-minimize" data-icon="far fa-window-minimize">far fa-window-minimize</option>
                                        <option value="far fa-window-restore" data-icon="far fa-window-restore">far fa-window-restore</option>
                                        <option value="fab fa-500px" data-icon="fab fa-500px">fab fa-500px</option>
                                        <option value="fab fa-accessible-icon" data-icon="fab fa-accessible-icon">fab fa-accessible-icon</option>
                                        <option value="fab fa-accusoft" data-icon="fab fa-accusoft">fab fa-accusoft</option>
                                        <option value="fab fa-adn" data-icon="fab fa-adn">fab fa-adn</option>
                                        <option value="fab fa-adversal" data-icon="fab fa-adversal">fab fa-adversal</option>
                                        <option value="fab fa-affiliatetheme" data-icon="fab fa-affiliatetheme">fab fa-affiliatetheme</option>
                                        <option value="fab fa-algolia" data-icon="fab fa-algolia">fab fa-algolia</option>
                                        <option value="fab fa-amazon" data-icon="fab fa-amazon">fab fa-amazon</option>
                                        <option value="fab fa-amazon-pay" data-icon="fab fa-amazon-pay">fab fa-amazon-pay</option>
                                        <option value="fab fa-amilia" data-icon="fab fa-amilia">fab fa-amilia</option>
                                        <option value="fab fa-android" data-icon="fab fa-android">fab fa-android</option>
                                        <option value="fab fa-angellist" data-icon="fab fa-angellist">fab fa-angellist</option>
                                        <option value="fab fa-angrycreative" data-icon="fab fa-angrycreative">fab fa-angrycreative</option>
                                        <option value="fab fa-angular" data-icon="fab fa-angular">fab fa-angular</option>
                                        <option value="fab fa-app-store" data-icon="fab fa-app-store">fab fa-app-store</option>
                                        <option value="fab fa-app-store-ios" data-icon="fab fa-app-store-ios">fab fa-app-store-ios</option>
                                        <option value="fab fa-apper" data-icon="fab fa-apper">fab fa-apper</option>
                                        <option value="fab fa-apple" data-icon="fab fa-apple">fab fa-apple</option>
                                        <option value="fab fa-apple-pay" data-icon="fab fa-apple-pay">fab fa-apple-pay</option>
                                        <option value="fab fa-asymmetrik" data-icon="fab fa-asymmetrik">fab fa-asymmetrik</option>
                                        <option value="fab fa-audible" data-icon="fab fa-audible">fab fa-audible</option>
                                        <option value="fab fa-autoprefixer" data-icon="fab fa-autoprefixer">fab fa-autoprefixer</option>
                                        <option value="fab fa-avianex" data-icon="fab fa-avianex">fab fa-avianex</option>
                                        <option value="fab fa-aviato" data-icon="fab fa-aviato">fab fa-aviato</option>
                                        <option value="fab fa-aws" data-icon="fab fa-aws">fab fa-aws</option>
                                        <option value="fab fa-bandcamp" data-icon="fab fa-bandcamp">fab fa-bandcamp</option>
                                        <option value="fab fa-behance" data-icon="fab fa-behance">fab fa-behance</option>
                                        <option value="fab fa-behance-square" data-icon="fab fa-behance-square">fab fa-behance-square</option>
                                        <option value="fab fa-bimobject" data-icon="fab fa-bimobject">fab fa-bimobject</option>
                                        <option value="fab fa-bitbucket" data-icon="fab fa-bitbucket">fab fa-bitbucket</option>
                                        <option value="fab fa-bitcoin" data-icon="fab fa-bitcoin">fab fa-bitcoin</option>
                                        <option value="fab fa-bity" data-icon="fab fa-bity">fab fa-bity</option>
                                        <option value="fab fa-black-tie" data-icon="fab fa-black-tie">fab fa-black-tie</option>
                                        <option value="fab fa-blackberry" data-icon="fab fa-blackberry">fab fa-blackberry</option>
                                        <option value="fab fa-blogger" data-icon="fab fa-blogger">fab fa-blogger</option>
                                        <option value="fab fa-blogger-b" data-icon="fab fa-blogger-b">fab fa-blogger-b</option>
                                        <option value="fab fa-bluetooth" data-icon="fab fa-bluetooth">fab fa-bluetooth</option>
                                        <option value="fab fa-bluetooth-b" data-icon="fab fa-bluetooth-b">fab fa-bluetooth-b</option>
                                        <option value="fab fa-btc" data-icon="fab fa-btc">fab fa-btc</option>
                                        <option value="fab fa-buromobelexperte" data-icon="fab fa-buromobelexperte">fab fa-buromobelexperte</option>
                                        <option value="fab fa-cc-amazon-pay" data-icon="fab fa-cc-amazon-pay">fab fa-cc-amazon-pay</option>
                                        <option value="fab fa-cc-amex" data-icon="fab fa-cc-amex">fab fa-cc-amex</option>
                                        <option value="fab fa-cc-apple-pay" data-icon="fab fa-cc-apple-pay">fab fa-cc-apple-pay</option>
                                        <option value="fab fa-cc-diners-club" data-icon="fab fa-cc-diners-club">fab fa-cc-diners-club</option>
                                        <option value="fab fa-cc-discover" data-icon="fab fa-cc-discover">fab fa-cc-discover</option>
                                        <option value="fab fa-cc-jcb" data-icon="fab fa-cc-jcb">fab fa-cc-jcb</option>
                                        <option value="fab fa-cc-mastercard" data-icon="fab fa-cc-mastercard">fab fa-cc-mastercard</option>
                                        <option value="fab fa-cc-paypal" data-icon="fab fa-cc-paypal">fab fa-cc-paypal</option>
                                        <option value="fab fa-cc-stripe" data-icon="fab fa-cc-stripe">fab fa-cc-stripe</option>
                                        <option value="fab fa-cc-visa" data-icon="fab fa-cc-visa">fab fa-cc-visa</option>
                                        <option value="fab fa-centercode" data-icon="fab fa-centercode">fab fa-centercode</option>
                                        <option value="fab fa-chrome" data-icon="fab fa-chrome">fab fa-chrome</option>
                                        <option value="fab fa-cloudscale" data-icon="fab fa-cloudscale">fab fa-cloudscale</option>
                                        <option value="fab fa-cloudsmith" data-icon="fab fa-cloudsmith">fab fa-cloudsmith</option>
                                        <option value="fab fa-cloudversify" data-icon="fab fa-cloudversify">fab fa-cloudversify</option>
                                        <option value="fab fa-codepen" data-icon="fab fa-codepen">fab fa-codepen</option>
                                        <option value="fab fa-codiepie" data-icon="fab fa-codiepie">fab fa-codiepie</option>
                                        <option value="fab fa-connectdevelop" data-icon="fab fa-connectdevelop">fab fa-connectdevelop</option>
                                        <option value="fab fa-contao" data-icon="fab fa-contao">fab fa-contao</option>
                                        <option value="fab fa-cpanel" data-icon="fab fa-cpanel">fab fa-cpanel</option>
                                        <option value="fab fa-creative-commons" data-icon="fab fa-creative-commons">fab fa-creative-commons</option>
                                        <option value="fab fa-css3" data-icon="fab fa-css3">fab fa-css3</option>
                                        <option value="fab fa-css3-alt" data-icon="fab fa-css3-alt">fab fa-css3-alt</option>
                                        <option value="fab fa-cuttlefish" data-icon="fab fa-cuttlefish">fab fa-cuttlefish</option>
                                        <option value="fab fa-d-and-d" data-icon="fab fa-d-and-d">fab fa-d-and-d</option>
                                        <option value="fab fa-dashcube" data-icon="fab fa-dashcube">fab fa-dashcube</option>
                                        <option value="fab fa-delicious" data-icon="fab fa-delicious">fab fa-delicious</option>
                                        <option value="fab fa-deploydog" data-icon="fab fa-deploydog">fab fa-deploydog</option>
                                        <option value="fab fa-deskpro" data-icon="fab fa-deskpro">fab fa-deskpro</option>
                                        <option value="fab fa-deviantart" data-icon="fab fa-deviantart">fab fa-deviantart</option>
                                        <option value="fab fa-digg" data-icon="fab fa-digg">fab fa-digg</option>
                                        <option value="fab fa-digital-ocean" data-icon="fab fa-digital-ocean">fab fa-digital-ocean</option>
                                        <option value="fab fa-discord" data-icon="fab fa-discord">fab fa-discord</option>
                                        <option value="fab fa-discourse" data-icon="fab fa-discourse">fab fa-discourse</option>
                                        <option value="fab fa-dochub" data-icon="fab fa-dochub">fab fa-dochub</option>
                                        <option value="fab fa-docker" data-icon="fab fa-docker">fab fa-docker</option>
                                        <option value="fab fa-draft2digital" data-icon="fab fa-draft2digital">fab fa-draft2digital</option>
                                        <option value="fab fa-dribbble" data-icon="fab fa-dribbble">fab fa-dribbble</option>
                                        <option value="fab fa-dribbble-square" data-icon="fab fa-dribbble-square">fab fa-dribbble-square</option>
                                        <option value="fab fa-dropbox" data-icon="fab fa-dropbox">fab fa-dropbox</option>
                                        <option value="fab fa-drupal" data-icon="fab fa-drupal">fab fa-drupal</option>
                                        <option value="fab fa-dyalog" data-icon="fab fa-dyalog">fab fa-dyalog</option>
                                        <option value="fab fa-earlybirds" data-icon="fab fa-earlybirds">fab fa-earlybirds</option>
                                        <option value="fab fa-edge" data-icon="fab fa-edge">fab fa-edge</option>
                                        <option value="fab fa-elementor" data-icon="fab fa-elementor">fab fa-elementor</option>
                                        <option value="fab fa-ember" data-icon="fab fa-ember">fab fa-ember</option>
                                        <option value="fab fa-empire" data-icon="fab fa-empire">fab fa-empire</option>
                                        <option value="fab fa-envira" data-icon="fab fa-envira">fab fa-envira</option>
                                        <option value="fab fa-erlang" data-icon="fab fa-erlang">fab fa-erlang</option>
                                        <option value="fab fa-ethereum" data-icon="fab fa-ethereum">fab fa-ethereum</option>
                                        <option value="fab fa-etsy" data-icon="fab fa-etsy">fab fa-etsy</option>
                                        <option value="fab fa-expeditedssl" data-icon="fab fa-expeditedssl">fab fa-expeditedssl</option>
                                        <option value="fab fa-facebook" data-icon="fab fa-facebook">fab fa-facebook</option>
                                        <option value="fab fa-facebook-f" data-icon="fab fa-facebook-f">fab fa-facebook-f</option>
                                        <option value="fab fa-facebook-messenger" data-icon="fab fa-facebook-messenger">fab fa-facebook-messenger</option>
                                        <option value="fab fa-facebook-square" data-icon="fab fa-facebook-square">fab fa-facebook-square</option>
                                        <option value="fab fa-firefox" data-icon="fab fa-firefox">fab fa-firefox</option>
                                        <option value="fab fa-first-order" data-icon="fab fa-first-order">fab fa-first-order</option>
                                        <option value="fab fa-firstdraft" data-icon="fab fa-firstdraft">fab fa-firstdraft</option>
                                        <option value="fab fa-flickr" data-icon="fab fa-flickr">fab fa-flickr</option>
                                        <option value="fab fa-flipboard" data-icon="fab fa-flipboard">fab fa-flipboard</option>
                                        <option value="fab fa-fly" data-icon="fab fa-fly">fab fa-fly</option>
                                        <option value="fab fa-font-awesome" data-icon="fab fa-font-awesome">fab fa-font-awesome</option>
                                        <option value="fab fa-font-awesome-alt" data-icon="fab fa-font-awesome-alt">fab fa-font-awesome-alt</option>
                                        <option value="fab fa-font-awesome-flag" data-icon="fab fa-font-awesome-flag">fab fa-font-awesome-flag</option>
                                        <option value="fab fa-fonticons" data-icon="fab fa-fonticons">fab fa-fonticons</option>
                                        <option value="fab fa-fonticons-fi" data-icon="fab fa-fonticons-fi">fab fa-fonticons-fi</option>
                                        <option value="fab fa-fort-awesome" data-icon="fab fa-fort-awesome">fab fa-fort-awesome</option>
                                        <option value="fab fa-fort-awesome-alt" data-icon="fab fa-fort-awesome-alt">fab fa-fort-awesome-alt</option>
                                        <option value="fab fa-forumbee" data-icon="fab fa-forumbee">fab fa-forumbee</option>
                                        <option value="fab fa-foursquare" data-icon="fab fa-foursquare">fab fa-foursquare</option>
                                        <option value="fab fa-free-code-camp" data-icon="fab fa-free-code-camp">fab fa-free-code-camp</option>
                                        <option value="fab fa-freebsd" data-icon="fab fa-freebsd">fab fa-freebsd</option>
                                        <option value="fab fa-get-pocket" data-icon="fab fa-get-pocket">fab fa-get-pocket</option>
                                        <option value="fab fa-gg" data-icon="fab fa-gg">fab fa-gg</option>
                                        <option value="fab fa-gg-circle" data-icon="fab fa-gg-circle">fab fa-gg-circle</option>
                                        <option value="fab fa-git" data-icon="fab fa-git">fab fa-git</option>
                                        <option value="fab fa-git-square" data-icon="fab fa-git-square">fab fa-git-square</option>
                                        <option value="fab fa-github" data-icon="fab fa-github">fab fa-github</option>
                                        <option value="fab fa-github-alt" data-icon="fab fa-github-alt">fab fa-github-alt</option>
                                        <option value="fab fa-github-square" data-icon="fab fa-github-square">fab fa-github-square</option>
                                        <option value="fab fa-gitkraken" data-icon="fab fa-gitkraken">fab fa-gitkraken</option>
                                        <option value="fab fa-gitlab" data-icon="fab fa-gitlab">fab fa-gitlab</option>
                                        <option value="fab fa-gitter" data-icon="fab fa-gitter">fab fa-gitter</option>
                                        <option value="fab fa-glide" data-icon="fab fa-glide">fab fa-glide</option>
                                        <option value="fab fa-glide-g" data-icon="fab fa-glide-g">fab fa-glide-g</option>
                                        <option value="fab fa-gofore" data-icon="fab fa-gofore">fab fa-gofore</option>
                                        <option value="fab fa-goodreads" data-icon="fab fa-goodreads">fab fa-goodreads</option>
                                        <option value="fab fa-goodreads-g" data-icon="fab fa-goodreads-g">fab fa-goodreads-g</option>
                                        <option value="fab fa-google" data-icon="fab fa-google">fab fa-google</option>
                                        <option value="fab fa-google-drive" data-icon="fab fa-google-drive">fab fa-google-drive</option>
                                        <option value="fab fa-google-play" data-icon="fab fa-google-play">fab fa-google-play</option>
                                        <option value="fab fa-google-plus" data-icon="fab fa-google-plus">fab fa-google-plus</option>
                                        <option value="fab fa-google-plus-g" data-icon="fab fa-google-plus-g">fab fa-google-plus-g</option>
                                        <option value="fab fa-google-plus-square" data-icon="fab fa-google-plus-square">fab fa-google-plus-square</option>
                                        <option value="fab fa-google-wallet" data-icon="fab fa-google-wallet">fab fa-google-wallet</option>
                                        <option value="fab fa-gratipay" data-icon="fab fa-gratipay">fab fa-gratipay</option>
                                        <option value="fab fa-grav" data-icon="fab fa-grav">fab fa-grav</option>
                                        <option value="fab fa-gripfire" data-icon="fab fa-gripfire">fab fa-gripfire</option>
                                        <option value="fab fa-grunt" data-icon="fab fa-grunt">fab fa-grunt</option>
                                        <option value="fab fa-gulp" data-icon="fab fa-gulp">fab fa-gulp</option>
                                        <option value="fab fa-hacker-news" data-icon="fab fa-hacker-news">fab fa-hacker-news</option>
                                        <option value="fab fa-hacker-news-square" data-icon="fab fa-hacker-news-square">fab fa-hacker-news-square</option>
                                        <option value="fab fa-hips" data-icon="fab fa-hips">fab fa-hips</option>
                                        <option value="fab fa-hire-a-helper" data-icon="fab fa-hire-a-helper">fab fa-hire-a-helper</option>
                                        <option value="fab fa-hooli" data-icon="fab fa-hooli">fab fa-hooli</option>
                                        <option value="fab fa-hotjar" data-icon="fab fa-hotjar">fab fa-hotjar</option>
                                        <option value="fab fa-houzz" data-icon="fab fa-houzz">fab fa-houzz</option>
                                        <option value="fab fa-html5" data-icon="fab fa-html5">fab fa-html5</option>
                                        <option value="fab fa-hubspot" data-icon="fab fa-hubspot">fab fa-hubspot</option>
                                        <option value="fab fa-imdb" data-icon="fab fa-imdb">fab fa-imdb</option>
                                        <option value="fab fa-instagram" data-icon="fab fa-instagram">fab fa-instagram</option>
                                        <option value="fab fa-internet-explorer" data-icon="fab fa-internet-explorer">fab fa-internet-explorer</option>
                                        <option value="fab fa-ioxhost" data-icon="fab fa-ioxhost">fab fa-ioxhost</option>
                                        <option value="fab fa-itunes" data-icon="fab fa-itunes">fab fa-itunes</option>
                                        <option value="fab fa-itunes-note" data-icon="fab fa-itunes-note">fab fa-itunes-note</option>
                                        <option value="fab fa-jenkins" data-icon="fab fa-jenkins">fab fa-jenkins</option>
                                        <option value="fab fa-joget" data-icon="fab fa-joget">fab fa-joget</option>
                                        <option value="fab fa-joomla" data-icon="fab fa-joomla">fab fa-joomla</option>
                                        <option value="fab fa-js" data-icon="fab fa-js">fab fa-js</option>
                                        <option value="fab fa-js-square" data-icon="fab fa-js-square">fab fa-js-square</option>
                                        <option value="fab fa-jsfiddle" data-icon="fab fa-jsfiddle">fab fa-jsfiddle</option>
                                        <option value="fab fa-keycdn" data-icon="fab fa-keycdn">fab fa-keycdn</option>
                                        <option value="fab fa-kickstarter" data-icon="fab fa-kickstarter">fab fa-kickstarter</option>
                                        <option value="fab fa-kickstarter-k" data-icon="fab fa-kickstarter-k">fab fa-kickstarter-k</option>
                                        <option value="fab fa-korvue" data-icon="fab fa-korvue">fab fa-korvue</option>
                                        <option value="fab fa-laravel" data-icon="fab fa-laravel">fab fa-laravel</option>
                                        <option value="fab fa-lastfm" data-icon="fab fa-lastfm">fab fa-lastfm</option>
                                        <option value="fab fa-lastfm-square" data-icon="fab fa-lastfm-square">fab fa-lastfm-square</option>
                                        <option value="fab fa-leanpub" data-icon="fab fa-leanpub">fab fa-leanpub</option>
                                        <option value="fab fa-less" data-icon="fab fa-less">fab fa-less</option>
                                        <option value="fab fa-line" data-icon="fab fa-line">fab fa-line</option>
                                        <option value="fab fa-linkedin" data-icon="fab fa-linkedin">fab fa-linkedin</option>
                                        <option value="fab fa-linkedin-in" data-icon="fab fa-linkedin-in">fab fa-linkedin-in</option>
                                        <option value="fab fa-linode" data-icon="fab fa-linode">fab fa-linode</option>
                                        <option value="fab fa-linux" data-icon="fab fa-linux">fab fa-linux</option>
                                        <option value="fab fa-lyft" data-icon="fab fa-lyft">fab fa-lyft</option>
                                        <option value="fab fa-magento" data-icon="fab fa-magento">fab fa-magento</option>
                                        <option value="fab fa-maxcdn" data-icon="fab fa-maxcdn">fab fa-maxcdn</option>
                                        <option value="fab fa-medapps" data-icon="fab fa-medapps">fab fa-medapps</option>
                                        <option value="fab fa-medium" data-icon="fab fa-medium">fab fa-medium</option>
                                        <option value="fab fa-medium-m" data-icon="fab fa-medium-m">fab fa-medium-m</option>
                                        <option value="fab fa-medrt" data-icon="fab fa-medrt">fab fa-medrt</option>
                                        <option value="fab fa-meetup" data-icon="fab fa-meetup">fab fa-meetup</option>
                                        <option value="fab fa-microsoft" data-icon="fab fa-microsoft">fab fa-microsoft</option>
                                        <option value="fab fa-mix" data-icon="fab fa-mix">fab fa-mix</option>
                                        <option value="fab fa-mixcloud" data-icon="fab fa-mixcloud">fab fa-mixcloud</option>
                                        <option value="fab fa-mizuni" data-icon="fab fa-mizuni">fab fa-mizuni</option>
                                        <option value="fab fa-modx" data-icon="fab fa-modx">fab fa-modx</option>
                                        <option value="fab fa-monero" data-icon="fab fa-monero">fab fa-monero</option>
                                        <option value="fab fa-napster" data-icon="fab fa-napster">fab fa-napster</option>
                                        <option value="fab fa-nintendo-switch" data-icon="fab fa-nintendo-switch">fab fa-nintendo-switch</option>
                                        <option value="fab fa-node" data-icon="fab fa-node">fab fa-node</option>
                                        <option value="fab fa-node-js" data-icon="fab fa-node-js">fab fa-node-js</option>
                                        <option value="fab fa-npm" data-icon="fab fa-npm">fab fa-npm</option>
                                        <option value="fab fa-ns8" data-icon="fab fa-ns8">fab fa-ns8</option>
                                        <option value="fab fa-nutritionix" data-icon="fab fa-nutritionix">fab fa-nutritionix</option>
                                        <option value="fab fa-odnoklassniki" data-icon="fab fa-odnoklassniki">fab fa-odnoklassniki</option>
                                        <option value="fab fa-odnoklassniki-square" data-icon="fab fa-odnoklassniki-square">fab fa-odnoklassniki-square</option>
                                        <option value="fab fa-opencart" data-icon="fab fa-opencart">fab fa-opencart</option>
                                        <option value="fab fa-openid" data-icon="fab fa-openid">fab fa-openid</option>
                                        <option value="fab fa-opera" data-icon="fab fa-opera">fab fa-opera</option>
                                        <option value="fab fa-optin-monster" data-icon="fab fa-optin-monster">fab fa-optin-monster</option>
                                        <option value="fab fa-osi" data-icon="fab fa-osi">fab fa-osi</option>
                                        <option value="fab fa-page4" data-icon="fab fa-page4">fab fa-page4</option>
                                        <option value="fab fa-pagelines" data-icon="fab fa-pagelines">fab fa-pagelines</option>
                                        <option value="fab fa-palfed" data-icon="fab fa-palfed">fab fa-palfed</option>
                                        <option value="fab fa-patreon" data-icon="fab fa-patreon">fab fa-patreon</option>
                                        <option value="fab fa-paypal" data-icon="fab fa-paypal">fab fa-paypal</option>
                                        <option value="fab fa-periscope" data-icon="fab fa-periscope">fab fa-periscope</option>
                                        <option value="fab fa-phabricator" data-icon="fab fa-phabricator">fab fa-phabricator</option>
                                        <option value="fab fa-phoenix-framework" data-icon="fab fa-phoenix-framework">fab fa-phoenix-framework</option>
                                        <option value="fab fa-php" data-icon="fab fa-php">fab fa-php</option>
                                        <option value="fab fa-pied-piper" data-icon="fab fa-pied-piper">fab fa-pied-piper</option>
                                        <option value="fab fa-pied-piper-alt" data-icon="fab fa-pied-piper-alt">fab fa-pied-piper-alt</option>
                                        <option value="fab fa-pied-piper-pp" data-icon="fab fa-pied-piper-pp">fab fa-pied-piper-pp</option>
                                        <option value="fab fa-pinterest" data-icon="fab fa-pinterest">fab fa-pinterest</option>
                                        <option value="fab fa-pinterest-p" data-icon="fab fa-pinterest-p">fab fa-pinterest-p</option>
                                        <option value="fab fa-pinterest-square" data-icon="fab fa-pinterest-square">fab fa-pinterest-square</option>
                                        <option value="fab fa-playstation" data-icon="fab fa-playstation">fab fa-playstation</option>
                                        <option value="fab fa-product-hunt" data-icon="fab fa-product-hunt">fab fa-product-hunt</option>
                                        <option value="fab fa-pushed" data-icon="fab fa-pushed">fab fa-pushed</option>
                                        <option value="fab fa-python" data-icon="fab fa-python">fab fa-python</option>
                                        <option value="fab fa-qq" data-icon="fab fa-qq">fab fa-qq</option>
                                        <option value="fab fa-quinscape" data-icon="fab fa-quinscape">fab fa-quinscape</option>
                                        <option value="fab fa-quora" data-icon="fab fa-quora">fab fa-quora</option>
                                        <option value="fab fa-ravelry" data-icon="fab fa-ravelry">fab fa-ravelry</option>
                                        <option value="fab fa-react" data-icon="fab fa-react">fab fa-react</option>
                                        <option value="fab fa-readme" data-icon="fab fa-readme">fab fa-readme</option>
                                        <option value="fab fa-rebel" data-icon="fab fa-rebel">fab fa-rebel</option>
                                        <option value="fab fa-red-river" data-icon="fab fa-red-river">fab fa-red-river</option>
                                        <option value="fab fa-reddit" data-icon="fab fa-reddit">fab fa-reddit</option>
                                        <option value="fab fa-reddit-alien" data-icon="fab fa-reddit-alien">fab fa-reddit-alien</option>
                                        <option value="fab fa-reddit-square" data-icon="fab fa-reddit-square">fab fa-reddit-square</option>
                                        <option value="fab fa-rendact" data-icon="fab fa-rendact">fab fa-rendact</option>
                                        <option value="fab fa-renren" data-icon="fab fa-renren">fab fa-renren</option>
                                        <option value="fab fa-replyd" data-icon="fab fa-replyd">fab fa-replyd</option>
                                        <option value="fab fa-resolving" data-icon="fab fa-resolving">fab fa-resolving</option>
                                        <option value="fab fa-rocketchat" data-icon="fab fa-rocketchat">fab fa-rocketchat</option>
                                        <option value="fab fa-rockrms" data-icon="fab fa-rockrms">fab fa-rockrms</option>
                                        <option value="fab fa-safari" data-icon="fab fa-safari">fab fa-safari</option>
                                        <option value="fab fa-sass" data-icon="fab fa-sass">fab fa-sass</option>
                                        <option value="fab fa-schlix" data-icon="fab fa-schlix">fab fa-schlix</option>
                                        <option value="fab fa-scribd" data-icon="fab fa-scribd">fab fa-scribd</option>
                                        <option value="fab fa-searchengin" data-icon="fab fa-searchengin">fab fa-searchengin</option>
                                        <option value="fab fa-sellcast" data-icon="fab fa-sellcast">fab fa-sellcast</option>
                                        <option value="fab fa-sellsy" data-icon="fab fa-sellsy">fab fa-sellsy</option>
                                        <option value="fab fa-servicestack" data-icon="fab fa-servicestack">fab fa-servicestack</option>
                                        <option value="fab fa-shirtsinbulk" data-icon="fab fa-shirtsinbulk">fab fa-shirtsinbulk</option>
                                        <option value="fab fa-simplybuilt" data-icon="fab fa-simplybuilt">fab fa-simplybuilt</option>
                                        <option value="fab fa-sistrix" data-icon="fab fa-sistrix">fab fa-sistrix</option>
                                        <option value="fab fa-skyatlas" data-icon="fab fa-skyatlas">fab fa-skyatlas</option>
                                        <option value="fab fa-skype" data-icon="fab fa-skype">fab fa-skype</option>
                                        <option value="fab fa-slack" data-icon="fab fa-slack">fab fa-slack</option>
                                        <option value="fab fa-slack-hash" data-icon="fab fa-slack-hash">fab fa-slack-hash</option>
                                        <option value="fab fa-slideshare" data-icon="fab fa-slideshare">fab fa-slideshare</option>
                                        <option value="fab fa-snapchat" data-icon="fab fa-snapchat">fab fa-snapchat</option>
                                        <option value="fab fa-snapchat-ghost" data-icon="fab fa-snapchat-ghost">fab fa-snapchat-ghost</option>
                                        <option value="fab fa-snapchat-square" data-icon="fab fa-snapchat-square">fab fa-snapchat-square</option>
                                        <option value="fab fa-soundcloud" data-icon="fab fa-soundcloud">fab fa-soundcloud</option>
                                        <option value="fab fa-speakap" data-icon="fab fa-speakap">fab fa-speakap</option>
                                        <option value="fab fa-spotify" data-icon="fab fa-spotify">fab fa-spotify</option>
                                        <option value="fab fa-stack-exchange" data-icon="fab fa-stack-exchange">fab fa-stack-exchange</option>
                                        <option value="fab fa-stack-overflow" data-icon="fab fa-stack-overflow">fab fa-stack-overflow</option>
                                        <option value="fab fa-staylinked" data-icon="fab fa-staylinked">fab fa-staylinked</option>
                                        <option value="fab fa-steam" data-icon="fab fa-steam">fab fa-steam</option>
                                        <option value="fab fa-steam-square" data-icon="fab fa-steam-square">fab fa-steam-square</option>
                                        <option value="fab fa-steam-symbol" data-icon="fab fa-steam-symbol">fab fa-steam-symbol</option>
                                        <option value="fab fa-sticker-mule" data-icon="fab fa-sticker-mule">fab fa-sticker-mule</option>
                                        <option value="fab fa-strava" data-icon="fab fa-strava">fab fa-strava</option>
                                        <option value="fab fa-stripe" data-icon="fab fa-stripe">fab fa-stripe</option>
                                        <option value="fab fa-stripe-s" data-icon="fab fa-stripe-s">fab fa-stripe-s</option>
                                        <option value="fab fa-studiovinari" data-icon="fab fa-studiovinari">fab fa-studiovinari</option>
                                        <option value="fab fa-stumbleupon" data-icon="fab fa-stumbleupon">fab fa-stumbleupon</option>
                                        <option value="fab fa-stumbleupon-circle" data-icon="fab fa-stumbleupon-circle">fab fa-stumbleupon-circle</option>
                                        <option value="fab fa-superpowers" data-icon="fab fa-superpowers">fab fa-superpowers</option>
                                        <option value="fab fa-supple" data-icon="fab fa-supple">fab fa-supple</option>
                                        <option value="fab fa-telegram" data-icon="fab fa-telegram">fab fa-telegram</option>
                                        <option value="fab fa-telegram-plane" data-icon="fab fa-telegram-plane">fab fa-telegram-plane</option>
                                        <option value="fab fa-tencent-weibo" data-icon="fab fa-tencent-weibo">fab fa-tencent-weibo</option>
                                        <option value="fab fa-themeisle" data-icon="fab fa-themeisle">fab fa-themeisle</option>
                                        <option value="fab fa-trello" data-icon="fab fa-trello">fab fa-trello</option>
                                        <option value="fab fa-tripadvisor" data-icon="fab fa-tripadvisor">fab fa-tripadvisor</option>
                                        <option value="fab fa-tumblr" data-icon="fab fa-tumblr">fab fa-tumblr</option>
                                        <option value="fab fa-tumblr-square" data-icon="fab fa-tumblr-square">fab fa-tumblr-square</option>
                                        <option value="fab fa-twitch" data-icon="fab fa-twitch">fab fa-twitch</option>
                                        <option value="fab fa-twitter" data-icon="fab fa-twitter">fab fa-twitter</option>
                                        <option value="fab fa-twitter-square" data-icon="fab fa-twitter-square">fab fa-twitter-square</option>
                                        <option value="fab fa-typo3" data-icon="fab fa-typo3">fab fa-typo3</option>
                                        <option value="fab fa-uber" data-icon="fab fa-uber">fab fa-uber</option>
                                        <option value="fab fa-uikit" data-icon="fab fa-uikit">fab fa-uikit</option>
                                        <option value="fab fa-uniregistry" data-icon="fab fa-uniregistry">fab fa-uniregistry</option>
                                        <option value="fab fa-untappd" data-icon="fab fa-untappd">fab fa-untappd</option>
                                        <option value="fab fa-usb" data-icon="fab fa-usb">fab fa-usb</option>
                                        <option value="fab fa-ussunnah" data-icon="fab fa-ussunnah">fab fa-ussunnah</option>
                                        <option value="fab fa-vaadin" data-icon="fab fa-vaadin">fab fa-vaadin</option>
                                        <option value="fab fa-viacoin" data-icon="fab fa-viacoin">fab fa-viacoin</option>
                                        <option value="fab fa-viadeo" data-icon="fab fa-viadeo">fab fa-viadeo</option>
                                        <option value="fab fa-viber" data-icon="fab fa-viber">fab fa-viber</option>
                                        <option value="fab fa-vimeo" data-icon="fab fa-vimeo">fab fa-vimeo</option>
                                        <option value="fab fa-vimeo-square" data-icon="fab fa-vimeo-square">fab fa-vimeo-square</option>
                                        <option value="fab fa-vimeo-v" data-icon="fab fa-vimeo-v">fab fa-vimeo-v</option>
                                        <option value="fab fa-vine" data-icon="fab fa-vine">fab fa-vine</option>
                                        <option value="fab fa-vk" data-icon="fab fa-vk">fab fa-vk</option>
                                        <option value="fab fa-vnv" data-icon="fab fa-vnv">fab fa-vnv</option>
                                        <option value="fab fa-vuejs" data-icon="fab fa-vuejs">fab fa-vuejs</option>
                                        <option value="fab fa-weibo" data-icon="fab fa-weibo">fab fa-weibo</option>
                                        <option value="fab fa-weixin" data-icon="fab fa-weixin">fab fa-weixin</option>
                                        <option value="fab fa-whatsapp" data-icon="fab fa-whatsapp">fab fa-whatsapp</option>
                                        <option value="fab fa-whatsapp-square" data-icon="fab fa-whatsapp-square">fab fa-whatsapp-square</option>
                                        <option value="fab fa-whmcs" data-icon="fab fa-whmcs">fab fa-whmcs</option>
                                        <option value="fab fa-wikipedia-w" data-icon="fab fa-wikipedia-w">fab fa-wikipedia-w</option>
                                        <option value="fab fa-windows" data-icon="fab fa-windows">fab fa-windows</option>
                                        <option value="fab fa-wordpress" data-icon="fab fa-wordpress">fab fa-wordpress</option>
                                        <option value="fab fa-wordpress-simple" data-icon="fab fa-wordpress-simple">fab fa-wordpress-simple</option>
                                        <option value="fab fa-wpbeginner" data-icon="fab fa-wpbeginner">fab fa-wpbeginner</option>
                                        <option value="fab fa-wpexplorer" data-icon="fab fa-wpexplorer">fab fa-wpexplorer</option>
                                        <option value="fab fa-wpforms" data-icon="fab fa-wpforms">fab fa-wpforms</option>
                                        <option value="fab fa-xbox" data-icon="fab fa-xbox">fab fa-xbox</option>
                                        <option value="fab fa-xing" data-icon="fab fa-xing">fab fa-xing</option>
                                        <option value="fab fa-xing-square" data-icon="fab fa-xing-square">fab fa-xing-square</option>
                                        <option value="fab fa-y-combinator" data-icon="fab fa-y-combinator">fab fa-y-combinator</option>
                                        <option value="fab fa-yahoo" data-icon="fab fa-yahoo">fab fa-yahoo</option>
                                        <option value="fab fa-yandex" data-icon="fab fa-yandex">fab fa-yandex</option>
                                        <option value="fab fa-yandex-international" data-icon="fab fa-yandex-international">fab fa-yandex-international</option>
                                        <option value="fab fa-yelp" data-icon="fab fa-yelp">fab fa-yelp</option>
                                        <option value="fab fa-yoast" data-icon="fab fa-yoast">fab fa-yoast</option>
                                        <option value="fab fa-youtube" data-icon="fab fa-youtube">fab fa-youtube</option>
                                        <option value="fab fa-youtube-square" data-icon="fab fa-youtube-square">fab fa-youtube-square</option>
                                        <option value="ti-close right-side-toggle" data-icon="ti-close right-side-toggle">ti-close right-side-toggle</option>
                                    </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Menu</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="menu" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Status</label>
                                        <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="status" checked="checked" value="1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Active</label>
                                                    </div>&nbsp;&nbsp;
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="status" value="0" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Deactive</label>
                                                    </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Editable</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio3" name="editable" checked="checked" value="1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3">Yes</label>
                                                    </div>&nbsp;&nbsp;
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio4" name="editable" value="0" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio4">No</label>
                                                    </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Description</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="description" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
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