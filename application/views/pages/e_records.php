<?php
$status2 = ""; $status1 = "visited";
?>

<?php

	//Array of all required fields in this page
$required_fields = array('minname', 'minaddstr', 'mincity', 'govttier', 'file_no', 'jtitle', 'doemp', 'doprom', 'salstruct', 'glevel',
		'step', 'netsal', 'lgaofwork', 'stype');

?>





<?php $this->load->view("partials/header"); ?>
<div id="content">
	<!-- -------------------------FULL NAME AND MINISTRY OF PERSON REGISTERING-------------------------------------------------- -->
		        <h4><strong style="font-size: 1.2em;"><?php echo  $this->session->userdata('full_name'); ?></strong>
		        <?php echo $this->session->userdata('staff_ministry'); ?></h4>
	<!-- ----------------------------------------------------------------------------------------------------------------------- -->
		    <div class="box_wrapper">
		        <div class="left">
		            <div class="disabled" id="page-1"> <a href="#">Personal Information</a></div>
		            <div class="active" id="page-2"><a href="#">Employment record</a></div>
		            <div class="disabled" id="page-3"><a href="#">Educational Record</a></div>
		            <div class="disabled" id="page-5"><a href="#">Bank Details</a></div>
		            <div class="disabled" id="page-4"><a href="#">Training</a></div>
		        </div>



