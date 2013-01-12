 
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
           $("#" + id).zclip({
            path:'/basecodeigniter/skin/backend/default/js/ZeroClipboard.swf',
            copy:$("#" + id).html()
            });
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
            <div class="title"><img src="<?php echo $base ?>images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Search result</h6></div>                          
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
               <?php if(isset($search) and count($search) > 0): ?>
                <?php foreach($search as $s ): ?>
            <tr class="">
                <td><a href="#"><?php echo $s->number_visa?></a></td>
                <td><a href="#" class="pay-code" alt="content-<?php echo $s->code?>"><?php echo $s->code?></a>
                    <div class="content c-visa" id="content-<?php echo $s->code?>">
                        <?php echo $s->content?>
                    </div>
                </td>
                <td id="name-<?php echo $s->code?>"><?php echo $s->name?></td>
                <td><?php echo $s->date_in?></td>
                <td><?php echo $s->total?></td>
                <td><?php echo $s->rush?></td>
                <td><?php echo $s->pay_date?></td>
                <td><?php echo $s->status?></td>
                <td id="dispatch-<?php echo $s->code?>"><?php echo $s->dispatch?></td>
                <td><?php echo $s->note?></td>
                <td class="center"><a href="<?php echo base_url() . 'country/admin/manager/del/' . $s->code ?>" onclick="return confirm('Do you want to delete country?')" >Del</a>-
                	<a href="<?php echo base_url() . 'country/admin/manager/edit/' . $s->code ?>">edit</a></td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
            </tbody>
            </table>
        </div>