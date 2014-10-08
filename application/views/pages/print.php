<?php $this->load->view('partials/header'); ?>





<?php  "welcome ".$full_name;?>
<br>

<?php

	//personal information details start here!
/*
	 $title.'';

	 $firstName.'';

	 $middleName.'';

	 $surname.'';

	 $maidenName.'';

	 $dateChangeName.'';

	 $sex.'';

	 $height.'';

	 $phone.'';

	 $dob.'';

	 $mstatus.'';

	 $religion.'';

	 $street.'';

	 $city.'';
	 
	  $state.'';

	 $lga.'';

	 $bgroup.'';

	 $rhesus.' ';

	 $nextKinname.'';

	 $nextKinOname.'';

	 $nextKinAddr.'';

	 $nextKinRship.'';

	 $nextKinPhone.'';



	//employment record start here!

	 $ministryId.'';

	 $ministryAddstr.'<br /?';

	 $ministryCity.'';

	 $govttier.'';

	 $jobTitle.'';

	 $dateofEmp.'';

	 $dateofProm.'';

	 $gradeLev.'';

	 $step.'';

	 $netSalary.'';

	 $lgaofWork.'';

	 $stafType.'';



	//Bank detaisl start here!

	 $nameBank.'';

	 $bankBranch.'';

	 $bankCity.'';

	 $banklgabranch.'';

	 $baccType.'';

	 $accType.'';

	 $accNo.'';

	 $accname.'';



	//Educational Qualification starts here!

	 $primarySchlName.'';

	 $yearEnterPrim.'';

	 $yearPrimGrad.'';

	 $primQual.'';

	 $scdrySchlName.'';

	 $TatiarySchlName.'';

	 $nyscNum.'';



	//Training record starts here

	 $trainingCourse.'';

*/

?>

