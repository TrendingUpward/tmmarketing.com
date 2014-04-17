<?php
$ApplicantDAO = new ApplicantDAO($local);
$allApplicants = $ApplicantDAO->getAllApplicants('2014-04-05','2014-04-07');
$OfficeDAO = new OfficeDAO($local);
$offices = $OfficeDAO->getAllOffices();
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 "> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 "> <![endif]-->
<!--[if gt IE 8]> <html class="ie "> <![endif]-->
<!--[if !IE]><!-->
<html class="">
<!-- <![endif]-->
<head>
    <title>BUSINESS Template (v1.0.3-rc2)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.sidebar_type.no-sidebar.less" />
	-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $webPath;?>ajax/assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $webPath;?>ajax/assets/css/admin/module.admin.stylesheet-complete.sidebar_type.no-sidebar.min.css"
    />
    <!-- <link rel="stylesheet/less" href="<?php echo $webPath;?>ajax/assets/less/docs/module.examples.page.bootstrap-select.less" /> -->
    <link rel="stylesheet" href="<?php echo $webPath;?>ajax/assets/css/docs/module.examples.page.bootstrap-select.min.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo $webPath;?>ajax/assets/components/plugins/ajaxify/script.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"></script>
    <script>
    var App = {};
    </script>
    <script data-id="App.Scripts">
    App.Scripts = {
        /* CORE scripts always load first; */
        core: [
            '<?php echo $webPath;?>ajax/assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1'
        ],
        /* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
        plugins_dependency: [
            '<?php echo $webPath;?>ajax/assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/lib/js/jquery.dataTables.min.js?v=v1.0.3-rc2&sv=v0.0.1.1'
        ],
        /* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
        plugins: [
            '<?php echo $webPath;?>ajax/assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/ajaxify/davis.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/ajaxify/jquery.lazyjaxdavis.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/lib/extras/TableTools/media/js/TableTools.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/lib/extras/ColVis/media/js/ColVis.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/custom/js/DT_bootstrap.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.3-rc2',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/lib/extras/FixedHeader/FixedHeader.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/lib/extras/ColReorder/media/js/ColReorder.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2',
            '<?php echo $webPath;?>ajax/assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.0.3-rc2&sv=v0.0.1.1'
        ],
        /* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
        bundle: [
            '<?php echo $webPath;?>ajax/assets/components/plugins/ajaxify/ajaxify.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/core/js/animations.init.js?v=v1.0.3-rc2',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/datatables/assets/custom/js/datatables.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/forms/elements/fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.3-rc2',
            '<?php echo $webPath;?>ajax/assets/components/common/tables/classic/assets/js/tables-classic.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
            '<?php echo $webPath;?>ajax/assets/components/core/js/core.init.js?v=v1.0.3-rc2'
        ]
    };
    </script>
    <script>
    $script(App.Scripts.core, 'core');
    $script.ready(['core'], function()
    {
        $script(App.Scripts.plugins_dependency, 'plugins_dependency');
    });
    $script.ready(['core', 'plugins_dependency'], function()
    {
        $script(App.Scripts.plugins, 'plugins');
    });
    $script.ready(['core', 'plugins_dependency', 'plugins'], function()
    {
        $script(App.Scripts.bundle, 'bundle');
    });
    </script>
    <script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
    </script>
</head>
<body class="scripts-async">
    <!-- Main Container Fluid -->
    <div class="container-fluid menu-hidden">
        <!-- Content -->
        <div id="content">
            <nav class="navbar hidden-print main " role="navigation">
                <div class="container">
                    <div class="navbar-header pull-left">
                        <div class="navbar-brand">
                            <a href="index.html?lang=en" class="display-inline pull-left logo">
                                <img src="<?php echo $webPath;?>ajax/assets/images/logo/logo.jpg" alt="">
                            </a>
                            <a href="index.html?lang=en">
                                <span class="text">mosaicpro</span>
                            </a>
                        </div>
                        <button type="button" class="navbar-toggle padding-top-none" data-toggle="collapse"
                        data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars fa-2x text-muted-dark"></i>
                        </button>
                    </div>
                    <ul class="main pull-right ">
                        <li class="dropdown notif notifications hidden-xs">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-fill"></i> <span class="label label-danger">5</span></a>
                            <ul class="dropdown-menu chat media-list pull-right">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object thumb" src="<?php echo $webPath;?>ajax/assets/images/people/100/15.jpg" alt="50x50"
                                        width="50" />
                                    </a>
                                    <div class="media-body">
                                        <span class="label label-default pull-right">5 min</span>
                                        <h5 class="media-heading">Adrian D.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object thumb" src="<?php echo $webPath;?>ajax/assets/images/people/100/16.jpg" alt="50x50"
                                        width="50" />
                                    </a>
                                    <div class="media-body">
                                        <span class="label label-default pull-right">2 days</span>
                                        <h5 class="media-heading">Jane B.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object thumb" src="<?php echo $webPath;?>aax/assets/images/people/100/17.jpg" alt="50x50"
                                        width="50" />
                                    </a>
                                    <div class="media-body">
                                        <span class="label label-default pull-right">3 days</span>
                                        <h5 class="media-heading">Andrew M.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </li>
                                <li><a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown username">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo $webPath;?>ajax/assets/images/people/35/2.jpg" class="img-circle" width="30" />Bill Jonson
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="my_account.html?lang=en" class="glyphicons user"><i></i> Account</a>
                                </li>
                                <li><a href="messages.html?lang=en" class="glyphicons envelope"><i></i>Messages</a>
                                </li>
                                <li><a href="index.html?lang=en" class="glyphicons settings"><i></i>Settings</a>
                                </li>
                                <li><a href="login.html?lang=en" class="glyphicons lock no-ajaxify"><i></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="">Components<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ui.html?lang=en">UI Elements</a>
                                    </li>
                                    <li><a href="icons.html?lang=en">Icons</a>
                                    </li>
                                    <li><a href="typography.html?lang=en">Typography</a>
                                    </li>
                                    <li><a href="tabs.html?lang=en">Tabs</a>
                                    </li>
                                    <li><a href="sliders.html?lang=en">Sliders</a>
                                    </li>
                                    <li><a href="charts.html?lang=en">Charts</a>
                                    </li>
                                    <li><a href="grid.html?lang=en">Grid</a>
                                    </li>
                                    <li><a href="notifications.html?lang=en">Notifications</a>
                                    </li>
                                    <li><a href="modals.html?lang=en">Modals</a>
                                    </li>
                                    <li><a href="thumbnails.html?lang=en">Thumbnails</a>
                                    </li>
                                    <li><a href="carousels.html?lang=en">Carousels</a>
                                    </li>
                                    <li><a href="image_crop.html?lang=en">Image Cropping</a>
                                    </li>
                                    <li><a href="twitter.html?lang=en">Twitter API</a>
                                    </li>
                                    <li><a href="infinite_scroll.html?lang=en">Infinite Scroll</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="">Forms <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="form_wizards.html?lang=en">Form Wizards</a>
                                    </li>
                                    <li><a href="form_elements.html?lang=en">Form Elements</a>
                                    </li>
                                    <li><a href="form_validator.html?lang=en">Form Validator</a>
                                    </li>
                                    <li><a href="file_managers.html?lang=en">File Managers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown active">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="">Tables <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="tables.html?lang=en">Tables</a>
                                    </li>
                                    <li><a href="tables_responsive.html?lang=en">Tables Responsive</a>
                                    </li>
                                    <li><a href="pricing_tables.html?lang=en">Pricing Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="">Gallery <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery_video.html?lang=en">Video Gallery</a>
                                    </li>
                                    <li><a href="gallery.html?lang=en">Photo Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" hidden-xs   hidden-sm">
                                <ul class="colors pull-left">
                                    <li class="active">
                                        <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=style-default"
                                        style="background-color: #3695d5" class="no-ajaxify">
                                            <span class="hide">style-default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=alizarin-crimson"
                                        style="background-color: #F06F6F" class="no-ajaxify">
                                            <span class="hide">alizarin-crimson</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=green-army"
                                        style="background-color: #9FB478" class="no-ajaxify">
                                            <span class="hide">green-army</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown" class="dropdown-toggle">
                                            <span class="color inverse"></span>
                                            <span class="color danger"></span>
                                            <span class="color success"></span>
                                            <span class="color info"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=brown">
                                                    <span class="color" style="background-color: #d39174" class="no-ajaxify"></span>brown</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=purple-gray">
                                                    <span class="color" style="background-color: #AF86B9" class="no-ajaxify"></span>purple-gray</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=blue-gray">
                                                    <span class="color" style="background-color: #7293CF" class="no-ajaxify"></span>blue-gray</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=purple-wine">
                                                    <span class="color" style="background-color: #CC6788" class="no-ajaxify"></span>purple-wine</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=black-and-white">
                                                    <span class="color" style="background-color: #979797" class="no-ajaxify"></span>black-and-white</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=amazon">
                                                    <span class="color" style="background-color: #8BC4B9" class="no-ajaxify"></span>amazon</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=amber">
                                                    <span class="color" style="background-color: #CACA8A" class="no-ajaxify"></span>amber</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=android-green">
                                                    <span class="color" style="background-color: #A9C784" class="no-ajaxify"></span>android-green</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=antique-brass">
                                                    <span class="color" style="background-color: #B3998A" class="no-ajaxify"></span>antique-brass</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=antique-bronze">
                                                    <span class="color" style="background-color: #8D8D6E" class="no-ajaxify"></span>antique-bronze</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=artichoke">
                                                    <span class="color" style="background-color: #B0B69D" class="no-ajaxify"></span>artichoke</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=atomic-tangerine">
                                                    <span class="color" style="background-color: #F19B69" class="no-ajaxify"></span>atomic-tangerine</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=bazaar">
                                                    <span class="color" style="background-color: #98777B" class="no-ajaxify"></span>bazaar</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=bistre-brown">
                                                    <span class="color" style="background-color: #C3A961" class="no-ajaxify"></span>bistre-brown</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=bittersweet">
                                                    <span class="color" style="background-color: #d6725e" class="no-ajaxify"></span>bittersweet</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=blueberry">
                                                    <span class="color" style="background-color: #7789D1" class="no-ajaxify"></span>blueberry</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=bud-green">
                                                    <span class="color" style="background-color: #6fa362" class="no-ajaxify"></span>bud-green</a>
                                            </li>
                                            <li>
                                                <a href="?module=admin&page=tables&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=no-sidebar&skin=burnt-sienna">
                                                    <span class="color" style="background-color: #E4968A" class="no-ajaxify"></span>burnt-sienna</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- // END container -->
            </nav>
            <!-- // END navbar -->
            <div class="container">
                <h1>Applicant Management</h1>
                <div class="innerLR">

                    <div class="widget widget-heading-simple widget-body-simple margin-none">
                        <div class="widget-head">
                            <h4 class="heading">Select from the options below to modify your search</h4>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="well">
                                        <h4>Start Date</h4>
                                        <input class="form-control" type="text" value="2013-02-14" id="datepicker1" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well">
                                        <h4>End Date</h4>
                                        <div class="input-group date" id="datepicker2">
                                            <input class="form-control" type="text" value="14 February 2013" />
                                            <span class="input-group-addon"><i class="fa fa-th"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="well">
                                        <h4>Office</h4>
                                        <div class="input-group date" id="datepicker3">
                                            <select style="width: 100%;" id="select2_1">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well">
                                        <h4>Status</h4>
                                        <div class="input-group date" id="datepicker3">
                                            <input class="form-control" type="text" value="14 February 2013" />
                                            <span class="input-group-addon"><i class="fa fa-th"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Widget -->
                    <div class="widget widget-body-white widget-heading-simple">
                        <div class="widget-body">
                            <!-- Table -->
                            <table class="dynamicTable tableTools table table-striped checkboxs">
                                <!-- Table heading -->
                                <thead>
                                    <tr>
                                        <th>First</th>
                                        <th>Last</th>
                                        <th>Office</th>
                                        <th>Status Date</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <!-- // Table heading END -->
                                <!-- Table body -->
                                <tbody>
                                    <!-- Table row -->
                                    <?php foreach($allApplicants as $applicant): ?>
                                    <tr class="gradeX">
                                        <td><?= $applicant->getApplicantFirst();?></td>
                                        <td><?= $applicant->getApplicantLast();?></td>
                                        <td><?= $applicant->getApplicantOffice();?></td>
                                        <td><?= $applicant->getApplicantStatus()->getStatusDate();?></td>
                                        <td><?= $applicant->getApplicantStatus()->getStatusName();?></td>
                                        <td><a href=""><span class="label label-info">VIew</span></a></td>
                                    </tr>
                                    <?php endforeach;?>
                                    <!-- // Table row END -->
                                    <!-- Table row -->
                                      </tbody>
                                <!-- // Table body END -->
                            </table>
                            <!-- // Table END -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- // Content END -->
        </div>
        <!-- // Container END -->
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        <div id="footer" class="hidden-print">
            <!--  Copyright Line -->
            <div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> -
                All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro"
                target="_blank">Purchase BUSINESS on ThemeForest</a> - Current version:
                v1.0.3-rc2 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v1.0.3-rc2">changelog</a>
            </div>
            <!--  End Copyright Line -->
        </div>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script data-id="App.Config">
    var basePath = '',
        commonPath = '<?php echo $webPath;?>ajax/assets/',
        rootPath = '<?php echo $webPath;?>ajax/',
        DEV = false,
        componentsPath = '<?php echo $webPath;?>ajax/assets/components/';
    var primaryColor = '#3695d5',
        dangerColor = '#b55151',
        successColor = '#609450',
        infoColor = '#4a8bc2',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
    var themerPrimaryColor = primaryColor;
    App.Config = {
        ajaxify_menu_selectors: ['#menu'],
        ajaxify_layout_app: false
    };
    </script>
</body>
</html>