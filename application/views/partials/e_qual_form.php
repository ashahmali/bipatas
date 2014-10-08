<form type="post" action="javascript:void(0)">
<div class="input_row ">
					<div class="input">
		                        <label id="lbl_noprisch" for="noprisch">Primary School
		                            <input type="text" id="noprisch" name="noprisch" value="<?php echo $primarySchlName; ?>" /><span class="info">
		                            Name of Primary School<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Primary School</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
		</div>

		<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pyoentry" for="pyoentry">
		                            <input type="text" id="pyoentry" name="pyoentry" maxlength="8" class="yr_date" value="<?php echo $yearEnterPrim; ?>" /><span class="info">
		                            Year of Entry<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pyograd" for="pyograd">
		                            <input type="text" id="pyograd" name="pyograd" maxlength="8" class="yr_date" value="<?php echo $yearPrimGrad; ?>" /><span class="info">
		                            Year of Graduation<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row ">
					<div class="input">
		                        <label id="lbl_pqualobt" for="pqualobt">
		                            <input type="text" id="pqualobt" name="pqualobt" value="<?php echo $primQual; ?>" /><span class="info">
		                            Qualification Obtained<span style="color:red;">*</span>
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Qualification Obtained</h4>

		                        <p>Help info come here</p>
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

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_syoentry" for="syoentry">
		                            <input type="text" id="syoentry" name="syoentry" maxlength="4" class="yr_date"/><span class="info">
		                            Year of Entry
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_syograd" for="syograd">
		                            <input type="text" id="syograd" name="syograd" maxlength="4" class="yr_date" /><span class="info">
		                            Year of Graduation
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row">
		          <div class="input">
		            <label id="lbl_squalobt" for="squalobt">
		            	<select id="squalobt" name="squalobt">
										<option value="" ></option>
										<option value="wasc">WASC</option>
										<option value="gce">GCE</option>
										<option value="neco">NECO</option>
										<option value="naptec">NAPTEC</option>
							</select><span class="info">Qualification Obtained</span>
		           </label>
		         </div>

		         <div class="fclear"></div>
		         <button class="add_sec_sch" type="button">+</button>
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
		                            <input type="text" id="notersch" name="notersch" /> <span class="info">
		                            Name of Institution
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Name of Institution</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>


				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tyoentry" for="tyoentry">
		                            <input type="text" id="tyoentry" name="tyoentry" maxlength="4" class="yr_date" /><span class="info">
		                            Year of Entry
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Entry</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tyograd" for="tyograd">
		                            <input type="text" id="tyograd" name="tyograd" maxlength="4" class="yr_date" /><span class="info">
		                            Year of Graduation
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Year of Graduation</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_tqualobt" for="tqualobt">
		                        	<select id="tqualobt" name="tqualobt">
										<option value="" selected="selected"></option>
										<option value="PHD" >PHD</option>
										<option value="Masters">Masters</option>
										<option value="pgd">PGD</option>
										<option value="Bachelors">Bachelors</option>
										<option value="hnd">HND</option>
										<option value="ond">OND/NCE</option>
										<option value="tcii" >TCII</option>
							</select>
		                            <span class="info">Qualification Obtained</span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Qualification Obtained</h4>

		                        <p>Help info come here</p>
		                    </div>

		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_matno" for="matno">
		                            <input type="text" id="matno" name="matno" /><span class="info">
		                            Matriculation No.
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Matriculation No.</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

				<div class="input_row">
					<div class="input">
		                        <label id="lbl_spectn" for="spectn">
		                            <input type="text" id="spectn" name="spectn" /><span class="info">
		                            Specialization
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;Specialization</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
		                    <button class="add_ter_sch" type="button">+</button>
				</div>


				<div class="input_row  section">
					<div class="input">
		                        <label id="lbl_nysc" for="nysc">NYSC
		                            <input type="text" id="nysc" name="nysc" /><span class="info">
		                            NYSC Cert. No.
		                            </span>

		                        </label>
		                    </div>
		                    <div class="help">
		                         <h4 style=""><b>Help:</b>&nbsp;NYSC</h4>

		                        <p>Help info come here</p>
		                    </div>
		                    <div class="fclear"></div>
				</div>

		<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="submit" id="submitform" value="Save" name="e_qual_submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
		</div>

</form>