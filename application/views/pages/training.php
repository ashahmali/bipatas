<?php
$status5 = ""; $status1 = "visited"; $status2 = "visited"; $status3 = "visited"; $status4 = "visited"; $status5 = "visited";
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
		            <div class="disabled" id="page-5"><a href="#">Bank Details</a></div>
		            <div class="active" id="page-4"><a href="#">Training</a></div>
		        </div>



<div id="box_content" class="right">
	<?php echo form_open_multipart('register/training_record'); ?>
		<h1 class="div-title">Training</h1>

		<!-- ---------------------------------------FORM ERROR IS DISPLAYED HERE-------------------------------------- -->
							<?php echo validation_errors(); ?>
		<!-- -------------------------------------------------------------------------------------------------------- -->


		<div class="input_row section">
			<table class="trainings">
				        <thead>
				            <tr>
				            	<th>Course</th>
				                <th>Certificate</th>
				                <th>From</th>
				                <th>To</th>
				                <th>Delete</th>
				            </tr>
				        </thead>

				        <tbody>
				        </tbody>
			   		</table>
					<div class="input">
		                        <label id="lbl_tracourse" for="tracourse">
		                            <input type="text" id="tracourse" name="tracourse" value="<?php echo set_value('tracourse'); ?>" /><span class="info">
		                            Course
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Course</h4>

		                        <p>Enter the course name you were trained</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tracert" for="tracert">
		                            <input type="text" id="tracert" name="tracert" value="<?php echo set_value('tracert'); ?>" /><span class="info">
		                            Certificate
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Certification</h4>

		                        <p>Enter the certification obtained</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_fyear" for="fyear">
		                            <input type="text" id="fyear" name="fyear" maxlength="4" class="yr_date" value="<?php echo set_value('fyear'); ?>" /><span class="info">
		                            From (Year)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;From (Year)</h4>

		                        <p>Select the year you started the training</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tyear" for="tyear">
		                            <input type="text" id="tyear" name="tyear" maxlength="4" class="yr_date" value="<?php echo set_value('tyear'); ?>" /><span class="info">
		                            To (Year)
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;To (Year)</h4>

		                        <p>Select the year you completed the training</p>
		                    </div>
		                    <div class="fclear"></div>
		                    <button class="add_training add_button" type="button">+</button>
                                    <p class="ensure">Ensure you click this button to add a record</p>
				</div>


				<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="reset" id="reset" value="Back" class="btn btn-inverse" style="min-width: 160px;"/></span>
						<!--<span><input type="button"  name="save" class="btn btn-inverse" style="width: 120px;" value="Save for later"/></span>-->
						<span><input type="submit" id="submitform" value="Submit Form" name="submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>
	<?php echo form_close(); ?>
</div><!-- End of Training -->
<?php $this->load->view("partials/footer"); ?>