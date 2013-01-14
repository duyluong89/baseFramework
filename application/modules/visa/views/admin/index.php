 <!-- Responsive header -->
 <script type="text/javascript">
    $(function(){
        $.ajax({
              url: "<?php echo base_url() ?>admin/visa/manager/default",
              async: false,
              type: "POST",
              dataType: "html",
              success: function(data) {
                $('#containt').html(data);
              }
        })

         $("#searchbutton").click(function(){
           var key = $('input.keysearch').val();
           if(key !=''){
                var form_data = {
                    keysearch : key,
                    ajax : '1'
                };
                var shtml="";
                $.ajax({
                    url: "<?php echo site_url('admin/visa/manager/search'); ?>",
                    type: 'POST',
                    async : false,
                    dataType:'html',
                    data: form_data,
                    success: function(data) {
                        $('#containt').html(data);
                    }
                })
            }else{
                $.ajax({
                  url: "<?php echo base_url() ?>admin/visa/manager/default",
                  async: false,
                  type: "POST",
                  dataType: "html",
                  success: function(data) {
                    $('#containt').html(data);
                  }
        })

            }
            return false;
        });

        $("#updatevisa").click(function(){
            var code = $("input#visa-code").val();
            var dpatch = $("input#visa-dispatch").val();
            if(code !=''){
                var form_data = {
                    codekey : code,
                    dispatchkey : dpatch,
                    ajax : '1'
                };
                 $.ajax({
                      url: "<?php echo base_url() ?>admin/visa/manager/updatedispatch",
                      async: false,
                      type: "POST",
                      data: form_data,
                      dataType: "html",
                      success: function(data) {
                        $('#containt').html(data);
                  }

            })
                }
                return false;
        });

        //change pay done

        $("#changepaydone").click(function(){
            var code = $("input#visa-code").val();
            if(code !=''){
                var form_data = {
                    codekey : code,
                    status: '<?php echo PAYDONE;?>'
                };
                 $.ajax({
                      url: "<?php echo base_url() ?>admin/visa/manager/updatestatus",
                      async: false,
                      type: "POST",
                      data: form_data,
                      dataType: "html",
                      success: function(data) {
                        $('#containt').html(data);
                  }

            })
                }
            return false;
        });

        $("#changewaitvisa").click(function(){
            var code = $("input#visa-code").val();
            if(code !=''){
                var form_data = {
                    codekey : code,
                    status: '<?php echo WAITVISA;?>'
                };
                 $.ajax({
                      url: "<?php echo base_url() ?>admin/visa/manager/updatestatus",
                      async: false,
                      type: "POST",
                      data: form_data,
                      dataType: "html",
                      success: function(data) {
                        $('#containt').html(data);
                  }

            })
                }
            return false;
        });
    });

 </script>
 <?php $base =  base_url() . 'skin/backend/default/'; ?>


    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Visa Management</h5>
                <span>List all visa on status pay done, wait visa.</span>
            </div>
         
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    <div id="containt"></div>

   <div class="line"></div>

    <div class="tools-visa">
        <div class="search-visa">
            <form action="#" method="post" class="form" >
                <span class="label-search">Search visa</span><input type="text" name="txtsearch" class="keysearch" placeholder="Please enter code" style="width:170px; font-size:13px;" />
                <input type="submit" value="Search visa" name="searchbutton" id="searchbutton" />
                <input type="submit" value="Update visa" name="update_visa" id="updatevisa" />
            </form>
        </div>

        <div class="proccess-visa">
            <form class="form" action="#" method="post">
                <input type="text" name="visa-name" id="visa-name" style="width:170px; font-size:13px;"  />
                <input  type="text" name="visa-code" id="visa-code" style="width:170px; font-size:13px;" />
                <span class="label-search">DisPatch:</span>
                <input  type="text" name="visa-dispatch" id="visa-dispatch" style="width:170px; font-size:13px;" />
                <input  type="submit" name="changepaydone" id="changepaydone" value="Move to Pay done" />
                <input  type="submit" name="changewaitvisa" id="changewaitvisa" value="Move to Wait visa" />
                


            </form>
        </div>
    </div>
</div>
    