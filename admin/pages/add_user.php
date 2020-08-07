<?php 
session_start();

include('administrator-session.php');
include('connect.php');
require_once('fns.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico" />	<title>Power of 5 - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

    <?php include('top-nav.php'); ?>

            <?php include('my-nav.php'); ?>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Profile Management</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <h3>Add a new User</h3>
<form action="proc-new-user.php" method="post" enctype="multipart/form-data" >
 <?php if($error)
            {
                ?>
                  <div class="text-danger" style="margin-bottom:10px;"><span class="glyphicon glyphicon-remove"></span> <?php echo $error; ?></div> 
                  
                  <?php } ?>
                  
                   <?php if($correct)
            {
                ?>
                  <div class="text-success" style="margin-bottom:10px;"><span class="glyphicon glyphicon-ok"></span> <?php echo $correct; ?></div> 
                  
                  <?php } ?>

                Enter details to register a new person<br><br>
                <div class="row">
                <div class="col-md-6 col-sm-12">
               
                    
                  <div class="form-group input-group">
                    <label>First Name <span>*</span></label>
							  <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" required>
                    </div>
                        <div class="form-group input-group">
                           <label>Last Name<span>*</span></label>
									<input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" required>
                        </div>
                  <div class="form-group input-group">
                    <label>Email<span>*</span></label>
							  <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
                    </div>
                  <div class="form-group input-group">
                    <label>Mobile Number<span>*</span></label>
							  <input type="text" name="mphone" class="form-control" value="<?php echo $mphone; ?>" required>
                    </div>
                        <div class="form-group input-group">
                           <label>Date of Birth</label>
									<input type="text" name="dob" class="form-control" value="<?php echo $dob; ?>" >
                        </div>
                        <div class="form-group input-group">
                           <label>Address </label>
									<textarea class="form-control" name="address" placeholder="Address" ><?php echo $address; ?></textarea>
                        </div>
                        <div class="form-group input-group">
                           <label>City</label>
									<input type="text" name="city" class="form-control" value="<?php echo $city; ?>" >
                        </div>
                        <div class="form-group input-group">
                          <label>State</label>
									<input type="text" name="state" class="form-control" value="<?php echo $state; ?>" >
                        </div>
                        
                      <div class="form-group input-group">
                          <label>Country</label>
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
                        </div>     
                                                 
                        
                       </div>
                       
                       
                       <div class="col-md-6 col-sm-12">
                       <div class="form-group input-group">  
                          <label>Plan<span>*</span></label>                      
                        <select name="plan" class="form-control" required>
                            <?php if($plan){ echo '<option selected>'.$plan.'</option>'; } ?>
                                                    <option value="">Choose Plan</option>
                                                    <option value="classic">Classic - N<?php echo number_format(plan_price('classic')); ?></option>
                                                    <option value="premium">Premium - N<?php echo number_format(plan_price('premium')); ?></option>
                                                    </select>
                                                 </div>
                       
                       
                        <div class="form-group input-group">
                          <label>Nominee / Referee Name<span>*</span></label>
									<input type="text" name="nomineen" class="form-control" value="<?php echo $nomineen; ?>" required>
                        </div>
                        <div class="form-group input-group">
                           <label>Nominee Relationship</label>
									 <select name="nomineerel" id="norminee-relationship" class="form-control" >
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
                        </div>
                        <div class="form-group input-group">
                           <label>Bank Name></label>
                                    <select name="bankname" id="bankname" class="form-control">
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
                        </div>
                        <div class="form-group input-group">
                           <label>Beneficiary</label>
									<input type="text" name="beneficiary" class="form-control" value="<?php echo $beneficiary; ?>">
                        </div>
                        <div class="form-group input-group">
                           <label>Account Number</label>
									<input type="text" name="acctnbr" class="form-control" value="<?php echo $acctnbr; ?>" >
                        </div>
                        <div class="form-group input-group">
                          <label>Account Type</label>
                            <?php if($accttype){ echo '<option selected>'.$accttype.'</option>'; } ?>
									 <select name="accttype" id="accttype" class="form-control">
                                     <option disabled>Select Account Type</option>
									  <option value="Savings">Savings</option>
									  <option value="Current">Current</option>
									</select>
                        </div>
                        <div class="form-group input-group">
                           <label>Reference User<span>*</span></label>
									<input type="text" name="ref_user" class="form-control" value="<?php echo $ref_user; ?>" required>
                        </div>
                        
                        <div class="form-group input-group">
                           <label>Username<span>*</span></label>
									<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
                        </div>
                        
                        <div class="form-group input-group" required>
                           <label>Password<span>*</span></label>
									<input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                        </div>
                       </div> 
                
                </div>
                        
                      <div class="row">  
                      	<div class="col-md-12">
                        	<div class="form-group input-group">
                            	<input type="submit" class="btn btn-primary form-control" value="Add User">
                        	</div>
                        	</div>
                        </div>
                       

                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->

            
            
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
