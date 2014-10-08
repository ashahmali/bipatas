<form type="post" action="javascript:void(0)" id="training_edit_form">
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
		                    <button class="add_training" type="button">+</button>
				</div>


				<div style="margin:20px 5px 5px 30px;">
					<div>
						<span><input type="submit" id="training_submit" value="Save" name="training_submit" class="btn btn-inverse" style="min-width:160px; margin-left:15px;"/></span>
					</div>
				</div>

</form>