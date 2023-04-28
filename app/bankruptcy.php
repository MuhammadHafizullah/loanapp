<?php include("header.php");
$form_heading="Bankruptcy Information Request";
?>


<h1 class="text-center text-white col-sm-10 mx-auto">FREE Bankruptcy Consultation</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Speak with a debt relief specialist
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
                                <input type="hidden" value="personal_loan" name="product_name">
                                <div id="step0" class="step" style="display:none">
                                    <div class="col-md-3 col-10 mx-auto text-center" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <h4 class="text-center"><?php $form_heading ?></h4>
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

                                        <div class="form-group col-md-6 mx-auto mt-3">
                                                    <label for="in_bankruptcy" class="form-label">Are you currently in bankruptcy?</label>
                                                    <select id="in_bankruptcy" name="in_bankruptcy" class="form-select required" disabled="disabled">
                                                        <option value="">Choose...</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="discharged">Discharged</option>
                                                      </select>
                                                
                                            
                                        </div>
                                        <div class="col-12 text-center">
                                                <span class="error-msg" style="display: none;">
                                                Please select an option
                                                </span>
                                        </div>

                                </div>
                                <div id="step3" class="step" style="display:none">
                                    <div class="form-group col-md-6 mx-auto mt-3">
                                   
                                                    <label for="in_dmp" class="form-label">Are you currently in a debt program?</label>
                                                    <select id="in_dmp" name="in_dmp" class="form-control required hide-for-short-version" disabled="disabled">
                                                        <option value="">Choose...</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="discharged">Discharged</option>
                                                      </select>
                                    
                                    </div>
                                    <div class="col-12 text-center">
                                                <span class="error-msg" style="display: none;">
                                                Please select an option
                                                </span>
                                        </div>

                                        
                                </div>
                                <div id="step4" class="step" style="display:none" >
                                        <div class="form-group col-md-6 mx-auto mt-3">
                                              
                                                
                                                    <label for="own_home" class="form-label">Are you currently in a consumer proposal?</label>
                                                    <select id="in_consumer_proposal" name="in_consumer_proposal" class="form-control required" disabled="disabled">
                                                        <option value="">Choose...</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="discharged">Discharged</option>
                                                      </select>
                                        </div>
                                            <div class="col text-center">
                                                <span class="error-msg" style="display: none;">
                                                    All fields are required!
                                                </span>
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