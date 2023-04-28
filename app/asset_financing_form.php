                                <div id="step0" class="step row" style="display:none">
                                    <div class=" col-10 mx-auto text-center" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <h3 class="text-center" id="response"></h3>
                                    <div class="form-group col-md-6 mx-auto mt-3" id="post_code">
                                        <label for="postal_code">Enter Your Postal Code</label><input type="text"
                                            id="postal_code" name="postal_code" placeholder="A9A9A9"
                                            class="form-control required validate_postal" maxlength="6" minlength="6">
                                    </div>
                                    <div class="col-10 text-center">
                                        <span class="error-msg" style="display: none;">
                                            Postal code should be in F9F9F9 form!
                                        </span>
                                    </div>
                                </div>
                                <div id="step1" class="step row" style="display:none">
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
                                <div id="step2" class="step row" style="display:none">
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="new_asset_name">What do you want to finance?</label>
                                        <select id="new_asset_name" name="new_asset_name" class="form-control form-select required" disabled="disabled">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="motorcycle">Motorcycle</option>
                                            <option value="scooter">Scooter</option>
                                            <option value="atv">ATV</option>
                                            <option value="rv">RV/Motorhome</option>
                                            <option value="boat">Marine vehicle/Boat</option>
                                            <option value="powersport_vehicle">Other powersport vehicle</option>
                                            <option value="jewelry">Jewelry</option>
                                            <option value="collectable">Collectable item</option>
                                            <option value="other_vehicle">Other vehicle/machinery</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                                <label class="mb-1" for="new_asset_value">Asset Purchase Price</label>
                                            <input type="text" id="new_asset_value" name="new_asset_value" placeholder="Full value of item" class="form-control digits required" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-6">
                                                <label class="mb-1" for="requested_amount">Requested Financing Amount</label>
                                            <input type="text" id="requested_amount" name="requested_amount" placeholder="Cash required for purchase" class="form-control digits required" disabled="disabled" maxlength="6">
                                    </div>
                                    <div class="col text-center">
                                        <span class="error-msg" style="display: none;">
                                            All fields are required!
                                        </span>
                                    </div>
                                </div>
                                <div id="step3" class="step row" style="display:none">
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
                                <div id="step4" class="step row" style="display:none">


                                    <div class="form-group col-md-10 mx-auto mt-3">
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
                                <div id="step5" class="step row" style="display:none">
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
                                                    <input type="date" id="pay_date1" name="pay_date1" placeholder="2017-01-01" class="form-control date paydate1 required hide-for-short-version" disabled="disabled">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="pay_date1" class="form-label">Pay Date After The Next</label>
                                                    <input type="date" id="pay_date2" name="pay_date2" placeholder="2017-01-15" class="form-control date paydate2 required hide-for-short-version" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                    All fields are required!
                                                </span>
                                            </div>
                                        </div>
                                </div>
                                <div id="step6" class="step row" style="display:none">

                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        
                                        <div class="row">
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
                                        </div>
                                        <div class="col text-center">
                                            <span class="error-msg" style="display: none;">
                                                All fields are required!
                                            </span>
                                        </div>

                                </div>