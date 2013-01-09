<!DOCTYPE html>
<html>
    <head>
    <title><?php echo $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $base =  base_url() . 'skin/backend/default/'; ?>
<link href="<?php echo $base ?>css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/plugins/elfinder.min.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="<?php echo $base?>js/custom.js"></script>

<script type="text/javascript" src="<?php echo $base?>js/charts/chart.js"></script>
    </head>
    <body>
        <!-- Style switcher -->
<div class="switcher">
	<a href="#" title="" class="pat1"><img src="<?php echo $base?>images/switcher/2.png" alt="" /></a>
    <a href="#" title="" class="pat2"><img src="<?php echo $base?>images/switcher/3.png" alt="" /></a>
    <a href="#" title="" class="pat3"><img src="<?php echo $base?>images/switcher/4.png" alt="" /></a>
	<a href="#" title="" class="pat4"><img src="<?php echo $base?>images/switcher/5.png" alt="" /></a>
    <a href="#" title="" class="pat5"><img src="<?php echo $base?>images/switcher/6.png" alt="" /></a>
    <a href="#" title="" class="pat6"><img src="<?php echo $base?>images/switcher/7.png" alt="" /></a>
	<a href="#" title="" class="pat7"><img src="<?php echo $base?>images/switcher/8.png" alt="" /></a>
    <a href="#" title="" class="pat8"><img src="<?php echo $base?>images/switcher/9.png" alt="" /></a>
    <a href="#" title="" class="pat10"><img src="<?php echo $base?>images/switcher/10.png" alt="" /></a>
	<a href="#" title="" class="pat9"><img src="<?php echo $base?>images/switcher/1.png" alt="" /></a>
</div>


<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="<?php echo $base?>images/logo.png" alt="" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <!-- Search widget -->
    <form action="" class="sidebarSearch">
        <input type="text" name="search" placeholder="search..." id="ac" />
        <input type="submit" value="" />
    </form>
    
    <div class="sidebarSep"></div>

    <!-- General balance widget -->
    <div class="genBalance">
        <a href="#" title="" class="amount">
            <span>General balance:</span>
            <span class="balanceAmount">$10,900.36</span>
        </a>
        <a href="#" title="" class="amChanges">
            <strong class="sPositive">+0.6%</strong>
        </a>
    </div>
    
    <!-- Next update progress widget -->
    <div class="nextUpdate">
        <ul>
            <li>Next update in:</li>
            <li>23 hrs 14 min</li>
        </ul>
        <div class="pWrapper"><div class="progressG" title="78%"></div></div>
    </div>
    
    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="index.html" title=""><span>Dashboard</span></a></li>
        <li class="charts"><a href="#" title="" class="exp"><span>Configuration</span></a>
            <ul class="sub">
                <li><a href="<?php echo base_url() . 'admin/config'?>">Site Manager</a></li>
                <li><a href="<?php echo base_url() . 'admin/module'?>" >Module Manager</a></li>
                <li><a href="<?php echo base_url() . 'admin/block'?>" >Static Block</a></li>
                
            </ul>
        </li>
        <li class="forms"><a href="#" title="" class="exp" ><span>Catalog</span><strong>2</strong></a>
            <ul class="sub">
                <li><a href="forms.html" title="">Category</a></li>
                <li><a href="form_validation.html" title="">Products</a></li>
            </ul>
        </li>
        
         <li class="forms"><a href="#" title="" class="exp" ><span>Post article</span><strong>2</strong></a>
            <ul class="sub">
                 <li><a href="form_editor.html" title="">Category</a></li>
                <li class="last"><a href="form_wizards.html" title="">Article Manager</a></li>
            </ul>
        </li>
        
        <li class="ui"><a href="<?php echo base_url() . 'admin/user'?>" title=""><span>User Management</span></a></li>
        <li class="tables"><a href="tables.html" title="" class="exp"><span>Tables</span><strong>3</strong></a>
            <ul class="sub">
                <li><a href="table_static.html" title="">Static tables</a></li>
                <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
            </ul>
        </li>
        <li class="widgets"><a href="#" title="" class="exp"><span>Widgets and grid</span><strong>2</strong></a>
            <ul class="sub">
                <li><a href="widgets.html" title="">Widgets</a></li>
                <li class="last"><a href="grid.html" title="">Grid</a></li>
            </ul>
        </li>
        <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><strong>6</strong></a>
            <ul class="sub">
                <li><a href="403.html" title="">403 page</a></li>
                <li><a href="404.html" title="">404 page</a></li>
                <li><a href="405.html" title="">405 page</a></li>
                <li><a href="500.html" title="">500 page</a></li>
                <li><a href="503.html" title="">503 page</a></li>
                <li class="last"><a href="offline.html" title="">Website is offline</a></li>
            </ul>
        </li>
        <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
        <li class="typo"><a href="#" title="" class="exp"><span>Other pages</span><strong>3</strong></a>
            <ul class="sub">
                <li><a href="typography.html" title="">Typography</a></li>
                <li><a href="calendar.html" title="">Calendar</a></li>
                <li class="last"><a href="gallery.html" title="">Gallery</a></li>
            </ul>
        </li>
    </ul>
 </div>

<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo $base?>images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="<?php echo $base?>images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $base?>images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo $base?>images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="<?php echo $base?>images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="<?php echo $base?>images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
   <?php
		$this->load->view($module . '/'. $view_file);
	?>
     <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>
</div>

<div class="clear"></div>
</body>
</html>
