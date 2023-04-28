<?php


// get form data
// get form data
$productName = !empty($_POST['productName']) ? $_POST['productName'] : 0;
$desiredAmount = !empty($_POST['desiredAmount']) ? $_POST['desiredAmount'] : 0;
$purpose = !empty($_POST['purpose']) ? $_POST['purpose'] : '';
$creditScore = !empty($_POST['creditScore']) ? $_POST['creditScore'] : 0;
$incomeSource = !empty($_POST['incomeSource']) ? $_POST['incomeSource'] : '';
$postalCode = !empty($_POST['postalCode']) ? $_POST['postalCode'] : '';
$monthlyIncome = !empty($_POST['monthlyIncome']) ? $_POST['monthlyIncome'] : 0;
$fullname = !empty($_POST['fullname']) ? $_POST['fullname'] : '';
$primaryPhone = !empty($_POST['primaryPhone']) ? $_POST['primaryPhone'] : '';
$email = !empty($_POST['email']) ? $_POST['email'] : '';
$dob = !empty($_POST['dob']) ? $_POST['dob'] : '';
$province = !empty($_POST['province']) ? $_POST['province'] : '';
$address = !empty($_POST['address']) ? $_POST['address'] : '';
$timeAtAddress = !empty($_POST['timeAtAddress']) ? $_POST['timeAtAddress'] : '';
$propertyStatus = !empty($_POST['propertyStatus']) ? $_POST['propertyStatus'] : '';
$rmPayment = !empty($_POST['rmPayment']) ? $_POST['rmPayment'] : 0;
$propertyValue = !empty($_POST['propertyValue']) ? $_POST['propertyValue'] : 0;
$propertyMortage = !empty($_POST['propertyMortage']) ? $_POST['propertyMortage'] : 0;
$bankruptcyStatus = !empty($_POST['bankruptcyStatus']) ? $_POST['bankruptcyStatus'] : '';
$debtProgramStatus = !empty($_POST['debtProgramStatus']) ? $_POST['debtProgramStatus'] : '';
$consumerProposal = !empty($_POST['consumerProposal']) ? $_POST['consumerProposal'] : '';
$employername = !empty($_POST['employername']) ? $_POST['employername'] : '';
$timeAtJob = !empty($_POST['timeAtJob']) ? $_POST['timeAtJob'] : '';
$occupation = !empty($_POST['occupation']) ? $_POST['occupation'] : '';
$workPhone = !empty($_POST['workPhone']) ? $_POST['workPhone'] : '';
$directDeposit = !empty($_POST['directDeposit']) ? $_POST['directDeposit'] : '';
$payFrequency = !empty($_POST['payFrequency']) ? $_POST['payFrequency'] : '';
$nextPayDate = !empty($_POST['nextPayDate']) ? $_POST['nextPayDate'] : '';
$payDateAfterNext = !empty($_POST['payDateAfterNext']) ? $_POST['payDateAfterNext'] : '';
$creditCardDebtAmount = !empty($_POST['creditCardDebtAmount']) ? $_POST['creditCardDebtAmount'] : 0;
$totalOtherUnsecuredDebt = !empty($_POST['totalOtherUnsecuredDebt']) ? $_POST['totalOtherUnsecuredDebt'] : 0;
$authorization = !empty($_POST['authorization']) ? $_POST['authorization'] : '';
$agreeToRecieveUpdates = !empty($_POST['agreeToRecieveUpdates']) ? $_POST['agreeToRecieveUpdates'] : '';
$companyName = !empty($_POST['companyName']) ? $_POST['companyName'] : '';
$industry = !empty($_POST['industry']) ? $_POST['industry'] : '';
$city = !empty($_POST['city']) ? $_POST['city'] : '';
$grossSalesMonthly = !empty($_POST['grossSalesMonthly']) ? $_POST['grossSalesMonthly'] : 0;
$grossSalesDC = !empty($_POST['grossSalesDC']) ? $_POST['grossSalesDC'] : 0;
$businessStartDate = !empty($_POST['businessStartDate']) ? $_POST['businessStartDate'] : '';
$assetType = !empty($_POST['assetType']) ? $_POST['assetType'] : '';
$assetDesc = !empty($_POST['assetDesc']) ? $_POST['assetDesc'] : '';
// $asset_type_custom = !empty($_POST['asset_type_custom']) ? $_POST['asset_type_custom'] : '';
$assetFinanced = !empty($_POST['assetFinanced']) ? $_POST['assetFinanced'] : '';
$assetFinanceAmount = !empty($_POST['assetFinanceAmount']) ? $_POST['assetFinanceAmount'] : 0;
$paymentProcessor = !empty($_POST['paymentProcessor']) ? $_POST['paymentProcessor'] : '';
$incomeLastYearNOA = !empty($_POST['incomeLastYearNOA']) ? $_POST['incomeLastYearNOA'] : 0;
$incomeYearBeforLastNOA = !empty($_POST['incomeYearBeforLastNOA']) ? $_POST['incomeYearBeforLastNOA'] : 0;
$liquidEquity = !empty($_POST['liquidEquity']) ? $_POST['liquidEquity'] : 0;
$nonLiquidEquity = !empty($_POST['nonLiquidEquity']) ? $_POST['nonLiquidEquity'] : 0;
$whatToFinance = !empty($_POST['whatToFinance']) ? $_POST['whatToFinance'] : '';
$assetPrice = !empty($_POST['assetPrice']) ? $_POST['assetPrice'] : 0;
$requestedFinanceAmount = !empty($_POST['requestedFinanceAmount']) ? $_POST['requestedFinanceAmount'] : 0;
$carType = !empty($_POST['carType']) ? $_POST['carType'] : 'Unknown';
$monthlyBudget = !empty($_POST['monthlyBudget']) ? $_POST['monthlyBudget'] : 0;
$incomeProof = !empty($_POST['incomeProof']) ? $_POST['incomeProof'] : '';
$carOwnership = !empty($_POST['carOwnership']) ? $_POST['carOwnership'] : '';
$carValue = !empty($_POST['carValue']) ? $_POST['carValue'] : 0;
$carFinanceBalance = !empty($_POST['carFinanceBalance']) ? $_POST['carFinanceBalance'] : 0;
$carYear = !empty($_POST['carYear']) ? $_POST['carYear'] : '';
$carMileage = !empty($_POST['carMileage']) ? $_POST['carMileage'] : '';
$carMake = !empty($_POST['carMake']) ? $_POST['carMake'] : '';
$carModel = !empty($_POST['carModel']) ? $_POST['carModel'] : '';
$lender = !empty($_POST['lender']) ? $_POST['lender'] : '';
$currentLoan = !empty($_POST['currentLoan']) ? $_POST['currentLoan'] : '';
$monthlyPayment = !empty($_POST['monthlyPayment']) ? $_POST['monthlyPayment'] : 0;
$remainingMonths = !empty($_POST['remainingMonths']) ? $_POST['remainingMonths'] : 0;

// connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=loandb';
$username = 'root';
$password = '';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
  $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}

// prepare SQL statement
$sql = 'INSERT INTO tbl_loan (productName,desiredAmount, purpose, creditScore, incomeSource, postalCode, monthlyIncome, fullname, prPhone, email, dob, province, address, timeAtAddress, propertyStatus, rmPayment, propertyValue, propertyMortage, bankruptcyStatus, debtProgramStatus, consumerProposal, employername, timeAtJob, occupation, workPhone, directDeposit, payFrequency, nextPayDate, payDateAfterNext, creditCardDebtAmount, totalOtherUnsecuredDebt, authorization, agreeToRecieveUpdates, companyName, industry, city, grossSalesMonthly, grossSalesDC, businessStartDate, assetType, assetDesc, assetFinanced, assetFinanceAmount, paymentProcessor, incomeLastYearNOA, incomeYearBeforLastNOA, liquidEquity, nonLiquidEquity, whatToFinance, assetPrice, requestedFinanceAmount, carType, monthlyBudget, incomeProof, carOwnership, carValue, carFinanceBalance, carYear, carMileage, carMake, carModel, lender, currentLoan, monthlyPayment, remainingMonths) VALUES (:productName, :desiredAmount, :purpose, :creditScore, :incomeSource, :postalCode, :monthlyIncome, :fullname, :primaryPhone, :email, :dob, :province, :address, :timeAtAddress, :propertyStatus, :rmPayment, :propertyValue, :propertyMortage, :bankruptcyStatus, :debtProgramStatus, :consumerProposal, :employername, :timeAtJob, :occupation, :workPhone, :directDeposit, :payFrequency, :nextPayDate, :payDateAfterNext, :creditCardDebtAmount, :totalOtherUnsecuredDebt, :authorization, :agreeToRecieveUpdates, :companyName, :industry, :city, :grossSalesMonthly, :grossSalesDC, :businessStartDate, :assetType, :assetDesc, :assetFinanced, :assetFinanceAmount, :paymentProcessor, :incomeLastYearNOA, :incomeYearBeforLastNOA, :liquidEquity, :nonLiquidEquity, :whatToFinance, :assetPrice, :requestedFinanceAmount, :carType, :monthlyBudget, :incomeProof, :carOwnership, :carValue, :carFinanceBalance, :carYear, :carMileage, :carMake, :carModel, :lender, :currentLoan, :monthlyPayment, :remainingMonths)';
$stmt = $pdo->prepare($sql);

