<?php
session_start();
$username = $_SESSION['username'];
include_once 'db.php';
$con = mysql_connect($server, $db_user, $db_pass);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
$number = $_POST['field_1'];
$cid = $number;
mysql_select_db("dev", $con);
$sql= "SELECT * FROM addressbook_$username WHERE addressbookid = $number";
$result = mysql_query($sql);
if ($result=="null") {
echo "could not find contact";
sleep(10);
header('location:nf.php');
}
while ($row = mysql_fetch_array($result))
 {
$number = $row['addressbookid'];
$fn =$row['first name']; 
$ln =$row['last name'];
$em =$row['email'];
$hs =$row['home street'];
$hc =$row['home city'];
$st =$row['state'];
$zp =$row['zip']; 
$ct =$row['country'];
$hp =$row['home phone'];
$hf =$row['home fax'];
$cp =$row['cell phone'];
$ws =$row['work street'];
$wc =$row['work city'];
$wst =$row['work state'];
$wz =$row['work zip'];
$wct =$row['work country'];
$cmp =$row['company'];
$jt =$row['job title'];
$wp =$row['work phone'];
$wf =$row['work fax'];
$webp =$row['website'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head >
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title >Form Page: add</title>
      <script src="scripts/gen_validatorv5.js" type="text/javascript"></script>
      <script src="scripts/sfm_moveable_popup.js" type="text/javascript"></script>
      <script src="scripts/sfm-png-fix.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="style/add.css"/>
   </head>
   <body style="background-color:transparent">
      <form id="add" method="post" action="update.php" accept-charset="UTF-8">
         <div id="add_errorloc" class="error_strings" style="width:796px;text-align:left"></div>
         <div style="width:796px;height:751px;border-style:solid;border-width:1px;border-color:#7f7f7f;background-color:#e6e6fa">
            <div style="position:relative">
            <? echo "&nbsp;Editing Contact:&nbsp <font color=red> $fn &nbsp;$ln</font>"; ?>
            <input type="hidden" name="number" value="<?=$number;?>">
           <input type="hidden" name="cid" value="<?=$cid;?>">
               <input type="hidden" name="sfm_form_submitted" value="yes"/>
               <div id="heading_container">
                  <div id="heading">Home Information</div>
               </div>
               <input type="hidden" name="addressbookid" id="addressbookid"/>
               <div id="FirstName_container">
                  <input type="text" name="FirstName" id="FirstName" size="20"  value="<?=$fn;?>"class="sfm_textbox"/>
               </div>
               <div id="LastName_container">
                  <input type="text" name="LastName" id="LastName" value="<?=$ln;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label1_container">
                  <label id="label1" for="LastName" class="sfm_form_label">Last Name:</label>
               </div>
               <div id="label_container">
                  <label id="label" for="FirstName" class="sfm_form_label">First Name:</label>
               </div>
               <div id="Email_container">
                  <input type="text" name="Email" id="Email" value="<?=$em;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="Home_Street_container">
                   <input type="text" name="Home_Street" id="Home_Street" value="<?=$hs;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label2_container">
                  <label id="label2" for="Email" class="sfm_form_label">Email:</label>
               </div>
               <div id="label3_container">
                  <label id="label3" for="Street" class="sfm_form_label">Address:</label>
               </div>
               <div id="State_container">
                  <select name="State" id="State" size="1">
                     <option value="<?=$st;?>" selected="selected"><?=$st;?></option>
                     <option value="Alabama">Alabama</option>
                     <option value="Alaska">Alaska</option>
                     <option value="Arizona">Arizona</option>
                     <option value="Arkansas">Arkansas</option>
                     <option value="California">California</option>
                     <option value="Colorado">Colorado</option>
                     <option value="Connecticut">Connecticut</option>
                     <option value="Delaware">Delaware</option>
                     <option value="Florida">Florida</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Hawaii">Hawaii</option>
                     <option value="Idaho">Idaho</option>
                     <option value="Illinois">Illinois</option>
                     <option value="Indiana">Indiana</option>
                     <option value="Iowa">Iowa</option>
                     <option value="Kansas">Kansas</option>
                     <option value="Kentucky">Kentucky</option>
                     <option value="Louisiana">Louisiana</option>
                     <option value="Maine">Maine</option>
                     <option value="Maryland">Maryland</option>
                     <option value="Massachusetts">Massachusetts</option>
                     <option value="Michigan">Michigan</option>
                     <option value="Minnesota">Minnesota</option>
                     <option value="Mississippi">Mississippi</option>
                     <option value="Missouri">Missouri</option>
                     <option value="Montana">Montana</option>
                     <option value="Nebraska">Nebraska</option>
                     <option value="Nevada">Nevada</option>
                     <option value="New_Hampshire">New Hampshire</option>
                     <option value="New_Jersey">New Jersey</option>
                     <option value="New_Mexico">New Mexico</option>
                     <option value="New_York">New York</option>
                     <option value="North_Carolina">North Carolina</option>
                     <option value="North_Dakota">North Dakota</option>
                     <option value="Ohio">Ohio</option>
                     <option value="Oklahoma">Oklahoma</option>
                     <option value="Oregon">Oregon</option>
                     <option value="Pennsylvania">Pennsylvania</option>
                     <option value="Rhode_Island">Rhode Island</option>
                     <option value="South_Carolina">South Carolina</option>
                     <option value="South_Dakota">South Dakota</option>
                     <option value="Tennessee">Tennessee</option>
                     <option value="Texas">Texas</option>
                     <option value="Utah">Utah</option>
                     <option value="Vermont">Vermont</option>
                     <option value="Virginia">Virginia</option>
                     <option value="Washington">Washington</option>
                     <option value="Virginia">West</option>
                     <option value="Wisconsin">Wisconsin</option>
                     <option value="Wyoming">Wyoming</option>
                  </select>
               </div>
               <div id="label5_container">
                  <label id="label5" for="State" class="sfm_form_label">State:</label>
               </div>
               <div id="Home_City_container">
                  <input type="text" name="Home_City" id="Home_City" value="<?=$hc;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label4_container">
                  <label id="label4" for="City" class="sfm_form_label">City:</label>
               </div>
               <div id="Country_container">
                  <select name="Country" id="Country" size="1">
                     <option value="<?=$ct;?>" selected="selected"><?=$ct;?></option>
                     <option value="Afghanistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="AmericanSamoa">American Samoa</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Anguilla">Anguilla</option>
                     <option value="Antarctica">Antarctica</option>
                     <option value="AntiguaAndBarbuda">Antigua And Barbuda</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Aruba">Aruba</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                     <option value="Belarus">Belarus</option>
                     <option value="Belgium">Belgium</option>
                     <option value="Belize">Belize</option>
                     <option value="Benin">Benin</option>
                     <option value="Bermuda">Bermuda</option>
                     <option value="Bhutan">Bhutan</option>
                     <option value="Bolivia">Bolivia</option>
                     <option value="BosniaAndHerzegowina">Bosnia And Herzegowina</option>
                     <option value="Botswana">Botswana</option>
                     <option value="BouvetIslandBouvetIsland">Bouvet Island BouvetIsland</option>
                     <option value="Brazil">Brazil</option>
                     <option value="BritishIndianOceanTerritory">British Indian Ocean Territory</option>
                     <option value="BruneiDarussalam">Brunei Darussalam</option>
                     <option value="Bulgaria">Bulgaria</option>
                     <option value="BurkinaFaso">Burkina Faso</option>
                     <option value="Burundi">Burundi</option>
                     <option value="Cambodia">Cambodia</option>
                     <option value="Cameroon">Cameroon</option>
                     <option value="Canada">Canada</option>
                     <option value="CapeVerde">Cape Verde</option>
                     <option value="CaymanIslands">Cayman Islands</option>
                     <option value="CentralAfricanRepublic">Central African Republic</option>
                     <option value="Chad">Chad</option>
                     <option value="Chile">Chile</option>
                     <option value="China">China</option>
                     <option value="ChristmasIsland">Christmas Island</option>
                     <option value="Cocos(Keeling)Islands">Cocos (Keeling) Islands</option>
                     <option value="Colombia">Colombia</option>
                     <option value="Comoros">Comoros</option>
                     <option value="Congo">Congo</option>
                     <option value="CookIslands">Cook Islands</option>
                     <option value="CostaRica">Costa Rica</option>
                     <option value="CoteD_ivoire">Cote D"ivoire</option>
                     <option value="Croatia">Croatia</option>
                     <option value="Cuba">Cuba</option>
                     <option value="Cyprus">Cyprus</option>
                     <option value="CzechRepublic">Czech Republic</option>
                     <option value="Denmark">Denmark</option>
                     <option value="Djibouti">Djibouti</option>
                     <option value="Dominica">Dominica</option>
                     <option value="DominicanRepublic">Dominican Republic</option>
                     <option value="EastTimor">East Timor</option>
                     <option value="Ecuador">Ecuador</option>
                     <option value="Egypt">Egypt</option>
                     <option value="ElSalvador">El Salvador</option>
                     <option value="EquatorialGuinea">Equatorial Guinea</option>
                     <option value="Eritrea">Eritrea</option>
                     <option value="Estonia">Estonia</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="FalklandIslands">Falkland Islands (Malvinas)</option>
                     <option value="FaroeIslands">Faroe Islands</option>
                     <option value="Fiji">Fiji</option>
                     <option value="Finland">Finland</option>
                     <option value="France">France</option>
                     <option value="MetropolitanFrance">Metropolitan France</option>
                     <option value="FrenchGuiana">French Guiana</option>
                     <option value="FrenchPolynesia">French Polynesia</option>
                     <option value="FrenchSouthernTerritories">French Southern Territories</option>
                     <option value="Gabon">Gabon</option>
                     <option value="Gambia">Gambia</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Germany">Germany</option>
                     <option value="Ghana">Ghana</option>
                     <option value="Gibraltar">Gibraltar</option>
                     <option value="Greece">Greece</option>
                     <option value="Greenland">Greenland</option>
                     <option value="Grenada">Grenada</option>
                     <option value="Guadeloupe">Guadeloupe</option>
                     <option value="Guam">Guam</option>
                     <option value="Guatemala">Guatemala</option>
                     <option value="Guinea">Guinea</option>
                     <option value="Guinea-Bissau">Guinea-Bissau</option>
                     <option value="Guyana">Guyana</option>
                     <option value="Haiti">Haiti</option>
                     <option value="HeardAndMcDonaldIslands">Heard And Mc Donald Islands</option>
                     <option value="Honduras">Honduras</option>
                     <option value="HongKong">Hong Kong</option>
                     <option value="Hungary">Hungary</option>
                     <option value="Iceland">Iceland</option>
                     <option value="India">India</option>
                     <option value="Indonesia">Indonesia</option>
                     <option value="Iran">Iran</option>
                     <option value="Iraq">Iraq</option>
                     <option value="Ireland">Ireland</option>
                     <option value="Israel">Israel</option>
                     <option value="Italy">Italy</option>
                     <option value="Jamaica">Jamaica</option>
                     <option value="Japan">Japan</option>
                     <option value="Jordan">Jordan</option>
                     <option value="Kazakhstan">Kazakhstan</option>
                     <option value="Kenya">Kenya</option>
                     <option value="Kiribati">Kiribati</option>
                     <option value="DemocraticPeoplesRepublicOfKorea">Democratic People"s Republic Of Korea</option>
                     <option value="RepublicOfKorea">Republic Of Korea</option>
                     <option value="Kuwait">Kuwait</option>
                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                     <option value="LaoPeoplesDemocraticRepublic">Lao People"s Democratic Republic</option>
                     <option value="Latvia">Latvia</option>
                     <option value="Lebanon">Lebanon</option>
                     <option value="Lesotho">Lesotho</option>
                     <option value="Liberia">Liberia</option>
                     <option value="LibyanArabJamahiriya">Libyan Arab Jamahiriya</option>
                     <option value="Liechtenstein">Liechtenstein</option>
                     <option value="Lithuania">Lithuania</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Macau">Macau</option>
                     <option value="TheFormerYugoslavRepublicOfMacedonia">The Former Yugoslav Republic Of Macedonia</option>
                     <option value="Madagascar">Madagascar</option>
                     <option value="Malawi">Malawi</option>
                     <option value="Malaysia">Malaysia</option>
                     <option value="Maldives">Maldives</option>
                     <option value="Mali">Mali</option>
                     <option value="Malta">Malta</option>
                     <option value="MarshallIslands">Marshall Islands</option>
                     <option value="Martinique">Martinique</option>
                     <option value="Mauritania">Mauritania</option>
                     <option value="Mauritius">Mauritius</option>
                     <option value="Mayotte">Mayotte</option>
                     <option value="Mexico">Mexico</option>
                     <option value="FederatedStatesOfMicronesia">Federated States Of Micronesia</option>
                     <option value="RepublicOfMoldova">Republic Of Moldova</option>
                     <option value="Monaco">Monaco</option>
                     <option value="Mongolia">Mongolia</option>
                     <option value="Montserrat">Montserrat</option>
                     <option value="Morocco">Morocco</option>
                     <option value="Mozambique">Mozambique</option>
                     <option value="Myanmar">Myanmar</option>
                     <option value="Namibia">Namibia</option>
                     <option value="Nauru">Nauru</option>
                     <option value="Nepal">Nepal</option>
                     <option value="Netherlands">Netherlands</option>
                     <option value="NetherlandsAntilles">Netherlands Antilles</option>
                     <option value="NewCaledonia">New Caledonia</option>
                     <option value="NewZealand">New Zealand</option>
                     <option value="Nicaragua">Nicaragua</option>
                     <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Niue">Niue</option>
                     <option value="NorfolkIsland">Norfolk Island</option>
                     <option value="NorthernMarianaIslands">Northern Mariana Islands</option>
                     <option value="Norway">Norway</option>
                     <option value="Oman">Oman</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Palau">Palau</option>
                     <option value="Panama">Panama</option>
                     <option value="PapuaNewGuinea">Papua New Guinea</option>
                     <option value="Paraguay">Paraguay</option>
                     <option value="Peru">Peru</option>
                     <option value="Philippines">Philippines</option>
                     <option value="Pitcairn">Pitcairn</option>
                     <option value="Poland">Poland</option>
                     <option value="Portugal">Portugal</option>
                     <option value="PuertoRico">Puerto Rico</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Reunion">Reunion</option>
                     <option value="Romania">Romania</option>
                     <option value="RussianFederation">Russian Federation</option>
                     <option value="Rwanda">Rwanda</option>
                     <option value="SaintKittsAndNevis">Saint Kitts And Nevis</option>
                     <option value="SaintLucia">Saint Lucia</option>
                     <option value="SaintVincentAndTheGrenadines">Saint Vincent And The Grenadines</option>
                     <option value="Samoa">Samoa</option>
                     <option value="SanMarino">San Marino</option>
                     <option value="SaoTomeAndPrincipe">Sao Tome And Principe</option>
                     <option value="SaudiArabia">Saudi Arabia</option>
                     <option value="Senegal">Senegal</option>
                     <option value="Seychelles">Seychelles</option>
                     <option value="Leone">Sierra Leone  Sierra</option>
                     <option value="Singapore">Singapore</option>
                     <option value="Slovakia">Slovakia (Slovak Republic)</option>
                     <option value="Slovenia">Slovenia</option>
                     <option value="SolomonIslands">Solomon Islands</option>
                     <option value="Somalia">Somalia</option>
                     <option value="SouthAfrica">South Africa</option>
                     <option value="SouthGeorgiaAndTheSouthSandwichIslands">South Georgia And The South Sandwich Islands</option>
                     <option value="Spain">Spain</option>
                     <option value="SriLanka">Sri Lanka</option>
                     <option value="StHelena">St. Helena</option>
                     <option value="StPierreAndMiquelon">St. Pierre And Miquelon</option>
                     <option value="Sudan">Sudan</option>
                     <option value="Suriname">Suriname</option>
                     <option value="SvalbardAndJanMayenIslands">Svalbard And Jan Mayen Islands</option>
                     <option value="Swaziland">Swaziland</option>
                     <option value="Sweden">Sweden</option>
                     <option value="Switzerland">Switzerland</option>
                     <option value="SyrianArabRepublic">Syrian Arab Republic</option>
                     <option value="Taiwan">Taiwan</option>
                     <option value="Tajikistan">Tajikistan</option>
                     <option value="Tanzania">United Republic Of Tanzania</option>
                     <option value="Thailand">Thailand</option>
                     <option value="Togo">Togo</option>
                     <option value="Tokelau">Tokelau</option>
                     <option value="Tonga">Tonga</option>
                     <option value="TrinidadAndTobago">Trinidad And Tobago</option>
                     <option value="Tunisia">Tunisia</option>
                     <option value="Turkey">Turkey</option>
                     <option value="Turkmenistan">Turkmenistan</option>
                     <option value="TurksAndCaicosIslands">Turks And Caicos Islands</option>
                     <option value="Tuvalu">Tuvalu</option>
                     <option value="Uganda">Uganda</option>
                     <option value="Ukraine">Ukraine</option>
                     <option value="UnitedArabEmirates">United Arab Emirates</option>
                     <option value="UnitedKingdom">United Kingdom</option>
                     <option value="UnitedStates">United States</option>
                     <option value="UnitedStatesMinorOutlyingIslands">United States Minor Outlying Islands</option>
                     <option value="Uruguay">Uruguay</option>
                     <option value="Uzbekistan">Uzbekistan</option>
                     <option value="Vanuatu">Vanuatu</option>
                     <option value="VaticanCity">Vatican City State (Holy See)</option>
                     <option value="Venezuela">Venezuela</option>
                     <option value="VietNam">Viet Nam</option>
                     <option value="VirginIslandsBritish">Virgin Islands (British)</option>
                     <option value="VirginIslandsU.S.">Virgin Islands (U.S.)</option>
                     <option value="WallisAndFutunaIslands">Wallis And Futuna Islands</option>
                     <option value="WesternSahara">Western Sahara</option>
                     <option value="Yemen">Yemen</option>
                     <option value="Yugoslavia">Yugoslavia</option>
                     <option value="Zaire">Zaire</option>
                     <option value="Zambia">Zambia</option>
                     <option value="Zimbabwe">Zimbabwe</option>
                  </select>
               </div>
               <div id="label7_container">
                  <label id="label7" for="Country" class="sfm_form_label">Country:</label>
               </div>
               <div id="Zip_container">
                  <input type="text" name="Zip" id="Zip" value="<?=$zp;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label6_container">
                  <label id="label6" for="Zip" class="sfm_form_label">Zip:</label>
               </div>
               <div id="Home_Phone_container">
                  <input type="text" name="Home_Phone" id="Home_Phone" value="<?=$hp;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="Home_Fax_container">
                  <input type="text" name="Home_Fax" id="Home_Fax" value="<?=$hf;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label9_container">
                  <label id="label9" class="sfm_form_label">Fax:</label>
               </div>
               <div id="label8_container">
                  <label id="label8" for="Phone" class="sfm_form_label">Phone:</label>
               </div>
               <div id="Cell_Phone_container">
                  <input type="text" name="Cell_Phone" id="Cell_Phone" value="<?=$cp;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label10_container">
                  <label id="label10" for="Phone2" class="sfm_form_label">Cell Phone:</label>
               </div>
               <div id="heading1_container">
                  <div id="heading1">Work Information</div>
               </div>
               <div id="Work_Street_container">
                  <input type="text" name="Work_Street" id="Work_Street" value="<?=$ws;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="Work_City_container">
                  <input type="text" name="Work_City" id="Work_City"  value="<?=$wc;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label12_container">
                  <label id="label12" for="City2" class="sfm_form_label">City:</label>
               </div>
               <div id="label11_container">
                  <label id="label11" for="Street2" class="sfm_form_label">Address:</label>
               </div>
               <div id="Work_State_container">
                  <select name="Work_State" id="Work_State" size="1">
                     <option value="<?=$wst;?>" selected="selected"><?=$wst;?></option>
                     <option value="Alabama">Alabama</option>
                     <option value="Alaska">Alaska</option>
                     <option value="Arizona">Arizona</option>
                     <option value="Arkansas">Arkansas</option>
                     <option value="California">California</option>
                     <option value="Colorado">Colorado</option>
                     <option value="Connecticut">Connecticut</option>
                     <option value="Delaware">Delaware</option>
                     <option value="Florida">Florida</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Hawaii">Hawaii</option>
                     <option value="Idaho">Idaho</option>
                     <option value="Illinois">Illinois</option>
                     <option value="Indiana">Indiana</option>
                     <option value="Iowa">Iowa</option>
                     <option value="Kansas">Kansas</option>
                     <option value="Kentucky">Kentucky</option>
                     <option value="Louisiana">Louisiana</option>
                     <option value="Maine">Maine</option>
                     <option value="Maryland">Maryland</option>
                     <option value="Massachusetts">Massachusetts</option>
                     <option value="Michigan">Michigan</option>
                     <option value="Minnesota">Minnesota</option>
                     <option value="Mississippi">Mississippi</option>
                     <option value="Missouri">Missouri</option>
                     <option value="Montana">Montana</option>
                     <option value="Nebraska">Nebraska</option>
                     <option value="Nevada">Nevada</option>
                     <option value="New_Hampshire">New Hampshire</option>
                     <option value="New_Jersey">New Jersey</option>
                     <option value="New_Mexico">New Mexico</option>
                     <option value="New_York">New York</option>
                     <option value="North_Carolina">North Carolina</option>
                     <option value="North_Dakota">North Dakota</option>
                     <option value="Ohio">Ohio</option>
                     <option value="Oklahoma">Oklahoma</option>
                     <option value="Oregon">Oregon</option>
                     <option value="Pennsylvania">Pennsylvania</option>
                     <option value="Rhode_Island">Rhode Island</option>
                     <option value="South_Carolina">South Carolina</option>
                     <option value="South_Dakota">South Dakota</option>
                     <option value="Tennessee">Tennessee</option>
                     <option value="Texas">Texas</option>
                     <option value="Utah">Utah</option>
                     <option value="Vermont">Vermont</option>
                     <option value="Virginia">Virginia</option>
                     <option value="Washington">Washington</option>
                     <option value="Virginia">West</option>
                     <option value="Wisconsin">Wisconsin</option>
                     <option value="Wyoming">Wyoming</option>
                  </select>
               </div>
               <div id="label16_container">
                  <label id="label16" for="State2" class="sfm_form_label">State:</label>
               </div>
               <div id="Work_Zip_container">
                  <input type="text" name="Work_Zip" value="<?=$wz;?>" id="Work_Zip" size="20" class="sfm_textbox"/>
               </div>
               <div id="label14_container">
                  <label id="label14" for="Zip2" class="sfm_form_label">Zip:</label>
               </div>
               <div id="Work_Country_container">
                  <select name="Work_Country" id="Work_Country" size="1">
                     <option value="<?=$wct;?>" selected="selected"><?=$wct;?></option>
                     <option value="Afghanistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="AmericanSamoa">American Samoa</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Anguilla">Anguilla</option>
                     <option value="Antarctica">Antarctica</option>
                     <option value="AntiguaAndBarbuda">Antigua And Barbuda</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Aruba">Aruba</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                     <option value="Belarus">Belarus</option>
                     <option value="Belgium">Belgium</option>
                     <option value="Belize">Belize</option>
                     <option value="Benin">Benin</option>
                     <option value="Bermuda">Bermuda</option>
                     <option value="Bhutan">Bhutan</option>
                     <option value="Bolivia">Bolivia</option>
                     <option value="BosniaAndHerzegowina">Bosnia And Herzegowina</option>
                     <option value="Botswana">Botswana</option>
                     <option value="BouvetIslandBouvetIsland">Bouvet Island BouvetIsland</option>
                     <option value="Brazil">Brazil</option>
                     <option value="BritishIndianOceanTerritory">British Indian Ocean Territory</option>
                     <option value="BruneiDarussalam">Brunei Darussalam</option>
                     <option value="Bulgaria">Bulgaria</option>
                     <option value="BurkinaFaso">Burkina Faso</option>
                     <option value="Burundi">Burundi</option>
                     <option value="Cambodia">Cambodia</option>
                     <option value="Cameroon">Cameroon</option>
                     <option value="Canada">Canada</option>
                     <option value="CapeVerde">Cape Verde</option>
                     <option value="CaymanIslands">Cayman Islands</option>
                     <option value="CentralAfricanRepublic">Central African Republic</option>
                     <option value="Chad">Chad</option>
                     <option value="Chile">Chile</option>
                     <option value="China">China</option>
                     <option value="ChristmasIsland">Christmas Island</option>
                     <option value="Cocos(Keeling)Islands">Cocos (Keeling) Islands</option>
                     <option value="Colombia">Colombia</option>
                     <option value="Comoros">Comoros</option>
                     <option value="Congo">Congo</option>
                     <option value="CookIslands">Cook Islands</option>
                     <option value="CostaRica">Costa Rica</option>
                     <option value="CoteD_ivoire">Cote D"ivoire</option>
                     <option value="Croatia">Croatia</option>
                     <option value="Cuba">Cuba</option>
                     <option value="Cyprus">Cyprus</option>
                     <option value="CzechRepublic">Czech Republic</option>
                     <option value="Denmark">Denmark</option>
                     <option value="Djibouti">Djibouti</option>
                     <option value="Dominica">Dominica</option>
                     <option value="DominicanRepublic">Dominican Republic</option>
                     <option value="EastTimor">East Timor</option>
                     <option value="Ecuador">Ecuador</option>
                     <option value="Egypt">Egypt</option>
                     <option value="ElSalvador">El Salvador</option>
                     <option value="EquatorialGuinea">Equatorial Guinea</option>
                     <option value="Eritrea">Eritrea</option>
                     <option value="Estonia">Estonia</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="FalklandIslands">Falkland Islands (Malvinas)</option>
                     <option value="FaroeIslands">Faroe Islands</option>
                     <option value="Fiji">Fiji</option>
                     <option value="Finland">Finland</option>
                     <option value="France">France</option>
                     <option value="MetropolitanFrance">Metropolitan France</option>
                     <option value="FrenchGuiana">French Guiana</option>
                     <option value="FrenchPolynesia">French Polynesia</option>
                     <option value="FrenchSouthernTerritories">French Southern Territories</option>
                     <option value="Gabon">Gabon</option>
                     <option value="Gambia">Gambia</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Germany">Germany</option>
                     <option value="Ghana">Ghana</option>
                     <option value="Gibraltar">Gibraltar</option>
                     <option value="Greece">Greece</option>
                     <option value="Greenland">Greenland</option>
                     <option value="Grenada">Grenada</option>
                     <option value="Guadeloupe">Guadeloupe</option>
                     <option value="Guam">Guam</option>
                     <option value="Guatemala">Guatemala</option>
                     <option value="Guinea">Guinea</option>
                     <option value="Guinea-Bissau">Guinea-Bissau</option>
                     <option value="Guyana">Guyana</option>
                     <option value="Haiti">Haiti</option>
                     <option value="HeardAndMcDonaldIslands">Heard And Mc Donald Islands</option>
                     <option value="Honduras">Honduras</option>
                     <option value="HongKong">Hong Kong</option>
                     <option value="Hungary">Hungary</option>
                     <option value="Iceland">Iceland</option>
                     <option value="India">India</option>
                     <option value="Indonesia">Indonesia</option>
                     <option value="Iran">Iran</option>
                     <option value="Iraq">Iraq</option>
                     <option value="Ireland">Ireland</option>
                     <option value="Israel">Israel</option>
                     <option value="Italy">Italy</option>
                     <option value="Jamaica">Jamaica</option>
                     <option value="Japan">Japan</option>
                     <option value="Jordan">Jordan</option>
                     <option value="Kazakhstan">Kazakhstan</option>
                     <option value="Kenya">Kenya</option>
                     <option value="Kiribati">Kiribati</option>
                     <option value="DemocraticPeoplesRepublicOfKorea">Democratic People"s Republic Of Korea</option>
                     <option value="RepublicOfKorea">Republic Of Korea</option>
                     <option value="Kuwait">Kuwait</option>
                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                     <option value="LaoPeoplesDemocraticRepublic">Lao People"s Democratic Republic</option>
                     <option value="Latvia">Latvia</option>
                     <option value="Lebanon">Lebanon</option>
                     <option value="Lesotho">Lesotho</option>
                     <option value="Liberia">Liberia</option>
                     <option value="LibyanArabJamahiriya">Libyan Arab Jamahiriya</option>
                     <option value="Liechtenstein">Liechtenstein</option>
                     <option value="Lithuania">Lithuania</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Macau">Macau</option>
                     <option value="TheFormerYugoslavRepublicOfMacedonia">The Former Yugoslav Republic Of Macedonia</option>
                     <option value="Madagascar">Madagascar</option>
                     <option value="Malawi">Malawi</option>
                     <option value="Malaysia">Malaysia</option>
                     <option value="Maldives">Maldives</option>
                     <option value="Mali">Mali</option>
                     <option value="Malta">Malta</option>
                     <option value="MarshallIslands">Marshall Islands</option>
                     <option value="Martinique">Martinique</option>
                     <option value="Mauritania">Mauritania</option>
                     <option value="Mauritius">Mauritius</option>
                     <option value="Mayotte">Mayotte</option>
                     <option value="Mexico">Mexico</option>
                     <option value="FederatedStatesOfMicronesia">Federated States Of Micronesia</option>
                     <option value="RepublicOfMoldova">Republic Of Moldova</option>
                     <option value="Monaco">Monaco</option>
                     <option value="Mongolia">Mongolia</option>
                     <option value="Montserrat">Montserrat</option>
                     <option value="Morocco">Morocco</option>
                     <option value="Mozambique">Mozambique</option>
                     <option value="Myanmar">Myanmar</option>
                     <option value="Namibia">Namibia</option>
                     <option value="Nauru">Nauru</option>
                     <option value="Nepal">Nepal</option>
                     <option value="Netherlands">Netherlands</option>
                     <option value="NetherlandsAntilles">Netherlands Antilles</option>
                     <option value="NewCaledonia">New Caledonia</option>
                     <option value="NewZealand">New Zealand</option>
                     <option value="Nicaragua">Nicaragua</option>
                     <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Niue">Niue</option>
                     <option value="NorfolkIsland">Norfolk Island</option>
                     <option value="NorthernMarianaIslands">Northern Mariana Islands</option>
                     <option value="Norway">Norway</option>
                     <option value="Oman">Oman</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Palau">Palau</option>
                     <option value="Panama">Panama</option>
                     <option value="PapuaNewGuinea">Papua New Guinea</option>
                     <option value="Paraguay">Paraguay</option>
                     <option value="Peru">Peru</option>
                     <option value="Philippines">Philippines</option>
                     <option value="Pitcairn">Pitcairn</option>
                     <option value="Poland">Poland</option>
                     <option value="Portugal">Portugal</option>
                     <option value="PuertoRico">Puerto Rico</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Reunion">Reunion</option>
                     <option value="Romania">Romania</option>
                     <option value="RussianFederation">Russian Federation</option>
                     <option value="Rwanda">Rwanda</option>
                     <option value="SaintKittsAndNevis">Saint Kitts And Nevis</option>
                     <option value="SaintLucia">Saint Lucia</option>
                     <option value="SaintVincentAndTheGrenadines">Saint Vincent And The Grenadines</option>
                     <option value="Samoa">Samoa</option>
                     <option value="SanMarino">San Marino</option>
                     <option value="SaoTomeAndPrincipe">Sao Tome And Principe</option>
                     <option value="SaudiArabia">Saudi Arabia</option>
                     <option value="Senegal">Senegal</option>
                     <option value="Seychelles">Seychelles</option>
                     <option value="Leone">Sierra Leone  Sierra</option>
                     <option value="Singapore">Singapore</option>
                     <option value="Slovakia">Slovakia (Slovak Republic)</option>
                     <option value="Slovenia">Slovenia</option>
                     <option value="SolomonIslands">Solomon Islands</option>
                     <option value="Somalia">Somalia</option>
                     <option value="SouthAfrica">South Africa</option>
                     <option value="SouthGeorgiaAndTheSouthSandwichIslands">South Georgia And The South Sandwich Islands</option>
                     <option value="Spain">Spain</option>
                     <option value="SriLanka">Sri Lanka</option>
                     <option value="StHelena">St. Helena</option>
                     <option value="StPierreAndMiquelon">St. Pierre And Miquelon</option>
                     <option value="Sudan">Sudan</option>
                     <option value="Suriname">Suriname</option>
                     <option value="SvalbardAndJanMayenIslands">Svalbard And Jan Mayen Islands</option>
                     <option value="Swaziland">Swaziland</option>
                     <option value="Sweden">Sweden</option>
                     <option value="Switzerland">Switzerland</option>
                     <option value="SyrianArabRepublic">Syrian Arab Republic</option>
                     <option value="Taiwan">Taiwan</option>
                     <option value="Tajikistan">Tajikistan</option>
                     <option value="Tanzania">United Republic Of Tanzania</option>
                     <option value="Thailand">Thailand</option>
                     <option value="Togo">Togo</option>
                     <option value="Tokelau">Tokelau</option>
                     <option value="Tonga">Tonga</option>
                     <option value="TrinidadAndTobago">Trinidad And Tobago</option>
                     <option value="Tunisia">Tunisia</option>
                     <option value="Turkey">Turkey</option>
                     <option value="Turkmenistan">Turkmenistan</option>
                     <option value="TurksAndCaicosIslands">Turks And Caicos Islands</option>
                     <option value="Tuvalu">Tuvalu</option>
                     <option value="Uganda">Uganda</option>
                     <option value="Ukraine">Ukraine</option>
                     <option value="UnitedArabEmirates">United Arab Emirates</option>
                     <option value="UnitedKingdom">United Kingdom</option>
                     <option value="UnitedStates">United States</option>
                     <option value="UnitedStatesMinorOutlyingIslands">United States Minor Outlying Islands</option>
                     <option value="Uruguay">Uruguay</option>
                     <option value="Uzbekistan">Uzbekistan</option>
                     <option value="Vanuatu">Vanuatu</option>
                     <option value="VaticanCity">Vatican City State (Holy See)</option>
                     <option value="Venezuela">Venezuela</option>
                     <option value="VietNam">Viet Nam</option>
                     <option value="VirginIslandsBritish">Virgin Islands (British)</option>
                     <option value="VirginIslandsU.S.">Virgin Islands (U.S.)</option>
                     <option value="WallisAndFutunaIslands">Wallis And Futuna Islands</option>
                     <option value="WesternSahara">Western Sahara</option>
                     <option value="Yemen">Yemen</option>
                     <option value="Yugoslavia">Yugoslavia</option>
                     <option value="Zaire">Zaire</option>
                     <option value="Zambia">Zambia</option>
                     <option value="Zimbabwe">Zimbabwe</option>
                  </select>
               </div>
               <div id="Company_container">
                  <input type="text" name="Company"  value="<?=$cmp;?>" id="Company" size="20" class="sfm_textbox"/>
               </div>
               <div id="label15_container">
                  <label id="label15" for="Country2" class="sfm_form_label">Country:</label>
               </div>
               <div id="label17_container">
                  <label id="label17" for="Address" class="sfm_form_label">Company:</label>
               </div>
               <div id="Job_Title_container">
                  <input type="text" name="Job_Title"  value="<?=$jt;?>" id="Job_Title" size="20" class="sfm_textbox"/>
               </div>
               <div id="Work_Phone_container">
                  <input type="text" name="Work_Phone" id="Work_Phone" value="<?=$wp;?>" size="20" class="sfm_textbox"/>
               </div>
               <div id="label19_container">
                  <label id="label19" for="Phone3" class="sfm_form_label">Phone:</label>
               </div>
               <div id="label18_container">
                  <label id="label18" for="Name" class="sfm_form_label">Job Title:</label>
               </div>
               <div id="Work_Fax_container">
                  <input type="text" name="Work_Fax" value="<?=$wf;?>" id="Work_Fax" size="20" class="sfm_textbox"/>
               </div>
               <div id="Website_container">
                  <input type="text" name="Website" value="<?=$webp;?>" id="Website" size="20" class="sfm_textbox"/>
               </div>
               <div id="label20_container">
                  <label id="label20" for="Phone4" class="sfm_form_label">Fax:</label>
               </div>
               <div id="label21_container">
                  <label id="label21" for="Name2" class="sfm_form_label">Website:</label>
               </div>
               <div id="Submit_container">
                  <input type="submit" name="Submit" value="update" alt="submit"/>
               </div>
               <div id="Reset_container"><a href="http://weissnatjr.facebook.joyent.us/abproject/addressbook/"><img id="add_Reset_img" src="images/add-Reset-0.png" alt="reset"/></a></div>
            </div>
         </div>
      </form>
      <script type="text/javascript">
// <![CDATA[
sfm_fix_png("add_Submit_img","images/spacer.gif");
sfm_fix_png("add_Reset_img","images/spacer.gif");
if(document.sfm_after_load != undefined){document.sfm_after_load();}

// ]]>
      </script>
      <script type="text/javascript">
// <![CDATA[
var addValidator = new Validator("add");

addValidator.EnableOnPageErrorDisplay();
addValidator.SetMessageDisplayPos("right");

addValidator.EnableMsgsTogether();
addValidator.addValidation("FirstName","req","A first name is required.");
addValidator.addValidation("FirstName","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("LastName","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Email","email","please enter a vaild email address");
addValidator.addValidation("Home_Street","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Home_City","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Zip","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Home_Phone","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Home_Fax","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Cell_Phone","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Work_Street","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Work_City","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Work_Zip","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Company","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Job_Title","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Work_Phone","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Work_Fax","regexp=^[^<!\\?#/\">]*$","Invaild input. Please try again.");
addValidator.addValidation("Website","regexp=^[^<\">]*$","Invaild input. Please try again.");

// ]]>
      </script>
   </body>
</html>
