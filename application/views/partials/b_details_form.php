<form type="post" action="javascript:void(0)">
<div class="input_row ">
					<div class="input">
		                        <label id="lbl_nobank" for="nobank">Bank
		                            <input type="text" id="nobank" name="nobank" value="<?php echo $nameBank; ?>" /><span class="info">
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
		                            <input type="text" id="bsbranch" name="bsbranch"value="<?php echo $bankBranch; ?>"  /><span class="info">
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
		                            <input type="text" id="bcbranch" name="bcbranch" value="<?php echo $bankCity; ?>"  /><span class="info">Branch (City)<span style="color:red;">*</span>
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
		                            <select id="blbranch" name="blbranch" >
										<option value="">LGA of Bank</option>
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
		                            <select id="bacctype" name="bacctype">
												<option value=""></option>
												<option value="Savings">Savings</option>
												<option value="Current">Current</option>
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
		                            <select id="accnotype" name="accnotype">
										<option value=""></option>
										<option value="Regular">Regular</option>
										<option value="Nuban">NUBAN</option>
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
		                            <input type="text" id="accno" name="acctno" value="<?php echo $accNo; ?>" /><span class="info">Account No.<span style="color:red;">*</span>
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
		                            <input type="text" id="accname" name="accname" value="<?php echo  $this->session->userdata('full_name'); ?>" readonly /><span class="info">Account Name<span style="color:red;">*</span>
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
						<span><input type="submit" id="submitform" value="Save" name="b_details_submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>

</form>