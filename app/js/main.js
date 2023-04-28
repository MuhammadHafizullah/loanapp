$(document).ready(function () {
  // when a button in firstStep is clicked
  $(".btn-select-product").click(function () {
    // hide the firstStep div
    $(".firstStep").hide();
    // show the corresponding step2 div based on the button's data-target attribute
    $($(this).data("toggle")).show();
  });

  // when the "Go Back" button in any step2 div is clicked
  $(".btn-restart").click(function () {
    // hide all step2 divs
    $(".step2").hide();
    // show the firstStep div
    $(".firstStep").show();
  });

  var currentStep = 0;
  var totalSteps = $(".step").length;
  console.log(totalSteps);
  // Show the first step
  $("#step0").show();

  if (totalSteps == 1) {
    $(".btn-submit").show();
    $(".btn-next").hide();
  } else {
    $(".btn-submit").hide();
    // $(".btn-next").show();
  }
  // Handle next button click
  $(".btn-next").click(function (e) {
    e.preventDefault();
    // Hide the current step
    var inputs = $("#step" + currentStep).find(
      "input[type=text],input[type=date],input[type=number], select"
    );
    var checks = $("#step" + currentStep).find(".hidden-checkbox");
    // console.log(inputs);
    for (let i = 0; i < inputs.length; i++) {
      if (
        inputs[i].value === "" ||
        inputs[i].value === 0 ||
        inputs[i].value === false
      ) {
        $(inputs[i]).css("background", "#ffdddd");
        $(".error-msg").show();
        return false;
      }
    }

    if (checks.length > 0) {
      var checked = $("#step" + currentStep).find(".hidden-checkbox:checked");
      if (checked.length == 0) {
        $(".error-msg").show();
        return false;
      }
    }

    $(".error-msg").hide();
    $(".error-msg").html("");
    $("#step" + currentStep).hide();

    // Increment the current step
    currentStep++;

    // Show the next step
    $("#step" + currentStep).show();

    //    enable all the field in the next step
    $("#step" + currentStep)
      .find("input, select, textarea")
      .prop("disabled", false);
    // $('#step' + currentStep).find("input, select, textarea").prop("disabled","");

    // Update the progress bar
    var progress = ((currentStep + 1) / totalSteps) * 100;
    $(".progress-bar").css("width", progress + "%");
    $(".completed").text(Math.floor(progress) + "% Completed");

    if (progress == 100) {
      $(".btn-next").hide();
      $(".btn-submit").show();
    }
  });

  // Handle previous button click
  $(".prev-btn").click(function () {
    // Hide the current step
    $("#step" + currentStep).hide();

    // Decrement the current step
    currentStep--;

    // Show the previous step
    $("#step" + currentStep).show();

    // Update the progress bar
    var progress = ((currentStep + 1) / totalSteps) * 100;
    $("#progress-bar").css("width", progress + "%");
  });

  // Zipcode validation
  $(document).ajaxStart(function () {
    $(".error-msg").hide();
    $("#post_code").hide();
    $("#loading_icon").show();
    $("#response").html("<p>loading...</p>");
  });
  $(document).ajaxStop(function () {
    $("#loading_icon").hide();
  });

  $("#postal_code").on("input", function () {
    var zipCode = $(this).val().replace(/\s+/g, "").toUpperCase(); //removing space and converting to uppercase
    var zipRegex = /^[A-Z]\d[A-Z]?\d[A-Z]\d$/; //regex for validating canadian zipcode

    if (zipRegex.test(zipCode)) {
      // Ajax request to get the name and state name from the provided api
      if (zipCode.length == 6) {
        // debugger;
        $.ajax({
          url:
            "http://api.geonames.org/postalCodeLookupJSON?postalcode=" +
            zipCode +
            "&country=CA&username=coderpak",
          dataType: "jsonp",
          success: function (response) {
            if (
              typeof response.postalcodes !== "undefined" &&
              response.postalcodes.length > 0
            ) {
              $("select#state").val(response.postalcodes[0]["adminCode1"]);

              $(".error-msg").hide();
              $("#response").html(
                "<h3>Congratulations! <br/> Programs are available in your area</h3>"
              );
              setTimeout(() => {
                $("#step" + currentStep).hide();
                currentStep++;
                $("#step" + currentStep).show();
                $("#step" + currentStep)
                .find("input, select, textarea")
                .prop("disabled", false);
                if (currentStep + 1 == totalSteps) {
                  $(".btn-next").hide();
                  $(".btn-submit").show();
                }
              }, 1000);
            } else {
              $("#post_code,.error-msg").show();
              $(".error-msg").text("Enter a valid postal code");
              $("#post_code").show();
              $("#post_code").val("");
            }
          },

          error: function (response) {
            $("#post_code").show();
            $("#response").html("<p class='text-danger'>Failed! Try again</p>");
          },
        });
      }
    } else {
      $(".error-msg").show();
    }
  });

  $("#first_name, #last_name").on("input", function () {
    var name = $(this).val().trim();
    if (name.length >= 2 && /^[a-zA-Z]+$/.test(name)) {
      $("#error-msg").hide();
    } else {
      $("#error-msg").text("enter a valid name");
    }
  });

  $("#own_home").on("change", (e) => {
    var ownHome = $("#own_home :selected").val();
    if(ownHome == "no"){
       $(".property_value,.property_mortgage").hide();
       $("#property_value,#property_mortgage").val(00);
      }
       else{
       $(".property_value,.property_mortgage").show();
       $("#property_value,#property_mortgage").val("");

      }
  });


  $(".form").on("submit",(e)=>{
    e.preventDefault();
    var inputs = $("#step" + currentStep).find(
      "input[type=text],input[type=date],input[type=number], select"
    );
    var checks = $("#step" + currentStep).find(".hidden-checkbox");
    // console.log(inputs);
    for (let i = 0; i < inputs.length; i++) {
      if (
        inputs[i].value === "" ||
        inputs[i].value === 0 ||
        inputs[i].value === false
      ) {
        $(inputs[i]).css("background", "#ffdddd");
        $(".error-msg").show();
        return false;
      }
    }

    if (checks.length > 0) {
      var checked = $("#step" + currentStep).find(".hidden-checkbox:checked");
      if (checked.length == 0) {
        $(".error-msg").show();
        return false;
      }
    }


    var fullname = $("#first_name").val() + $("#last_name").val();
    var formData = {
      'productName' : $("#product_name").val() || 0,
      'desiredAmount': $('#requested_amount').val() || 0,
      'creditScore': $('input[name=creditScore]').val()  || 0,
      'incomeSource': $('input[name=incomeSource]').val()  || 0,
      'postalCode' : $('#postal_code').val()  || 0,
      'monthlyIncome' : $('#monthly_income').val()  || 0,
      'fullname' : fullname || 0,
      'primaryPhone' : $('#home_phone').val()  || 0,
      'email' : $('#email').val()  || 0,
      'dob' : $('#dob').val()  || 0,
      'province' : $('#state').val()  || 0,
      'address' : $('#address').val()  || 0,
      'timeAtAddress' : $('#address_length_months').val()  || 0,
      'propertyStatus' : $('#own_home').val()  || 0,
      'rmPayment' : $('#rent_mortgage_payment').val()  || 0,
      'propertyValue' : $('#property_value').val()  || 0,
      'propertyMortage' : $('#property_mortgage').val()  || 0,
      'bankruptcyStatus' : $('#in_bankruptcy').val()  || 0,
      'debtProgramStatus' : $('#in_dmp').val()  || 0,
      'consumerProposal' : $('#in_consumer_proposal').val()  || 0,
      'employername' : $('#employer').val()  || 0,
      'timeAtJob' : $('#emplemployed_monthsoyer').val()  || 0,
      'occupation' : $('#job_title').val()  || 0,
      'workPhone' : $('#work_phone').val()  || 0,
      'directDeposit' : $('#direct_deposit').val()  || 0,
      'payFrequency' : $('#pay_frequency').val()  || 0,
      'nextPayDate' : $('#pay_date1').val()  || 0,
      'payDateAfterNext' : $('#pay_date2').val()  || 0,
      'creditCardDebtAmount' : $('#cc_debt_amount').val()  || 0,
      'totalOtherUnsecuredDebt' : $('#unsecured_debt_amount').val()  || 0,
      'authorization' : $('#opt_in').val()  || 0,
      'agreeToRecieveUpdates' : $('#credit_auth').val()  || 0,
      'companyName' : $('#company_name').val()  || 0,
      'industry' : $('#business_type').val()  || 0,
      'city' : $('#city').val()  || 0,
      'grossSalesMonthly' : $('#monthly_gross_sales').val()  || 0,
      'grossSalesDC' : $('#monthly_card_sales').val()  || 0,
      'businessStartDate' : $('#business_start_date').val()  || 0,
      'assetType' : $('#asset_type').val()  || 0,
      'assetDesc' : $('#asset_type_custom').val()  || 0,
      'assetValue' : $('#asset_value').val()  || 0,
      'assetFinanced' : $('#asset_financed').val()  || 0,
      'assetFinanceAmount' : $('#asset_financing_amount').val()  || 0,
      'paymentProcessor' : $('#payment_processor').val()  || 0,
      'incomeLastYearNOA' : $('#income_noa_1').val()  || 0,
      'incomeYearBeforLastNOA' : $('#income_noa_2').val()  || 0,
      'liquidEquity' : $('#equity_liquid').val()  || 0,
      'nonLiquidEquity' : $('#equity_non_liquid').val()  || 0,
      'whatToFinance' : $('#new_asset_name').val()  || 0,
      'assetPrice' : $('#new_asset_value').val()  || 0,
      'requestedFinanceAmount' : $('#requested_amount').val()  || 0,
      'carType' : $('input[name=carType]').val()  || 0,
      'monthlyBudget' : $('input[name=monthlyBudget]').val()  || 0,
      'incomeProof' : $('input[name=incomeProof]').val()  || 0,
      'carOwnership' : $('#own_car').val()  || 0,
      'carValue' : $('#car_value').val()  || 0,
      'carFinanceBalance' : $('#car_debt').val()  || 0,
      'carYear' : $('#car_year').val()  || 0,
      'carMileage' : $('#car_mileage').val()  || 0,
      'carMake' : $('#car_make').val()  || 0,
      'carModel' : $('#car_model').val()  || 0,
      'lender' : $('#current_loan_lender').val()  || 0,
      'currentLoan' : $('#current_loan_rate').val()  || 0,
      'monthlyPayment' : $('#current_loan_monthly_payment').val()  || 0,
      'remainingMonths' : $('#current_loan_remaining_months').val()  || 0,
    };
    // send form data to server using AJAX
    $.ajax({
      type: 'POST',
      url: 'insert.php', // replace with your server-side script to handle database insertion
      data: formData,
      // dataType: 'text json',
      encode: true,
      
    })
    .done(function(data) {
      $(".panel-body").html(data);
    })
    .fail(function(data) {
      console.log(data); // log error response from server
      // do something with error response, such as display error message
    });


  });

});
