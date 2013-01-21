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
     <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
<!--        <div class="nNote nInformation hideit">
            <p><strong>INFORMATION: </strong>Form elements were divided into 4 different pages. Don't forget to check all of them!</p>
        </div>-->
        
        <!-- Form -->
        <form action="<?php echo base_url()?>admin/block/save" class="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $block['id'] ?>" />
            <input type="hidden" name="status" value="<?php echo $block['id'] ?>" />
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo $base?>images/icons/dark/list.png" alt="" class="titleIcon" /><h6>block Information</h6></div>
                    <div class="formRow">
                        <label>Code:</label>
                        <div class="formRight"><input type="text" value="<?php echo $block['code']?>" name="code" style="width:200px;" /></div>
                        <div class="clear"></div>
                    </div>
                     <div class="formRow">
                        <label>Title:</label>
                        <div class="formRight"><input type="text" value="<?php echo $block['title']?>" name="title" /></div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Show Title:</label>
                        <div class="formRight">
                            <input type="checkbox" <?php echo ($block['showtitle'] == 0)? '':'checked="checked"'  ?>  name="showtitle" id="checkbox2" />
                          <label>Active:</label>  <input type="checkbox" <?php echo ($block['active'] == 0)? '':'checked="checked"'  ?>  name="active" id="checkbox1" />
                         
                         </div><div class="clear"></div>
                    </div>
                      <div class="formRow">
                        <label>Content:</label>
                        <div class="formRight">
                            <textarea name="content" id="content"><?php echo $block['content']?></textarea>
                        </div>
                        <div class="clear"></div>
                    </div>
                 </div>
            </fieldset>
            <input type="submit" name="submit" value="Save" />
        </form>
            
    </div>
    <script type="text/javascript">
        $(function(){
            CKEDITOR.replace("content");
        });
    </script>