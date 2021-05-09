<?php
session_start();
?>
<!--
=============
Header Start
=============
-->
<?php require 'section-template/header_signup.php'; ?>
<!--
=============
Header End
=============
-->

<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="index.php" method="POST">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Account Information</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Account Information</h3>
									<p>Please enter your Account Information and proceed to the next step so we can build your accounts.  </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>User Name</legend>
											<input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Password</legend>
											<input type="text" class="form-control" id="password" name="password" placeholder="Your Password" data-indicator="pwindicator" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="email" id="email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2 custom-file">
										<fieldset>
											<legend>Select avatar</legend>
                                                <input type="file" class="form-control-file" id="customFile">
										</fieldset>
									</div>
								</div>

                                <div class="form-row">
									<div class="form-holder form-holder-2 custom-file">
										<fieldset>
											<legend>Phone Number</legend>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="+880 162-298-7205" />
										</fieldset>
									</div>
								</div>

                                <div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
                                            <legend>Role</legend>
                                                <select class="form-control" name="role" id="role">
                                                    <option>Select</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Moderator</option>
                                                    <option value="3">Editor</option>
                                                    <option value="4">Subscriber</option>
                                                </select>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Peronal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Peronal Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
								</div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Full name</legend>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Limon Rana" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Location</legend>
                                            <input type="text" name="location" id="location" class="form-control" placeholder="Bangladesh" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label class="special-label">Birth Date:</label>
                                        <select name="birth_day" id="date_day">
                                            <option value="DD" disabled selected>DD</option>
                                            <?php
                                            for ($day = 1; $day <= 31; $day++) { ?>
                                                <option value="<?php echo "$day"; ?>"><?php echo "$day" ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <select name="birth_date" id="birth_date">
                                            <option value="MM" disabled selected>MM</option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="July">July</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                        <select name="birth_year" id="birth_year">
                                            <option value="YYYY" disabled selected>YYYY</option>
                                            <?php
                                            for ($year = 1900; $year <= 2020; $year++) { ?>
                                                <option value="<?php echo "$year"; ?>"><?php echo "$year" ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <div class="male">
                                        <input type="radio" class="radio" name="gender" id="plan-1" value="Male" checked>
                                        <label class="plan-icon plan-1-label" for="plan-1">
                                            <img src="assets/signup/images/Male.png" width="40px" alt="pay-1">
                                        </label>
                                        <div class="plan-total">
                                            <span class="plan-title">Male</span>
                                        </div>
                                            </div>
                                            <div class="female">
                                        <input type="radio" class="radio" name="gender" id="plan-2" value="Female">
                                        <label class="plan-icon plan-2-label" for="plan-2">
                                            <img src="assets/signup/images/Female.png" width="40px" alt="pay-1">
                                        </label>
                                        <div class="plan-total">
                                            <span class="plan-title">Female</span>
                                        </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>About Me</legend>
                                            <textarea name="about_us" id="about_us" cols="50" rows="3" class="form-control" placeholder="Who are you ..."></textarea>
                                        </fieldset>
                                    </div>
                                </div>


							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Others Information</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Others Information</h3>
									<p>Please enter your Others Information and proceed to the next step so we can build your accounts.</p>
								</div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Language</legend>
                                            <input type="text" class="form-control" id="language" name="language" placeholder="English, Bangla, Hindi..." required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Facebook URL</legend>
                                            <input type="text" class="form-control" id="fb" name="fb" placeholder="https://facebook.com/my_id" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Twitter URL</legend>
                                            <input type="text" class="form-control" id="tw" name="tw" placeholder="https://twitter.com/my_id" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Skype ID</legend>
                                            <input type="text" class="form-control" id="skype" name="skype" placeholder="Skype ID" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>State</legend>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="Dhaka" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Country</legend>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Bangladesh" required>
                                        </fieldset>
                                    </div>
                                </div>

							</div>
			            </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <p class="step-icon"><span>04</span></p>
                            <span class="step-text">Your Experience</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Your Experience</h3>
                                    <p>Please enter your Experience and proceed to the next step so we can build your accounts.  </p>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Position</legend>
                                            <input type="text" name="position" id="position" class="form-control" placeholder="Lead Developer..." required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Company Website</legend>
                                            <input type="text" class="form-control" id="company_website" name="company_website" placeholder="www.companyname.com" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label class="special-label">Job Start - End :</label>
                                        <select name="start_date" id="start_date">
                                            <option value="MM" disabled selected>MM</option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="July">July</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>

                                        <select name="start_year" id="start_year">
                                            <option value="YYYY" disabled selected>YYYY</option>
                                            <?php
                                            for ($year = 1900; $year <= 2020; $year++) { ?>
                                                <option value="<?php echo "$year"; ?>"><?php echo "$year" ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                        <select name="end_date" id="end_date">
                                            <option value="MM" disabled selected>MM</option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="July">July</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                        <select name="end_year" id="end_year">
                                            <option value="YYYY" disabled selected>YYYY</option>
                                            <?php
                                            for ($year = 1900; $year <= 2020; $year++) { ?>
                                                <option value="<?php echo "$year"; ?>"><?php echo "$year" ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>About</legend>
                                            <textarea name="about_job" id="about_job" cols="50" rows="3" class="form-control" placeholder="About Your Job ..."></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>

    <!--
    =============
    Footer Start
    =============
    -->
    <?php require 'section-template/footer_signup.php'; ?>
    <!--
    =============
    Footer End
    =============
    -->
