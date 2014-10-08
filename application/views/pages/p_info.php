<?php
$status1 = "";
 ?>

 <?php

	//Array of all required fields in this page
	$required_fields = array('p_title',
					'fname', 'sname', 'sex', 'height', 'phone', 'dob', 'mstatus', 'religion', 'street',
					'city', 'state', 'lga', 'bgroup', 'rhesus', 'noktitle', 'noksn', 'nokfname', 'nokon', 'nokad_street', 'nokad_city', 'rship', 'nokpn');


 ?>

<?php $this->load->view('partials/header'); ?>

<div id="content">
	 <!-- -------------------------FULL NAME AND MINISTRY OF THE PERSON REGISTERING-------------------------------------------------- -->
		        <h4><strong style="font-size: 1.2em;"><?php echo  $this->session->userdata('full_name'); ?></strong>
		        <?php echo $this->session->userdata('staff_ministry'); ?></h4>
	<!-- ----------------------------------------------------------------------------------------------------------------------- -->
		    <div class="box_wrapper">
		        <div class="left">
		            <div class="active" id="page-1"> <a href="#">Personal Information</a></div>
		            <div class="disabled" id="page-2"><a href="#">Employment record</a></div>
					 <div class="disabled" id="page-5"><a href="#">Bank Details</a></div>
		            <div class="disabled" id="page-3"><a href="#">Educational Record</a></div>

		            <div class="disabled" id="page-4"><a href="#">Training</a></div>
		        </div>

 <div id="box_content" class="right">
	<?php echo form_open_multipart('register/personal_information'); ?>
		<h1 class="div-title">Personal Information</h1>

					<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->

				<div class="input_row ">
					<div class="input">
		                        <label id="p_title" for="p_title">Title <span style="color:red;">*</span>
		                            <select <?php highlight_field($required_fields, 'p_title'); ?>  id="p_title" name="p_title">
										<option value=""> </option>
										<option value="Mr" <?php echo set_select('p_title', 'Mr');  ?>>Mr</option>
										<option value="Mrs" <?php echo set_select('p_title', 'Mrs'); ?>>Mrs</option>
										<option value="Miss" <?php echo set_select('p_title', 'Mrs'); ?>>Miss</option>
										<option value="Ms" <?php echo set_select('p_title', 'Mrs'); ?>>Ms</option>
										<option value="Dr" <?php echo set_select('p_title', 'Dr'); ?>>Dr</option>
										<option value="Prof" <?php echo set_select('p_title', 'Prof'); ?>>Prof</option>
									</select>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Title</h4>

		                        <p>This is the title you are addressed by, e.g Mr., Mrs. and Prof.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_surname" for="sname">Surname <span style="color:red;">*</span>
		                            <input <?php highlight_field($required_fields, 'sname'); ?> type="text" id="sname" name="sname" value="<?php echo $this->session->userdata('sname'); ?>" readonly style="background:#F5F5F5;"/> <span class="info">
		                            (e.g. Mudiaga-Emumejakpor or Samson)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Surname</h4>

		                        <p>This field has been auto generated for you. Your surname is your family name. If your surname is a compound name, e.g. Mudiaga-Emumejakpor enter it as show with a dash separating each part of the name</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
		                    <div class="input">
		                        <label id="lbl_firstname" for="fname">First Name <span style="color:red;">*</span>

		                            <input <?php highlight_field($required_fields, 'fname'); ?> type="text" id="fname" name="fname" value="<?php echo $this->session->userdata('fname'); ?>" readonly style="background:#F5F5F5;"/><span class="info">
		                            (e.g. Oghenetega, Martins and Rukewe)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;First Name</h4>

		                        <p>This field has been auto generated for you. Your first name is the name you were given and the name by which you are known and called.</p>
		                    </div>
		            <div class="fclear"></div>
		          </div>


				<div class="input_row ">
		                    <div class="input">
		                        <label id="lbl_middlename" for="mname">Other Name <!--<span style="color:red;">*</span>	-->
		                            <input   type="text" id="name" name="mname" value="<?php echo $this->session->userdata('mname'); ?>" style="background:#F5F5F5;"/>
		                            <span class="info">
							            <!--<input id="middlename_option" name="middlename_option" style="margin-top:0;" type="checkbox">
							            <span style="font-size:13px; font-style:normal; color:#333;margin-right:30px;">Not Applicable</span>-->
							(e.g. Akpomudje, Adams or Ahmed)
									</span>
		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Other Name</h4>

		                        <p>This field has been auto generated for you. Your other name is another name by which you are known or a middle name given at birth. It can be your religion name or your traditional name.</p>
		                    </div>
		                    <div class="fclear"></div>
		       </div>

				<div class="input_row section">
		          <div class="input">
		                        <label id="lbl_gender" for="sex">Sex <span style="color:red;">*</span>
									<fieldset <?php highlight_field($required_fields, 'sex'); ?>>
		                            <ul class="olw olw_gender">
		                                <li id="r-gender-M">
		                                    <input id="sex-m" name="sex" value="m" <?php echo set_radio('sex', 'm'); ?> type="radio"><span class="olw_lbl" id="l-gender-M">MALE </span>

		                                    <br>
		                                </li>
		                                <li id="r-gender-F">
		                                    <input id="sex-f" name="sex" value="f" <?php echo set_radio('sex', 'f'); ?> type="radio"><span class="olw_lbl" id="l-gender-F">FEMALE </span>

		                                    <br>
		                                </li>
		                            </ul>
									</fieldset>
		                        </label>
		          </div>
		                    <div class="fclear"></div>
		                </div>



		       <div class="input_row section">
		          <div class="input">
		             <label id="lbl_dob" for="dob">Date of Birth<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'dob'); ?>  type="text" id="dob" name="dob" class="date_pick" value="<?php echo set_value('dob'); ?>"/>
		                	<!--<span class="info">(date format is dd/mm/yyyy)</span>-->
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Date of Birth</h4>
					<p>This is the date you where born</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

			    <div class="input_row section">
		          <div class="input">
		             <label id="lbl_height" for="height">Height<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'height'); ?>  type="text" maxlength="4" id="height" name="height" value="<?php echo set_value('height'); ?>"/>
		                	<span class="info">(Height format is metres (numbers only))</span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Height</h4>
					<p>Enter your height measurement e.g 1.80 for 1.80m</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

			    <div class="input_row section">
		          <div class="input">
		             <label id="lbl_bgroup" for="bgroup">Blood Group
		              <select <?php highlight_field($required_fields, 'bgroup'); ?>  id="bgroup" name="bgroup" >
										<option value="">-</option>
										<option value="A" <?php echo set_select('bgroup', 'A'); ?> >A</option>
										<option value="B" <?php echo set_select('bgroup', 'B'); ?> >B</option>
										<option value="AB" <?php echo set_select('bgroup', 'AB'); ?> >AB</option>
										<option value="O" <?php echo set_select('bgroup', 'O'); ?> >O</option>
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
										<option value="+" <?php echo set_select('rhesus', '+'); ?> >+</option>
										<option value="-" <?php echo set_select('rhesus', '-'); ?> >-</option>
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




				<div class="input_row ">
		          <div class="input">
		            <label id="lbl_marital_status" for="mstatus">Marital Status <span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'mstatus'); ?>  id="mstatus" name="mstatus">
							<option value="">-</option>
							<option value="Single" <?php echo set_select('mstatus', 'Single'); ?> >Single</option>
							<option value="Married" <?php echo set_select('mstatus', 'Married'); ?> >Married</option>
							<option value="Divorced" <?php echo set_select('mstatus', 'Divorced'); ?> >Divorced</option>
							<option value="Separated" <?php echo set_select('mstatus', 'Separated'); ?> >Separated</option>
							<option value="Widowed" <?php echo set_select('mstatus', 'Widowed'); ?> >Widowed</option>
						</select>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>

				<div class="input_row section">
		          <div class="input">
		             <label id="lbl_maiden_name" for="maidname">Maiden Name
		                <input type="text" id="maidname" name="maidname" value="<?php echo set_value('maidname'); ?>" />
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
		                <input type="text" class="date_pick" id="don" name="don" value="<?php echo set_value('don'); ?>"/>
		                	<!---<span class="info">(date format is dd/mm/yyyy)</span>-->
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Date of Change of Name</h4>
					<p>Enter the date your name was changed</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

			   	<!-- *****************************STATEs***And***LGAs********************************************************************************** -->
			<div class="input_row ">
		          <div class="input">
		            <label id="lbl_state" for="state">State Of Origin<span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'state'); ?>  id="state" name="state" onChange='ajaxFunction()'>
							<option value="">Select Your State Of Origin</option>
								<?php foreach($all_states as $state) : ?>
								<option value="<?php echo $state->id; ?>" <?php echo set_select('state', $state->id); ?> > <?php echo $state->name; ?> </option>
								<?php endforeach; ?>
						</select>
		           </label>
				</div>
				<div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;State of Origin</h4>
					<p>Select your State of Origin</p>
		          </div>
		        <div class="fclear"></div>
		        </div>


		        <div class="input_row">
		          <div class="input">
		            <label id="lbl_lga" for="lga">LGA Of Origin<span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'lga'); ?>  id="lga" name="lga" >
							<!-- Dynamically generated LGAs goes here -->
						<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['state'] != '') : ?>
							<?php foreach($lga_of_choosen_state as $lga) : ?>
								<option value="<?php echo $lga->id; ?>" <?php echo set_select('lga', $lga->id); ?> > <?php echo $lga->name; ?> </option>
							<?php endforeach; ?>
						<?php endif; ?>
						</select>
					</label>
		         </div>
				 <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;LGA of Origin</h4>
					<p>Select your LGA of Origin</p>
		          </div>
		         <div class="fclear"></div>
		        </div>
