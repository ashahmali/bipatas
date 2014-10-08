<?php echo form_open('staff/personal_information'); ?>
					<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->
 <?php
	//Array of all required fields in this page
	$required_fields = array('p_title',
					'fname', 'sname', 'sex', 'height', 'phone', 'dob', 'mstatus', 'religion', 'street',
					'city', 'lga', 'bgroup', 'rhesus', 'noksn', 'nokon', 'nokad_street', 'nokad_city', 'rship', 'nokpn');
 ?>
				<div class="input_row ">
					<div class="input">
		                        <label id="p_title" for="p_title">Title <span style="color:red;">*</span>
		                            <select <?php highlight_field($required_fields, 'p_title'); ?>  id="p_title" name="p_title">
										<option value=""> </option>
										<option value="Mr" <?php echo set_select('p_title', 'Mr'); if($title == 'Mr') echo 'SELECTED'; ?> >Mr</option>
										<option value="Mrs" <?php echo set_select('p_title', 'Mrs');  if($title == 'Mrs') echo 'SELECTED'; ?> >Mrs</option>
										<option value="Dr" <?php echo set_select('p_title', 'Dr'); if($title == 'Dr') echo 'SELECTED'; ?> >Doctor</option>
										<option value="Prof" <?php echo set_select('p_title', 'Prof'); if($title == 'Prof') echo 'SELECTED'; ?> >Professor</option>
										<option value="Chief" <?php echo set_select('p_title', 'Chief'); if($title == 'Chief') echo 'SELECTED'; ?> >Chief</option>
										<option value="Alhaji" <?php echo set_select('p_title', 'Alhaji'); if($title == 'Alhaji') echo 'SELECTED'; ?> >Alhaji</option>
									</select>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Title</h4>

		                        <p>This is the title you are addressed by, e.g Mr., Mrs. and Chief.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_surname" for="sname">Surname <span style="color:red;">*</span>
		                            <input <?php highlight_field($required_fields, 'sname'); ?> type="text" id="sname" name="sname" value="<?php echo $surname; ?>" /> <span class="info">
		                            (e.g. Mudiaga-Emumejakpor or Samson)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Surname</h4>

		                        <p>Your surname is your family name. If your surname is a compound name, e.g. Mudiaga-Emumejakpor enter it as show with a dash separating each part of the name</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
		                    <div class="input">
		                        <label id="lbl_firstname" for="fname">First Name <span style="color:red;">*</span>

		                            <input <?php highlight_field($required_fields, 'fname'); ?> type="text" id="fname" name="fname" value="<?php echo $firstName; ?>" readonly /><span class="info">
		                            (e.g. Ogenetega, Martins and Rukewe)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;First Name</h4>

		                        <p>Your first name is the name you were given and the name by which you are known and called.</p>
		                    </div>
		            <div class="fclear"></div>
		          </div>


				<div class="input_row ">
		                    <div class="input">
		                        <label id="lbl_middlename" for="mname">Other Name <!--<span style="color:red;">*</span>	-->
		                            <input   type="text" id="name" name="mname" value="<?php echo $middleName; ?>" readonly />
		                            <span class="info">
							            <!--<input id="middlename_option" name="middlename_option" style="margin-top:0;" type="checkbox">
							            <span style="font-size:13px; font-style:normal; color:#333;margin-right:30px;">Not Applicable</span>-->
							(e.g. Akpomudje, Adams or Ahmed)
									</span>
		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Other Name</h4>

		                        <p>Your other name is another name by which you are known or a middle name given at birth. It can be your religion name or your traditional name.</p>
		                    </div>
		                    <div class="fclear"></div>
		       </div>

				<div class="input_row section">
		          <div class="input">
		                        <label id="lbl_gender" for="sex">Sex <span style="color:red;">*</span>
									<fieldset <?php highlight_field($required_fields, 'sex'); ?>>
		                            <ul class="olw olw_gender">
		                                <li id="r-gender-M">
		                                    <input id="sex-m" name="sex" value="m" <?php echo set_radio('sex', 'm'); ?> <?php if($sex == 'm') echo 'CHECKED';?> type="radio"><span class="olw_lbl" id="l-gender-M">MALE </span>

		                                    <br>
		                                </li>
		                                <li id="r-gender-F">
		                                    <input id="sex-f" name="sex" value="f" <?php echo set_radio('sex', 'f'); ?> <?php if($sex == 'F') echo 'CHECKED';?> type="radio"><span class="olw_lbl" id="l-gender-F">FEMALE </span>

		                                    <br>
		                                </li>
		                            </ul>
									</fieldset>
		                        </label>
		          </div>
		                    <div class="fclear"></div>
		                </div>

				<div class="input_row ">
		          <div class="input">
		            <label id="lbl_marital_status" for="mstatus">Marital Status <span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'mstatus'); ?>  id="mstatus" name="mstatus">
							<option value="">-</option>
							<option value="Single" <?php echo set_select('mstatus', 'Single'); ?> <?php if($mstatus == 'Single') echo 'SELECTED'; ?> >Single</option>
							<option value="Married" <?php echo set_select('mstatus', 'Married'); ?>  <?php if($mstatus == 'Married') echo 'SELECTED';?> >Married</option>
							<option value="Divorced" <?php echo set_select('mstatus', 'Divorced');?>  <?php if($mstatus == 'Divorced') echo 'SELECTED';?> >Divorced</option>
							<option value="Separated" <?php echo set_select('mstatus', 'Separated'); ?>  <?php if($mstatus == 'Separated') echo 'SELECTED';?>  >Separated</option>
							<option value="Widowed" <?php echo set_select('mstatus', 'Widowed'); ?> <?php if($mstatus == 'Widowed') echo 'SELECTED';?> >Widowed</option>
						</select>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>

				<div class="input_row section">
		          <div class="input">
		             <label id="lbl_maiden_name" for="maidname">Maiden Name
		                <input type="text" id="maidname" name="maidname" value="<?php echo $maidenName; ?>" />
		                	<span class="info">(e.g. Akpomudje or Emmumejakpor-Efe)</span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Maiden Name</h4>
					<p>Applicable to women, your surname prior to marriage. If you have not changed your name after marriage leave blank</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

				<div class="input_row">
		          <div class="input">
		             <label id="lbl_doc_name" for="don">Date of Change of Name
		                <input type="text" class="date_pick" id="don" name="don" value="<?php echo $dateChangeName; ?>"/>
		                	<!---<span class="info">(date format is dd/mm/yyyy)</span>-->
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Date of Change of Name</h4>
					<p>Enter the date your name was changed</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row section">
		          <div class="input">
		             <label id="lbl_height" for="height">Height<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'height'); ?>  type="text" maxlength="4" id="height" name="height" value="<?php echo $height; ?>"/>
		                	<span class="info">(Height format is metres)</span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Height</h4>
					<p>Enter your height measurement e.g 1.80 for 1.80m</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_phone" for="phone">Phone Number<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'phone'); ?>  type="text" id="phone" name="phone" value="<?php echo $phone; ?>"/>
		                	<span class="info">(Mobile number format is e.g 080XXXXXXXX)</span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Mobile</h4>
					<p>This should be the phone upon which you can be reached at any time</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row section">
		          <div class="input">
		             <label id="lbl_dob" for="dob">Date of Birth<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'dob'); ?>  type="text" id="dob" name="dob" class="date_pick" value="<?php echo $dob; ?>"/>
		                	<!--<span class="info">(date format is dd/mm/yyyy)</span>-->
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Date of Birth</h4>
					<p>This is the date you where born</p>
		          </div>
		          <div class="fclear"></div>
		       </div>
			   
			   <div class="input_row ">
		          <div class="input">
		            <label id="lbl_state" for="state">State Of Origin<span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'state'); ?>  id="state" name="state" onChange='ajaxFunction()'>		
								<option value="<?php echo $state; ?>"><?php echo $state; ?></option>
						</select>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>
			   
			   

		        <div class="input_row">
		          <div class="input">
		            <label id="lbl_lga" for="lga">LGA<span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'lga'); ?>  id="lga" name="lga" >
							<option value="<?php echo $lga?>" ><?php echo $lga; ?></option> 
							</select>
					</label>
		         </div>
		         <div class="fclear"></div>
		        </div>

