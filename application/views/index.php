<?php $required_fields = array('minname', 'did', 'pin'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Delta State BIPATAS Enrolment Form</title>

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/register.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontPage/demoo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontPage/stylee.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontPage/animate-custom.css" />
    </head>
    <body>
        <div id="wrapper">

			<div id="header">

				<div class="logo">
					<a href="<?php echo base_url(); ?>">
					<img alt="" src="<?php echo base_url(); ?>images/deltastatelogo.gif">
					</a>
				</div>

			</div>

			<div class="title">
				<h1>Delta State BIPATAS Enrolment Form</h1>
				<div>

					<ul class="linklist">
						<li>
	                        <a href="<?php echo base_url(); ?>">
		                        <i class="icon-home"></i>
								<img src="<?php echo base_url(); ?>images/home.png" />
		                        <a href="<?php echo base_url(); ?>">Home</a>
	                        </a><span class="divider">|</span>
						</li>
						<li>
							<a href="#" id="btn_menu_contact">
                            <i class="icon-envelope-alt"></i>
							<img src="<?php echo base_url(); ?>images/envelop.png" />
                            <a href="javascript:;">Contact</a>
							</a> <span class="divider">|</span>
						</li>
						<li>
							<a href="#" id="btn_menu_help">
							<i class="icon-info-sign"></i>
							<img src="<?php echo base_url(); ?>images/help.png" />
							<a href="javascript:;">FAQ</a>
							</a>
						</li>
					</ul>

				</div>
			</div>
			<div class="fclear"></div>



			<div class="page_body">

				<div id="side_a">
					<h4>Welcome to Delta State Staff Online Registration Form</h4>
					<p> Carefully fill the form provided on this website. At the end of the registration, you will be required to print a copy of the form and come with it on the day of your biometric capturing</p>

					<p>You will be allowed to make any modification on your form after registration twice. The next modification will cost you a fee of <font color="red">N500</font> payable to the Banks provided on this website.</p>
					<!---<p><a  href="pages/p_info.php"><input type="submit" value="Start registration here"></a></p>-->

				</div>

				<div id="side_b">

					<div style="padding-top: 2px;" class="block_sep">
						<div style="padding-left: 5px;">
								<div style="float:left; margin-bottom:1px;">

				<!-- -------------------THIS SECTION WILL DISPLAY ERRORS RELATED TO STAFF LOGIN IN THE FRONT PAGE --------------- -->

								<p style="background-color:#f00;"><?php echo validation_errors(); ?></p>

								<P style="color:#f00;"><?php if(isset($error)) echo $error; ?></P>

				<!-- ----------------------------------------------------------------------------------------------------------------- -->

					<?php echo form_open('home/login'); ?>

								 </p><p></p><br />
							<div class="input_row">
											<div class="input">
												<label for="minname">Ministry/Dept/Agency<span style="color:red;">*</span>
			                            			<select <?php highlight_field($required_fields, 'minname'); ?> id="minname" name="minname" />
			                            			<?php
													echo "<option value=\"\"></option>";
													foreach($ministry as $ministrys){
														echo'<option value="';
														echo $ministrys->acronyms.'"  ';
														echo set_select('minname', $ministrys->acronyms);
														echo ' >';
														echo $ministrys->name;
														echo '</option>';
														}

													?>

													</select>
		                            			</label>
		                    				</div>
			                    			<div class="help">
			                         			<h4 style=""><b>Help:</b>&nbsp;Username.</h4>
			                        			<p>Select your Ministry/Department/Agency</p>
			                    			</div>
			                    			<div class="fclear"></div>
		                    			</div>

												<!--SELECT FIELD FOR MINISTRIS ENDS HERE-->



										<div class="input_row">
											<div class="input">
												<label for="did">User ID<span style="color:red;">*</span>
			                            			<input <?php highlight_field($required_fields, 'did'); ?> type="text" id="did" name="did" value="<?php echo set_value('did'); ?>" />

		                            			</label>
		                    				</div>
			                    			<div class="help">
			                         			<h4 style=""><b>Help:</b>&nbsp;Username.</h4>
			                        			<p>Your User ID is one of the details given to you by your Ministry’s PS</p>
			                    			</div>
			                    			<div class="fclear"></div>
		                    			</div>

										
										<div class="input_row">
											<div class="input">
												<label for="pin">Passcode<span style="color:red;">*</span>
			                            			<input <?php highlight_field($required_fields, 'pin'); ?> type="password" id="pin" name="pin" value="<?php echo set_value('pin'); ?>" />

		                            			</label>
		                    				</div>
			                    			<div class="help">
			                         			<h4 style=""><b>Help:</b>&nbsp;Pin</h4>
			                        			<p>Your Passcode(Personal Identification Code) is the other detail given along side with your username</p>
			                    			</div>
			                    			<div class="fclear"></div>
		                    			</div>

										<p><input  type="submit" value="Login" name="submit"></p>
									<?php echo form_close(); ?>
								</div>

							<div class="fclear"></div>

							<div>

								<a href="#">Complaint</a><span class="divider">|</span>
								<a href="#">Login problems?</a><span class="divider">|</span>
								<br />
							</div>

						</div>
					 </div>
					 <div class="fclear"></div>
					</div>
					<div class="fclear"></div>
				</div>



			</div>
    </body>
</html>
