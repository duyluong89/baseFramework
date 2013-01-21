<div class="formtemp">
				<div class="numbervisa">1th aplicant</div>
					<table class="ii"><tr><td colspan="2">
					<lable class="lbldot"><span class="ico-ticket"></span>Personal Information :( * means required field )</lable></td></tr>
					<tr><td><label for="fullname">Full Name(as in passport):</label></td>
					<td><input type="text" name="fullname[]" class="fullname" /> </td></tr>
				<tr><td><label for="gender">Gender :</label></td>
					<td><select name="gender[]" class="gender">
						<option value ="Male">Male</option>
						<option value ="FeMale">FeMale</option>
					</select></td></tr>
				<tr><td>	<label for="dateofbirth">Date of birth :</label></td>
				<td>	<input type="text" name="dateofbirth[]"  class="date-pick dateofbirth" id="a" onclick="javascript:NewCssCal('a')"/> 
					<img src="images/cal.gif" onclick="javascript:NewCssCal('a')" style="cursor:pointer" class="dddateofbirth"/> </td></tr>
					<tr><td><label for="national">Present Nationality :</label></td>
					<td><select name="national[]" class="national">
						<?php if(count($Countries) >0):?>
							<?php foreach ($Countries as $key => $country): ?>
								<option value="<?php echo $country->id ?>"><?php echo $country->name?></option>
							<?php endforeach?>
						<?php endif; ?>
					</select> </td></tr>
					<tr><td><label for="passport">Passport number:</label></td>
					<td><input type="text" name="passport[]" class="passport" />  </td></tr>
					<tr><td colspan="2"><lable class="lbldot" ><span class="ico-ticket"></span>Personal Information :( * means required field )</lable></td></tr>
					<tr><td><label for="typevisa">Type of visa and validity:</label></td>
					<td><input type="text" name="typevisa[]" class="typevisa" /> </td></tr>
				<tr><td>	<label for="arrival">Arrival Airport:</label></td>
					<td><select name="arrival[]" class="arrival">
						<option value ="Ha Noi">Ha Noi(Noi Bai)</option>
						<option value ="HCM">Ho Chi Minh - Sai Gon(Tan Son Nhat)</option>
						<option value ="Ha Noi">Da Nang</option>
					</select>
					 </td></tr>
					<tr><td><label for="dateofarrival">Date of arrival:</label></td>
					<td><input type="text" name="dateofarrival[]"  class="date-pick dateofarrival"  onclick="javascript:NewCssCal('date')" id="date" />
					<img src="images/cal.gif" onclick="javascript:NewCssCal('date')" style="cursor:pointer" class="dddateofarrival"/>
					  </td></tr>
					<tr><td><label for="rushservices">Rush services:</label> </td>
						<td><select name="rushservices[]" class="rushservices" onchange="choose_rush_services('rushservices')" id="rushservices">
							<option value="0" selected="selected"></option>
							<option value="Normal - 2 working days" >Normal - 2 working days</option>
							<option value="Urgent - 1 working day">Urgent - 1 working day</option>
							<option value="Urgent - 6-8 working hours">Urgent - 6-8 working hours</option>
							<option value="Urgent - 4 working hours">Urgent - 4 working hours</option>
							<option value="Urgent - 1 hour or Holiday">Urgent - 1 hour or Holiday</option>
						</select>
						<br /><label class="lblrushservices" id="lblrushservices"></label>
					</td></tr>
					
					</table>
					
				
			</div>