<div class="input_row">
  <div class="input">
	<label id="lbl_religion" for="religion">Religion <span style="color:red;">*</span>
		<select <?php highlight_field($required_fields, 'religion'); ?>  id="religion" name="religion">
			<option value="Christian" <?php echo set_select('religion', 'Christian'); ?>  <?php if($religion == 'Christian') echo 'SELECTED'; ?> >Christian</option>
			<option value="Muslim" <?php echo set_select('religion', 'Muslim'); ?>  <?php if($religion == 'Muslim') echo 'SELECTED'; ?> >Muslim</option>
			<option value="Pegan" <?php echo set_select('religion', 'Pegan'); ?>  <?php if($religion == 'Pagan') echo 'SELECTED'; ?> >Pagan</option>
			<option value="Hindu" <?php echo set_select('religion', 'Hindu'); ?>  <?php if($religion == 'Hindu') echo 'SELECTED'; ?> >Hindu</option>
			<option value="Others" <?php echo set_select('religion', 'Others'); ?>  <?php if($religion == 'Others') echo 'SELECTED'; ?> >Others</option>
		</select>
		<!--<input type="text" id="o_religion" name="o_religion" value=""/>-->
   </label>
 </div>
 <div class="fclear"></div>
</div>


				<div class="input_row section">
		          <div class="input">
		             <label id="lbl_street" for="street">Address
		              <input <?php highlight_field($required_fields, 'street'); ?>  type="text" id="street" name="street" value="<?php echo $street; ?>"/>
		                	<span class="info">Street <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Street</h4>
					<p>Enter the Name or Number of your house e.g 14 Efuru Road,</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		              <input <?php highlight_field($required_fields, 'city'); ?>  type="text" id="city" name="city" value="<?php echo $city; ?>"/>
		                	<span class="info">City <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;City</h4>
					<p>Enter the name of your City e.g Asaba</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

			  <div class="input_row section">
		          <div class="input">
		             <label id="lbl_bgroup" for="bgroup">Blood Group
		              <select <?php highlight_field($required_fields, 'bgroup'); ?>  id="bgroup" name="bgroup" >
					<option value="">-</option>
					<option value="A" <?php echo set_select('bgroup', 'A'); ?> <?php if($bgroup == 'A') echo 'SELECTED'; ?> >A</option>
					<option value="B" <?php echo set_select('bgroup', 'B'); ?>  <?php if($bgroup == 'B') echo 'SELECTED'; ?> >B</option>
					<option value="AB" <?php echo set_select('bgroup', 'AB'); ?>  <?php if($bgroup == 'AB') echo 'SELECTED'; ?> >AB</option>
					<option value="O" <?php echo set_select('bgroup', 'O'); ?>  <?php if($bgroup == 'O') echo 'SELECTED'; ?> >O</option>
					</select>
		                	<span class="info">Group <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Blood Group</h4>
					<p>Select your Blood Group</p>
		          </div>
		          <div class="fclear"></div>
		       </div>


		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_rhesus" for="rhesus">
		              <select <?php highlight_field($required_fields, 'rhesus'); ?>  id="rhesus" name="rhesus">
										<option value=""> </option>
										<option value="+" <?php echo set_select('rhesus', '+'); ?>  <?php if($rhesus == '+') echo 'SELECTED'; ?> >+</option>
										<option value="-" <?php echo set_select('rhesus', '-'); ?>  <?php if($rhesus == '-') echo 'SELECTED'; ?> >-</option>
						</select>
		                	<span class="info">Rhesus <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Blood Group Rhesus</h4>
					<p>Select your Blood Group rhesus + or -</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row section">
		          <div class="input">
		             <label id="lbl_noksn" for="noksn">Next of Kin
		              <input <?php highlight_field($required_fields, 'noksn'); ?>  type="text" id="noksn" name="noksn" value="<?php echo $nextKinname; ?>"/>
		              <span class="info">Surname <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Surnmame</h4>
					<p>Please the surname of your next of kin here</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokon" for="nokon">
		              <input <?php highlight_field($required_fields, 'nokon'); ?>  type="text" id="nokon" name="nokon" value="<?php echo $nextKinOname; ?>"/>
		              <span class="info">Other Names<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Other Names</h4>
					<p>Please enter other names of your next of kin here</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokad_street" for="nokad_street">
		              <input <?php highlight_field($required_fields, 'nokad_street'); ?>  type="text" id="nokad_street" name="nokad_street" value="<?php echo $nextKinAddr; ?>"/>
					 <span class="info">Address (Street)<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Address (Street)</h4>
					<p>Please enter next of kin's current address</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokad_city" for="nokad_city">
		              <input <?php highlight_field($required_fields, 'nokad_city'); ?>  type="text" id="nokad_city" name="nokad_city" value="<?php  echo $nextKinCity; ?>"/>
		              <span class="info">Address (City)<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Address(City)</h4>
					<p>Please enter next of kin's current address (City)</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

				<div class="input_row">
		          <div class="input">
		             <label id="lbl_rship" for="rship">
		              <input <?php highlight_field($required_fields, 'rship'); ?>  type="text" id="rship" name="rship" value="<?php echo $nextKinRship; ?>"/>
		              <span class="info">Relationship<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Relationship with Next of Kin's</h4>
					<p>How are you related to the next of kin?</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokpn" for="nokpn">
		              <input <?php highlight_field($required_fields, 'nokpn'); ?>  type="text" id="nokpn" name="nokpn" value="<?php echo $nextKinPhone; ?>" />
		              <span class="info">Phone Number<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Phone Number of Next of Kin</h4>
					<p>Enter the phone number of your next of kin?</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

				<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="submit" id="submitform" value="Update" name="submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>
	<?php echo form_close(); ?>

