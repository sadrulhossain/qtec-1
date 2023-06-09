<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title><?php echo app('translator')->get('label.SYSTEM_NAME'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="<?php echo app('translator')->get('label.SYSTEM_NAME'); ?>" name="description" />
    <meta content="Sadrul" name="author" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo e(asset('public/assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <!-- DATA TABLE STYLES -->
    <link href="<?php echo e(asset('public/assets/global/plugins/datatables/datatables.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')); ?>"
        rel="stylesheet" type="text/css" />
    <!-- MultiSelect STYLES -->
    <link href="<?php echo e(asset('public/assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css')); ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>"
        rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo e(asset('public/assets/global/css/components.min.css')); ?>" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="<?php echo e(asset('public/assets/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo e(asset('public/assets/layouts/layout/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/public/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body>
    <div class="search-content">
        <?php echo $__env->yieldContent('search_content'); ?>
    </div>
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo e(asset('public/assets/global/plugins/moment.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/morris/morris.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/morris/raphael-min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/counterup/jquery.waypoints.min.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/assets/global/plugins/fullcalendar/fullcalendar.min.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/flot/jquery.flot.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/flot/jquery.flot.resize.min.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/assets/global/plugins/flot/jquery.flot.categories.min.js')); ?>" type="text/javascript">
    </script>
    <!-- MultiSelect SCRIPTS -->
    <script src="<?php echo e(asset('public/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/pages/scripts/components-bootstrap-multiselect.min.js')); ?>"
        type="text/javascript"></script>

    <!-- DATATABLE SCRIPTS -->
    <script src="<?php echo e(asset('public/assets/global/scripts/datatable.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/datatables/datatables.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/pages/scripts/table-datatables-responsive.min.js')); ?>" type="text/javascript">
    </script>

    <script src="<?php echo e(asset('public/assets/global/plugins/jquery.sparkline.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')); ?>"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>"
        type="text/javascript"></script>
    <script src="<?php echo e(asset('public/assets/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(asset('public/js/custom.js')); ?>" type="text/javascript">
        <!-- END PAGE LEVEL PLUGINS
        -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo e(asset('public/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
<?php /**PATH E:\xampp_7_4_15\htdocs\qtec-1\resources\views/layouts/master.blade.php ENDPATH**/ ?>