<!-- ******************************End***Of***STATEs***And***LGAs***************************************************************************** -->

		      <div class="input_row">
		          <div class="input">
		            <label id="lbl_religion" for="religion">Religion <span style="color:red;">*</span>
		            	<select <?php highlight_field($required_fields, 'religion'); ?>  id="religion" name="religion">
							<option value="">-</option>
							<option value="Christian" <?php echo set_select('religion', 'Christian'); ?> >Christian</option>
							<option value="Muslim" <?php echo set_select('religion', 'Muslim'); ?> >Muslim</option>
							<option value="Pegan" <?php echo set_select('religion', 'Pegan'); ?> >Pagan</option>
							<option value="Hindu" <?php echo set_select('religion', 'Hindu'); ?> >Hindu</option>
							<option value="Others" <?php echo set_select('religion', 'Others'); ?> >Others</option>
						</select>
						<!--<input type="text" id="o_religion" name="o_religion" value=""/>-->
		           </label>
		         </div>
				 <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Your Religion</h4>
					<p>Select the religion you practice</p>
		          </div>
		         <div class="fclear"></div>
		        </div>


				<div class="input_row section">
		          <div class="input">
		             <label id="lbl_street" for="street">Address
		              <input <?php highlight_field($required_fields, 'street'); ?>  type="text" id="street" name="street" value="<?php echo set_value('street'); ?>"/>
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
		              <input <?php highlight_field($required_fields, 'city'); ?>  type="text" id="city" name="city" value="<?php echo set_value('city'); ?>"/>
		                	<span class="info">City <span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;City</h4>
					<p>Enter the name of your City e.g Asaba</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_phone" for="phone">Phone Number<span style="color:red;">*</span>
		               <input <?php highlight_field($required_fields, 'phone'); ?>  type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>"/>
		                	<span class="info">(Mobile number format is e.g 080XXXXXXXX)</span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Mobile</h4>
					<p>This should be the phone upon which you can be reached at any time</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

