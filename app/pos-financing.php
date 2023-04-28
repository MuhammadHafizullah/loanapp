<?php include("header.php");?>


            <h1 class="text-center text-white col-sm-10 mx-auto">Buy Now Pay Later Merchant Solutions</h1>
            <div class="row preloaded_app panel panel-default mx-auto mt-4 py-4">
                <div class="panel-body">
                    <div class="row">
                        <h2 class='panel-subheading text-center'>
                        Get Your FREE Quote
                        </h2>
                        <div id="preloaded_app-container" class="step">
                            <form class="form" method="POST" novalidate="novalidate">
                                    <input type="hidden" value="pos_financing" name="product_name" id="product_name"><div class="row" id="step0"><div class="form-group col-md-6"><label class="mb-1" for="first_name">First Name</label><input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control required"></div><div class="form-group col-md-6"><label class="mb-1" for="last_name">Last Name</label><input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control required"></div><div class="form-group col-md-6"><label class="mb-1" for="home_phone">Primary Phone</label><input type="text" id="home_phone" name="home_phone" placeholder="Phone" class="form-control required validate-phone digits" maxlength="10" minlength="10"></div><div class="form-group col-md-6"><label class="mb-1" for="email">Email</label><div class="input-group"><span class="input-group-text"><i class="fa fa-envelope"></i></span><input type="text" id="email" name="email" placeholder="your@email.com" class="form-control required email validate_email"></div></div><div class="form-group col-md-6"><label class="mb-1" for="address">Address</label><input type="text" id="address" name="address" placeholder="Your address" class="form-control required" autocomplete="lc_43_address"></div><div class="form-group col-md-6"><label class="mb-1" for="state">Province</label><select id="state" name="state" class="form-control form-select required"><option value="">Choose...</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NS">Nova Scotia</option><option value="NT">Northwest Territories</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Québec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon</option></select></div><div class="form-group col-md-6"><label class="mb-1" for="company_name">Company Name</label><input type="text" id="company_name" name="company_name" placeholder="Company Name" class="form-control required"></div><div class="form-group col-md-6"><label class="mb-1" for="business_type">Industry</label><select id="business_type" name="business_type" class="form-control form-select required"><option value="">Choose...</option><option value="RETAIL">RETAIL</option><option value="HOME_IMPROVEMENT">HOME IMPROVEMENT</option><option value="POWERSPORTS">POWERSPORTS</option><option value="AUTOMOTIVE">AUTOMOTIVE</option><option value="HEALTHCARE">HEALTHCARE</option><option value="OTHER">OTHER</option></select></div><div class="form-group col-md-12"><label class="mb-1 checkbox" for="opt_in"><input type="checkbox" id="opt_in" name="opt_in" class="me-2"><small>I would like to receive electronic messages from Lionsgate Financial Group containing news, updates and promotions regarding its products and services, including third party promotions (you can withdraw your consent at any time). This request is made by Lionsgate Financial Group Email communications are sent via Lionsgate Financial Group's mailing systems.</small></label></div><div class="clearfix"></div><div class="text-center py-2"><small>By continuing with this form, you consent, acknowledge, and agree to our <a href="https://lionsgatefinancialgroup.ca/privacy-policy" target="_blank">privacy policy</a> including lionsgatefinancialgroup.ca and/or its other partners contacting you by phone or e-mail to respond to (or request feedback from) your request.</small></div></div>
                                <div class="row mt-3">
                                    <div class="text-center">
                                        <button type="submit" class="btn-preloaded_app-next btn btn-lg btn-green btn-submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include("footer.php"); ?>