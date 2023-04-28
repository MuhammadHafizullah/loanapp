<?php include("header.php"); ?>


<h1 class="text-center text-white col-sm-10 mx-auto">Find Canada's Best Personal Loan Rate</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                            Get Your FREE Quote Today
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


                                <form id="form" method="post" autocomplete="off" class="row g-3 needs-validation form" novalidate>
                                    <input type="hidden" value="personal_loan" name="product_name" id="product_name">
                                    <div id="step0" class="step">
                                        <h4 class="text-center">How much are you looking for?</h4>
                                        <div class="form-group col-md-6 mx-auto mt-3">
                                            <label for="requested_amount">Desired Loan Amount</label>
                                            <div class="input-group">
                                                <div class="input-group-text">$</div>
                                                <input type="text" id="requested_amount" name="requested_amount"
                                                    placeholder="Loan Amount" class="form-control digits required"
                                                    maxlength="6">
                                            </div>
                                        </div>

                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                This field is required!
                                            </span>
                                        </div>

                                    </div>
                                    <div id="step1" class="step" style="display:none">
                                        <div class="form-group col-md-6 mx-auto mt-3">
                                            <label for="product_purpose">Loan Purpose</label>
                                            <div class="input-group">

                                                <select id="product_purpose" name="product_purpose"
                                                    class="form-select required">
                                                    <option value="" selected disabled>Choose...</option>
                                                    <option value="Debt Consolidation">Debt Consolidation</option>
                                                    <option value="Credit Card Consolidation">Credit Card Payoff</option>
                                                    <option value="Car Repair">Car Maintenance</option>
                                                    <option value="Home Improvement">Home Improvement</option>
                                                    <option value="Utility Bill">Utility Bill</option>
                                                    <option value="School Expenses">School Expenses</option>
                                                    <option value="Major Purchase">Major Purchase</option>
                                                    <option value="Vacation">Vacation</option>
                                                    <option value="Moving or Relocation">Moving or Relocation</option>
                                                    <option value="Medical Expenses">Medical Expenses</option>
                                                    <option value="Cosmetic Surgery">Cosmetic Surgery</option>
                                                    <option value="Wedding Expenses">Wedding Expenses</option>
                                                    <option value="Credit Building">Credit Building</option>
                                                    <option value="Emergency Expense">Emergency Expense</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                    Please select an option!
                                                </span>
                                            </div>
        
                                        </div>
                                    </div>
                                    <div id="step2" class="step" style="display:none">


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
                                    <div id="step3" class="step" style="display:none">
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
                                    <div id="step4" class="step" style="display:none">
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
                                    </div>
                                    <div id="step5" class="step" style="display:none">
                                        <div class="form-group col-md-10 mx-auto mt-3">
                                            <label for="monthly_income">Monthly Income</label><input type="text"
                                                id="monthly_income" name="monthly_income"
                                                placeholder="Monthly Pre-Tax Income" class="form-control required digits"
                                                maxlength="5">
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please enter your monthly income!
                                            </span>
                                        </div>
                                    </div>
                                    <div id="step6" class="step" style="display:none">

                                        <div class="form-group col-md-10 mx-auto mt-3">
                                            <h4 class="text-center">We just need a little more information to continue...
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="title" class="form-label">Solutation</label>
                                                    <select id="title" name="title" class="form-select required">
                                                        <option value="">Choose...</option>
                                                        <option value="mr">Mr</option>
                                                        <option value="ms">Ms</option>
                                                        <option value="mrs">Mrs</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <input type="text" id="first_name" name="first_name"
                                                        placeholder="First Name" class="form-control required">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input type="text" id="last_name" name="last_name"
                                                        placeholder="Last Name" class="form-control required">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="home_phone" class="form-label">Primary Phone</label>
                                                    <input type="text" id="home_phone" name="home_phone" placeholder="6041234567"
                                                        class="form-control required validate-phone digits" maxlength="10"
                                                        minlength="10">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <input type="text" id="email" name="email"
                                                            placeholder="your@email.com"
                                                            class="form-control required email validate_email">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                        <label for="dob" class="form-label">Date of Birth</label>
                                                        <input type="date" id="dob0" name="dob" placeholder="1985-06-27" class="form-control date dob validate_dob required hasDatepicker">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="state" class="form-label">Province</label>
                                                        <select id="state" name="state" class="form-select required" aria-invalid="false">
                                                        <option value="">Choose...</option>
                                                        <option value="AB">Alberta</option>
                                                        <option value="BC">British Columbia</option>
                                                        <option value="MB">Manitoba</option>
                                                        <option value="NB">New Brunswick</option>
                                                        <option value="NL">Newfoundland and Labrador</option>
                                                        <option value="NS">Nova Scotia</option>
                                                        <option value="NT">Northwest Territories</option>
                                                        <option value="NU">Nunavut</option>
                                                        <option value="ON">Ontario</option>
                                                        <option value="PE">Prince Edward Island</option>
                                                        <option value="QC">Québec</option>
                                                        <option value="SK">Saskatchewan</option>
                                                        <option value="YT">Yukon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col my-3">
                                                    
                                    By continuing with this form, you consent, acknowledge, and agree to our privacy policy including lionsgatefinancialgroup.ca and/or its other partners contacting you by phone or e-mail to respond to (or request feedback from) your request.

                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                    All fields are required!
                                                </span>
                                            </div>

                                    </div>
                                    <div id="step7" class="step" style="display:none">
                                            <div class="form-group col-md-10 mx-auto mt-3">

                                                <h4 class="text-center">Tell us about your living situation</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" id="address" name="address" placeholder="Your address" class="form-control required" disabled="disabled" autocomplete="lc_30_address">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="address_length_months" class="form-label">Time At Address</label>
                                                        <select id="address_length_months" name="address_length_months" class="form-select required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="6">6 Months or Less</option>
                                                            <option value="12">7-12 Months</option>
                                                            <option value="18">13-18 Months</option>
                                                            <option value="24">19-24 Months</option>
                                                            <option value="25">2-5 Years</option>
                                                            <option value="60">5 Years or More</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="own_home" class="form-label">Do you rent or own?</label>
                                                        <select id="own_home" name="own_home" class="form-select required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="no">Rent</option>
                                                            <option value="yes">Own</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="rent_mortgage_payment" class="form-label">Rent/Mortgage Payment</label>
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                            <i class="fa fa-dollar-sign"></i>
                                                            </div>
                                                            <input type="number" id="rent_mortgage_payment" name="rent_mortgage_payment" placeholder="Enter monthly amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="6">
                                                        </div>
                                                    </div>
                                                        <div class="col-md-6 property_value">
                                                            <label for="property_value" class="form-label">Property Value</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                <i class="fa fa-dollar-sign"></i>
                                                                </span>
                                                                <input type="number" id="property_value" name="property_value" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="7">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 property_mortgage">
                                                            <label for="property_mortgage" class="form-label">Property Mortgage</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                <i class="fa fa-dollar-sign"></i>
                                                                </span>
                                                                <input type="number" id="property_mortgage" name="property_mortgage" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="7">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="state" class="form-label">Province</label>
                                                            <select id="state" name="state" class="form-control required" aria-invalid="false">
                                                            <option value="">Choose...</option>
                                                            <option value="AB">Alberta</option>
                                                            <option value="BC">British Columbia</option>
                                                            <option value="MB">Manitoba</option>
                                                            <option value="NB">New Brunswick</option>
                                                            <option value="NL">Newfoundland and Labrador</option>
                                                            <option value="NS">Nova Scotia</option>
                                                            <option value="NT">Northwest Territories</option>
                                                            <option value="NU">Nunavut</option>
                                                            <option value="ON">Ontario</option>
                                                            <option value="PE">Prince Edward Island</option>
                                                            <option value="QC">Québec</option>
                                                            <option value="SK">Saskatchewan</option>
                                                            <option value="YT">Yukon</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col text-center">
                                                    <span class="error-msg" style="display: none;">
                                                        All fields are required!
                                                    </span>
                                                </div>
                                            </div>
                                            
                                    </div>
                                    <div id="step8" class="step" style="display:none" >
                                            <div class="form-group col-md-10 mx-auto mt-3">

                                                <h4 class="text-center">Let's go over your financial profile</h4>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <label for="in_bankruptcy" class="form-label">Are you currently in bankruptcy?</label>
                                                        <select id="in_bankruptcy" name="in_bankruptcy" class="form-control required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="no">No</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="discharged">Discharged</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="in_dmp" class="form-label">Are you currently in a debt program?</label>
                                                        <select id="in_dmp" name="in_dmp" class="form-control required hide-for-short-version" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="no">No</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="discharged">Discharged</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="own_home" class="form-label">Are you currently in a consumer proposal?</label>
                                                        <select id="in_consumer_proposal" name="in_consumer_proposal" class="form-control required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="no">No</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="discharged">Discharged</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <span class="error-msg" style="display: none;">
                                                        All fields are required!
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                    <div id="step9" class="step" style="display:none">
                                            <div class="form-group col-md-10 mx-auto mt-3">

                                                <h4 class="text-center">Please enter your income and employment information.</h4>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <label for="employer" class="form-label">Employer Name</label>
                                                        <input type="text" id="employer" name="employer" placeholder="Employer name" class="form-control required hide-for-short-version" disabled="disabled">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="employed_months" class="form-label">Time At Job</label>
                                                        <select id="employed_months" name="employed_months" class="form-select required hide-for-short-version" disabled="disabled">
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
                                                    <div class="col-md-6">
                                                        <label for="job_title" class="form-label">Occupation</label>
                                                        <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-control required hide-for-short-version" disabled="disabled">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="work_phone" class="form-label">Work Phone</label>
                                                        <input type="text" id="work_phone" name="work_phone" placeholder="Phone" class="form-control required validate-phone digits hide-for-short-version" disabled="disabled" maxlength="10" minlength="10">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="direct_deposit" class="form-label">Do you have direct deposit?</label>
                                                        <select id="direct_deposit" name="direct_deposit" class="form-control required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="pay_frequency" class="form-label">Pay Frequency</label>
                                                        <select id="pay_frequency" name="pay_frequency" class="form-control required" disabled="disabled">
                                                            <option value="">Choose...</option>
                                                            <option value="WEEKLY">Weekly</option>
                                                            <option value="BIWEEKLY">Bi-Weekly</option>
                                                            <option value="TWICEMONTHLY">Semi-Monthly</option>
                                                            <option value="MONTHLY">Monthly</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="pay_date1" class="form-label">Next Pay Date</label>
                                                        <input type="text" id="pay_date1" name="pay_date1" placeholder="2017-01-01" class="form-control date paydate1 required hide-for-short-version" disabled="disabled">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="pay_date1" class="form-label">Pay Date After The Next</label>
                                                        <input type="text" id="pay_date2" name="pay_date2" placeholder="2017-01-15" class="form-control date paydate2 required hide-for-short-version" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <span class="error-msg" style="display: none;">
                                                        All fields are required!
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                    <div id="step10" class="step" style="display:none">
                                            <div class="form-group col-md-10 mx-auto mt-3">

                                                <h4 class="text-center">This is the last step!</h4>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <label for="cc_debt_amount" class="form-label">Credit Card Debt Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fa fa-dollar-sign"></i>
                                                            </span>
                                                            <input type="text" id="cc_debt_amount" name="cc_debt_amount" placeholder="Enter your debt amount" class="form-control required digits" disabled="disabled" maxlength="6">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="unsecured_debt_amount" class="form-label">Total Other Unsecured Debt</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fa fa-dollar-sign"></i>
                                                            </span>
                                                            <input type="text" id="unsecured_debt_amount" name="unsecured_debt_amount" placeholder="Enter your debt amount" class="form-control required digits" disabled="disabled" maxlength="6">
                                                            <div class="input-group-btn">
                                                            <button type="button" class="btn" data-toggle="popover" aria-label="Help" title="" data-original-title="Information">
                                                                <span class="fa fa-question-circle"></span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="opt_in" class="checkbox">
                                                            <input type="checkbox" id="opt_in" name="opt_in" disabled="disabled">
                                                            <small>I would like to receive electronic messages from Lionsgate Financial Group containing news, updates and promotions regarding its products and services, including third party promotions (you can withdraw your consent at any time). This request is made by Lionsgate Financial Group Email communications are sent via Lionsgate Financial Group's mailing systems.</small>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="credit_auth" class="checkbox">
                                                            <input type="checkbox" id="credit_auth" name="credit_auth" value="1" disabled="disabled" class="required">
                                                            <small>In order to maximize my chance of finding a service provider, I authorize the trusted financial services provider I've been matched with to obtain credit reports from credit reporting agencies to assess my credit history. My consent is valid until I notify the matched provider of its withdrawal.</small>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                    <span class="error-msg" style="display: none;">
                                                        Please accept the terms and conditions!
                                                    </span>
                                                </div>
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