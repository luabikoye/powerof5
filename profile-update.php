<?php

session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

if($_GET['update'] == 'new')
{
	$fullname  =  explode(' ',$_SESSION['firstname']);
	$firstname = $fullname[0];
	$lastname = $fullname[1];
	$email = $_SESSION['email'];
	$mphone = $_SESSION['mphone'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$ref_user = $_SESSION['ref_user'];
}
if($_GET['update'] == 'update')
{
	$query = "select * from profileupdate where username = '".$_SESSION['loggedin']."'";	
	$result = mysql_query($query);	
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$email = $row['email'];
	$dob = $row['dob'];
	$address = $row['address'];
	$city = $row['city'];
	$state = $row['state'];
	$country = $row['country'];
	$zipcode = $row['zipcode'];
	$mphone = $row['mphone'];
	$nomineen = $row['nomineen'];
	$nomineerel = $row['nomineerel'];
	$bankname = $row['bankname'];
	$beneficiary = $row['beneficiary'];
	$acctnbr = $row['acctnbr'];
	$accttype = $row['accttype'];
	$ref_user = $_SESSION['loggedin'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Power of 5</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Affluence Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<!-- fonts -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body>
<?php include('analytics.php'); ?>
<!-- banner section -->
<?php include ("inner_menu.php") ;?>

<!-- about section -->
<div id="banner">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
        	<h1>Join Us Now</h1>
            	<img src="images/abt_banner.jpg" class="img-responsive" alt="best-political-consulting-firms">
            </div>
        </div>
    </div>
</div>





<!---->

<div class="test-booking">
				<div class="container">
                <div class="row">
					<h3 class="last-updated">Update your profile </h3><br><br></div>
                    <div class="clearfix"></div>
					<div class="text-booking-form">
						<div class="col-md-8 text-booking-form-left">
							<form action="proc-profile-update.php" method="post" enctype="multipart/form-data">
								<label>First Name <span>*</span></label>
									<input type="text" name="firstname" class="phone" value="<?php echo $firstname; ?>" readonly>
									<div class="clearfix"></div>
                                    
                                    <label>Last Name<span>*</span></label>
									<input type="text" name="lastname" class="phone" value="<?php echo $lastname; ?>">
									<div class="clearfix"></div>
                                    
                                  <label>Email<span>*</span></label>
									<input type="text" name="email" class="phone" value="<?php echo $email; ?>">
									<div class="clearfix"></div>
                                    
                                  <label>Mobile Number<span>*</span></label>
								<input type="text" name="mphone" class="phone" value="<?php echo $mphone; ?>">
									<div class="clearfix"></div>
                                    
                                    <label>Date of Birth<span>*</span></label>
									<input type="text" name="dob" class="phone" value="<?php echo $dob; ?>" placeholder="dd-mm-yyyy">
									<div class="clearfix"></div>
                                    
                                    <label>Address <span>*</span></label>
									<textarea class="mess" name="address" placeholder="Address"><?php echo $address; ?></textarea>
									<div class="clearfix"></div>
                                    
                                    <label>City<span>*</span></label>
									<input type="text" name="city" class="phone" value="<?php echo $city; ?>">
									<div class="clearfix"></div>
                                    
                                    <label>State<span>*</span></label>
									<input type="text" name="state" class="phone" value="<?php echo $state; ?>">
									<div class="clearfix"></div>
                                    
                                    <label>Country <span>*</span></label>
								     <select name="country" class="form-control">
                            <option>Choose Country</option>
                            <?php if($country){ echo '<option selected >'.$country.'</option>'; } ?>
	<option value="NGA">Nigeria</option>
    <option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
                            </select>
                                    
                                    
									<div class="clearfix"></div>
                                    
                                    	
								<label>Post / Zip Code<span>*</span></label>
									<input type="text" name="zipcode" class="phone" value="<?php echo $zipcode; ?>">
									<div class="clearfix"></div>
                                    
                                    <label>Nominee / Referee Name<span>*</span></label>
									<input type="text" name="nomineen" class="phone" value="<?php echo col_val('profileupdate', 'username', $ref_user, 'firstname'); ?> <?php echo col_val('profileupdate', 'username', $ref_user, 'lastname'); ?>" readonly>
									<div class="clearfix"></div>
                                    
                                   
                                   
                                    
                                   
                                   
                                   
                                    <label>Nominee Relationship<span>*</span></label>
									 <select name="nomineerel" required id="norminee-relationship"; >
                            <?php if($nomineerel){ echo '<option selected>'.$nomineerel.'</option>'; } ?>
                                     <option disabled>Select Nominee Relationship</option>
									  <option value="Spouse">Spouse</option>
									  <option value="Son">Son</option>
                                      <option value="Daugther">Daugther</option>
                                      <option value="Father">Father</option>
                                      <option value="Mother">Mother</option>
                                      <option value="Mother-in-Law">Mother-in-Law</option>
                                      <option value="Father-in-Law">Father-in-Law</option>
                                      <option value="Grand Father">Grand Father</option>
                                      <option value="Grand Mother">Grand Mother</option>
                                      <option value="Grand Son">Grand Son</option>
                                      <option value="Grand Daughter">Grand Daughter</option>
                                      <option value="Other">Other</option>
                                      <option value="Nephew">Nephew</option>
                                      <option value="Son-in-Law">Son-in-Law</option>
									</select>

<div class="clearfix"></div>
                                    
                                    <label>Bank Name<span>*</span></label>
                                    <select name="bankname" required id="bankname"; >
                            <?php if($bankname){ echo '<option selected>'.$bankname.'</option>'; } ?>
                                     <option value="">Select Bank name</option>
                                     <option>ACCESS BANK PLC</option>
<option>ASO SAVINGS AND LOANS</option>
<option>Coronation Merchant Bank</option>
<option>Covenant</option>
<option>DIAMOND BANK PLC</option>
<option>ECOBANK NIGERIA PLC</option>
<option>EKONDO MICROFINANCE BANK</option>
<option>EMPIRE TRUST BANK</option>
<option>FBN Mortgages Limited</option>
<option>FIDELITY BANK PLC</option>
<option>FINATRUST MICROFINANCE BANK</option>
<option>FIRST BANK OF NIGERIA PLC</option>
<option>FIRST CITY MONUMENT BANK PLC</option>
<option>Fortis Microfinance Bank</option>
<option>FSDH MERCHANT BANK LIMIT</option>
<option>GUARANTY TRUST BANK</option>
<option>HERITAGE BANK</option>
<option>IMPERIAL HOMES MORTGAGE BANK</option>
<option>JAIZ BANK PLC</option>
<option>JUBILEE LIFE MORTGAGE BANK</option>
<option>KEYSTONE BANK</option>
<option>New Prudential Bank</option>
<option>NIGERIA INTERNATIONAL BANK (CITIGROUP)</option>
<option>NPF Microfinance Bank</option>
<option>Omoluabi Savings and Loans Plc</option>
<option>PAGA</option>
<option>Page MFBank</option>
<option>PARALLEX MFB</option>
<option>PayAttitude Online</option>
<option>PROVIDUS BANK</option>
<option>RAND MERCHANT BANK</option>
<option>Safetrust Mortgage bank</option>
<option>SEED CAPITAL MICROFINANCE BANK</option>
<option>SKYE BANK PLC</option>
<option>STANBIC IBTC BANK PLC</option>
<option>STANDARD CHARTERED BANK NIGERIA LTD</option>
<option>STERLING BANK PLC</option>
<option>SunTrust Bank</option>
<option>TRUSTBOND MORTGAGE BANK</option>
<option>UNION BANK OF NIGERIA PLC</option>
<option>UNITED BANK FOR AFRICA PLC</option>
<option>UNITY BANK PLC</option>
<option>VFD MICROFINANCE BANK</option>
<option>Visual ICT&nbsp; </option>
<option>WEMA BANK PLC</option>
<option>ZENITH BANK PLC</option>
                                     </select>
									<div class="clearfix"></div>
                                    
                                    <label>Beneficiary<span>*</span></label>
									<input type="text" name="beneficiary" class="phone" value="<?php echo $beneficiary; ?>">
									<div class="clearfix"></div>
                                    
                                    <label>Account Number<span>*</span></label>
									<input type="text" name="acctnbr" class="phone" value="<?php echo $acctnbr; ?>">
									<div class="clearfix"></div>
                                    
								<label>Account Type<span>*</span></label>
                            <?php if($accttype){ echo '<option selected>'.$accttype.'</option>'; } ?>
									 <select name="accttype" required id="accttype"; >
                                     <option disabled>Select Account Type</option>
									  <option value="Savings">Savings</option>
									  <option value="Current">Current</option>
									</select>
								<div class="clearfix"></div>
								<div class="clearfix"></div>
									
									<div class="book-submit">
										<input type="submit" value="Update Now">
									</div>
							</form>
						</div>
						
						<div class="clearfix"></div>
					</div>
					
					
				</div>
			</div>

<!-- /-->

	








<?php include ("foot.php") ?>;






<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>





<!-- /js for portfolio -->

</script>
<!-- /js for about section -->
<!-- js for banner -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for banner -->
<!-- js for navigation -->
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!-- /js for navigation -->

<!-- /js files -->
</body>
</html>