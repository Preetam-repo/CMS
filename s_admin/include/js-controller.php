
<script type="text/javascript">
    $(document).ready(function() {
        $('.textarea_editor').summernote({height:150,});
    });
</script>
<script type="text/javascript">
    const base_url = "<?php echo $base_url; ?>";
function formatText(icon) {
    return $('<span><i class="fa ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
};
$(".select2").select2();
$(".select2-tags").select2({
  tags: true
});
$(".select2icon").select2({
    templateSelection: formatText,
    templateResult: formatText
});

function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}

function replaceAll(str, term, replacement) {
    return str.replace(new RegExp(escapeRegExp(term), 'g'), replacement);
}
var page = document.location.pathname.match(/[^\/]+$/)[0];
const $table = $('#table');
$table.on('reorder-column.bs.table', function(e, name, args) {
    var coulumns = $table.bootstrapTable('getOptions').columns[0];
    var name = [];
    $.each(coulumns, function(index, val) {
        name[index] = coulumns[index].title;
    });
    $table.trigger('column-switch.bs.table');
    $.ajax({
        url: '<?php echo $base_url; ?>api/t/saveVisibleState',
        type: 'POST',
        data: { page: page, userId: "1", columnId: replaceAll(JSON.stringify(name), '"', "") },
    })
});
$table.on('column-switch.bs.table', function() {
    coulumnsId = [];
    var coulumns = $table.bootstrapTable('getOptions').columns[0];
    $.each(coulumns, function(index, val) {
        if (val.visible == false) {
            coulumnsId[index] = index;
        }
    });
    coulumnsId = coulumnsId.filter(function() { return true });
    $.ajax({
        url: '<?php echo $base_url; ?>api/t/saveVisibleState',
        type: 'POST',
        data: { page: page, userId: "1", visible: JSON.stringify(coulumnsId) },
    })
});
const bootstrapTableOptions = {
    height: 620,
    locale: 'en-US',
    exportTypes: ['json', 'xml', 'csv', 'pdf', 'doc', 'excel'],
    exportFooter: false,
    icons: {
        paginationSwitchDown: 'far fa-caret-square-down',
        paginationSwitchUp: 'far fa-caret-square-up',
        refresh: 'fas fa-history',
        toggleOff: 'fas fa-toggle-off',
        toggleOn: 'fas fa-toggle-on',
        columns: 'fas fa-list',
        fullscreen: 'fas fa-expand',
        detailOpen: 'fas fa-plus-circle',
        detailClose: 'far fa-times-circle',
        export: 'fas fa-share-alt'
    }
};
$(document).ready(function() {
    var dataAssign = [];
    var dataMain = [];
    var dataSub = [];
    var dataFacility = [];
    $.ajax({
            url: '<?php echo $base_url; ?>api/page/adminGet',
            type: 'POST',
            data: { page: page, userId: 1}
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var facility = "";
            dataFacility = data['facility'];
            dataMain = data['mainMenu'];
            dataAssign = data['assignMenu'];
            dataSub = data['subMenu'];
            if (!_.isEmpty(data['pageLayout'])) {
                $("#pagetitle").html(data['pageLayout'][0]['title']);
                $("#pagetitle").html(data['pageLayout'][0]['pagelayout']);
            }
            facility += '<li>';
            facility += ' <a data-toggle="tooltip" data-toggle="tooltip" title="Main Menu" id="mainMenu" class="has-arrow waves-effect waves-dark faciltyMenu" value="" href="javascript:void(0)" aria-expanded="false">';
            facility += '     <i class="fas fa-tachometer-alt"></i>';
            facility += '     <span class="hide-menu">Menu </span>';
            facility += ' </a>';
            facility += '</li>';
            $.each(_.sortBy(dataFacility,'srn'), function(index, val) {
                facility += '<li>';
                facility += ' <a data-toggle="tooltip" data-placement="right" title="'+val['description']+'" class=" has-arrow waves-effect waves-dark faciltyMenu" value="' + val["id"] + '" href="javascript:void(0)" aria-expanded="false">';
                facility += '     <i class="' + val['font_icon'] + '"></i>';
                facility += '     <span class="hide-menu">' + val["lable"] + ' </span>';
                facility += ' </a>';
                facility += '</li>';
            });
            $("#sidebarnav").html(facility);
        });
    $(document).on('click', ".toogleMenu", function() {
        var id = $(this).attr('value');
        $("#" + id).toggleClass("collapse");
    });
    $(document).on("click", ".page-wrapper", function() {
        if ($(window).width() <= 768) {
            $(".custom-left-sidebar").removeClass("shw-lside");
        }
    });
    $(document).on("click", ".faciltyMenu", function() {
        $("#sidebarnav li").removeClass("faciltyMenuli");
        $(this).parent().toggleClass("faciltyMenuli");
        var id = $(this).attr('value');
        if (!_.isEmpty(id)) {
            var mainMenu = "";
            $.each(_.sortBy(dataMain,'srn'), function(index, value) {
                    if (_.find(dataAssign, ['main_menu_id', value["id"]])) 
                if (value['facility_id'] == id) {
                    {
                mainMenu += '<li>';
                mainMenu += ' <a data-toggle="tooltip" data-placement="right" title="'+value['description']+'" value="mainMenu' + value["id"] + '" class=" toogleMenu has-arrow waves-effect waves-dark"  href="javascript:void(0);" aria-expanded="false">';
                mainMenu += '<i class="' + value["font_icon"] + '"></i>';
                mainMenu += '<span class="hide-menu">' + value["menu"] + ' </span>';
                mainMenu += ' </a>';
                mainMenu += '<ul id="mainMenu' + value["id"] + '"aria-expanded="false" class="collapse">';
                $.each(_.sortBy(dataAssign,'srn'), function(index, val) {
                    if (val['main_menu_id'] == value["id"]) {
                    if (val['sub_menu_id'] == "0") {
                    if (_.isEmpty(val['link_name'])) {
                    mainMenu += '<li>';
                    mainMenu += ' <a data-toggle="tooltip" data-placement="right" title="'+val['description']+'" class=" has-arrow waves-effect waves-dark"  href="javascript:void(0);">';
                    mainMenu += '     <i class="' + val["font_icon"] + '"></i>';
                    mainMenu += '     <span class="hide-menu">' + val["menu"] + ' </span>';
                    mainMenu += ' </a>';
                    mainMenu += '</li>';
                    }else{
                        if (val["link_name"].substring(0,4)=="http") {
                        var linkHref = val["link_name"];
                        }else{
                        var linkHref =  _.find(dataFacility, ['id', val["facility_id"]])["facility_folder"] +'/' + val["link_name"];
                        }
                    mainMenu += '<li>';
                    mainMenu += ' <a data-toggle="tooltip" data-placement="right" title="'+val['description']+'" class=" iframeHref has-arrow waves-effect waves-dark"  href="<?php echo $base_url; ?>s_admin/'+linkHref+ '">';
                    mainMenu += '     <i class="' + val["font_icon"] + '"></i>';
                    mainMenu += '     <span class="hide-menu">' + val["menu"] + ' </span>';
                    mainMenu += ' </a>';
                    mainMenu += '</li>';
                    }
                    }else{
                    mainMenu += '<li>';
                    mainMenu += ' <a data-toggle="tooltip" data-placement="right" title="'+val['description']+'" class=" has-arrow waves-effect waves-dark toogleMenu" value="subMenu' + val["sub_menu_id"] + '"  href="javascript:void(0);">';
                    mainMenu += '     <i class="' + _.find(dataSub, ['id', val["sub_menu_id"]])["font_icon"] + '"></i>';
                    mainMenu += '     <span class="hide-menu">' + _.find(dataSub, ['id', val["sub_menu_id"]])["menu"] + ' </span>';
                    mainMenu += ' </a>'; 
                    mainMenu += '<ul id="subMenu' + val["sub_menu_id"] + '"aria-expanded="false" class="collapse">';
                    $.each(_.sortBy(dataAssign,'srn'), function(index, val) {
                        if (val['main_menu_id'] == value["id"]) {
                        if (val['sub_menu_id'] != "0") {
                        if (!_.isEmpty(val['link_name'])) {
                        if (val["link_name"].substring(0,4)=="http") {
                        var linkHref =  val["link_name"];
                        }else{
                        var linkHref =  _.find(dataFacility, ['id', val["facility_id"]])["facility_folder"] +'/' + val["link_name"];
                        }
                            mainMenu += '<li>';
                            mainMenu += ' <a data-toggle="tooltip" data-placement="right" title="'+val['description']+'" class=" iframeHref has-arrow waves-effect waves-dark"  href="<?php echo $base_url; ?>s_admin/'+linkHref+ '">';
                            mainMenu += '     <i class="' + val["font_icon"] + '"></i>';
                            mainMenu += '     <span class="hide-menu">' + val["menu"] + ' </span>';
                            mainMenu += ' </a>';
                            mainMenu += '</li>';
                        }
                        }
                        }
                    });
                    mainMenu += '</ul>';
                    mainMenu += '</li>';
                }
                }
                });
                mainMenu += '</ul>';
                mainMenu += '</li>';
            }}
            });
            $("#customMenu").hide();
            $("#sidebarnav1").show();
            $("#sidebarnav1").html(mainMenu);
        } else {
            $("#customMenu").show();
            $("#sidebarnav1").hide();
        } 
        $(".custom-left-sidebar").addClass("shw-lside");
    });
});
$(document).ready(function() {
    $(document).on('click','.iframeHref',function(e) {
        e.preventDefault();
        const winLocation = window.location.href;
        const baseUrl = "<?php echo $_SERVER['PHP_SELF']; ?>";
        var href = $(this).attr('href');
        history.replaceState({}, "", href);
        $(".card-body").html("<iframe id='i' src='"+href+"' style='width:100%;height:41.5rem;' />");
        $(".page-titles").remove();
        // adjust_iframe(document.getElementById('myiframe'));
        // window.location.replace(href);
      $(window).keydown(function(event){
    if(event.keyCode == 116) {
        event.preventDefault();
      window.location.href=winLocation;
    }
    });
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
       setTimeout(function () {
            $("#mainMenu").trigger('click');
            $(function(){$(".preloader").fadeOut()})
            $('a [data-toggle="tooltip"]').tooltip();
       },500)
        $(document).ajaxStart(function(){$(".preloader").show()});
        $(document).ajaxStop(function() {
        setTimeout(function () {
            $(function(){$(".preloader").fadeOut()})
       },500)
    });
       
       
    });
</script>
<script type="text/javascript">
    $.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    }
    return decodeURI(results[1]) || 0;
}
</script>
<script src="<?php echo $base_url; ?>s_admin/controller/facilityMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/mainMenuMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/subMenuMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/assignPageMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/websiteManagement.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/websiteMainMenu.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/websiteSlider.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/importMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/websitePages.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/userMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/rolesMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/aoMaster.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/ppm.js"></script>
<script src="<?php echo $base_url; ?>s_admin/controller/notification.js"></script>