<!-- ****************************Nextofkin details start here******************************************************* -->

		       <div class="input_row ">
					<div class="input">
		                        <label id="lbl_noktitle" for="noktitle">Next of Kin <span style="color:red;">*</span>
		                            <select <?php highlight_field($required_fields, 'noktitle'); ?>  id="noktitle" name="noktitle">
										<option value=""> </option>
										<option value="Mr" <?php echo set_select('noktitle', 'Mr');  ?>>Mr</option>
										<option value="Mrs" <?php echo set_select('noktitle', 'Mrs'); ?>>Mrs</option>
										<option value="Miss" <?php echo set_select('noktitle', 'Mrs'); ?>>Miss</option>
										<option value="Ms" <?php echo set_select('noktitle', 'Mrs'); ?>>Ms</option>
										<option value="Dr" <?php echo set_select('noktitle', 'Dr'); ?>>Dr</option>
										<option value="Prof" <?php echo set_select('noktitle', 'Prof'); ?>>Prof</option>
									</select>
									<span class="info">Next of Kin Title<span style="color:red;">*</span></span>
		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Next of Kin Title</h4>

		                        <p>This is the title by which your Next of Kin is addressed, e.g Mr., Mrs. and Prof.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

			   <div class="input_row section">
		          <div class="input">
		            <!-- <label id="lbl_noksn" for="noksn">Next of Kin-->
		              <input <?php highlight_field($required_fields, 'noksn'); ?>  type="text" id="noksn" name="noksn" value="<?php echo set_value('noksn'); ?>"/>
		              <span class="info">Surname <span style="color:red;">*</span></span>
					<!--</label>-->
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Surnmame</h4>
					<p>Please the Surname of your next of kin here</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

			    <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokfname" for="nokfname">
		              <input <?php highlight_field($required_fields, 'nokfname'); ?>  type="text" id="nokfname" name="nokfname" value="<?php echo set_value('nokfname'); ?>"/>
		              <span class="info">Next of Kin First Name<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's First Name</h4>
					<p>Please enter the first name of your next of kin here</p>
		          </div>
		          <div class="fclear"></div>
		       </div>





		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokon" for="nokon">
		              <input <?php highlight_field($required_fields, 'nokon'); ?>  type="text" id="nokon" name="nokon" value="<?php echo set_value('nokon'); ?>"/>
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
		              <input <?php highlight_field($required_fields, 'nokad_street'); ?>  type="text" id="nokad_street" name="nokad_street" value="<?php echo set_value('nokad_street'); ?>"/>
					 <span class="info">Address (Street)<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Address (Street)</h4>
					<p>Please enter next of kin's permanent address</p>
		          </div>
		          <div class="fclear"></div>
		       </div>

		       <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokad_city" for="nokad_city">
		              <input <?php highlight_field($required_fields, 'nokad_city'); ?>  type="text" id="nokad_city" name="nokad_city" value="<?php echo set_value('nokad_city'); ?>"/>
		              <span class="info">Address (City)<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Next of Kin's Address(City)</h4>
					<p>Please enter next of kin's permanent City, town or village</p>
		          </div>
		          <div class="fclear"></div>
		       </div>


			   <div class="input_row">
		          <div class="input">
		             <label id="lbl_nokpn" for="nokpn">
		              <input <?php highlight_field($required_fields, 'nokpn'); ?>  type="text" id="nokpn" name="nokpn" value="<?php echo set_value('nokpn'); ?>" />
		              <span class="info">Phone Number<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Phone Number of Next of Kin</h4>
					<p>Enter the phone number of your next of kin</p>
		          </div>
		          <div class="fclear"></div>
		       </div>


				<div class="input_row">
		          <div class="input">
		             <label id="lbl_rship" for="rship">
					  <select <?php highlight_field($required_fields, 'rship'); ?>  id="rship" name="rship">
							<option value=""> </option>
							<option value="brother" <?php echo set_select('rship', 'brother'); ?> >Brother</option>
							<option value="sister" <?php echo set_select('rship', 'sister'); ?> >Sister</option>
							<option value="father" <?php echo set_select('rship', 'father'); ?> >Father</option>
							<option value="mother" <?php echo set_select('rship', 'mother'); ?> >Mother</option>
							<option value="son" <?php echo set_select('rship', 'son'); ?> >Son</option>
							<option value="daughter" <?php echo set_select('rship', 'daughter'); ?> >Daughter</option>
							<option value="uncle" <?php echo set_select('rship', 'uncle'); ?> >Uncle</option>
							<option value="aunty" <?php echo set_select('rship', 'aunty'); ?> >Aunty</option>
							<option value="husband" <?php echo set_select('rship', 'husband'); ?> >Husband</option>
							<option value="wife" <?php echo set_select('rship', 'wife'); ?> >Wife</option>
							<option value="friend" <?php echo set_select('rship', 'friend'); ?> >Friend</option>
							<option value="others" <?php echo set_select('rship', 'others'); ?> >Others</option>
						</select>
		              <span class="info">Relationship<span style="color:red;">*</span></span>
					</label>
		          </div>
		          <div class="help">
		            <h4 style=""><b>Help:</b>&nbsp;Relationship with Next of Kin's</h4>
					<p>How are you related to the next of kin</p>
		          </div>
		          <div class="fclear"></div>
		       </div>



				<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="reset" id="reset" value="Clear" class="btn btn-inverse" style="min-width: 160px;"/></span>
						<!--<span><input type="button"  name="save" class="btn btn-inverse" style="width: 120px;" value="Save for later"/></span>-->
						<span><input type="submit" id="submitform" value="Continue>>" name="submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>
	<?php echo form_close(); ?>

</div><!-- end of personal Information -->




<?php $this->load->view('partials/footer'); ?>
