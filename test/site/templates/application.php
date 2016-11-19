<?php include("includes/head.inc");?>

<section id="page-top" style="height:400px">
	<div class="hero">
		<img src="<?php echo $page->background->width(1920)->url;?>" alt="">
		<div class="page-top-title text-center">
			<h2 class="white op-1"><?php echo $page->title;?></h2>
			<p class="home-subheading op-1"><?php echo $page->subheading;?></p>
		</div>
	</div>
</section>

<div class="site-wrapper content">

	<section id="s-paragraphs">
		<div class="container"> 
			<div class="row shortcode-heading" style="margin-top: 30px;">
				<div class="col-md-12 wow fadeIn">
					<div id="application_form" class="row">
						<form class="form-horizontal" method="post">
							<fieldset>
								<legend>Credit Application</legend>
								<div class="section">
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												First Name <span class="text-danger">*</span>
												<input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control " required="true"></div>
											<div class="col-md-4">
												Initial
												<input id="initial_name" name="initial_name" type="text" placeholder="Initial" class="form-control ">
											</div>

											<div class="col-md-4">
												Last Name (Print)<span class="text-danger">*</span>
												<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control " required="true">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4 nopadding">
												<div class="col-md-12">Birth Date</div>
												<div class="col-md-4">
													<select name="birth_day" class="form-control">
														<option value="">Select</option>
														<?php for ($i=1; $i <= 31; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
												</div>
												<div class="col-md-4">
													<select name="birth_month" class="form-control">
														<option value="">Select</option>
														<option val="January">January</option>
														<option val="February">February</option>
														<option val="March">March</option>
														<option val="April">April</option>
														<option val="May">May</option>
														<option val="June">June</option>
														<option val="July">July</option>
														<option val="August">August</option>
														<option val="September">September</option>
														<option val="October">October</option>
														<option val="November">November</option>
														<option val="December">December</option>
													</select>
												</div>
												<div class="col-md-4">
													<select name="birth_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=1930; $i <= date("Y"); $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>                                  
													</select>
												</div>
											</div>
											<div class="col-md-4">
												Drivers LIC No
												<input type="text" class="form-control " placeholder="Drivers LIC No" name="drivers_lic_no" autocomplete="off">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													Social Security No/ FED tax ID no<span class="text-danger">*</span>
												</div>
												<div class="col-md-4">
													<input required="" type="text" class="form-control" name="social_security_no_1" placeholder="XXX">
												</div>
												<div class="col-md-4">
													<input required="" type="text" class="form-control" name="social_security_no_2" placeholder="XX">
												</div>
												<div class="col-md-4">
													<input required="" type="text" class="form-control" name="social_security_no_3" placeholder="XXXX">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<h5>Step 2:Residence info(Current Residence)</h5>
										<hr>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Address<span class="text-danger">*</span>
												<input required="" name="address" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4">
												City<span class="text-danger">*</span>
												<input type="text" required="" name="city" class="form-control" placeholder="City">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													State<span class="text-danger">*</span>
												</div>
												<div class="col-md-12">
													<select name="state" class="form-control" required="">
														<option value="">Select your state...</option>
														<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Zip<span class="text-danger">*</span>
												<input type="text" name="zip" class="form-control" placeholder="Zip" required="">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													Phone<span class="text-danger">*</span>
												</div>
												<div class="col-md-4">
													<input type="text" name="phone_1" class="form-control" placeholder="" required="">
												</div>
												<div class="col-md-4">
													<input type="text" name="phone_2" class="form-control" placeholder="" required="">
												</div>
												<div class="col-md-4">
													<input type="text" name="phone_3" class="form-control" placeholder="" required="">
												</div>
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													How Long<span class="text-danger">*</span>
												</div>
												<div class="col-md-6">
													<select name="addr_how_long_year" class="form-control" required="required">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="addr_how_long_month" class="form-control" required="required">
														<option value="">Select</option>
														<?php for ($i=1; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Monthly Mortgage/Rent<span class="text-danger">*</span>
												<input required="" type="text" name="income_1" class="form-control" placeholder="Amount">
											</div>
											<div class="col-md-4">
												Residence Status<span class="text-danger">*</span>
												<select name="residence_status" required="" class="form-control">
													<option value="">Select</option>
													<option value="Own, All Mortgage paid">Own, All Mortgage paid</option>
													<option value="Own, have a Mortgage">Own, have a Mortgage</option>
													<option value="Renting/Leasing">Renting/Leasing</option>
													<option value="Living W/family (no rent)">Living W/family (no rent)</option>
													<option value="Living W/family (paying rent)">Living W/family (paying rent)</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<h5>Step 3:Previous Residence(Not required)</h5>
										<hr>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Previous Address(To Cover 5 year history)
												<input type="text" name="pre_addr" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">How Long</div>
												<div class="col-md-6">
													<select name="pre_addr_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>                                    
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="pre_addr_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													Lived in the community
												</div>
												<div class="col-md-6">
													<select name="pre_addr_lived_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="pre_addr_lived_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<h5>Step 4:Employment info</h5>
										<hr>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Occupation<span class="text-danger">*</span>
												<input type="text" placeholder="Occupation" name="occupation" class="form-control" required="">
											</div>
											<div class="col-md-4">
												Present Employer<span class="text-danger">*</span>
												<input type="text" placeholder="Present Employer" name="present_employer" class="form-control" required="">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													How Long<span class="text-danger">*</span>
												</div>
												<div class="col-md-6">
													<select name="present_employer_how_long_year" class="form-control" required="required">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>Years
												</div>
												<div class="col-md-6">
													<select name="present_employer_how_long_month" class="form-control" required="required">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Employer's Address<span class="text-danger">*</span>
												<input required="" name="present_employer_address" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4">
												City<span class="text-danger">*</span>
												<input type="text" required="" name="present_employer_address_city" class="form-control" placeholder="City">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													State<span class="text-danger">*</span>
												</div>
												<div class="col-md-12">
													<select name="present_employer_address_state" class="form-control" required="">
														<option value="">Select your state...</option>
														<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Zip<span class="text-danger">*</span>
												<input type="text" name="present_employer_address_zip" class="form-control" placeholder="Zip" required="">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">
													Phone<span class="text-danger">*</span>
												</div>
												<div class="col-md-4">
													<input type="text" name="present_employer_phone_1" class="form-control" placeholder="" required="">
												</div>
												<div class="col-md-4">
													<input type="text" name="present_employer_phone_2" class="form-control" placeholder="" required="">
												</div>
												<div class="col-md-4">
													<input type="text" name="present_employer_phone_3" class="form-control" placeholder="" required="">
												</div>
											</div>
											<div class="col-md-4">
												Total Income<span class="text-danger">*</span>
												<input type="text" name="total_income" placeholder="Total Amount" class="form-control" required="">
											</div>
										</div>
									</div>
								</div>
								<br>
								<a id="serviceList" href="javascript:void(0)" data-toggle="collapse" data-target="#demo">
									<b>Do you have a Co-applicant? <i class="icon ion-ios-plus"></i> <br> </b>
								</a>
								<br>
								<div id="demo" class="collapse">
									<h3>Section B: information regarding spouse or Co-applicant</h3>
									<br>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												First Name
												<input id="first_name" name="co_app_first_name" type="text" placeholder="First Name" class="form-control ">
											</div>
											<div class="col-md-4">
												Initial
												<input id="initial_name" name="co_app_initial_name" type="text" placeholder="Initial" class="form-control ">
											</div>
											<div class="col-md-4">
												Last Name (Print)
												<input id="last_name" name="co_app_last_name" type="text" placeholder="Last Name" class="form-control ">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4 nopadding">
												<div class="col-md-12">Birth Date</div>
												<div class="col-md-4">
													<select name="co_app_birth_day" class="form-control">
														<option value="">Select</option>
												 		<?php for ($i=1; $i <= 31; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
												 	</select>
												</div>
												<div class="col-md-4">
													<select name="co_app_birth_month" class="form-control">
														<option value="">Select</option><option val="January">January</option><option val="February">February</option><option val="March">March</option><option val="April">April</option><option val="May">May</option><option val="June">June</option><option val="July">July</option><option val="August">August</option><option val="September">September</option><option val="October">October</option><option val="November">November</option><option val="December">December</option>
													</select>
												</div>
												<div class="col-md-4">
													<select name="co_app_birth_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=1930; $i <= date("Y"); $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												Drivers LIC No 
												<input type="text" class="form-control " placeholder="Drivers LIC No" name="co_app_drivers_lic_no">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">Social Security No/ FED tax ID no</div>
												<div class="col-md-4">
													<input type="text" class="form-control" name="co_app_social_security_no_1" placeholder="XXX">
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" name="co_app_social_security_no_2" placeholder="XX">
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" name="co_app_social_security_no_3" placeholder="XXXX">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<h5>Step 2:Residence info(Current Residence)</h5>
										<hr>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Address
												<input type="text" name="co_app_address" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4">
												City
												<input type="text" name="co_app_city" class="form-control" placeholder="City">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">State</div>
												<div class="col-md-12">
													<select name="co_app_state" class="form-control">
														<option value="">Select your state...</option>
														<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Zip
												<input type="text" name="co_app_zip" class="form-control" placeholder="Zip">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">Phone</div>
												<div class="col-md-4">
													<input type="text" name="co_app_phone_1" class="form-control" placeholder="">
												</div>
												<div class="col-md-4">
													<input type="text" name="co_app_phone_2" class="form-control" placeholder="">
												</div>
												<div class="col-md-4">
													<input type="text" name="co_app_phone_3" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">How Long</div>
												<div class="col-md-6">
													<select name="co_app_addr_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="co_app_addr_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 31; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>Months
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Monthly Mortgage/Rent
												<input type="text" name="co_app_income_1" class="form-control" placeholder="Amount">
											</div>
											<div class="col-md-4">
												Residence Status
												<select name="co_app_residence_status" class="form-control">
													<option value="">Select</option>
													<option value="Own, All Mortgage paid">Own, All Mortgage paid</option>
													<option value="Own, have a Mortgage">Own, have a Mortgage</option>
													<option value="Renting/Leasing">Renting/Leasing</option>
													<option value="Living W/family (no rent)">Living W/family (no rent)</option>
													<option value="Living W/family (paying rent)">Living W/family (paying rent)</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<h5>Step 3:Previous Residence(Not required)</h5>
										<hr>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Previous Address(To Cover 5 year history)
												<input type="text" name="co_app_pre_addr" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">How Long</div>
												<div class="col-md-6">
													<select name="co_app_pre_addr_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="co_app_pre_addr_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12"> Lived in the community</div>
												<div class="col-md-6">
													<select name="co_app_pre_addr_lived_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="co_app_pre_addr_lived_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
														</select>
														Months
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<h5>Step 4:Employment info</h5>
										<hr>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">Occupation<input type="text" placeholder="Occupation" name="co_app_occupation" class="form-control"></div>
											<div class="col-md-4">Present Employer<input type="text" placeholder="Present Employer" name="co_app_present_employer" class="form-control"></div>

											<div class="col-md-4 nopadding">
												<div class="col-md-12">How Long</div>
												<div class="col-md-6">
													<select name="co_app_present_employer_how_long_year" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 50; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Years
												</div>
												<div class="col-md-6">
													<select name="co_app_present_employer_how_long_month" class="form-control">
														<option value="">Select</option>
														<?php for ($i=0; $i <= 12; $i++):?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor;?>
													</select>
													Months
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Employer's Address
												<input name="co_app_present_employer_address" class="form-control" placeholder="Address">
											</div>
											<div class="col-md-4">
												City
												<input type="text" name="co_app_present_employer_address_city" class="form-control" placeholder="City">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">State</div>
												<div class="col-md-12">
													<select name="co_app_present_employer_address_state" class="form-control">
														<option value="">Select your state...</option>
														<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="col-md-4">
												Zip
												<input type="text" name="co_app_present_employer_address_zip" class="form-control" placeholder="Zip">
											</div>
											<div class="col-md-4 nopadding">
												<div class="col-md-12">Phone</div>
												<div class="col-md-4">
													<input type="text" name="co_app_present_employer_phone_1" class="form-control" placeholder="">
												</div>
												<div class="col-md-4">
													<input type="text" name="co_app_present_employer_phone_2" class="form-control" placeholder="">
												</div>
												<div class="col-md-4">
													<input type="text" name="co_app_present_employer_phone_3" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-md-4">
												Total Income
												<input type="text" name="co_app_total_income" placeholder="Total Amount" class="form-control">
											</div>
										</div>
									</div>                    

								</div>

								<div class="col-md-12">
									<div class="col-md-4">
										<label for="iaccept">
											<input type="checkbox" required="" value="iaccept" name="iaccept"> 
											I Accept signing this Agreement Electronically  
										</label>
									</div>
									<div class="col-md-2">
										<input type="submit" class="btn btn-info" value="Submit" name="save">
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include("includes/foot.inc");?>