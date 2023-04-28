                                <div id="step0" class="step" style="display:none">
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
                                <div id="step1" class="step" style="display:none">
                                    <div class="form-group col-md-6 mx-auto">
                                        <label for="cc_debt_amount">Credit Card Debt Amount</label>

                                            <div class="input-group">
                                                <div class="input-group-text">$</div>
                                                    <input type="text" id="cc_debt_amount" name="cc_debt_amount" placeholder="Enter your debt amount" class="form-control digits required" maxlength="6">
                                            </div>
                                            
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your debt amount
                                                </span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6 mx-auto">
                                        <label for="unsecured_debt_amount">Total Other Unsecured Debt </label>
                                            <div class="input-group">
                                             <div class="input-group-text">$</div>
                                                    <input type="text" id="unsecured_debt_amount" name="unsecured_debt_amount" placeholder="Enter your debt amount" class="form-control digits required" maxlength="6">
                                            </div>
                                            
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your Total Other Unsecured Debt
                                                </span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6 mx-auto">
                                        <label for="monthly_income">Monthly Income</label>
                                                <div class="input-group">
                                                <div class="input-group-text">$</div>
                                                    <input type="text" id="monthly_income" name="monthly_income" placeholder="Monthly Pre-Tax Income" class="form-control digits required" maxlength="5">
                                                </div>
                                            
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your Monthly Pre-Tax Income
                                                </span>
                                            </div>
                                    </div>
                                </div>
                                <div id="step2" class="step" style="display:none">

                                    <div class="form-group col-md-10 mx-auto mt-3">
                                        <h4 class="text-center">Tell us about your living situation
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="own_home" class="form-label">Do you rent or own?</label>
                                                <select id="own_home" name="own_home" class="form-select required">
                                                    <option value="">Choose...</option>
                                                    <option value="no">Rent</option>
                                                    <option value="yes">Own</option>
                                                </select>
                                                <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Please select an option
                                                </span>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="rent_mortgage_payment" class="form-label">Rent/Mortgage Payment</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa fa-dollar-sign"></i>
                                                </div>
                                                <input type="text" id="rent_mortgage_payment" name="rent_mortgage_payment" placeholder="Enter monthly amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="6"></div>
                                                <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your Enter monthly amount
                                                </span>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="property_value" class="form-label">Property Value</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa fa-dollar-sign"></i>
                                                </div>
                                                <input type="text" id="property_value" name="property_value" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="6"></div>
                                                <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your amount
                                                </span>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="property_mortgage" class="form-label">Property Mortgage</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa fa-dollar-sign"></i>
                                                </div>
                                                <input type="text" id="property_mortgage" name="property_mortgage" placeholder="Enter amount" class="form-control required digits hide-for-short-version" disabled="disabled" maxlength="6"></div>
                                                <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                Enter your amount
                                                </span>
                                            </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </div>
                                <div id="step3" class="step" style="display:none">
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
                                <div id="step4" class="step" style="display:none" >
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
                                <div id="step5" class="step" style="display:none">
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
                                </div>