// bind parameters and execute statement
$stmt->bindParam(':productName', $productName);
$stmt->bindParam(':desiredAmount', $desiredAmount);
$stmt->bindParam(':purpose', $purpose);
$stmt->bindParam(':creditScore', $creditScore);
$stmt->bindParam(':incomeSource', $incomeSource);
$stmt->bindParam(':postalCode', $postalCode);
$stmt->bindParam(':monthlyIncome', $monthlyIncome);
$stmt->bindParam(':fullname', $fullname);
$stmt->bindParam(':primaryPhone', $primaryPhone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':dob', $dob);
$stmt->bindParam(':province', $province);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':timeAtAddress', $timeAtAddress);
$stmt->bindParam(':propertyStatus', $propertyStatus);
$stmt->bindParam(':rmPayment', $rmPayment);
$stmt->bindParam(':propertyValue', $propertyValue);
$stmt->bindParam(':propertyMortage', $propertyMortage);
$stmt->bindParam(':bankruptcyStatus', $bankruptcyStatus);
$stmt->bindParam(':debtProgramStatus', $debtProgramStatus);
$stmt->bindParam(':consumerProposal', $consumerProposal);
$stmt->bindParam(':employername', $employername);
$stmt->bindParam(':timeAtJob', $timeAtJob);
$stmt->bindParam(':occupation', $occupation);
$stmt->bindParam(':workPhone', $workPhone);
$stmt->bindParam(':directDeposit', $directDeposit);
$stmt->bindParam(':payFrequency', $payFrequency);
$stmt->bindParam(':nextPayDate', $nextPayDate);
$stmt->bindParam(':payDateAfterNext', $payDateAfterNext);
$stmt->bindParam(':creditCardDebtAmount', $creditCardDebtAmount);
$stmt->bindParam(':totalOtherUnsecuredDebt', $totalOtherUnsecuredDebt);
$stmt->bindParam(':authorization', $authorization);
$stmt->bindParam(':agreeToRecieveUpdates', $agreeToRecieveUpdates);
$stmt->bindParam(':companyName', $companyName);
$stmt->bindParam(':industry', $industry);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':grossSalesMonthly', $grossSalesMonthly);
$stmt->bindParam(':grossSalesDC', $grossSalesDC);
$stmt->bindParam(':businessStartDate', $businessStartDate);
$stmt->bindParam(':assetType', $assetType);
$stmt->bindParam(':assetDesc', $assetDesc);
// $stmt->bindParam(':asset_type_custom', $asset_type_custom);
$stmt->bindParam(':assetFinanced', $assetFinanced);
$stmt->bindParam(':assetFinanceAmount', $assetFinanceAmount);
$stmt->bindParam(':paymentProcessor', $paymentProcessor);
$stmt->bindParam(':incomeLastYearNOA', $incomeLastYearNOA);
$stmt->bindParam(':incomeYearBeforLastNOA', $incomeYearBeforLastNOA);
$stmt->bindParam(':liquidEquity', $liquidEquity);
$stmt->bindParam(':nonLiquidEquity', $nonLiquidEquity);
$stmt->bindParam(':whatToFinance', $whatToFinance);
$stmt->bindParam(':assetPrice', $assetPrice);
$stmt->bindParam(':requestedFinanceAmount', $requestedFinanceAmount);
$stmt->bindParam(':carType', $carType);
$stmt->bindParam(':monthlyBudget', $monthlyBudget);
$stmt->bindParam(':incomeProof', $incomeProof);
$stmt->bindParam(':carOwnership', $carOwnership);
$stmt->bindParam(':carValue', $carValue);
$stmt->bindParam(':carFinanceBalance', $carFinanceBalance);
$stmt->bindParam(':carYear', $carYear);
$stmt->bindParam(':carMileage', $carMileage);
$stmt->bindParam(':carMake', $carMake);
$stmt->bindParam(':carModel', $carModel);
$stmt->bindParam(':lender', $lender);
$stmt->bindParam(':currentLoan', $currentLoan);
$stmt->bindParam(':monthlyPayment', $monthlyPayment);
$stmt->bindParam(':remainingMonths', $remainingMonths);
$stmt->execute();

