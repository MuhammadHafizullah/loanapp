<?php include("header.php");
?>


<h1 class="text-center text-white col-sm-10 mx-auto">The Largest Dealer Network In Canada
At Your Fingertips</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Let's get you approved.
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

                            <form id="form" method="post" autocomplete="off" class="row g-3 form needs-validation" novalidate>
                                <input type="hidden" value="credit_building" name="product_name">
                                <div id="step0" class="step" style="display:none">


                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        <h4 class="text-center">Finance Your Next Car Purchase</h4>
                                        <h4 class="text-center my-4">Select the type of car you want to buy</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox9" class="hidden-checkbox" value="good">
                                                <label for="my-checkbox9" class="checkbox-label">SEDAN</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox10" class="hidden-checkbox" value="fair">
                                                <label for="my-checkbox10" class="checkbox-label">SUV</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox11" class="hidden-checkbox" value="low">
                                                <label for="my-checkbox11" class="checkbox-label">VAN</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox12" class="hidden-checkbox" value="not sure">
                                                <label for="my-checkbox12" class="checkbox-label">TRUCK</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox12" class="hidden-checkbox" value="not sure">
                                                <label for="my-checkbox12" class="checkbox-label">LUXURY</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="carType" id="my-checkbox12" class="hidden-checkbox" value="not sure">
                                                <label for="my-checkbox12" class="checkbox-label">ALREADY FOUND A CAR</label>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p>
                                                Please note there is no cost or obligation after you submit your application. If you wish, you can change your choice of car at a later time.
                                                </p>
                                            </div>
                                            
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please select your car type!
                                            </span>
                                        </div>
                                        
                                    </div>


                                </div>
                                <div id="step1" class="step" style="display:none">


                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        <h4 class="text-center">What's your monthly budget?</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="monthlyBudget" id="my-checkbox20" class="hidden-checkbox" value="200">
                                                <label for="my-checkbox20" class="checkbox-label">Up to $200</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="monthlyBudget" id="my-checkbox21" class="hidden-checkbox" value="350">
                                                <label for="my-checkbox21" class="checkbox-label">$201 - $350</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="monthlyBudget" id="my-checkbox22" class="hidden-checkbox" value="500">
                                                <label for="my-checkbox22" class="checkbox-label">$351 - $500</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="monthlyBudget" id="my-checkbox23" class="hidden-checkbox" value="1000">
                                                <label for="my-checkbox23" class="checkbox-label">$501 or more</label>
                                            </div>
                                           
                                            
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                Please select your monthly budget!
                                            </span>
                                        </div>
                                        
                                    </div>


                                </div>
                                <div id="step2" class="step" style="display:none">
                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        <h4 class="text-center">What is your credit score?</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox24" class="hidden-checkbox" value="good">
                                                <label for="my-checkbox24" class="checkbox-label">700
                                                    +<br>Good</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox25" class="hidden-checkbox" value="fair">
                                                <label for="my-checkbox25" class="checkbox-label">561 -
                                                    700<br>Fair</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox26" class="hidden-checkbox" value="low">
                                                <label for="my-checkbox26" class="checkbox-label">&lt;
                                                    560<br>Low</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="creditScore" id="my-checkbox27" class="hidden-checkbox" value="not sure">
                                                <label for="my-checkbox27" class="checkbox-label">???<br>Not Sure</label>
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
                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        
                                        <h4 class="text-center">Do you have proof of income?</h4>
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeProof" id="my-checkbox28" class="hidden-checkbox" value="yes">
                                                <label for="my-checkbox28" class="checkbox-label">Yes</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="incomeProof" id="my-checkbox29" class="hidden-checkbox" value="no">
                                                <label for="my-checkbox29" class="checkbox-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="step5" class="step" style="display:none">
                                    <div class="col-3 mx-auto text-center" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <h3 class="text-center" id="response"></h3>
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
                                <div id="step6" class="step" style="display:none">
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
                                <div id="step7" class="step" style="display:none">
                                    <div class="form-group col-md-10 mx-auto mt-3">

                                        <h4 class="text-center">Tell us about your living situation</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" id="address" name="address" placeholder="Your address" class="form-control required" disabled="disabled" autocomplete="lc_30_address">
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

                                            <div class="col-md-6">
                                                <label for="canadian_status" class="form-label">Are you a Canadian citizen / permanent resident ?</label>
                                                <select id="canadian_status" name="canadian_status" class="form-select required" disabled="disabled">
                                                    <option value="">Choose...</option>
                                                    <option value="permanent citizen">Permanent Resident</option>
                                                    <option value="citizen">Citizen</option>
                                                    <option value="other">Other</option>
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
                                <div id="step8" class="step" style="display:none">
                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        <h4 class="text-center">Please enter your income and employment information.</h4>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <label for="employer" class="form-label">Employer Name</label>
                                                <input type="text" id="employer" name="employer" placeholder="Employer name" class="form-control required hide-for-short-version" disabled="disabled">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="job_title" class="form-label">Occupation</label>
                                                <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-control required hide-for-short-version" disabled="disabled">
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
                                                <label for="work_phone" class="form-label">Work Phone</label>
                                                <input type="text" id="work_phone" name="work_phone" placeholder="Phone" class="form-control required validate-phone digits hide-for-short-version" disabled="disabled" maxlength="10" minlength="10">
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
                                        <h4 class="text-center">Almost done! <br/>We just need a little more information to continue...
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