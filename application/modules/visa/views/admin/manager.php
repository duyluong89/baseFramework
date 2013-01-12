 <?php $base =  base_url() . 'skin/backend/default/'; ?>
<script type="text/javascript">
    $(function(){
        $("a.pay-code").click(function(){
            var code = $(this).text();
            var name = $("#name-"+ code).text();
            var dispatch = $("#dispatch-" + code).text();
            $("#visa-code").val(code);
            $("#visa-name").val(name);
            $("#visa-dispatch").val(dispatch);
            var id = $(this).attr("alt");
            
         /*  $("#" + id).zclip({
            path:'/basecodeigniter/skin/backend/default/js/ZeroClipboard.swf',
            copy:$("#" + id).html()
            }); */
            if($("#" + id).hasClass("show")){
                $("#" + id).removeClass("show");    
                $("#" + id).addClass("hide");   
            }else{
                $("#" + id).removeClass("hide");    
                $("#" + id).addClass("show");

            }
            return false;
     });
    });
</script>
 <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Dynamic table -->
        <div class="widget" id="pay-done">
            <div class="title"><img src="<?php echo $base ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Pay done</h6></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
            <th>Number</th> 
            <th>Code</th>
            <th>Name</th>
            <th>Date In</th>
            <th>Total</th>
            <th>Rush</th>
            <th>Pay Date</th>
            <th>Status</th>
            <th>Dispatch</th>
            <th>Comment</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody>
               <?php if(isset($paydone) and count($paydone) > 0): ?>
                <?php foreach($paydone as $pay ): ?>
            <tr class="">
                <td><a href="#"><?php echo $pay->number_visa?></a></td>
                <td><a href="#" class="pay-code" alt="content-<?php echo $pay->code?>"><?php echo $pay->code?></a>
                    <div class="content c-visa" id="content-<?php echo $pay->code?>">
                        <?php echo $pay->content?>
                    </div>
                </td>
                <td id="name-<?php echo $pay->code?>"><?php echo $pay->name?></td>
                <td><?php echo $pay->date_in?></td>
                <td><?php echo $pay->total?></td>
                <td><?php echo $pay->rush?></td>
                <td><?php echo $pay->pay_date?></td>
                <td><?php echo $pay->status?></td>
                <td id="dispatch-<?php echo $pay->code?>"><?php echo $pay->dispatch?></td>
                <td><?php echo $pay->note?></td>
                <td class="center"><a href="<?php echo base_url() . 'visa/admin/manager/del/' . $pay->code ?>" onclick="return confirm('Do you want to delete country?')" >Del</a>-
                	<a href="<?php echo base_url() . 'visa/admin/manager/edit/' . $pay->code ?>">edit</a></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
            </tbody>
            </table>
        </div>

        <div class="widget" id="wait-visa">
            <div class="title"><img src="<?php echo $base ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Wait paysa</h6></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
            <th>Number</th> 
            <th>Code</th>
            <th>Name</th>
            <th>Date In</th>
            <th>Total</th>
            <th>Rush</th>
            <th>Pay Date</th>
            <th>Status</th>
            <th>Dispatch</th>
            <th>Comment</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody>
               <?php if(isset($waitvisa) and count($waitvisa) > 0): ?>
                <?php foreach($waitvisa as $wait ): ?>
            <tr class="">
                <td><a href="#"><?php echo $wait->number_visa?></a></td>
                <td><a href="#" class="pay-code" alt="content-<?php echo $wait->code?>"><?php echo $wait->code?></a>
                    <div class="content c-visa" id="content-<?php echo $wait->code?>">
                        <?php echo $pay->content?>
                    </div>
                </td>
                <td id="name-<?php echo $wait->code?>"><?php echo $wait->name?></td>
                <td><?php echo $wait->date_in?></td>
                <td><?php echo $wait->total?></td>
                <td><?php echo $wait->rush?></td>
                <td><?php echo $wait->pay_date?></td>
                <td><?php echo $wait->status?></td>
                <td id="dispatch-<?php echo $wait->code?>"><?php echo $wait->dispatch?></td>
                <td><?php echo $wait->note?></td>
                <td class="center"><a href="<?php echo base_url() . 'admin/visa/del/' . $wait->code ?>" onclick="return confirm('Do you want to delete country?')" >Del</a>-
                    <a href="<?php echo base_url() . 'admin/visa/edit/' . $wait->code ?>">edit</a></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
            </tbody>
            </table> 
        </div>
    