// get ID of inserted row
$id = $pdo->lastInsertId();


// mail
  $to = "muhammadhafizullah724@gmail.com";
  $subject = "New form submission";
  $headers = array(
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion()
);
  $body = "";

  if($productName != "" || $productName != 0){$body .="Loan Type: $productName\n";}

  if($desiredAmount != "" || $desiredAmount != 0){$body .="Desired Amount: $desiredAmount\n";}

  if($purpose != "" || $purpose != 0){$body .="Purpose: $purpose\n";}

  if($creditScore != "" || $creditScore != 0){$body .="Credit Score: $creditScore\n";}

  if($incomeSource != "" || $incomeSource != 0){$body .="Income source: $incomeSource\n";}


  if($postalCode != "" || $postalCode != 0){$body .="Postal Code: $postalCode\n";}

  if($monthlyIncome != "" || $monthlyIncome != 0){$body .="Monthly icome: $monthlyIncome\n";}

  if($fullname != "" || $fullname != 0){$body .="Name: $fullname\n";}

  if($primaryPhone != "" || $primaryPhone != 0){$body .="Primay phone: $primaryPhone\n";}

  if($email != "" || $email != 0){$body .="Email: $email\n";}

  if($address != "" || $address != 0){$body .="Address: $address\n";}

  if($province != "" || $province != 0){$body .="Province: $province\n";}

  if($timeAtAddress != "" || $timeAtAddress != 0){$body .="Time At Address: $timeAtAddress\n";}

  if($propertyStatus != "" || $propertyStatus != 0){$body .="Propert Status: $propertyStatus\n";}

  if($rmPayment != "" || $rmPayment != 0){$body .="Rent/Mortage Payment: $rmPayment\n";}

  if($propertyValue != "" || $propertyValue != 0){$body .="Property value: $propertyValue\n";}

  if($propertyMortage != "" || $propertyMortage != 0){$body .="Property mortage: $propertyMortage\n";}

  if($propertyMortage != "" || $propertyMortage != 0){$body .="Property mortage: $propertyMortage\n";}

  if($bankruptcyStatus != "" || $bankruptcyStatus != 0){$body .="Currently in bankruptcy: $bankruptcyStatus\n";}

  if($debtProgramStatus != "" || $debtProgramStatus != 0){$body .="Currently in debt program: $debtProgramStatus\n";}

  if($consumerProposal != "" || $consumerProposal != 0){$body .="Currently in consumer program: $consumerProposal\n";}

  if($employername != "" || $employername != 0){$body .="Employer name: $employername\n";}

  if($timeAtJob != "" || $timeAtJob != 0){$body .="Time at job: $timeAtJob\n";}

  if($occupation != "" || $occupation != 0){$body .="Occupation: $occupation\n";}

  if($workPhone != "" || $workPhone != 0){$body .="Work Phone: $workPhone\n";}

  if($directDeposit != "" || $directDeposit != 0){$body .="Direct deposit: $directDeposit\n";}

  if($payFrequency != "" || $payFrequency != 0){$body .="Pay frrequency: $payFrequency\n";}

  if($nextPayDate != "" || $nextPayDate != 0){$body .="Next pay date: $nextPayDate\n";}

  if($payDateAfterNext != "" || $payDateAfterNext != 0){$body .="Pay date after next: $payDateAfterNext\n";}

  if($creditCardDebtAmount != "" || $creditCardDebtAmount != 0){$body .="Credit card debt amount: $creditCardDebtAmount\n";}

  if($totalOtherUnsecuredDebt != "" || $totalOtherUnsecuredDebt != 0){$body .="Other unsecured debt: $totalOtherUnsecuredDebt\n";}

  if($authorization != "" || $authorization != 0){$body .="Information confirmation: $authorization\n";}

  if($agreeToRecieveUpdates != "" || $agreeToRecieveUpdates != 0){$body .="Want to recieve news and updates: $agreeToRecieveUpdates\n";}

  if($companyName != "" || $companyName != 0){$body .="\n\n<h3>Business Information</h3>\n\nCompany name: $companyName\n";}

  if($industry != "" || $industry != 0){$body .="Industry: $industry\n";}

  if($city != "" || $city != 0){$body .="city: $city\n";}

  if($grossSalesMonthly != "" || $grossSalesMonthly != 0){$body .="Gross Sales Monthly: $grossSalesMonthly\n";}

  if($grossSalesDC != "" || $grossSalesDC != 0){$body .="Gross Sales Description: $grossSalesDC\n";}

  if($businessStartDate != "" || $businessStartDate != 0){$body .="Business Start Date: $businessStartDate\n";}

  if($assetType != "" || $assetType != 0){$body .="\n\n<h3>Assets Information</h3>\n\nAsset type: $assetType\n";}

  if($assetDesc != "" || $assetDesc != 0){$body .="Asset Desciription: $assetDesc\n";}

  if($assetFinanced != "" || $assetFinanced != 0){$body .="Asset financed: $assetFinanced\n";}

  if($assetFinanceAmount != "" || $assetFinanceAmount != 0){$body .="Asset financed amount: $assetFinanceAmount\n";}

  if($paymentProcessor != "" || $paymentProcessor != 0){$body .="Payment Processor: $paymentProcessor\n";}

  if($incomeLastYearNOA != "" || $incomeLastYearNOA != 0){$body .="Income last year NOA: $incomeLastYearNOA\n";}

  if($incomeYearBeforLastNOA != "" || $incomeYearBeforLastNOA != 0){$body .="Income last year befor NOA: $incomeYearBeforLastNOA\n";}

  if($liquidEquity != "" || $liquidEquity != 0){$body .="Liquid equity: $liquidEquity\n";}

  if($nonLiquidEquity != "" || $nonLiquidEquity != 0){$body .="Non-liquid equity: $nonLiquidEquity\n";}

  if($whatToFinance != "" || $whatToFinance != 0){$body .="What to finance: $whatToFinance\n";}

  if($assetPrice != "" || $assetPrice != 0){$body .="Asset price: $assetPrice\n";}

  if($requestedFinanceAmount != "" || $requestedFinanceAmount != 0){$body .="Requested finance amount: $requestedFinanceAmount\n";}

  if($requestedFinanceAmount != "" || $requestedFinanceAmount != 0){$body .="Requested finance amount: $requestedFinanceAmount\n";}

  if($carType != "" || $carType != 0){$body .="\n\n<h3>Car information</h3>\n\nCar type: $carType\n";}

  if($monthlyBudget != "" || $monthlyBudget != 0){$body .="Monthly budget: $monthlyBudget\n";}

  if($incomeProof != "" || $incomeProof != 0){$body .="Has income proof?: $incomeProof\n";}

  if($carOwnership != "" || $carOwnership != 0){$body .="Car ownership: $carOwnership\n";}

  if($carValue != "" || $carValue != 0){$body .="Car value: $carValue\n";}

  if($carFinanceBalance != "" || $carFinanceBalance != 0){$body .="Car finance balance: $carFinanceBalance\n";}

  if($carYear != "" || $carYear != 0){$body .="Car year: $carYear\n";}

  if($carMileage != "" || $carMileage != 0){$body .="Car mileage: $carMileage\n";}

  if($carMake != "" || $carMake != 0){$body .="Car maker: $carMake\n";}

  if($carModel != "" || $carModel != 0){$body .="Car model: $carModel\n";}

  if($lender != "" || $lender != 0){$body .="Lender: $lender\n";}

  if($currentLoan != "" || $currentLoan != 0){$body .="Current loan: $currentLoan\n";}

  if($monthlyPayment != "" || $monthlyPayment != 0){$body .="Monthly payment: $monthlyPayment\n";}

  if($remainingMonths != "" || $remainingMonths != 0){$body .="Remaining months: $remainingMonths\n";}

  if(!empty($body) && mail($to,$subject,$body,$headers)){
    echo "<div class='text-center'><h3 class='mt-4 mb-2'>Thank you</h3><h4 class='mb-3'>Your request is submitted</h4><p>You will get an email soon</p></div>";
  }
  else {
    echo "<p class='text-danger text-center'>There was an error processing you request <br> please try again</p>";
  }



?>