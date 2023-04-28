<?php include("header.php");?>


<h1 class="text-center text-white col-sm-10 mx-auto">Second Mortgage Financing</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Get Your FREE Quote
                        </h2>
                        <div id="preloaded_app-container">
                            <div class="row">
                                <div class="col-sm-10 mx-auto">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                            <span class="completed">0% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <form class="col-md-10 mx-auto form frmbldr-form car_refinancing" method="POST" action="/app/lead" novalidate="novalidate">
                                <input type="hidden" value="car_refinancing" name="product_name">
                            <div class="row step" id="step0">
                                <h4 class="text-center">Tell us about your current vehicle</h4>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="own_car">Car Ownership Status</label>
                            <select id="own_car" name="own_car" class="form-control form-select required">
                                <option value="">Choose...</option>
                            <option value="own">Own</option>
                            <option value="finance">Finance</option>
                            <option value="lease">Lease</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6"><label class="mb-1" for="car_value">Car Value</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-dollar-sign"></i></span>
                            <input type="text" id="car_value" name="car_value" placeholder="Enter value" class="form-control digits required" maxlength="5">
                        </div>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="car_debt">Car Financing Balance</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-dollar-sign"></i></span>
                            <input type="text" id="car_debt" name="car_debt" placeholder="Enter balance" class="form-control digits required" maxlength="5">
                        </div>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="car_year">Car Year</label>
                            <input type="text" id="car_year" name="car_year" placeholder="e.g. 2012" class="form-control digits required" maxlength="4" minlength="4">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="car_mileage">Car Mileage (KMs)</label>
                            <input type="text" id="car_mileage" name="car_mileage" placeholder="Enter KM's (e.g. 65000)" class="form-control digits required" maxlength="6">
                        </div>
                            <div class="form-group col-md-6"><label class="mb-1" for="car_make">Car Make</label>
                            <input type="text" id="car_make" name="car_make" placeholder="Volkswagen" class="form-control required" maxlength="50">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="car_model">Car Model</label>
                            <input type="text" id="car_model" name="car_model" placeholder="Golf" class="form-control required" maxlength="50">
                        </div>
                        </div>
                            <div class="row step" id="step1" style="display: none;">
                            <h4 class="text-center">Tell us about your current car financing</h4>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="current_loan_lender">Lender</label>
                            <input type="text" id="current_loan_lender" name="current_loan_lender" placeholder="Your Current Lender" class="form-control required" disabled="disabled" maxlength="50">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="current_loan_rate">Current Loan Rate</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-percent"></i></span>
                            <input type="text" id="current_loan_rate" name="current_loan_rate" placeholder="22" class="form-control digits required" disabled="disabled" maxlength="2">
                        </div>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="current_loan_monthly_payment">Monthly Payment</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-dollar-sign"></i></span>
                            <input type="text" id="current_loan_monthly_payment" name="current_loan_monthly_payment" placeholder="1850" class="form-control digits required" disabled="disabled" maxlength="5">
                        </div>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="current_loan_remaining_months">Remaining Months</label>
                            <input type="text" id="current_loan_remaining_months" name="current_loan_remaining_months" placeholder="24" class="form-control required" disabled="disabled" maxlength="3">
                        </div>
                        </div>
                            <div class="row step" id="step2" style="display: none;">
                                <h4 class="text-center">Auto Refinancing Request</h4>
                                <div class="form-group col-md-10 mx-auto mt-3">
                                        <input type="hidden"
                                            name="credit_score" id="credit_score">
                                        <h4 class="text-center">What is your credit score?</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox9" class="hidden-checkbox" value="good">
                                                <label for="my-checkbox9" class="checkbox-label">700
                                                    +<br>Good</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox10" class="hidden-checkbox" value="fair">
                                                <label for="my-checkbox10" class="checkbox-label">561 -
                                                    700<br>Fair</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox11" class="hidden-checkbox" value="low">
                                                <label for="my-checkbox11" class="checkbox-label">&lt;
                                                    560<br>Low</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox12" class="hidden-checkbox" value="not sure">
                                                <label for="my-checkbox12" class="checkbox-label">???<br>Not Sure</label>
                                            </div>
                                            
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please select you credit score!
                                            </span>
                                        </div>
                                        
                                    </div>
                            </div>
                            
                            
                            
                            
                        <div class="row step" id="step3" style="display: none;">
                            <div class="form-group col-md-10 mx-auto mt-3">
                                        
                                        <h4 class="text-center">Select your main income source</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox1" class="hidden-checkbox" value="full time">
                                                <label for="my-checkbox1" class="checkbox-label">Full-time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox2" class="hidden-checkbox" value="part time">
                                                <label for="my-checkbox2" class="checkbox-label">Part-time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox3" class="hidden-checkbox" value="self employed">
                                                <label for="my-checkbox3" class="checkbox-label">Self Emloyed</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox4" class="hidden-checkbox" value="gig worker">
                                                <label for="my-checkbox4" class="checkbox-label">Gig Worker</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox5" class="hidden-checkbox" value="disability">
                                                <label for="my-checkbox5" class="checkbox-label">Disability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox6" class="hidden-checkbox" value="benefits">
                                                <label for="my-checkbox6" class="checkbox-label">BENEFITS / EI / CERB</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox7" class="hidden-checkbox" value="retired">
                                                <label for="my-checkbox7" class="checkbox-label">Retired</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeSource" id="my-checkbox8" class="hidden-checkbox" value="not working">
                                                <label for="my-checkbox8" class="checkbox-label">Not Working</label>
                                            </div>
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please select your income source!
                                            </span>
                                        </div>
                                </div>
                        </div>
                            
                        <div class="row step" id="step4" style="display: none;">
                            <div class="form-group col-md-10 mx-auto mt-3">
                                    <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeProof" id="my-checkbox40" class="hidden-checkbox" value="no">
                                                <label for="my-checkbox40" class="checkbox-label">No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeProof" id="my-checkbox41" class="hidden-checkbox" value="yes">
                                                <label for="my-checkbox41" class="checkbox-label">Yes</label>
                                            </div>
                                    </div>
                                    <div class="col-12 text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please select an option!
                                            </span>
                                        </div>
                            </div>
                        </div>
                        <div class="row step" id="step6" style="display: none;"><div class="form-group col-md-6 col-sm-12 mx-auto"><label class="mb-1" for="monthly_income">Monthly Income</label><input type="text" id="monthly_income" name="monthly_income" placeholder="Monthly Pre-Tax Income" class="form-control required digits" disabled="disabled" maxlength="5"></div></div>
                        <div class="row step" id="step5" style="display: none;">
                        <div class="col-md-3 col-10 mx-auto text-center mt-2" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <div class="text-center my-2" id="response"></div>
                                    <div class="form-group col-md-6 mx-auto mt-3" id="post_code">
                                        <label for="postal_code">Enter Your Postal Code</label><input type="text"
                                            id="postal_code" name="postal_code" placeholder="A9A9A9"
                                            class="form-control required validate_postal" maxlength="6" minlength="6">
                                    </div>
                                    <div class="col text-center">
                                        <span class="error-msg" style="display: none;">
                                            Postal code should be in F9F9F9 form!
                                        </span>
                                    </div>
                        </div><div class="row step" id="step7" style="display: none;"><h4 class="text-center">Tell us about your living situation</h4><div class="form-group col-md-6"><label class="mb-1" for="address">Address</label><input type="text" id="address" name="address" placeholder="Your address" class="form-control required" disabled="disabled" autocomplete="lc_26_address"></div><div class="form-group col-md-6 hide"><label class="mb-1" for="city">City</label><input type="text" id="city" name="city" placeholder="City" class="form-control required" disabled="disabled"></div><div class="form-group col-md-6 hide"><label class="mb-1" for="state">Province</label><select id="state" name="state" class="form-control form-select required" disabled="disabled"><option value="">Choose...</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NS">Nova Scotia</option><option value="NT">Northwest Territories</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Québec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="address_length_months">Time At Address</label>
                            <select id="address_length_months" name="address_length_months" class="form-control form-select required" disabled="disabled">
                                <option value="">Choose...</option>
                            <option value="6">6 Months or Less</option>
                            <option value="12">7-12 Months</option>
                            <option value="18">13-18 Months</option>
                            <option value="24">19-24 Months</option>
                            <option value="25">2-5 Years</option>
                            <option value="60">5 Years or More</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="own_home">Do you rent or own?</label>
                            <select id="own_home" name="own_home" class="form-control form-select required" disabled="disabled">
                                <option value="">Choose...</option>
                            <option value="no">Rent</option>
                            <option value="yes">Own</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="rent_mortgage_payment">Rent/Mortgage Payment</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class="fa fa-dollar-sign">

                            </i></span>
                            <input type="text" id="rent_mortgage_payment" name="rent_mortgage_payment" placeholder="Enter monthly amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="6">
                        </div>
                        </div>
                            <div class="form-group col-md-6 property_value">
                                <label class="mb-1" for="property_value">Property Value</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-dollar-sign"></i></span>
                            <input type="text" id="property_value" name="property_value" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="7">
                        </div>
                        </div>
                            <div class="form-group col-md-6 property_mortgage
                            ">
                                <label class="mb-1" for="property_mortgage">Property Mortgage</label><div class="input-group">
                                <span class="input-group-text"><i class="fa fa-dollar-sign"></i></span>
                            <input type="text" id="property_mortgage" name="property_mortgage" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="7">
                        </div>
                        </div>
                            <div class="form-group col-md-12">
                                <label class="mb-1" for="canadian_status">Are you a Canadian citizen / permanent resident ?</label>
                            <select id="canadian_status" name="canadian_status" class="form-control form-select required" disabled="disabled">
                                <option value="">Choose...</option>
                            <option value="pr">Permanent Resident</option>
                            <option value="citizen">Citizen</option>
                            <option value="other">Other</option>
                        </select>
                        </div>
                        </div>
                            <div class="row step" id="step8" style="display: none;">
                            <h4 class="text-center">Please enter your employment information</h4>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="employer">Employer Name</label>
                            <input type="text" id="employer" name="employer" placeholder="Employer name" class="form-control required hide-for-short-version" disabled="disabled">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="job_title">Occupation</label>
                            <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-control required hide-for-short-version" disabled="disabled">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="employed_months">Time At Job</label>
                            <select id="employed_months" name="employed_months" class="form-control form-select required hide-for-short-version" disabled="disabled">
                                <option value="">Choose...</option>
                            <option value="2">Less than 3 months</option>
                            <option value="6">3-6 Months</option>
                            <option value="12">7-12 Months</option>
                            <option value="18">13-18 Months</option>
                            <option value="24">19-24 Months</option>
                            <option value="48">2-5 Years</option>
                            <option value="60">5 Years or More</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="work_phone">Work Phone</label>
                            <input type="text" id="work_phone" name="work_phone" placeholder="Phone" class="form-control required validate-phone digits hide-for-short-version" disabled="disabled" maxlength="10" minlength="10">
                        </div>
                        </div>
                            <div class="row step" id="step9" style="display: none;">
                            <h4 class="text-center col-md-10 mx-auto">We just need a little more information to continue...</h4>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="title">Salutation</label>
                            <select id="title" name="title" class="form-control form-select required" disabled="disabled">
                                <option value="">Choose...</option>
                            <option value="mr">Mr</option>
                            <option value="ms">Ms</option>
                            <option value="mrs">Mrs</option>
                        </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control required" disabled="disabled">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control required" disabled="disabled">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="home_phone">Primary Phone</label>
                            <input type="text" id="home_phone" name="home_phone" placeholder="Phone" class="form-control required validate-phone digits" disabled="disabled" maxlength="10" minlength="10">
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="text" id="email" name="email" placeholder="your@email.com" class="form-control required email validate_email" disabled="disabled">
                        </div>
                        </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1" for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" placeholder="1985-06-27" class="form-control date dob validate_dob required" disabled="disabled">
                        </div>
                            <div class="form-group col-md-12">
                                <label class="mb-1 checkbox" for="credit_auth">
                                <input type="checkbox" id="credit_auth" name="credit_auth" value="1" disabled="disabled" class="required me-2">
                            <small>I expressly allow the dealership and service providers of the dealership in the field of credit and loan services to collect, use, disclose and retain personal information about me for the purposes of facilitating the supply of financial credit scoring and options services through means that include profiling, automated recommendations and decision-making based on relevant factors regarding borrowers, and of continuously improving such means.<br><br>My consent is valid until I notify the dealership of its withdrawal, subject to legal or contractual restrictions and reasonable notice.</small>
                        </label></div><div class="form-group col-md-12">
                                <label class="mb-1 checkbox" for="opt_in">
                                <input type="checkbox" id="opt_in" name="opt_in" disabled="disabled" class="me-2">
                            <small>I would like to receive electronic messages from Lionsgate Financial Group containing news, updates and promotions regarding its products and services, including third party promotions (you can withdraw your consent at any time). This request is made by Lionsgate Financial Group Email communications are sent via Lionsgate Financial Group's mailing systems.</small>
                        </label>
                        </div>
                            <div class="clearfix">

                            </div>
                            <div class="text-center py-2"><small>By continuing with this form, you consent, acknowledge, and agree to our <a href="https://www.lionsgatefinancialgroup.ca/" target="_blank">privacy policy</a> including lionsgatefinancialgroup.ca and/or its other partners contacting you by phone or e-mail to respond to (or request feedback from) your request.</small>
                            </div>
                            </div>
                            <div class="row mt-3">
                                    <div class="text-center">
                                        <button class="btn-preloaded_app-next btn btn-lg btn-green btn-next">Next</button>
                                        <button type="submit" class="btn-preloaded_app-next btn btn-lg btn-green btn-submit">Submit</button>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include("footer.php"); ?>