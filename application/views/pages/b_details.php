<?php
$status3 = ""; $status1 = "visited"; $status2 = "visited";
?>

<?php
	//Array of all required fields in this page
	$required_fields = array('nobank', 'bsbranch', 'bcbranch', 'blbranch', 'bacctype', 'accnotype', 'acctno', 'accname');
?>


<?php $this->load->view("partials/header"); ?>
<div id="content">
	<!-- -------------------------FULL NAME AND MINISTRY OF PERSON REGISTERING-------------------------------------------------- -->
		        <h4><strong style="font-size: 1.2em;"><?php echo  $this->session->userdata('full_name'); ?></strong>
		        <?php echo $this->session->userdata('staff_ministry'); ?></h4>
	<!-- ----------------------------------------------------------------------------------------------------------------------- -->
		    <div class="box_wrapper">
		        <div class="left">
		            <div class="disabled" id="page-1"> <a href="#">Personal Info</a></div>
		            <div class="disabled" id="page-2"><a href="#">Employment record</a></div>
		            <div class="disabled" id="page-3"><a href="#">Educational Qualification</a></div>
		            <div class="active" id="page-5"><a href="#">Bank Details</a></div>
		            <div class="disabled" id="page-4"><a href="#">Training</a></div>
		        </div>



<div id="box_content" class="right">
	<?php echo form_open_multipart('register/bank_details'); ?>

		<h1 class="div-title">Salary Bank Account Details</h1>

		<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_nobank" for="nobank">Bank
		                           <select id="nobank" name="nobank" <?php highlight_field($required_fields, 'nobank'); ?>>
										<option value=""></option>
										<?php foreach($all_bank_names as $bank) : ?>
											<option value="<?php echo $bank->name; ?>"  <?php echo set_select('nobank', $bank->name); ?> ><?php echo $bank->name; ?></option>
										<?php endforeach; ?>

							</select>
								   <span class="info">
		                            Name of Bank<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Bank</h4>

		                        <p>Enter the name of your Bank</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_bsbranch" for="bsbranch">
		                            <input <?php highlight_field($required_fields, 'bsbranch'); ?> type="text" id="bsbranch" name="bsbranch"value="<?php echo set_value('bsbranch'); ?>"  /><span class="info">
		                            Branch (Street)<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Branch (Street)</h4>

		                        <p>Enter the street address where your bank is located</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>


		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_bcbranch" for="bcbranch">
		                            <input <?php highlight_field($required_fields, 'bcbranch'); ?> type="text" id="bcbranch" name="bcbranch" value="<?php echo set_value('bcbranch'); ?>"  /><span class="info">Branch (City)<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Branch (City)</h4>

		                        <p>Enter the city where your bank is located</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_blbranch" for="blbranch">
		                            <select <?php highlight_field($required_fields, 'blbranch'); ?>  id="blbranch" name="blbranch" >
										<option value="">LGA of Bank</option>
										<?php foreach($delta_state_lgas as $ds_lga) : ?>
											<option value="<?php echo $ds_lga->name; ?>" <?php echo set_select('blbranch', $ds_lga->name); ?> ><?php echo $ds_lga->name; ?></option>
										<?php endforeach; ?>
									</select>
		                            <span class="info">Branch (LGA)<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Branch (LGA)</h4>

		                        <p>Select the LGA where your bank is.</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>


		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_bacctype" for="bacctype">
		                            <select <?php highlight_field($required_fields, 'bacctype'); ?> id="bacctype" name="bacctype">
												<option value=""></option>
												<option value="Savings" <?php echo set_select('bacctype', 'Savings'); ?> >Savings</option>
												<option value="Current" <?php echo set_select('bacctype', 'Current'); ?> >Current</option>
									</select><span class="info">Bank Account Type<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Bank Account Type</h4>

		                        <p>Select your bank type e.g Savings, Current.</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>


		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_accnotype" for="accnotype">
		                            <select <?php highlight_field($required_fields, 'accnotype'); ?> id="accnotype" name="accnotype">
										<option value=""></option>
										<!--<option value="Regular" <?php echo set_select('accnotype', 'Regular'); ?> >Regular</option>-->
										<option value="Nuban" <?php echo set_select('accnotype', 'Nuban'); ?> >NUBAN</option>
									</select><span class="info">Account No. Type<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Account No. Type</h4>

		                        <p>Select which is applicable from the list</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_acctno" for="acctno">
		                            <input <?php highlight_field($required_fields, 'acctno'); ?> type="text" id="accno" name="acctno" value="<?php echo set_value('acctno'); ?>" /><span class="info">Account No.<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Account No.</h4>

		                        <p>Enter your bank Account Number.</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_accname" for="accname">
		                            <input <?php highlight_field($required_fields, 'accname'); ?> type="text" id="accname" name="accname" value="<?php echo  $this->session->userdata('full_name'); ?>" readonly /><span class="info">Account Name<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Account Name</h4>

		                        <p>This is same as the name provided in your personal info section of this form.</p>
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