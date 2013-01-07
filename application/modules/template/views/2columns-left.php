<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html dir="ltr" lang="en-US"> <!--<![endif]-->
    <head>
        <title><?php echo (isset($title)? $title: "Visa")?></title>
       <meta name="description" content=" | Private airline" />
        <meta charset="UTF-8" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
        <![endif]-->
        <!--<base href="<?php echo base_url();  ?>/skin/frontend/default/" />-->
        <?php $base = base_url()."skin/frontend/default/" ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base ?>css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base ?>css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base ?>css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base ?>css/grid.css" />
         <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base ?>css/stylesheet.css" />
        <script type='text/javascript' src='<?php echo $base ?>js/jquery-1.6.4.min.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/modernizr.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/superfish.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.prettyPhoto.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.loader.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/cufon-yui.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/Terminal_Dosis_400.font.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/cufon-replace.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/swfobject.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.cycle.all.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.twitter.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.flickrush.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/audiojs/audio.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/custom.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/jquery.equalheights.js'></script>
        <script type='text/javascript' src='<?php echo $base ?>js/comment-reply.js'></script>
        <meta name="generator" content="content here" />
        <link rel='canonical' href='http://livedemo00.template-help.com/wordpress_39638/' />

        <script src="<?php echo $base ?>date/datetimepicker_css.js"></script> 
        <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
        <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>-->
        <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
        <!--
        <link rel="stylesheet" href="<?php echo $base ?>date/datePicker.css" />
        <script src="<?php echo $base ?>date/jquery.datePicker.js"></script>
         <script src="<?php echo $base ?>date/date.js"></script> -->

         
    </head>
    <!--[if lt IE 9]>
    <style type="text/css">
    #top-search #submit,
    .button,
    .tags-cloud a, .tagcloud a, .post-footer a{
    behavior:url(PIE.php)
    }
    </style>
    <![endif]-->
    <script type="text/javascript">
        // initialise plugins
        jQuery(function(){
            // main navigation init
            jQuery('ul.sf-menu').superfish({
                delay: 1000, // one second delay on mouseout
                animation: {opacity:'show',height:'show'}, // fade-in and slide-down animation
                speed: 'normal', // faster animation speed
                autoArrows: false, // generation of arrow mark-up (for submenu)
                dropShadows: false // drop shadows (for submenu)
            });
            // prettyphoto init
            jQuery("a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed:'normal',
                slideshow:5000,
                autoplay_slideshow: false,
                social_tools:false
            });
        });
        // Init for audiojs
        audiojs.events.ready(function() {
            var as = audiojs.createAll();
        });
    </script>
    <!-- Custom CSS -->
    <style type="text/css">
        /* Body styling options */
        /* Header styling options */
        /* Links and buttons color */
        /* Body typography */
        body {font-family:Arial, Helvetica, sans-serif; color:#727272}#main {font-size:13px; font-style:normal;} </style>
</head>

<body  class="home page page-id-203 page-template page-template-page-home-php">
    <div id="main"><!-- this encompasses the entire Web site -->
        <header id="header">
            <div class="container_24 clearfix">
                <div class="grid_24">
                    <div class="logo">
                        <a href="#" id="logo"><img src="<?php echo $base ?>images/logo.png" alt="FlyHigh" title="Private airline"></a>
                        <p class="tagline">Private airline</p>
                    </div>
                    <nav class="primary">
                        <ul id="topnav" class="sf-menu">
                            <li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item menu-item-205"><a href="<?php echo base_url() ?>">Home</a></li>
                            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?php echo base_url() ?>">About Us</a></li>
                            <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="<?php echo base_url() ?>visa">Apply Visa</a></li>
                            <li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-105"><a href="<?php echo base_url() ?>">Why us</a></li>
                            <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="<?php echo base_url() ?>">Contacts</a></li>
                        </ul>
                    </nav><!--.primary-->
                    <div class="clear"></div>
                    <div class="inner">
                        <!--<div id="widget-header">
                        <div id="text-5" class="widget-header"><h2>Welcome to FlyHigh &#8211; Fly in Comfort!</h2>	 <div class="textwidget">Beciegast nveriti vitaesaert taset aplicaserde neafae
                        kertyu erauas aityasneo eniptaiades.</div>
                        </div>	 </div>#widget-header
                        <div id="top-search">
                        <span class="title-1"><strong>Search</strong> by Travel Tools:</span>
                        <form method="get" action="http://livedemo00.template-help.com/wordpress_39638/">
                        <input type="text" name="s" class="input-search"/><input type="submit" value="Search" id="submit">
                        </form>
                        </div>-->
                    </div>
                </div>
            </div><!--.container_24-->
        </header>
        <div class="container_24 primary_content_wrap clearfix">  
            <div id="cols-left">
                <div class="block">
                    <div class="block-title"><span>Vietnam Travel</span></div>
                    <div class="block-content">
                        
                    </div>
                </div>
                
                <div class="block">
                    <div class="block-title"><span>Support Online</span></div>
                    <div class="block-content">
                        
                    </div>
                </div>

                
                <div class="block">
                    <div class="block-title"><span>Payment Guidelines</span></div>
                    <div class="block-content">
                        
                    </div>
                </div>
                
            </div>
            <div id="cols-right">
                <?php $this->load->view($module . '/' . $view_file) ?>
            </div>
        </div>
        <footer id="footer">
            <div id="back-top-wrapper">
                <p id="back-top">
                    <a href="#top">top</a>
                </p>
            </div>
            <div class="container_24 clearfix">
                <div class="grid_241">
                    <div class="footer-border">
                        <nav class="footer">
                            <ul id="menu-footer-menu" class="footer-nav"><li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item menu-item-240"><a href="#">Home</a></li>
                                <li id="menu-item-350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-350"><a href="#about-us/">About Us</a></li>
                                <li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="#our-special-offers/">Special offers</a></li>
                                <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="#travel-tools/">Travel tools</a></li>
                                <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="#contacts/">Contacts</a></li>
                            </ul>	 </nav>
                        <div id="widget-footer">
                            <div id="social_networks-2">
                                <ul class="social-networks">
                                    <li>
                                        <a rel="external" title="facebook" href="#">
                                            <img src="<?php echo $base ?>images/facebook.png" alt="">
                                            What's Happening on Facebook	 </a>
                                    </li>
                                </ul>
                            </div>	 </div>
                    </div>
                    <div id="footer-text">
                        <a href="#" title="Private airline" class="site-name">FlyHigh</a>
                        &copy; 2012 &bull;
                        <a href="#privacy-policy/" title="Privacy Policy">Privacy Policy</a>
                        <div><!-- {%FOOTER_LINK} --></div>
                    </div>
                </div>
            </div><!--.container-->
        </footer>
    </div><!--#main-->
    <!-- this is used by many Wordpress features and for plugins to work properly -->
    <script type="text/javascript"> Cufon.now(); </script>
    <!--LIVEDEMO_00 -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7078796-5']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();</script>
</body>
</html>