<div id="box_content" class="right">
	<?php echo form_open_multipart('register/employment_record'); ?>
		<h1 class="div-title">Employment Records</h1>

		<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->


				<div class="input_row ">
					<div class="input">
		                    <label id="lbl_minname" for="minname">Ministry/Department/Agency/Board Name
		                    	<input <?php highlight_field($required_fields, 'minname'); ?> type="text" id="minname" name="minname" readonly value="<?php echo $this->session->userdata('staff_ministry'); ?>" style="background:#F5F5F5;"/><span class="info">
		                    Ministry<span style="color:red;">*</span>


		                            </span>


		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Ministry/Department/Agency Name</h4>

		                        <p>This field has been auto generated for you. It is the name of the Ministry/Department/Agency you work with </p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row section">
					<div class="input">
		                        <label id="lbl_minaddstr" for="minaddstr">Work Address
		                            <input <?php highlight_field($required_fields, 'minaddstr'); ?> type="text" id="minaddstr" name="minaddstr" value="<?php echo set_value('minaddstr'); ?>"/><span class="info">
		                            Street<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Street Address of Ministry</h4>

		                        <p>Enter the street address of your ministry</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_mincity" for="mincity">
		                            <input <?php highlight_field($required_fields, 'mincity'); ?> type="text" id="mincity" name="mincity" value="<?php echo set_value('mincity'); ?>" /><span class="info">
		                            city<span style="color:red;">*</span>
		                            </span>
		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;City of ministry</h4>

		                        <p>This is the city where your ministry IS located</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_lgaofwork" for="lgaofwork">
		                            <select name="lgaofwork" <?php highlight_field($required_fields, 'lgaofwork'); ?>  id="lgaofwork" >
										<option value="">---</option>
										<?php foreach($delta_state_lgas as $ds_lga) : ?>
											<option value="<?php echo $ds_lga->name; ?>" <?php echo set_select('lgaofwork', $ds_lga->name); ?> ><?php echo $ds_lga->name; ?></option>
										<?php endforeach; ?>
									</select>
		                            <span class="info">
		                            LGA of Work<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>

							<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Work LGA</h4>

		                        <p>This is the LGA where you work is located</p>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row section">
		          <div class="input">
		            <label id="lbl_govttier" for="govttier">Job Details
		            	<select <?php highlight_field($required_fields, 'govttier'); ?>  id="govttier" name="govttier">
							<option value=""></option>
							<option value="state government" <?php echo set_select('govttier', 'state government'); ?> >Executive</option>
							<option value="federal government" <?php echo set_select('govttier', 'federal government'); ?> >Judiciary</option>
							<option value="local governemnt" <?php echo set_select('govttier', 'local governemnt'); ?> >Legislative</option>
						</select>
						<span class="info">Arm of Government<span style="color:red;">*</span></span>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>


		        <div class="input_row ">
					<div class="input">
		                        <label id="lbl_doc_id" for="file_no">
		                            <input <?php highlight_field($required_fields, 'file_no'); ?> type="text" id="file_no" name="file_no" value="<?php echo $this->session->userdata('file_no'); ?>" readonly style ="background:#F5F5F5; color:#aaa;" />
		                            <span class="info">
		                            File Number<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Your File Number.</h4>

		                        <p>This field has been auto generated for you.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_jtitle" for="jtitle">
		                            <input <?php highlight_field($required_fields, 'jtitle'); ?> type="text" id="jtitle" name="jtitle" value="<?php echo set_value('jtitle'); ?>"/><span class="info">
		                            Job title.<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Job Title</h4>

		                        <p>This is the title of your job description.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_doemp" for="doemp">
		                            <input <?php highlight_field($required_fields, 'doemp'); ?> type="text" id="doemp" name="doemp" class="date_con emp_date" value="<?php echo set_value('doemp'); ?>"/><span class="info">
		                            Date of First Appointment<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Date of First Appointment</h4>

		                        <p>This is the date you assumed your Appointment.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_doprom" for="doprom">
		                            <input type="text" id="doemp" name="doprom" class="prom_date" value="<?php echo set_value('doemp'); ?>" readonly /><span class="info">
		                            Date of last Promotion
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Date of last promotion</h4>

		                        <p>This is the date you were last promoted.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
		          <div class="input">
		            <label id="lbl_salstruct" for="salstruct">
		            	<select <?php highlight_field($required_fields, 'salstruct'); ?> id="salstruct" name="salstruct">
										<option value=""></option>
										<option value="CONHESS" <?php echo set_select('salstruct', 'CONHESS'); ?> >CONHESS</option>
										<option value="CONHESS1" <?php echo set_select('salstruct', 'CONHESS1'); ?> >CONHESS1</option>
										<option value="CONHESS2" <?php echo set_select('salstruct', 'CONHESS2'); ?> >CONHESS2</option>
										<option value="CONHESS3" <?php echo set_select('salstruct', 'CONHESS3'); ?> >CONHESS3</option>
										<option value="CONHESS4" <?php echo set_select('salstruct', 'CONHESS4'); ?> >CONHESS4</option>
							</select>
						<span class="info">Salary Structure<span style="color:red;">*</span></span>
		           </label>
		         </div>
				 				<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Salary Structure</h4>

		                        <p>Select your Salary Structure</p>
		         </div>
		         <div class="fclear"></div>
		        </div>

				<div class="input_row">
		          <div class="input">
		            <label id="lbl_glevel" for="glevel">
		            	<select <?php highlight_field($required_fields, 'glevel'); ?> id="glevel" name="glevel">
										<option value=""></option>
										<option value="01" <?php echo set_select('glevel', '0'); ?> >01</option>
										<option value="02" <?php echo set_select('glevel', '02'); ?> >02</option>
										<option value="03" <?php echo set_select('glevel', '03'); ?> >03</option>
										<option value="04" <?php echo set_select('glevel', '04'); ?> >04</option>
										<option value="05" <?php echo set_select('glevel', '05'); ?> >05</option>
										<option value="06" <?php echo set_select('glevel', '06'); ?> >06</option>
										<option value="07" <?php echo set_select('glevel', '07'); ?> >07</option>
										<option value="08" <?php echo set_select('glevel', '08'); ?> >08</option>
										<option value="09" <?php echo set_select('glevel', '09'); ?> >09</option>
										<option value="10" <?php echo set_select('glevel', '10'); ?> >10</option>
										<option value="11" <?php echo set_select('glevel', '11'); ?> >11</option>
										<option value="12" <?php echo set_select('glevel', '12'); ?> >12</option>
										<option value="13" <?php echo set_select('glevel', '13'); ?> >13</option>
										<option value="14" <?php echo set_select('glevel', '14'); ?> >14</option>
										<option value="15" <?php echo set_select('glevel', '15'); ?> >15</option>
										<option value="16" <?php echo set_select('glevel', '16'); ?> >16</option>
										<option value="17" <?php echo set_select('glevel', '17'); ?> >17</option>
							</select>
						<span class="info">Grade Level<span style="color:red;">*</span></span>
		           </label>
		         </div>
				 	<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Your Grade Level</h4>

		                        <p>Select your current grade level</p>
		         </div>
		         <div class="fclear"></div>
		        </div>

		        <div class="input_row">
		          <div class="input">
		            <label id="lbl_step" for="step">
		            	<select <?php highlight_field($required_fields, 'step'); ?> id="step" name="step">
										<option value=""></option>
										<option value="1" <?php echo set_select('step', '1'); ?> >1</option>
										<option value="2" <?php echo set_select('step', '2'); ?> >2</option>
										<option value="3" <?php echo set_select('step', '3'); ?> >3</option>
										<option value="4" <?php echo set_select('step', '4'); ?> >4</option>
										<option value="5" <?php echo set_select('step', '5'); ?> >5</option>
										<option value="6" <?php echo set_select('step', '6'); ?> >6</option>
										<option value="7" <?php echo set_select('step', '7'); ?> >7</option>
										<option value="8" <?php echo set_select('step', '8'); ?> >8</option>
										<option value="9" <?php echo set_select('step', '9'); ?> >9</option>
										<option value="10" <?php echo set_select('step', '10'); ?> >10</option>
										<option value="11" <?php echo set_select('step', '11'); ?> >11</option>
										<option value="12" <?php echo set_select('step', '12'); ?> >12</option>
										<option value="13" <?php echo set_select('step', '13'); ?> >13</option>
										<option value="14" <?php echo set_select('step', '14'); ?> >14</option>
										<option value="15" <?php echo set_select('step', '15'); ?> >15</option>
										</select>
						<span class="info">Step<span style="color:red;">*</span></span>
		           </label>
		         </div>
				<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Your Grade level Step</h4>

		                        <p>Select the present Step you are in your Current Grade Level</p>
		         </div>

		         <div class="fclear"></div>
		        </div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_netsal" for="netsal">
		                            <input <?php highlight_field($required_fields, 'netsal'); ?> type="text" id="netsal" name="netsal" value="<?php echo set_value('netsal'); ?>" /><span class="info">
		                            Net Monthly Salary<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
							<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Net Monthly Salary (e.g 63500)</h4>

		                        <p>This is your monthly take home salary. Please DO NOT add a comma or period eg(3,000). Just type the ammount without any separator eg(3000).</p>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_stype" for="stype">
		                            <select  <?php highlight_field($required_fields, 'stype'); ?> id="stype" name="stype">
										<option value=""></option>
										<option value="Temporary" <?php echo set_select('stype', 'Temporary'); ?> >Temporary</option>
										<option value="Permanent" <?php echo set_select('stype', 'Permanent'); ?> >Permanent</option>
										<option value="Probation" <?php echo set_select('stype', 'Probation'); ?> >Probation</option>
										<option value="Unknown" <?php echo set_select('stype', 'Unknown'); ?> >Unknown</option>
									</select>
		                            <span class="info">
		                            Staff Type<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="reset" id="reset" value="Back" class="btn btn-inverse" style="min-width: 160px;"/></span>
						<!--<span><input type="button"  name="save" class="btn btn-inverse" style="width: 120px;" value="Save for later"/></span>-->
						<span><input type="submit" id="submitform" value="Continue>>" name="submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>
	<?php echo form_close(); ?>
</div>

<?php $this->load->view("partials/footer"); ?>