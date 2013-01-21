<?php $base =  base_url() . 'skin/backend/default/'; ?>
<!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Add new user </h5>
                <span></span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
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
    <div class="clear"></div>
    
    <div class="line"></div>
      <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li><a href="#" title=""><img src="images/icons/control/32/plus.png" alt="" /><span>Add new session</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/database.png" alt="" /><span>New DB entry</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add new user</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/comment.png" alt="" /><span>Review comments</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Check orders</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div> 
<!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
<!--        <div class="nNote nInformation hideit">
            <p><strong>INFORMATION: </strong>Form elements were divided into 4 different pages. Don't forget to check all of them!</p>
        </div>-->
        
        <!-- Form -->
        <form action="<?php echo base_url()?>typeofvisa/admin/manager/save" class="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $typeofvisa['id'] ?>" />
            <input type="hidden" name="status" value="<?php echo $typeofvisa['id'] ?>" />
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo $base?>images/icons/dark/list.png" alt="" class="titleIcon" /><h6>typeofvisa Information</h6></div>
                    <div class="formRow">
                        <label>Name:</label>
                        <div class="formRight"><input type="text" value="<?php echo $typeofvisa['name']?>" name="name" /></div>
                        <div class="clear"></div>
                    </div>
                     <div class="formRow">
                        <label>active:</label>
                        <div class="formRight">
                            <input type="checkbox" <?php echo ($typeofvisa['active'] == 0)? '':'checked="checked"'  ?>  name="active" id="checkbox1" />
                         </div><div class="clear"></div>
                    </div>
                 </div>
            </fieldset>
            
           
                    
              
            
            <input type="submit" name="submit" value="Save" />
        </form>
            
    </div>