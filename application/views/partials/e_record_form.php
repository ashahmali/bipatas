<form type="post" action="javascript:void(0)">
<div class="input_row ">
	<div class="input">
		                    <label id="lbl_minname" for="minname">Ministry/Department/Agency/Board Name
		                    	<input type="text" id="minname" name="minname" readonly value="<?php echo $this->session->userdata('staff_ministry'); ?>"/><span class="info">
		                    Ministry<span style="color:red;">*</span>


		                            </span>


		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Ministry/Department/Agency Name</h4>

		                        <p>This field has been auto generated for you.</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row section">
					<div class="input">
		                        <label id="lbl_minaddstr" for="minaddstr">Work Address
		                            <input type="text" id="minaddstr" name="minaddstr" value="<?php echo $ministryAddstr; ?>"/><span class="info">
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
		                            <input type="text" id="mincity" name="mincity" value="<?php echo $ministryCity; ?>" /><span class="info">
		                            city<span style="color:red;">*</span>
		                            </span>
		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;City of ministry</h4>

		                        <p>This is the city where your ministry located</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_lgaofwork" for="lgaofwork">
		                            <select name="lgaofwork" id="lgaofwork" >
										<option value="">LGA of Origin</option>
										<option value="aniocha north">Aniocha North</option>
										<option value="aniocha south">Aniocha South</option>
										<option value="ika north east">Ika North East</option>
										<option value="ika south">Ika South</option>
										<option value="ndokwa east">Ndokwa East</option>
										<option value="ndokwa west">Ndokwa West</option>
										<option value="oshimili north">Oshimili North</option>
										<option value="oshimili south">Oshimili South</option>
										<option value="ukwani">Ukwuani</option>
										<option value="okpe">Okpe</option>
										<option value="ethiope east">Ethiope East</option>
										<option value="ethiope west">Ethiope West</option>
										<option value="sapele">Sapele</option>
										<option value="ughelli north">Ughelli North</option>
										<option value="ughelli south">Ughelli South</option>
										<option value="uvwie" >Uvwie</option>
										<option value="udu" >Udu</option>
										<option value="bomandi">Bomadi</option>
										<option value="burutu" >Burutu</option>
										<option value="isoko north" >Isoko North</option>
										<option value="isoko south" >Isoko South</option>
										<option value="warri north">Warri North</option>
										<option value="warri south">Warri South</option>
										<option value="warri southwest">Warri Southwest</option>
										<option value="patani">Patani</option>
									</select>
		                            <span class="info">
		                            LGA of Work<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row section">
		          <div class="input">
		            <label id="lbl_govttier" for="govttier">Job Details
		            	<select id="govttier" name="govttier">
							<option value=""></option>
							<option value="state government">Executive</option>
							<option value="local governemnt">Legislative</option>
							<option value="federal government">Judiciary</option>
						</select>
						<span class="info">Arm of Government<span style="color:red;">*</span></span>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>


		        <div class="input_row ">
					<div class="input">
		                        <label id="lbl_doc_id" for="file_no">
		                            <input type="text" id="file_no" name="file_no" value="<?php echo $this->session->userdata('file_no'); ?>" readonly /><span class="info">
		                            File Number.<span style="color:red;">*</span>
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
		                            <input type="text" id="jtitle" name="jtitle" value="<?php echo $jobTitle; ?>"/><span class="info">
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
		                            <input type="text" id="doemp" name="doemp" class="date_pick emp_date" value="<?php echo $dateofEmp; ?>"/><span class="info">
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
		                            <input type="text" id="doemp" name="doprom" class="prom_date" value="<?php echo $dateofProm; ?>" readonly /><span class="info">
		                            Date of last Promotion<span style="color:red;">*</span>
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
		            	<select id="salstruct" name="salstruct">
										<option value=""></option>
										<option value="CONHESS" >CONHESS</option>
										<option value="CONHESS1" >CONHESS1</option>
										<option value="CONHESS2" >CONHESS2</option>
										<option value="CONHESS3" >CONHESS3</option>
										<option value="CONHESS4" >CONHESS4</option>
							</select>
						<span class="info">Salary Structure<span style="color:red;">*</span></span>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>

				<div class="input_row">
		          <div class="input">
		            <label id="lbl_glevel" for="glevel">
		            	<select id="glevel" name="glevel">
										<option value=""></option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
							</select>
						<span class="info">Grade Level<span style="color:red;">*</span></span>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>

		        <div class="input_row">
		          <div class="input">
		            <label id="lbl_step" for="step">
		            	<select id="step" name="step">
										<option value=""></option>
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
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										</select>
						<span class="info">Step<span style="color:red;">*</span></span>
		           </label>
		         </div>
		         <div class="fclear"></div>
		        </div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_netsal" for="netsal">
		                            <input type="text" id="netsal" name="netsal" value="<?php echo $netSalary; ?>" /><span class="info">
		                            Net Monthly Salary<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
							<div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Net Monthly Salary</h4>

		                        <p>This is your monthly take home salary</p>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_stype" for="stype">
		                            <select id="stype" name="stype">
										<option value=""></option>
										<option value="Temporary">Temporary</option>
										<option value="Permanent">Permanent</option>
										<option value="Probation">Probation</option>
										<option value="Unknown">Unknown</option>
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
						<span><input type="submit" id="submitform" value="Save" name="e_records_submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>
	</form>
