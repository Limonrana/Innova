<body>

<div class="main">

    <div class="container">
        <h2>Sign up to great new account </h2>
        <?php
        include 'inc/notification/error_message.php';
        ?>
        <form action="inc/register/functions.php" method="POST" enctype="multipart/form-data" id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">Account</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" placeholder="User Name" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group form-password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" data-indicator="pwindicator" />
                        <div id="pwindicator">
                            <div class="bar-strength">
                                <div class="bar-process">
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="picture" class="form-label">Select avatar</label>
                        <div class="form-file">
                            <input type="file" name="picture" id="picture" class="custom-file-input" />
                            <span id='val'></span>
                            <span id='button'>Select File</span>
                        </div>
                    </div>
                    <div class="form-select">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="Phone Number" />
                    </div>
                    <div class="form-select">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role">
                            <option>Select</option>
                            <option value="1">Admin</option>
                            <option value="2">Moderator</option>
                            <option value="3">Editor</option>
                            <option value="4">Subscriber</option>
                        </select>
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 1 of 4</span>
                </div>
            </fieldset>

            <h3>
                <span class="title_text">Information</span>
            </h3>
            <fieldset>

                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="name" class="form-label">Full name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name" />
                    </div>

                    <div class="form-select">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" placeholder="Your Location" />
                    </div>

                    <div class="form-date">
                        <label for="expiry_date">Date Of Birth</label>
                        <div class="form-flex">
                            <div class="form-date-item">
                                <select id="expiry_date" name="birth_date"></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                            <div class="form-date-item">
                                <select id="expiry_year" name="birth_year"></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-radio">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" value="Male" id="male" checked="checked" />
                            <label for="male">Male</label>

                            <input type="radio" name="gender" value="Female" id="female" />
                            <label for="female">Female</label>
                        </div>
                    </div>

                    <div class="form-textarea">
                        <label for="about_us" class="form-label">About us</label>
                        <textarea name="about_us" id="about_us" placeholder="Who are you ..."></textarea>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 2 of 4</span>
                </div>

            </fieldset>

            <h3>
                <span class="title_text">Others</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-radio">
                        <label for="payment_type">Language</label>
                        <div class="form-radio-flex">
                            <input type="radio" name="language" id="english" value="English" checked="checked" />
                            <label for="english"><img src="assets/signup/images/english.jpg" alt=""></label>

                            <input type="radio" name="language" id="bangla" value="Bangla" />
                            <label for="bangla"><img src="assets/signup/images/Bangla.jpg" alt=""></label>

                            <input type="radio" name="language" id="hindi" value="Hindi" />
                            <label for="hindi"><img src="assets/signup/images/India.jpg" alt=""></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fb" class="form-label">Facebook Url</label>
                        <input type="text" name="fb" id="fb" />
                    </div>

                    <div class="form-group">
                        <label for="tw" class="form-label">Twitter Url</label>
                        <input type="text" name="tw" id="tw" />
                    </div>

                    <div class="form-group">
                        <label for="skype" class="form-label">Skype ID</label>
                        <input type="text" name="skype" id="skype" />
                    </div>

                    <div class="form-group">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" id="state" />
                    </div>

                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" />
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 3 of 4</span>
                </div>
            </fieldset>

            <h3>
                <span class="title_text">Experience</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">

                    <div class="form-group">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" name="position" id="position" />
                    </div>

                    <div class="form-group">
                        <label for="company_website" class="form-label">Company Website</label>
                        <input type="text" name="company_website" id="company_website" />
                    </div>

                    <div class="form-group">
                        <label for="start_job">Start</label>
                        <input type="date" name="start_job" id="start_job" />
                    </div>
                    <div class="form-group">
                        <label for="end_job">End</label>
                        <input type="date" name="end_job" id="end_job" />
                    </div>

                    <div class="form-textarea">
                        <label for="about_job" class="form-label">About</label>
                        <textarea name="about_job" id="about_job" placeholder="About Your Job ..."></textarea>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 4 of 4</span>

                </div>
            </fieldset>
        </form>
    </div>

</div>