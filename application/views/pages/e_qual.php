<?php
$status4 = ""; $status1 = "visited"; $status2 = "visited"; $status3 = "visited";
?>

<?php
	//Array of all required fields in this page
	$required_fields = array('noprisch', 'pyoentry', 'pyograd', 'pqualobt');
?>






<?php $this->load->view("partials/header.php"); ?>
<div id="content">
	<!-- -------------------------FULL NAME AND MINISTRY OF PERSON REGISTERING-------------------------------------------------- -->
		        <h4><strong style="font-size: 1.2em;"><?php echo  $this->session->userdata('full_name'); ?></strong>
		        <?php echo $this->session->userdata('staff_ministry'); ?></h4>
	<!-- ----------------------------------------------------------------------------------------------------------------------- -->

		    <div class="box_wrapper">
		        <div class="left">
		            <div class="disabled" id="page-1"> <a href="#">Personal Info</a></div>
		            <div class="disabled" id="page-2"><a href="#">Employment record</a></div>
		            <div class="active" id="page-3"><a href="#">Educational Record</a></div>
		            <div class="disabled" id="page-5"><a href="#">Bank Details</a></div>
		            <div class="disabled" id="page-4"><a href="#">Training</a></div>
		        </div>


<div id="box_content" class="right">
	<?php echo form_open_multipart('register/educational_qualification'); ?>
		<h1 class="div-title">Educational Record</h1>

		<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_noprisch" for="noprisch">Primary School
		                            <input <?php highlight_field($required_fields, 'noprisch'); ?> type="text" id="noprisch" name="noprisch" value="<?php echo set_value('noprisch'); ?>" /><span class="info">
		                            Name of Primary School<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Primary School</h4>

		                        <p>This is the name of the primary school you attended.</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pyoentry" for="pyoentry">
		                            <input <?php highlight_field($required_fields, 'pyoentry'); ?> type="text" id="pyoentry" name="pyoentry" maxlength="8" class="pri_yr_date start_date" value="<?php echo set_value('pyoentry'); ?>" /><span class="info">
		                            Year of Entry<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Enter the year you started primary school</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pyograd" for="pyograd">
		                            <input <?php highlight_field($required_fields, 'pyograd'); ?> type="text" id="pyograd" name="pyograd" maxlength="8" class="end_date" value="<?php echo set_value('pyograd'); ?>" readonly /><span class="info">
		                            Year of Graduation<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Enter the year you left primary school</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pqualobt" for="pqualobt">
								<select <?php highlight_field($required_fields, 'pqualobt'); ?>  id="pqualobt" name="pqualobt">
									<option value="First School Leaving" <?php echo set_select('pqualobt', 'First School Leaving'); ?> >First School Leaving Certificate</option>
									<option value="Others" <?php echo set_select('govttier', 'Others'); ?> >Others</option>
								</select><span class="info">
		                            Qualification Obtained<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Qualification Obtained</h4>

		                        <p>Certificate obtained</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row section">
					<table class="sec_sch">
				        <thead>
				            <tr>
				            	<th>Secondary School</th>
				                <th>Year of Entry</th>
				                <th>Year of Graduation</th>
				                <th>Qualification Obtained</th>
				                <th>Delete</th>
				            </tr>
				        </thead>

				        <tbody>
				        </tbody>
			   		</table>
					<div class="input">
		                        <label id="lbl_nosecsch" for="nosecsch">Secondary School
		                            <input type="text" id="nosecsch" name="nosecsch" /><span class="info">
		                            Name of Seondary School
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Secondary School</h4>

		                        <p>Name of Secondary School you attended</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_syoentry" for="syoentry">
		                            <input type="text" id="syoentry" name="syoentry" maxlength="4" class="pri_yr_date sec_start_yr"/><span class="info">
		                            Year of Entry
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Enter the year you started secondary school</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_syograd" for="syograd">
		                            <input type="text" id="syograd" name="syograd" maxlength="4" class="sec_end_yr" readonly/><span class="info">
		                            Year of Graduation
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Enter the year you left secondary school</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row">
		          <div class="input">
		            <label id="lbl_squalobt" for="squalobt">
		            	<select id="squalobt" name="squalobt">
										<option value="" ></option>
										<option value="wasc" <?php echo set_select('squalobt', 'wasc'); ?>>WASC</option>
										<option value="gce" <?php echo set_select('squalobt', 'gce'); ?>>GCE</option>
										<option value="neco" <?php echo set_select('squalobt', 'neco'); ?>>NECO</option>
										<option value="nabteb" <?php echo set_select('squalobt', 'naptec'); ?>>NABTEB</option>
							</select><span class="info">Qualification Obtained</span>
		           </label>
		         </div>

		         <div class="fclear"></div>
		         <button class="add_sec_sch add_button" type="button">Add This Record</button>
                         <p class="ensure">Ensure you click this button to add a record</p>
		        </div>


				<div class="input_row section">
					<table class="ter_sch">
				        <thead>
				            <tr>
				            	<th>Tertiary School</th>
				                <th>Year of Entry</th>
				                <th>Year of Graduation</th>
				                <th>Qualification Obtained</th>
				                <th>Matric No.</th>
				                <th>Qualification Obtained</th>
				                <th>Delete</th>
				            </tr>
				        </thead>

				        <tbody>
				        </tbody>
			   		</table>
					<div class="input">
		                        <label id="lbl_notersch" for="notersch">Tertiary Education
		                            <input type="text" id="notersch" name="notersch" class="ter_inst onlytext"/> <span class="info">
		                            Name of Institution
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Institution</h4>

		                        <p>This is the name of the higher institution you atteneded</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tyoentry" for="tyoentry">
		                            <input type="text" id="tyoentry" name="tyoentry" maxlength="4" class="ter_yr_date ter_start_yr ter_inst" /><span class="info">
		                            Year of Entry
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Enter the year you statrted higher institution</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tyograd" for="tyograd">
		                            <input type="text" id="tyograd" name="tyograd" maxlength="4" class="ter_end_yr ter_inst" readonly/><span class="info">
		                            Year of Graduation
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Enter the year you left higher institution</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tqualobt" for="tqualobt">
		                        	<select id="tqualobt" name="tqualobt" class="ter_inst">
										<option value="" selected="selected"></option>
										<option value="PHD" <?php echo set_select('tqualobt', 'PHD'); ?> >PHD</option>
										<option value="Masters" <?php echo set_select('tqualobt', 'Masters'); ?> >Masters</option>
										<option value="pgd" <?php echo set_select('tqualobt', 'pgd'); ?> >PGD</option>
										<option value="Bachelors" <?php echo set_select('tqualobt', 'Bachelors'); ?>>Bachelors</option>
										<option value="hnd" <?php echo set_select('tqualobt', 'hnd'); ?>>HND</option>
										<option value="ond" <?php echo set_select('tqualobt', 'ond'); ?>>OND/NCE</option>
										<option value="tcii" <?php echo set_select('tqualobt', 'tcii'); ?>>TCII</option>
							</select>
		                            <span class="info">Qualification Obtained</span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Qualification Obtained</h4>

		                        <p>Enter the Certificate you obtained</p>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_matno" for="matno">
		                            <input type="text" id="matno" name="matno" class="ter_inst" /><span class="info">
		                            Matriculation No.
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Matriculation No.</h4>

		                        <p>Enter your Matriculation number</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_spectn" for="spectn">
		                            <input type="text" id="spectn" name="spectn" class="ter_inst onlytext"/><span class="info">
		                            Specialization
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Specialization</h4>

		                        <p>Enter course you studied</p>
		                    </div>
		                    <div class="fclear"></div>
		                    <button class="add_ter_sch add_button" type="button">+</button>
                                    <p class="ensure">Ensure to click this button to add a record</p>
				</div>


				<div class="input_row  section">
					<div class="input">
		                        <label id="lbl_nysc" for="nysc">NYSC
		                            <input type="text" id="nysc" name="nysc"/><span class="info">
		                            NYSC Cert. No.
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;NYSC</h4>

		                        <p>Enter NYSC Certificate Number</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

		<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="button" id="goback" name="gobackk" value="Back" class="btn btn-inverse" style="min-width: 160px;"/></span>
						<!--<span><input type="button"  name="save" class="btn btn-inverse" style="width: 120px;" value="Save for later"/></span>-->
						<span><input type="submit" id="submitform" value="Continue>>" name="submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
		</div>
	<?php echo form_close(); ?>
</div>


<?php $this->load->view("partials/footer.php"); ?>