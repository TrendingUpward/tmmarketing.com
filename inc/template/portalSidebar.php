<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<nav class="navbar hidden-print main " role="navigation">
<div class="navbar-header pull-left">
    <div class="user-action user-action-btn-navbar pull-left border-right">
        <button class="btn btn-sm btn-navbar btn-inverse btn-stroke"><i class="fa fa-bars fa-2x"></i>
        </button>
    </div>
</div>
<ul class="main pull-right ">
    <li class="dropdown notif notifications hidden-xs">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-fill"></i> <span class="label label-danger">5</span></a>
        <ul class="dropdown-menu chat media-list pull-right">
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object thumb" src="<?php echo $webPath; ?>portal/assets/images/people/100/15.jpg" alt="50x50"
                         width="50" />
                </a>
                <div class="media-body">
                    <span class="label label-default pull-right">5 min</span>
                    <h5 class="media-heading">Adrian D.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object thumb" src="<?php echo $webPath; ?>portal/assets/images/people/100/16.jpg" alt="50x50"
                         width="50" />
                </a>
                <div class="media-body">
                    <span class="label label-default pull-right">2 days</span>
                    <h5 class="media-heading">Jane B.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object thumb" src="<?php echo $webPath; ?>portal/assets/images/people/100/17.jpg" alt="50x50"
                         width="50" />
                </a>
                <div class="media-body">
                    <span class="label label-default pull-right">3 days</span>
                    <h5 class="media-heading">Andrew M.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
            </li>
            <li><a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a>
            </li>
        </ul>
    </li>
    <li class="dropdown username">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo $webPath; ?>portal/assets/images/people/35/2.jpg" class="img-circle" width="30" />Bill Jonson
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
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">Tables <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="tables.html?lang=en">Tables</a>
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
                    <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=style-default"
                       style="background-color: #3695d5" class="no-ajaxify">
                        <span class="hide">style-default</span>
                    </a>
                </li>
                <li>
                    <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=alizarin-crimson"
                       style="background-color: #F06F6F" class="no-ajaxify">
                        <span class="hide">alizarin-crimson</span>
                    </a>
                </li>
                <li>
                    <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=green-army"
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
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=brown">
                                <span class="color" style="background-color: #d39174" class="no-ajaxify"></span>brown</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=purple-gray">
                                <span class="color" style="background-color: #AF86B9" class="no-ajaxify"></span>purple-gray</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=blue-gray">
                                <span class="color" style="background-color: #7293CF" class="no-ajaxify"></span>blue-gray</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=purple-wine">
                                <span class="color" style="background-color: #CC6788" class="no-ajaxify"></span>purple-wine</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=black-and-white">
                                <span class="color" style="background-color: #979797" class="no-ajaxify"></span>black-and-white</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=amazon">
                                <span class="color" style="background-color: #8BC4B9" class="no-ajaxify"></span>amazon</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=amber">
                                <span class="color" style="background-color: #CACA8A" class="no-ajaxify"></span>amber</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=android-green">
                                <span class="color" style="background-color: #A9C784" class="no-ajaxify"></span>android-green</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=antique-brass">
                                <span class="color" style="background-color: #B3998A" class="no-ajaxify"></span>antique-brass</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=antique-bronze">
                                <span class="color" style="background-color: #8D8D6E" class="no-ajaxify"></span>antique-bronze</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=artichoke">
                                <span class="color" style="background-color: #B0B69D" class="no-ajaxify"></span>artichoke</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=atomic-tangerine">
                                <span class="color" style="background-color: #F19B69" class="no-ajaxify"></span>atomic-tangerine</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bazaar">
                                <span class="color" style="background-color: #98777B" class="no-ajaxify"></span>bazaar</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bistre-brown">
                                <span class="color" style="background-color: #C3A961" class="no-ajaxify"></span>bistre-brown</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bittersweet">
                                <span class="color" style="background-color: #d6725e" class="no-ajaxify"></span>bittersweet</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=blueberry">
                                <span class="color" style="background-color: #7789D1" class="no-ajaxify"></span>blueberry</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bud-green">
                                <span class="color" style="background-color: #6fa362" class="no-ajaxify"></span>bud-green</a>
                        </li>
                        <li>
                            <a href="?module=admin&page=bookings&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=burnt-sienna">
                                <span class="color" style="background-color: #E4968A" class="no-ajaxify"></span>burnt-sienna</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
</nav>