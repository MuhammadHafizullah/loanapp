<?php include("header.php");?>


            <h1 class="text-center text-white col-sm-10 mx-auto">Commercial Mortgage Financing</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Speak With An Expert Today
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

                            <form class="form" class="form" method="POST" novalidate="novalidate">
                                    <input type="hidden" value="commercial_mortgage" name="product_name" id="product_name">
                                    <div class="row step" id="step0">
                                    <div class="col-md-3 col-10 mx-auto text-center mt-2" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <div class="text-center my-2" id="response"></div>
                                    <div class="form-group col-md-6 col-sm-12 mx-auto"><label class="mb-1" for="postal_code">Enter Your Postal Code</label><input type="text" id="postal_code" name="postal_code" placeholder="A9A9A9" class="form-control required validate_postal" maxlength="6" minlength="6"></div></div><div class="row step" id="step1" style="display: none;"><div class="frmbldr-select-btn mx-auto row text-center"><input type="hidden" name="credit_score" id="credit_score"><h4 class="text-center">What is your credit score?</h4><div class="col-md-6" id="credit-score-good"><button class="btn btn-select-credit_score frmbldr-btn btn-outline-danger" data-value="good">700 +<br>Good</button></div><div class="col-md-6" id="credit-score-fair"><button class="btn btn-select-credit_score frmbldr-btn btn-outline-danger" data-value="fair">561 - 700<br>Fair</button></div><div class="col-md-6" id="credit-score-low"><button class="btn btn-select-credit_score frmbldr-btn btn-outline-danger" data-value="low">&lt; 560<br>Low</button></div><div class="col-md-6" id="credit-score-excellent"><button class="btn btn-select-credit_score frmbldr-btn btn-outline-danger" data-value="unknown">???<br>Not Sure</button></div></div></div><div class="row step" id="step2" style="display: none;"><h4 class="text-center col-md-10 mx-auto">We just need a little more information to continue...</h4><div class="form-group col-md-6"><label class="mb-1" for="title">Salutation</label><select id="title" name="title" class="form-control form-select required" disabled="disabled"><option value="">Choose...</option><option value="mr">Mr</option><option value="ms">Ms</option><option value="mrs">Mrs</option></select></div><div class="form-group col-md-6"><label class="mb-1" for="first_name">First Name</label><input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control required" disabled="disabled"></div><div class="form-group col-md-6"><label class="mb-1" for="last_name">Last Name</label><input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control required" disabled="disabled"></div><div class="form-group col-md-6"><label class="mb-1" for="home_phone">Primary Phone</label><input type="text" id="home_phone" name="home_phone" placeholder="Phone" class="form-control required validate-phone digits" disabled="disabled" maxlength="10" minlength="10"></div><div class="form-group col-md-6"><label class="mb-1" for="email">Email</label><div class="input-group"><span class="input-group-text"><i class="fa fa-envelope"></i></span><input type="text" id="email" name="email" placeholder="your@email.com" class="form-control required email validate_email" disabled="disabled"></div></div><div class="form-group col-md-6 hide"><label class="mb-1" for="city">City</label><input type="text" id="city" name="city" placeholder="City" class="form-control required" disabled="disabled"></div><div class="form-group col-md-6 hide"><label class="mb-1" for="state">Province</label><select id="state" name="state" class="form-control form-select required" disabled="disabled"><option value="">Choose...</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NS">Nova Scotia</option><option value="NT">Northwest Territories</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Québec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon</option></select></div><div class="form-group col-md-12"><label class="mb-1 checkbox" for="opt_in"><input type="checkbox" id="opt_in" name="opt_in" disabled="disabled" class="me-2"><small>I would like to receive electronic messages from Lionsgate Financial Group containing news, updates and promotions regarding its products and services, including third party promotions (you can withdraw your consent at any time). This request is made by Lionsgate Financial Group Email communications are sent via Lionsgate Financial Group's mailing systems.</small></label></div><div class="clearfix"></div><div class="text-center py-2"><small>By continuing with this form, you consent, acknowledge, and agree to our <a href="https://lionsgatefinancialgroup.ca/privacy-policy" target="_blank">privacy policy</a> including lionsgatefinancialgroup.ca and/or its other partners contacting you by phone or e-mail to respond to (or request feedback from) your request.</small></div></div>
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