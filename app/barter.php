<?php include("header.php");?>


            <h1 class="text-center text-white col-sm-10 mx-auto">Grow Your Business With Lionsgate Financial Group</h1>
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

                            <form class="form" class="form" method="POST" novalidate="novalidate">
                                    <input type="hidden" value="barter_loan" name="product_name">
                                <div class="row step" id="step0">
                                    <h4 class="text-center">Speak With A Barter Exchange Specialist</h4>

                                    <div class="col-3 mx-auto text-center mt-2" id="loading_icon" style="display: none;">
                                        <img src="./images/1496 (1).gif" alt="">
                                    </div>
                                    <div class="text-center my-2" id="response"></div>
                                    <div class="form-group col-md-6 col-sm-12 mx-auto" id="post_code">
                                        <label class="mb-1" for="postal_code">Enter Your Postal Code</label>
                                    <input type="text" id="postal_code" name="postal_code" placeholder="A9A9A9" class="form-control required validate_postal" maxlength="6" minlength="6">
                                    </div>
                                </div>
                                <div class="row step" id="step1" style="display: none;">
                                    <h4 class="text-center">Speak With A Barter Exchange Specialist</h4>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control required" ></div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control required" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="home_phone">Primary Phone</label>
                                    <input type="text" id="home_phone" name="home_phone" placeholder="Phone" class="form-control required validate-phone digits"  maxlength="10" minlength="10">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="work_phone">Work Phone</label>
                                    <input type="text" id="work_phone" name="work_phone" placeholder="Phone" class="form-control required validate-phone digits hide-for-short-version"  maxlength="10" minlength="10">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="text" id="email" name="email" placeholder="your@email.com" class="form-control required email validate_email" >
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6 hide">
                                        <label class="mb-1" for="city">City</label>
                                    <input type="text" id="city" name="city" placeholder="City" class="form-control required" >
                                    </div>
                                    <div class="form-group col-md-6 hide">
                                        <label class="mb-1" for="state">Province</label>
                                    <select id="state" name="state" class="form-control form-select required" >
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
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="company_name">Company Name</label>
                                    <input type="text" id="company_name" name="company_name" placeholder="Company Name" class="form-control required" >
                                </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-1" for="business_type">Industry</label>
                                    <select id="business_type" name="business_type" class="form-control form-select required" >
                                        <option value="">Choose...</option>
                                    <option value="ACCOUNTING">ACCOUNTING</option>
                                    <option value="AGRICULTURE_FARMING">AGRICULTURE FARMING</option>
                                    <option value="ANIMAL_BOARDING">ANIMAL BOARDING</option>
                                    <option value="APPAREL_ACCESSORIES">APPAREL ACCESSORIES</option>
                                    <option value="AUTO_TRUCK_DEALERSHIP">AUTO TRUCK DEALERSHIP</option>
                                    <option value="AUTO_BODY">AUTO BODY</option>
                                    <option value="AUTO_RENTAL">AUTO RENTAL</option>
                                    <option value="BEAUTY_SALON_BARBER_SHOP">BEAUTY SALON BARBER SHOP</option>
                                    <option value="BUILDING_MATERIALS">BUILDING MATERIALS</option>
                                    <option value="BUSINESS_SERVICES">BUSINESS SERVICES</option>
                                    <option value="CAR_WASH">CAR WASH</option>
                                    <option value="CELLULAR_WIRELESS_STORE">CELLULAR WIRELESS STORE</option>
                                    <option value="CHILD_EDUCATION">CHILD EDUCATION</option>
                                    <option value="CONSULTING">CONSULTING</option>
                                    <option value="DAY_CARE_SERVICES">DAY CARE SERVICES</option>
                                    <option value="DOCTOR">DOCTOR</option>
                                    <option value="ELECTRONICS_COMPUTERS">ELECTRONICS COMPUTERS</option>
                                    <option value="ENTERTAINMENT">ENTERTAINMENT</option>
                                    <option value="EQUIPMENT_RENTAL">EQUIPMENT RENTAL</option>
                                    <option value="FABRICATION">FABRICATION</option>
                                    <option value="FINANCIAL_SERVICES">FINANCIAL SERVICES</option>
                                    <option value="FRANCHISE">FRANCHISE</option>
                                    <option value="FUNERAL_HOME">FUNERAL HOME</option>
                                    <option value="GAMING">GAMING</option>
                                    <option value="GAS_STATION">GAS STATION</option>
                                    <option value="GENERAL_CONTRACTOR">GENERAL CONTRACTOR</option>
                                    <option value="GENERAL_MERCHANDISE_STORE">GENERAL MERCHANDISE STORE</option>
                                    <option value="GROCERY_CONVENIENCE_STORE">GROCERY CONVENIENCE STORE</option>
                                    <option value="GUNS_AMMUNITION_STORE">GUNS AMMUNITION STORE</option>
                                    <option value="GYM_FITNESS_TRAINER">GYM FITNESS TRAINER</option>
                                    <option value="HEALTH_SERVICES">HEALTH SERVICES</option>
                                    <option value="HOME_FURNISHINGS">HOME FURNISHINGS</option>
                                    <option value="HOTEL_MOTEL">HOTEL/MOTEL</option>
                                    <option value="HVAC">HVAC</option>
                                    <option value="INSURANCE_BROKERS">INSURANCE BROKERS</option>
                                    <option value="INTERNET_RETAILER">INTERNET RETAILER</option>
                                    <option value="LANDSCAPING_SERVICES">LANDSCAPING SERVICES</option>
                                    <option value="LAUNDRY_GARMENT_SERVICES">LAUNDRY GARMENT SERVICES</option>
                                    <option value="LAW_FIRM">LAW FIRM</option>
                                    <option value="LEGAL_COUNSEL">LEGAL COUNSEL</option>
                                    <option value="LOCKSMITH">LOCKSMITH</option>
                                    <option value="MANUFACTURING">MANUFACTURING</option>
                                    <option value="MARKETING">MARKETING</option>
                                    <option value="MEDIA_PRODUCTION">MEDIA PRODUCTION</option>
                                    <option value="MEDICAL_HEALTHCARE">MEDICAL HEALTHCARE</option>
                                    <option value="NAIL_SALON">NAIL SALON</option>
                                    <option value="OIL_INDUSTRY">OIL INDUSTRY</option>
                                    <option value="OTHER">OTHER</option>
                                    <option value="PHOTOGRAPHY_STUDIO">PHOTOGRAPHY STUDIO</option>
                                    <option value="POOL_SERVICES">POOL SERVICES</option>
                                    <option value="PRINTING">PRINTING</option>
                                    <option value="REAL_ESTATE_RELATED">REAL ESTATE RELATED</option>
                                    <option value="RECREATION">RECREATION</option>
                                    <option value="RESIDENTIAL_CONTRACTOR">RESIDENTIAL CONTRACTOR</option>
                                    <option value="RESTAURANT_CAFE_BAR">RESTAURANT CAFE BAR</option>
                                    <option value="RETAIL_STORE">RETAIL STORE</option>
                                    <option value="SANITATION">SANITATION</option>
                                    <option value="SECURITY_SERVICES">SECURITY SERVICES</option>
                                    <option value="SENIOR_CARE_ASSISTED_LIVING">SENIOR CARE ASSISTED LIVING</option>
                                    <option value="SMOKE_SHOP">SMOKE SHOP</option>
                                    <option value="SOLAR">SOLAR</option>
                                    <option value="SPA_SERVICES">SPA SERVICES</option>
                                    <option value="STAFFING">STAFFING</option>
                                    <option value="TANNING_SALON">TANNING SALON</option>
                                    <option value="TAX_PREPARATION">TAX PREPARATION</option>
                                    <option value="TECHNOLOGY_COMPANY">TECHNOLOGY COMPANY</option>
                                    <option value="TRAVEL_TRANSPORTATION">TRAVEL TRANSPORTATION</option>
                                    <option value="UNIFORM_SUPPLIER">UNIFORM SUPPLIER</option>
                                    <option value="VETERINARY_CLINIC">VETERINARY CLINIC</option>
                                    <option value="WASTE_MANAGEMENT">WASTE MANAGEMENT</option>
                                    <option value="WHOLESALER">WHOLESALER</option>
                                    <option value="WINE_LIQUOR_STORE">WINE LIQUOR STORE</option>
                                </select>
                                </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-1 checkbox" for="opt_in">
                                        <input type="checkbox" id="opt_in" name="opt_in"  class="me-2">
                                    <small>I would like to receive electronic messages from Lionsgate Financial Group containing news, updates and promotions regarding its products and services, including third party promotions (you can withdraw your consent at any time). This request is made by Lionsgate Financial Group Email communications are sent via Lionsgate Financial Group's mailing systems.</small>
                                </label>
                                </div>
                                    <div class="clearfix">

                                    </div>
                                    <div class="text-center py-2"><small>By continuing with this form, you consent, acknowledge, and agree to our <a href="https://lionsgatefinancialgroup.ca/privacy-policy" target="_blank">privacy policy</a> including lionsgatefinancialgroup.ca and/or its other partners contacting you by phone or e-mail to respond to (or request feedback from) your request.</small>
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