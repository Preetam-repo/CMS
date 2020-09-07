
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer" style="margin-left: 250px">
Copyrights © 2005 to 2020 SUHARI Marketing & Services
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo $base_url; ?>assets/node_modules/popper/popper.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo $base_url; ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo $base_url; ?>assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo $base_url; ?>assets/dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?php echo $base_url; ?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo $base_url; ?>assets/dist/js/custom.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap-table/dist/bootstrap-table-locale-all.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo $base_url; ?>assets/dist/js/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/summernote/dist/summernote.min.js"></script>
<script src="<?php echo $base_url; ?>assets/dist/js/jquery.dragtable.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/table-dragger/dist/table-dragger.min.js"></script>
<script src="<?php echo $base_url; ?>assets/dist/js/bootstrap-table-reorder-columns.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo $base_url; ?>assets/dist/js/tableExport.min.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="<?php echo $base_url; ?>assets/node_modules/summernote/dist/summernote.min.js"></script>
<!-- <script src="<?php echo $base_url; ?>assets/dist/js/pages/bootstrap-table.init.js"></script> -->
<script src="<?php echo $base_url; ?>assets/node_modules/bootstrap-switch/bootstrap-switch.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/tooltip.js"></script>
    <script type="text/javascript">
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>