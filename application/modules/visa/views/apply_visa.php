<!-- Auto Add tabs -->
<script>
$(document).ready(function(){
    	var base = $("#base").html();
    	$('#tt').tabs('add',{
                title:'visa-1',
                content:base,
                closable:false
        });
        $("#visa").change(function(){
        	    var value = $(this).val();
                for(var j = value; j<=10; j++){
                        if(j > 1){
                                if($('#tt').tabs('exists', 'visa-' + j))
                                        $('#tt').tabs('close', 'visa-' + j);
                        }
                }

                for (var i = 1; i <= value;i++) {

					    if ($('#tt').tabs('exists', 'visa-' + i)){
                                $('#tt').tabs('select', 'visa-' + i);
                        } else {
                                var xxx =  $("#base").html();
                                var d = $("#base").find("input.dateofbirth");
                                d.attr("id","a-" + i);
                                d.attr("onclick","javascript:NewCssCal('a-" + i + "')");
                                
                                var idd =  $("#base").find("img.dddateofbirth");
								idd.attr("onclick","javascript:NewCssCal('a-" + i + "')");

                                var date = $("#base").find("input.dateofarrival");
                                date.attr("id","date-" + i);
                                date.attr("onclick","javascript:NewCssCal('date-" + i + "')");

                                var idate =$("#base").find("img.dddateofarrival");
                                idate.attr("onclick","javascript:NewCssCal('date-" + i + "')");

                                var chooses = $("#base").find("select.rushservices");
                                chooses.attr("id","rushservices"+i);
                                chooses.attr("onchange","choose_rush_services('rushservices"+i+"')");

                                var lblchooses = $("#base").find("label.rushservices");
                                lblchooses.attr("id","lblrushservices"+i);

                                var content = $("#base").html();
                                $('#tt').tabs('add',{
                                        title:'visa-' + i,
                                        content:content,
                                        closable:false
                                });

                        }

                }
		
        });
	$("input[name=pp_submit]").click(function(){
		$("form[name=payment_form]").attr("action","https://www.paypal.com/cgi-bin/webscr");
	});



});

function choose_rush_services(id){
	var choose = $("#" + id).val();
	//alert(choose);
	switch(choose){
		case "0":
				$("#lbl" + id).html('');
			break;
		case "Normal - 2 working days":
			$("#lbl" + id).html('Normal - 2 working days');
		break;
		case "Urgent - 1 working day":
			$("#lbl" + id).html('Urgent - 1 working day');
			break;
		case "Urgent - 6-8 working hours":
			$("#lbl" + id).html('Urgent - 6-8 working hours');
			break;
		case "Urgent - 4 working hours":
			$("#lbl" + id).html('Urgent - 4 working hours');
			break;
		case "Urgent - 1 hour or Holiday":
			$("#lbl" + id).html('Urgent - 1 hour or Holiday');
			break;
	}
}
</script>
   <div class="block">
                    <div class="block-title"><span>Apply Visa</span></div>
                    <div class="block-content">
                        
                 
<lable>Please select number of applicants? </lable>
	<select name="visa" id="visa">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>
	<div class="frmvisa">
		<form action="<?php echo base_url() ?>visa/apply" method="post" name="payment_form" >
			<div id="tt" class="easyui-tabs" style="width:400px;height:auto;">
			</div>

			<div class="information">
				<label>Email:</label>
				<input type="text" name="txtemail" class="email"><br>
				<label>Comment:</label>
				<textarea name="description" cols="35" rows="7">
				</textarea>

			</div>

			<div class="payment">
				<?php if(isset($payment_form)) echo $payment_form;?>
				<input type="submit" name="submit" value="Payment late"/>
			</div>
		    
		</form>
	</div>
	
   </div>
</div>

<div id="base" style="display:none;">

	<div class="formtemp">
				<div class="numbervisa">1th aplicant</div>
				
					<lable>Personal Information :( * means required field )</lable><br>
					<label for="fullname">Full Name(as in passport):</label>
					<input type="text" name="fullname[]" class="fullname" /> <br />
					<label for="gender">Gender :</label>
					<select name="gender[]" class="gender">
						<option value ="Male">Male</option>
						<option value ="FeMale">FeMale</option>
					</select>
					 <br />
					<label for="dateofbirth">Date of birth :</label>
					<input type="text" name="dateofbirth[]"  class="date-pick dateofbirth" id="a" onclick="javascript:NewCssCal('a')"/> 
					<img src="images/cal.gif" onclick="javascript:NewCssCal('a')" style="cursor:pointer" class="dddateofbirth"/> <br />
					<label for="national">Present Nationality :</label>
					<select name="national[]" class="national">
						<option value="US">US</option>
					</select> <br /> 	
					<label for="passport">Passport number:</label>
					<input type="text" name="passport[]" class="passport" /> <br />
					<lable>Personal Information :( * means required field )</lable><br>
					<label for="typevisa">Type of visa and validity:</label>
					<input type="text" name="typevisa[]" class="typevisa" /> <br />
					<label for="arrival">Arrival Airport:</label>
					<select name="arrival[]" class="arrival">
						<option value ="Ha Noi">Ha Noi(Noi Bai)</option>
						<option value ="HCM">Ho Chi Minh - Sai Gon(Tan Son Nhat)</option>
						<option value ="Ha Noi">Da Nang</option>
					</select>
					 <br>
					<label for="dateofarrival">Date of arrival:</label>
					<input type="text" name="dateofarrival[]"  class="date-pick dateofarrival"  onclick="javascript:NewCssCal('date')" id="date" />
					<img src="images/cal.gif" onclick="javascript:NewCssCal('date')" style="cursor:pointer" class="dddateofarrival"/>
					 <br>
					<label for="rushservices">Rush services:</label>
						<select name="rushservices[]" class="rushservices" onchange="choose_rush_services('rushservices')" id="rushservices">
							<option value="0" selected="selected"></option>
							<option value="Normal - 2 working days" >Normal - 2 working days</option>
							<option value="Urgent - 1 working day">Urgent - 1 working day</option>
							<option value="Urgent - 6-8 working hours">Urgent - 6-8 working hours</option>
							<option value="Urgent - 4 working hours">Urgent - 4 working hours</option>
							<option value="Urgent - 1 hour or Holiday">Urgent - 1 hour or Holiday</option>
						</select><br>
					<label class="lblrushservices" id="lblrushservices"></label>
					<br>
					
				
			</div>
</div>