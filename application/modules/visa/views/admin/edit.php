<?php $base =  base_url() . 'skin/backend/default/'; ?>
<script type="text/javascript">
    $(function(){
        CKEDITOR.replace("content",
            {
                    extraPlugins : 'tableresize'
            }
            );
    });
</script>
 <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        
    </div>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Edit Visa Management</h5>
                <span>List all visa on status pay done, wait visa.</span>
            </div>
         
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    <div id="containt">
        <form name="editvisa" action="<?php echo base_url()?>admin/visa/update" method="post" class="form feditvisa">
            <input type="hidden" name="code" id="code" value="<?php echo $visa->code?>" />
            <label>Email</label><input type="text" name="email" id="email" value="<?php echo $visa->email ?>" style="width:270px;" /><br />
            <label>Content</label>
            <textarea name="content" id="content">
                <?php echo $visa->content?>
            </textarea>
            <input name="submit" value="Update Visa" type="submit" />
        </form>
    </div>    
</div>
    