<div id="content" class="printing">
		 <div class="box_wrapper">
			<div class="left" style="display:none;">
		            <div class="active" id="page-1"><a href="#personal">Personal Info</a></div>
		            <div class="active" id="page-2"><a href="#employment">Employment record</a></div>
		            <div class="active" id="page-3"><a href="#education">Educational Qualification</a></div>
		            <div class="active" id="page-5"><a href="#bank">Bank Details</a></div>
		            <div class="active" id="page-4"><a href="#training">Training</a></div>
		        </div>
			<div id="box_content" class="right" style="width: 97%; background:none;">
			<div class="input_row section" id="personal"> <!--The Personal infomation section of things begins here -->
	    		<h1 class="div-title">Personal Information</h1>
				<div class="p_info sub_section">
					<div class="block">
							<div class="label"><label for="name">Name</label></div>
							<div class="four" on>
								<span style="width: 8%;"><p><?php echo $title; ?></p>Title</span>
								<span><p><?php echo $firstName; ?></p>First Name</span>
								<span><p><?php echo $middleName; ?></p>Middle Name</span>
								<span><p><?php echo $surname; ?></p>Surname</span>
							</div>
						</div>

						<div class="block">
							<div class="three">
								<span><p><?php echo $maidenName; ?></p>Maiden Name</span>
								<span><p><?php echo $dateChangeName; ?></p>Date of Change of Name</span>
								<span><p><?php echo $sex; ?></p>Sex</span>
							</div>
						</div>

						<div class="block">
							<div>
								<span><p><?php echo $height; ?>m</p>Height</span>
								<span  ><p><?php echo $phone; ?></p>Phone Number</span>
							</div>
						</div>

						<div class="block">
							<div>
								<span><p><?php echo $dob; ?></p>Date of Birth</span>
								<span  ><p><?php echo $mstatus; ?></p> Marital Status</span>
							</div>
						</div>

						<div class="block">
							<div>
								<span><p><?php echo $religion; ?></p> Religion</span>
							</div>
						</div>

						<div class="block address">
							<div class="label"><label for="address">Address</label></div>
							<div><span><p><?php echo $street; ?></p> Street</span></div>
							<div>
								<span  ><p><?php echo $city; ?></p> City</span>
								<span  ><p><?php echo $state; ?></p> State</span>
								<span  ><p><?php echo $lga; ?></p> LGA</span>
							</div>
						</div>

						<div class="block">
							<div class="label"><label for="bgroup">Blood Group</label></div>
							<div>
								<span  ><p><?php echo $bgroup; ?></p> Group</span>
								<span  ><p><?php echo $rhesus; ?></p> Rhesus</span>
							</div>
						</div>

						<div class="block nok">
							<h3>Next of Kin</h3>
							<div class="label"><label for="name">Name</label></div>
							<div>
								<span  ><p><?php echo $nextKinname; ?></p> Surname</span>
								<span  ><p><?php echo $nextKinOname; ?></p> Other Names</span>
							</div>
						</div>

						<div class="block">
							<div class="label"><label for="nokad">Address</label></div>
							<div>
								<span  ><p><?php echo $nextKinAddr; ?></p> Next of Kin's Address</span>
							</div>
						</div>

						<div class="block">
							<div>
								<span  ><p><?php echo $nextKinRship; ?></p> Relationship</span>
								<span  ><p><?php echo $nextKinPhone; ?></p> Phone Number</span>
							</div>
						</div>
				</div> <!-- end of p_info -->

			</div> <!--This is the end of the personal information section of things-->

			<div class="input_row section" id="employment"> <!--The Employment records section of things begins here -->
				<h1 class="div-title">Employment Records </h1>
				<div class="e_record_edit sub_section">
					<div class="block">
						<div class="label"><label for="ministry">Ministry</label></div>
						<div>
							<span  ><p><?php echo $ministryId; ?></p> Ministry/Dept/Agency ID</span>

						</div>
					</div>

					<div class="block">
						<div class="label"><label for="address">Address of Ministry</label></div>
						<div>
							<span  ><p><?php echo $ministryAddstr; ?></p> Street</span>
							<span  ><p><?php echo $ministryCity; ?></p> city</span>
						</div>
					</div>

					<div class="block">
						<div class="label"><label for="job">Job Detail</label></div>
						<div>
							<span  ><p><?php echo $govttier; ?></p> Government Tier</span>
							<span  ><p><?php echo $jobTitle; ?></p> Job Title</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span class="date required"><p><?php echo $dateofEmp; ?></p> Date of Employment</span>
							<span class="date required"><p><?php echo $dateofProm; ?></p> Date of Last Promotion</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $slaryStruct; ?></p> Salary Structure</span>
							<span   style="width: 10%;"><p><?php echo $gradeLev; ?></p> Grade Level</span>

							<span   style="width: 8%;"><p><?php echo $step; ?></p> Step</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $netSalary; ?></p> Net Monthly Salary</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $lgaofWork; ?></p> LGA of Work</span>
						</div>
					</div>


					<div class="block">
						<div>
							<span  ><p><?php echo $stafType; ?></p> Staff Type</span>
						</div>
					</div>
				</div><!-- end of e_record details -->

			</div> <!--The Employment Record section of things begins here -->

				<!-- Bank Details -->
				<div class="input_row section" id="bank"> <!--The Bank Details section of things begins here -->
				<h1 class="div-title">Bank Details </h1>
				<div class="b_details_edit sub_section">
					<div class="block">
						<div class="label"><label for="bank">Bank</label></div>
						<div>
							<span  ><p><?php echo $nameBank; ?></p> Name of Bank</span>
							<span  ><p><?php echo $bankBranch; ?></p> Branch (Street)</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $bankCity; ?></p> Branch (City)</span>
							<span  ><p><?php echo $banklgabranch; ?></p> Branch (LGA)</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $baccType; ?></p> Bank Account Type</span>
							<span  ><p><?php echo $accType; ?></p> Account No. Type</span>
						</div>
					</div>

					<div class="block">
						<div>
							<span  ><p><?php echo $accNo; ?></p> Account No.</span>
							<span  ><p><?php echo $accname; ?></p> Account Name</span>
						</div>
					</div>
				</div> <!-- End of b_details hide form -->



			</div> <!--End of bank details section of things begins here -->
				<!-- Bank Details End -->

				<!-- -----Educational Qualification-------- -->
			<div class="input_row section" id="education"> <!--The Educational Qualification section of things begins here -->
				<h1 class="div-title">Educational Qualifications</h1>
				<div class="equal_edit sub_section">
					<div class="block">
						<div class="label"><label for="ministry">Primary School</label></div>
						<div>
							<span  ><p><?php echo $primarySchlName; ?></p> Name of Primary School</span>
						</div>
					</div>

					<div class="block">
						<div class="three">
							<span  ><p><?php echo $yearEnterPrim; ?></p> Year of Entry</span>
							<span  ><p><?php echo $yearPrimGrad; ?></p> Year of Graduation</span>
							<span  ><p><?php echo $primQual; ?></p> Qualification Obtained</span>
						</div>
					</div>

					<div class="block">
						<div class="label"><label for="SecSch">Secondary School</label></div>
						<div>
							<table class="sec_sch" cellspacing="0">
						        <thead>
						            <tr>
						            	<th>Secondary School</th>
						                <th>Year of Entry</th>
						                <th>Year of Graduation</th>
						                <th>Qualification Obtained</th>
						                <th>Delete</th>
						            </tr>
						        </thead>

						        <tbody></tbody>
						    </table>
						</div>
					</div>


					<div class="block">
						<div class="label"><label for="ministry">Tertiary Education</label></div>
						<div>
							<table class="ter_sch" cellspacing="0">
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
						</div>
					</div>

					<div class="block">
						<div class="label"><label for="nysc">NYSC</label></div>
						<div>
							<span><p><?php echo $nyscNum; ?></p> NYSC Certificate No.</span>
						</div>
					</div>
			 </div> <!-- e_qual details Ends Here ---->

			</div><!-- Educational Qualification Ends Here ---->

				<!-- Training Starts Here ---->
			<div class="input_row section" id="training"> <!--The Training section of things begins here -->
	     		<h1 class="div-title">Training </h1>
	     		  <div class="training_edit sub_section">
					<div class="block">
						<div>
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
						</div>
					</div>
				</div>

				</div>

			</div><!-- -----Training Ends Here-------- -->
			<div class="print_button"><button>PRINT</button></div>


<?php $this->load->view('partials/footer'); ?>
<?php $this->session->sess_destroy(); ?>