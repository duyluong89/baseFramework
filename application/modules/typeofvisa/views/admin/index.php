 <!-- Responsive header -->
 <?php $base =  base_url() . 'skin/backend/default/'; ?>
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="images/icons/light/frames.png" alt="" />Dynamic table</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="images/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="images/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="images/icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="images/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="images/icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>User Management</h5>
                <span>List all users in table.</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a href="#" title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a href="#" title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a href="#" title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending uploads</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Page statistics area -->
    <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li><a href="<?php echo base_url()?>admin/typeofvisa/add" title=""><img src="<?php echo $base ?>images/icons/control/32/plus.png" alt="" /><span>Add new type</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Dynamic table -->
        <div class="widget">
            <div class="title"><img src="<?php echo $base ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Type Of Visa Management</h6></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody>
               <?php if(isset($typeofvisa) and count($typeofvisa) > 0): ?>
                <?php foreach($typeofvisa as $type ): ?>
            <tr class="">
                <td><?php echo $type->id?></td>
                <td><?php echo $type->name?></td>
                <td class="center"><a href="<?php echo base_url() . 'typeofvisa/admin/manager/del/' . $type->id ?>" onclick="return confirm('Do you want to delete Type this?')" >Del</a>-
                	<a href="<?php echo base_url() . 'typeofvisa/admin/manager/edit/' . $type->id ?>">edit</a></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
            </tbody>
            </table>  
        </div>
    
    </div>
    